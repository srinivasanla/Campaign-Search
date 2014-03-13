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
  

      <form action="wikijs.php" method="GET" >
		<div class="content container">
      <label>Wikipedia URL</label>
      <input name="keyword" type="text" class="url span6" placeholder="Enter a Wikipedia or DBPedia URL" value="" />
      <button>Go &raquo;</button>
    </form>
	
<?php
if (isset($_POST['keyword'])) {
$wiki = $pedia->get('http://lookup.dbpedia.org/api/search.asmx/KeywordSearch?QueryClass=place&QueryString='.$_POST['keyword'].'');
	foreach($wiki as $wi) {
		foreach($wi as $w) {
			echo '<br>'.$w->description.'</br>.';
			
		}
	}
}
?>
    

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</body>
</html>