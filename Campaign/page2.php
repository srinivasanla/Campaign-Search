<?php
require_once 'twitteroauth.php';
 
define('CONSUMER_KEY', 'cNdiWaOdOzukrx4eNMGxg');
define('CONSUMER_SECRET', 'L6XZn6oclPqLJOruu7zb5osxks9mlrTn88BCmPeHuA');
define('ACCESS_TOKEN', '203856737-k8Cr6uWaLoXR2aLZvsDVNX3mNUzKFdrcip4dypVt');
define('ACCESS_TOKEN_SECRET', 'Cco5SJTbZSKpagYfbnCwmZCh0eO9tXwCrCH8KunhrI');

$twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);




?>
<?php 
	if (isset($_GET['title']))
	{
		$title = $_GET['title'];
	}	
?>
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
  
<?php 
	if (isset($_GET['title']))
	{
		$title = $_GET['title'];
	}	
	echo $title;
?>

  <div class="content container">
      <form action="" method="GET" class="form-inline">
      <label>Wikipedia URL</label>
      <input name="url" type="text" class="url span6" placeholder="Enter a Wikipedia or DBPedia URL" value="<?php echo $title; ?>" />
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
	<div>
	<h4>The Resent tweets</h4>
<?php
if (isset($title)) {
$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q='.$title.'&result_type=recent&count=20');
	foreach($tweets as $tweet) {
		foreach($tweet as $t) {
			echo '<img src="'.$t->user->profile_image_url.'"/>'.$t->text.'';
			echo '<br>';
		}
	}
}
?>
	</div>
	
	<h4>The Twitter Pages</h4>
		<?php
		if (isset($title)) {
			$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
			$requestMethod = 'GET';
			$getfield = '?screen_name='.$title;

			$result = $twitter->setGetfield($getfield)
                  ->buildOauth($url, $requestMethod)
                  ->performRequest();
		}
		if (!$result->user)
		{
			echo "The user doesn't exist!";
		}
		else
		{
			echo "The user exists!";
		}
		?>
	</div>
	
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="http://okfnlabs.org/wikipediajs/wikipedia.js"></script>
  <script src="http://okfnlabs.org/wikipediajs/js/app.js"></script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33874954-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
