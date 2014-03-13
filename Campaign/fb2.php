<?php
/**
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require 'facebook-php-sdk/src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '1427838427457078',
  'secret' => 'bf27460ebb5c46c4f8dc07f3adcedfd4',
));

// Get User ID
$user = $facebook->getUser();

// We may or may not have this data based on whether the user is logged in.
//
// If we have a $user id here, it means we know the user is logged into
// Facebook, but we don't know if the access token is valid. An access
// token is invalid if the user logged out of Facebook.
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>php-sdk</title>
    <style>
      body {
        font-family: 'Lucida Grande', Verdana, Arial, sans-serif;
      }
      h1 a {
        text-decoration: none;
        color: #3b5998;
      }
      h1 a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
	<form id="searchform" class="searchform animated BeanBounceUp" method="post" action="fb2.php">
	<input type="text" name="keyword" class="s" value="Search" id="keyword" />
	<button type="submit" class="button animated BeanButtonShake"><span>Search</span></button>
	</form>
	<?php
		$keyword = $_POST['keyword'];
		$graph_url = "https://graph.facebook.com/search?";
		$graph_url .= "&type=post";
		$graph_url .= "&q=$keyword";
		$results = file_get_contents( $graph_url );
		 
		$json = json_decode($results);
		 
		foreach($json->data as $show ) {
		echo $show->from->name . "<br />";
		echo $show->message . "<br />";
		echo $show->created_time . "<br />";
		echo "<hr>";
		}	
	?>
  </body>
</html>