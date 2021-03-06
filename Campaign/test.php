<!DOCTYPE html>
<html >
<head>
  <meta charset="utf-8" />
  <title>Wikipedia JS</title>
   
  
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.1.0/css/bootstrap-combined.min.css" />
  <style type="text/css">
    textarea {
      height: 300px;
      width: 90%;
    }
    
    .content {
      margin-top: 20px;
    }

    img.thumbnail {
      float: right;
    }

    .clear {
      clear: both;
    }
  </style>
</head>
<body>
  

      <form action="" method="GET" >
		<div class="content container">
      <label>Wikipedia URL</label>
      <input name="url" type="text" class="url span6" placeholder="Enter a Wikipedia or DBPedia URL" value="http://en.wikipedia.org/wiki/Normandy_landings" />
      <button>Go &raquo;</button>
    </form>



    <div class="loading" style="display: none;">
      <strong>Loading</strong> <img src="http://assets.okfn.org/images/icons/ajaxload-circle.gif" />
    </div>

    <div class="results" style="display: none;">
      <h3>Results</h3>

      <div class="summary well">
        <img src="" class="thumbnail" />
        <h4>
          <span class="title"></span>
        </h4>
        <p>
          Type: <span class="type"></span>
          <br />
          Location: <span class="place"></span>
          <br />
          Dates: <span class="start"></span> &mdash; <span class="end"></span>
        </p>
        <p class="summary"></p>
        <div class="clear"></div>

      
      </div>

      
      

    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
	//wikipedia.js
	var WIKIPEDIA = function() {
  var my = {};

  // DBPedia SPARQL endpoint
  my.endpoint = 'http://dbpedia.org/sparql/';

  // ### getData
  //
  // Return structured information (via callback) on the provided Wikipedia URL by querying
  // the DBPedia SPARQL endpoint and then tidying the data up.
  //
  // Data is return in the form of the following hash:
  //
  //    {
  //      raw: the-raw-json-from-dbpedia,
  //      summary: a-cleaned-up-set-of-the-properties (see extractSummary),
  //      dbpediaUrl: dbpedia-resource-url e.g. http://dbpedia.org/resource/World_War_II
  //    }
  //
  // Function is asynchronous as we have to call out to DBPedia to get the
  // info.
  my.getData = function(wikipediaUrlOrPageName, callback, error) {
    var url = my._getDbpediaUrl(wikipediaUrlOrPageName);
    function onSuccess(data) {
      var out = {
        raw: data,
        dbpediaUrl: url,
        summary: null,
      }
      if (data) {
        out.summary = my.extractSummary(url, data);
      } else {
        out.error = 'Failed to retrieve data. Is the URL or page name correct?';
      }
      callback(out);
    }
    my.getRawJson(url, onSuccess, error);
  }

  // ### _getDbpediaUrl
  //
  // Convert the incoming URL or page name to a DBPedia url
  my._getDbpediaUrl = function(url) {
    if (url.indexOf('wikipedia')!=-1) {
      var parts = url.split('/');
      url = 'http://dbpedia.org/resource/' + title;
      var title = parts[parts.length-1];
      return url;
    } else if (url.indexOf('dbpedia.org')!=-1) {
      return url;
    } else {
      url = 'http://dbpedia.org/resource/' + url.replace(/ /g, '_');
      return url;
    }
  };

  // ### getRawJson
  //
  // get raw RDF JSON for DBPedia resource from DBPedia SPARQL endpoint
  my.getRawJson = function(url, callback, error) {
    var sparqlQuery = 'DESCRIBE <{{url}}>'.replace('{{url}}', url);
    var jqxhr = $.ajax({
      url: my.endpoint,
      data: {
        query: sparqlQuery,
        // format: 'application/x-json+ld'
        format: 'application/rdf+json'
      },
      dataType: 'json',
      success: callback,
      error: error
    });
  };

  // Standard RDF namespace prefixes for use in lookupProperty function
  my.PREFIX = {
    rdf: "http://www.w3.org/1999/02/22-rdf-syntax-ns#",
    rdfs: "http://www.w3.org/2000/01/rdf-schema#",
    xsd: "http://www.w3.org/2001/XMLSchema#",
    owl: "http://www.w3.org/2002/07/owl#",
    dc: "http://purl.org/dc/terms/",
    foaf: "http://xmlns.com/foaf/0.1/",
    vcard: "http://www.w3.org/2006/vcard/ns#",
    dbp: "http://dbpedia.org/property/",
    dbo: "http://dbpedia.org/ontology/",
    geo: "http://www.geonames.org/ontology#",
    wgs: "http://www.w3.org/2003/01/geo/wgs84_pos#"
  };

  my._expandNamespacePrefix = function(uriWithPrefix) {
    for(key in WIKIPEDIA.PREFIX) {
      if (uriWithPrefix.indexOf(key + ':') == 0) {
        uriWithPrefix = WIKIPEDIA.PREFIX[key] + uriWithPrefix.slice(key.length + 1);
      }
    }
    return uriWithPrefix;
  };

  // ### lookupProperty
  // 
  // lookup a property value given a standard RDF/JSON property dictionary
  // e.g. something like ...
  // 
  //       ...
  //       "http://dbpedia.org/property/regent": [
  //              {
  //                  "type": "uri",
  //                  "value": "http://dbpedia.org/resource/Richard_I_of_England"
  //              }
  //          ],
  //       ...
  my._lookupProperty = function(dict, property) {
    property = my._expandNamespacePrefix(property);
    var values = dict[property];
    for (idx in values) {
      // only take english values if lang is present
      if (!values[idx]['lang'] || values[idx].lang == 'en') {
        return values[idx].value;
      }
    }
  };

  // Extract a standard set of attributes (e.g. title, description, dates etc
  // etc) from rdfJson and the given subject uri (url) e.g.
  // 
  //      extractSummary('http://dbpedia.org/resource/Rufus_Pollock', rdfJson object from dbpedia)
  my.extractSummary = function(subjectUri, rdfJson) {
    var properties = rdfJson[subjectUri];
    function lkup(attribs) {
      if (attribs instanceof Array) {
        var out = [];
        for (idx in attribs) {
          var _tmp = my._lookupProperty(properties, attribs[idx]);
          if (_tmp) {
            out.push(_tmp);
          }
        }
        return out;
      } else {
        return my._lookupProperty(properties, attribs);
      }
    }

    var summaryInfo = {
      title: lkup('rdfs:label'),
      description: lkup('dbo:abstract'),
      summary: lkup('rdfs:comment'),
      startDates: lkup(['dbo:birthDate', 'dbo:formationDate', 'dbo:foundingYear']),
      endDates: lkup('dbo:deathDate'),
      // both dbp:date and dbo:date are usually present but dbp:date is
      // frequently "bad" (e.g. just a single integer rather than a date)
      // whereas ontology value is better
      date: lkup('dbo:date'),
      place: lkup('dbp:place'),
      birthPlace: lkup('dbo:birthPlace'),
      deathPlace: lkup('dbo:deathPlace'),
      source: lkup('foaf:page'),
      images: lkup(['dbo:thumbnail', 'foaf:depiction', 'foaf:img']),
      location: {
        lat: lkup('wgs:lat'),
        lon: lkup('wgs:long')
      },
      types: [],
      type: null
    };

    // getLastPartOfUrl
    function gl(url) {
      var parts = url.split('/');
      return parts[parts.length-1];
    }

    var typeUri = my._expandNamespacePrefix('rdf:type');
    var types = [];
    var typeObjs = properties[typeUri];
    for(idx in typeObjs) {
      var value = typeObjs[idx].value;
      // let's be selective
      // ignore yago and owl stuff
      if (
        value.indexOf('dbpedia.org/ontology') != -1
        ||
        value.indexOf('schema.org') != -1
        ||
        value.indexOf('foaf/0.1') != -1
      ) {
        // TODO: ensure uniqueness (do not push same thing ...)
        summaryInfo.types.push(gl(value));
        // use schema.org value as the default
        if (value.indexOf('schema.org') != -1) {
          summaryInfo.type = gl(value);
        }
      }
    }
    if (!summaryInfo.type && summaryInfo.types.length > 0) {
      summaryInfo.type = summaryInfo.types[0];
    }

    summaryInfo.start = summaryInfo.startDates.length > 0 ? summaryInfo.startDates[0] : summaryInfo.date;
    summaryInfo.end = summaryInfo.endDates;
    if (!summaryInfo.place) {
      // death place is more likely more significant than death place
      summaryInfo.place = summaryInfo.deathPlace || summaryInfo.birthPlace;
    }
    // if place a uri clean it up ...
    if (summaryInfo.place) {
      summaryInfo.place = gl(summaryInfo.place);
    }
    summaryInfo.location.title = summaryInfo.place;
    summaryInfo.image = summaryInfo.images ? summaryInfo.images[0] : null;

    return summaryInfo;
  };

  return my;
}();

  </script>
  <script>
  //app.js
  jQuery(function() {
  var q = parseQueryString(window.location.search);
  //q.url = "http://en.wikipedia.org/wiki/Engine";
  if (q.url) {
    $('input[name="url"]').val(q.url);

    $('.loading').show();

    var display = function(info) {
      $('.loading').hide();
      $('.results').show();

      rawData = info.raw;
      var summaryInfo = info.summary;
      var properties = rawData[info.dbpediaUrl];

      for (key in summaryInfo) {
        $('.summary .' + key).text(summaryInfo[key]);
      }
      $('.summary .thumbnail').attr('src', summaryInfo.image);
      var dataAsJson = JSON.stringify(summaryInfo, null, '    ')
      $('.summary .raw').val(dataAsJson);

      // Raw Data Summary
      var count = 0;
      for (key in properties) {
        count += 1;
        $('.data-summary .properties').append(key + '\n');
      }
      $('.data-summary .count').text(count);

      // raw JSON
      var dataAsJson = JSON.stringify(rawData, null, '    ')
      $('.results-json').val(dataAsJson);

      $('html,body').animate({
        scrollTop: $('#demo').offset().top
        },
        'slow'
      );
    };

    WIKIPEDIA.getData(q.url, display, function(error) {
        alert(error);
      }
    );
  }

  $('.js-data-summary').click(function(e) {
    $('.data-summary').show();
  });
});

// TODO: search of wikipedia
// http://en.wikipedia.org/w/api.php?action=query&format=json&callback=test&list=search&srsearch=%richard%

// Parse a URL query string (?xyz=abc...) into a dictionary.
parseQueryString = function(q) {
  if (!q) {
    return {};
  }
  var urlParams = {},
    e, d = function (s) {
      return unescape(s.replace(/\+/g, " "));
    },
    r = /([^&=]+)=?([^&]*)/g;

  if (q && q.length && q[0] === '?') {
    q = q.slice(1);
  }
  while (e = r.exec(q)) {
    // TODO: have values be array as query string allow repetition of keys
    urlParams[d(e[1])] = d(e[2]);
  }
  return urlParams;
};
</script>
  
</body>
</html>
