<?php
require_once 'twitteroauth.php';
require_once 'flick.php';  
define('CONSUMER_KEY', 'cNdiWaOdOzukrx4eNMGxg');
define('CONSUMER_SECRET', 'L6XZn6oclPqLJOruu7zb5osxks9mlrTn88BCmPeHuA');
define('ACCESS_TOKEN', '203856737-k8Cr6uWaLoXR2aLZvsDVNX3mNUzKFdrcip4dypVt');
define('ACCESS_TOKEN_SECRET', 'Cco5SJTbZSKpagYfbnCwmZCh0eO9tXwCrCH8KunhrI');

$twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);




?>
<!DOCTYPE html>

<html lang="en-US">

<!--[if !IE]><!--><script>if (/*@cc_on!@*/false) { document.documentElement.className+=' lt-ie10'; }</script><!--<![endif]-->  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

	<!-- META TAGS -->
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<title>Campaign Search| Just another Noun Based Search Engine</title>
	
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<!-- RSS & PINGBACKS -->
	<link rel="alternate" type="application/rss+xml" href="feed/index.html"/>
	<link rel="alternate" type="application/rss+xml" href="comments/feed/index.html" title="Base latest comments" />
	<link rel="pingback" href="xmlrpc.php" /> 
	
		
	<link rel="alternate" type="application/rss+xml" title="Base &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Base &raquo; Comments Feed" href="comments/feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Base &raquo; Home Comments Feed" href="home/feed/index.html" />
<link rel='stylesheet' id='bean-css'  href='wp-content/themes/base/assets/css/framework5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='main-style-css'  href='wp-content/themes/base/stylead05.css?ver=1.4' type='text/css' media='all' />
<link rel='stylesheet' id='mobile-css'  href='wp-content/themes/base/assets/css/mobile5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='bean-shortcodes-style-css'  href='wp-content/plugins/bean-shortcodes/themes/Base/bean-shortcodes5152.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='bean-pricingtables-style-css'  href='wp-content/plugins/bean-pricingtables/css/bean-pricingtables5152.css?ver=1.0' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jquery3e5a.js?ver=1.10.2'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min1576.js?ver=1.2.1'></script>
<script type='text/javascript' src='wp-includes/js/comment-reply.minf2b5.js?ver=3.8'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<link rel='next' title='Shortcodes' href='shortcodes/index.html' />
<link rel='canonical' href='index.html' />
<link rel='shortlink' href='index2dc4.html?p=13' />
	
	
<style>
/* ACCENT COLOR */	
		
</style>

			<link rel="shortcut icon" href="wp-content/themes/base/assets/images/favicon.png"/> 
			<link rel="apple-touch-icon-precomposed" href="wp-content/themes/base/assets/images/apple-touch-icon.png"/>
			
			
		<style></style>		
				
		

</head>

<body class="home page page-id-13 page-template page-template-page-home-php animated BeanFadeIn unknown"  background="wp-content/themes/base/assets/images/black.jpg>


 	<div id="responsive-nav" class="show-for-small">
 		
 		

	</div><!-- END #responsive-nav --> 	

	  
		
		<div class="drop-in-header full">
			
			<div class="row">	
				
				<div class="logo four columns">
				
						  	
	  	<a href="#" title="Base" rel="home">
	
	 					
				 <h1 class="logo_text">Campaign Search.</h1>
				 
	 		 			  
		</a>
		
						
				</div><!-- END .logo -->
			
				<div class="eight columns right">
				
					<div class="menu-footer-container"><ul id="menu-footer-1" class="main-menu"><li id="menu-item-216" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-216"><a href="#">Home</a></li>
</ul></div>				
				</div><!-- END .eight columns -->
				
			</div><!-- END .row -->
		
		</div><!-- END .drop-in-header full -->
	
	
	<div id="header-container">
	
		<div class="row">		
				
			<div class="header-navigation">
				
				<div class="logo four columns">
				
						  	
	  	<a href="http://demo.themebeans.com/base" title="Base" rel="home">
	
	 					
				 <h1 class="logo_text">Campaign Search.</h1>
				 
	 		 			  
		</a>
		
						
				</div><!-- END .logo -->
			
				<div class="eight columns hide-for-small">	
				
					<nav id="navigation" role="navigation">
											
						<div class="main_menu">
								
							<div class="menu-footer-container"><ul id="menu-footer-2" class="main-menu"><li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-216"><a href="#">Home</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-265"><a href="#">Log-in</a></li>

</ul></div>							
						</div><!-- END .main_menu -->
							
					</nav><!-- END #navigation -->
				
				</div><!-- END .ten columns -->
					
			</div><!-- END .header-navigation -->
			
			<header id="page-header" class="twelve columns">
			
				<div class="eleven columns centered">
					
					
<h1 class="animated BeanFadeDown">The Noun based Search Engine.</h1><p>You can discover more about a person in a search than in a year conversation. - Plato</p>
<form id="searchform" class="searchform animated BeanBounceUp" method="post" action="ind_copy.php">
	
	<input type="text" name="keyword" class="s" value="Search the knowledgebase..." onfocus="this.value='';" onblur="if(this.value=='')this.value='Search the knowledgebase...';" />
		
	<button type="submit" class="button animated BeanButtonShake"><span>Search</span></button>
	
</form><!-- END #searchform -->

<?php
    // if form submitted
    if (isset($_POST['keyword'])) {
      // load Zend classes
      require_once 'Zend/Loader.php';
      Zend_Loader::loadClass('Zend_Rest_Client');
	  
		// load wikitext converter
		require_once 'Text/Wiki.php';

		// instantiate a Text_Wiki object from the given class
		// and set it to use the Mediawiki adapter
		$wiki = & Text_Wiki::factory('Mediawiki');

		// set some rendering rules  
		$wiki->setRenderConf('xhtml', 'wikilink', 'view_url', 
		  'http://en.wikipedia.org/wiki/');
		$wiki->setRenderConf('xhtml', 'wikilink', 'pages', false);


      try {
        // initialize REST client
        $wikipedia = new Zend_Rest_Client('http://en.wikipedia.org/w/api.php');

        // set query parameters
        $wikipedia->action('query');
        $wikipedia->list('search');
        $wikipedia->srwhat('text');
		$wikipedia->prop('revisions');
		$wikipedia->rvprop('content');
		$wikipedia->rvparse();
		$wikipedia->rvsection('0');
		$wikipedia->rvlimit(1);
		$wikipedia->rvsection('0');
        $wikipedia->format('xml');
		$wikipedia->redirects('1');
        $wikipedia->srsearch($_POST['keyword']);
		$wikipedia->titles($_POST['keyword']);

        // perform request
        // iterate over XML result set
        $result = $wikipedia->get();
		$content = $result->query->pages->page->revisions->rev;
      } catch (Exception $e) {
          die('ERROR: ' . $e->getMessage());
      }
    ?>






				
				</div><!-- END .ten columns centered -->
			
			</header><!-- END #page-header -->
			
		</div><!-- END .row -->
		
	</div><!-- END #header-container -->	
	
	</div><!-- END .home-widgets-featured -->
	

<div id="main-container" class="twenty animated BeanFadeIn"> 
	
	<div class="row">
	
		<div class="twelve columns clearfix" role="main">
			
			
<section id="post-16" class="post-16 page type-page status-publish hentry">	
		
	<div class="entry-content">		
	</div><!-- END .entry-content -->
	<h2>What is '<?php echo $_POST['keyword']; ?>' ...?</h2>
	</br>
	<div class="twenty columns clearfix" role="main">
		<div class="entry-meta">
<?php echo $wiki->transform($content, 'Xhtml'); ?>
	  </div>
      </script>
    </div>
	<div>
<h4>Search results for '<?php echo $_POST['keyword']; ?>'</h4>
    <ol>
        <?php foreach ($result->query->search->p as $r): ?>	
	
      <li><a href="page2.php?title=<?php echo $r['title']; ?>" target="new">
	  <h5> <?php echo $r['title']; ?></a> <br/> </h5>
      <small><?php echo $r['snippet']; ?></small></li>
	
    <?php endforeach; ?>
    </ol>
	<div>
	<h4>The Resent tweets</h4>
<?php
if (isset($_POST['keyword'])) {
$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q='.$_POST['keyword'].'&result_type=recent&count=15');
	foreach($tweets as $tweet) {
		foreach($tweet as $t) {
				echo '<img src="'.$t->user->profile_image_url.'"/>'.$t->text.'<br>.';
		}
	}
}
?>
	</div>
	<div>
	<h4>The Resent tweets</h4>
	<?php
if (isset($_POST['keyword'])) {
$users = $twitter->get('https://api.twitter.com/1.1/users/search.json?q='.$_POST['keyword'].'&page=1&count=3');
	if($users)
	{
		echo $users->screen_name;
		echo "sn";
		foreach($users as $user) {
			foreach($user as $u) {
					echo '<img src="'.$u->Users->user_mentions.'"/>'.$u->name.'<br>.';
			}
		}
	}
}
?>
</div>
    <?php 
    }
    ?>
	
	</div>
	<div>
	<?php
			$Flickr = new Flickr; 
			$data = $Flickr->search($_POST['keyword']); 
			foreach($data['photos']['photo'] as $photo) { 
				// the image URL becomes somthing like 
				// http://farm{farm-id}.static.flickr.com/{server-id}/{id}_{secret}.jpg  
				echo '<img src="' . 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg">'; 
			}
	?>
	</div>
	
 
</section><!-- END #post-13 -->





		
			<div class="home-widgets">
			
				<div class="widget widget_bean_category clearfix">	
				</div>			
			</div><!-- END .home-widgets -->
				
		</div><!-- END $bean_content_class -->
		
				
			
		
			
	</div><!-- END .row -->

</div><!-- END #main-container -->


	<div class="home-widgets-featured btm no-footer twelve animated BeanFadeIn">
	
		<div class="row">
		
			<div class="twelve">
			
							
			</div><!-- END .twelve columns -->
		
		</div><!-- END .row -->
	
	</div><!-- END .home-widgets-featured -->

 

	


<footer class="animated BeanFadeIn">

		
		 
							
	<div class="footer-btm">
	
		<div class="row">
		
			<div class="twelve columns">
			
				
						
		<div class="copyright">
			
			Copyright  2013 <a href="#">THE CAMPAIGN SEARCH</a>.  

		</div> <!--END .colophon-->												
					
			</div><!-- END .twelve columns -->
		
		</div><!-- END .row -->
	
	</div><!-- END .footer-btm -->

</footer>
 	
<link rel='stylesheet' id='bean-social-style-css'  href='wp-content/plugins/bean-social/css/bean-social5152.css?ver=1.0' type='text/css' media='all' />
<script type='text/javascript' src='wp-content/themes/base/assets/js/custom-libraries5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/themes/base/assets/js/customd5f7.js?ver=2.0'></script>
<script type='text/javascript' src='wp-content/themes/base/assets/js/retinad5f7.js?ver=2.0'></script>
<script type='text/javascript' src='wp-content/themes/base/assets/js/jquery.validate.min3aa8.js?ver=1.9'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ajax_var = {"url":"http:\/\/demo.themebeans.com\/base\/wp-admin\/admin-ajax.php","nonce":"020fedd018"};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/base/assets/js/post-likes5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/jquery.ui.core.mindb08.js?ver=1.10.3'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/jquery.ui.widget.mindb08.js?ver=1.10.3'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/jquery.ui.accordion.mindb08.js?ver=1.10.3'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/jquery.ui.tabs.mindb08.js?ver=1.10.3'></script>
<script type='text/javascript' src='wp-content/plugins/bean-shortcodes/js/bean-shortcodes5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/plugins/bean-shortcodes/js/prettify5152.js?ver=1.0'></script>
<script type='text/javascript' src='wp-content/plugins/bean-pricingtables/js/bean-pricingtables5152.js?ver=1.0'></script>

</body>



<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
</html>