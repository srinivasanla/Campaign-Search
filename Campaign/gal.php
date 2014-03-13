<?php
require_once('flick.php'); 
?>
<!DOCTYPE html>
<html>
<head>
<title>Campaign Search </title>



<link href="stylesheets/bootstrap.min.css" media="all" rel="stylesheet"/>
<link href="stylesheets/style.css" media="all" rel="stylesheet"/>







</head>
<body>
<ul class="gallery-grid clearfix">
<?php
$Flickr = new Flickr; 
$data = $Flickr->search('fuck'); 
foreach($data['photos']['photo'] as $photo) { 
	// the image URL becomes somthing like 
	// http://farm{farm-id}.static.flickr.com/{server-id}/{id}_{secret}.jpg  
	//echo '<img src="' . 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg">'; 
	echo '<li>';
	echo '<figure>';
	echo '<img alt="Flickr" HEIGHT = "280" WIDTH="260" src="' . 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg">';
	echo '</li>';
	echo '</figure>';
}
?>

</ul>

</body>
</html>