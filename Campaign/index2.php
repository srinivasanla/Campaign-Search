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

<html lang="en-US">

<!--[if !IE]><!--><script>if (/*@cc_on!@*/false) { document.documentElement.className+=' lt-ie10'; }</script><!--<![endif]-->  

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

	
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<title>Campaign Search| Just another Noun Based Search Engine</title>
	<link rel="alternate" type="application/rss+xml" href="feed/index.html"/>
	<link rel="alternate" type="application/rss+xml" href="comments/feed/index.html" title="Base latest comments" />
	<link rel="pingback" href="xmlrpc.php" /> 
	
		
<link rel="alternate" type="application/rss+xml" title="Base &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Base &raquo; Comments Feed" href="comments/feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Base &raquo; Feature Area Shortcodes Comments Feed" href="feed/index.html" />
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
<link rel='prev' title='Buttons' href='buttons/index.html' />
<link rel='next' title='Typography' href='typography/index.html' />
<link rel='canonical' href='index.html' />
<link rel='shortlink' href='indexa1ca.html?p=15' />
	
	
<style>
/* ACCENT COLOR */	
div.scroll
{
width:450px;
height:500px;
overflow:scroll;
}


</style>

			<link rel="shortcut icon" href="wp-content/themes/base/assets/images/favicon.png"/> 
			<link rel="apple-touch-icon-precomposed" href="wp-content/themes/base/assets/images/apple-touch-icon.png"/>
			
			
		<style></style>		
				
		

</head>

<body class="page page-id-15 page-template-default animated BeanFadeIn unknown">
					
 	<div id="responsive-nav" class="show-for-small">
 		
 		
	</div><!-- END #responsive-nav --> 	

	  
		
		<div class="drop-in-header full">
			
			<div class="row">	
				
				<div class="logo four columns">
				
						  	
	  	<a href="ind.php" title="Noun Based Search Engine" rel="home">
	
	 					
				 <h1 class="logo_text">Campaign Search.</h1>
				 
	 		 			  
		</a>
		
						
				</div><!-- END .logo -->
			
				<div class="eight columns right">
				
					<div class="menu-footer-container"><ul id="menu-footer-1" class="main-menu"><li id="menu-item-216" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-216"><a href="ind.php">Home</a></li>
<li id="menu-item-264" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-264"><a href="post.php?title=<?php echo $title; ?>">Facebook</a></li>
<li id="menu-item-264" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-264"><a href="tweets.php?title=<?php echo $title; ?>">Tweets</a></li>
<li id="menu-item-265" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-265"><a href="images.php?title=<?php echo $title; ?>">Images</a></li>
<li id="menu-item-215" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-215"><a href="pages.php?title=<?php echo $title; ?>">Pages</a></li>
</ul></div>				
				</div><!-- END .eight columns -->
				
			</div><!-- END .row -->
		
		</div><!-- END .drop-in-header full -->
	
	
	<div id="header-container">
	
		<div class="row">		
				
			<div class="header-navigation">
				
				<div class="logo four columns">
				
						  	
	  	<a href="ind.php" title="Noun Based Search Engine" rel="home">
	
	 					
				 <h1 class="logo_text">Campaign Search.</h1>
				 
	 		 			  
		</a>
		
						
				</div><!-- END .logo -->
			
				<div class="seven columns hide-for-small">	
				
					<nav id="navigation" role="navigation">
											
						<div class="main_menu">
								
							<div class="menu-footer-container"><ul id="menu-footer-2" class="main-menu"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-216"><a href="ind.php">Home</a></li>
<li id="menu-item-215" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-215"><a href="post.php?title=<?php echo $title; ?>">Facebook</a></li>
<li id="menu-item-264" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-264"><a href="tweets.php?title=<?php echo $title; ?>">Tweets</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-265"><a href="images.php?title=<?php echo $title; ?>" target="new">Images</a></li>
<li id="menu-item-264" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-264"><a href="pages.php?title=<?php echo $title; ?>">Pages</a></li>
</ul></div>							
						</div><!-- END .main_menu -->
							
					</nav><!-- END #navigation -->
				
				</div><!-- END .ten columns -->
					
			</div><!-- END .header-navigation -->
			
			<header id="page-header" class="twelve columns">
			
				<div class="eleven columns centered">
					<?php
    // if form submitted
    if (isset($title)) {
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
        $wikipedia->srsearch($title);
		$wikipedia->titles($title);

        // perform request
        // iterate over XML result set
        $result = $wikipedia->get();
		$content = $result->query->pages->page->revisions->rev;
      } catch (Exception $e) {
          die('ERROR: ' . $e->getMessage());
      }
	 
    ?>

					
<h1 class="animated BeanFadeDown"><?php echo $title; ?></h1>

				<?php 
    }
    ?>
				</div><!-- END .ten columns centered -->
			
			</header><!-- END #page-header -->
			
		</div><!-- END .row -->
		
	</div><!-- END #header-container -->	
	
		
		


<div class="row">
<div class="twelve columns">	
<p><?php echo $wiki->transform($content, 'Xhtml'); ?></p>	
	

	
	
	
</div>	
</div><!-- END .row -->	


	


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