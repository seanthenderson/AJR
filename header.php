<!DOCTYPE html>

<!--
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
____________	   _	_____	 	
_____/ ___  \     | |  / ____|
____| |	  | |     | | | /	
____| |___| |     | | | |		
____|  ___  | 	  | | | |	 
____| |	  | |     | | | |	
____| |   | |  ___/ | | |	
____|_|	  |_| |____/  |_|	
	
@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
-->

<!--=== Theme by American Journalism Review (http://www.ajr.org) - Proudly powered by WordPress (http://wordpress.org) ===-->

	<!--======= META =======-->
    <html <?php language_attributes(); ?>>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	
	<!--=== FOR WINDOWS 8 START SCREEN TILE ===-->
	<meta name="msapplication-TileColor" content="#123456"/>
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/images/AJR-logo.png"/>
	
	<!--=== PAGE TITLE ===-->	
	<title><?php wp_title( '-' ); ?></title>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    
    <!--======= FAVICON ======-->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/AJR-favicon.png" type="image/x-icon"/>
    
    <!--======= STYLES =======-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <!--[if lte IE 8]>
    	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ie.css"/>
    <![endif]-->
    
    <!--======= GOOGLE FONTS =======-->
    <link href='http://fonts.googleapis.com/css?family=Caudex' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Kite+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Marcellus+SC' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Marck+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    
    <link rel="apple-touch-icon" href="<?php echo home_url(); ?>/wp-content/uploads/2013/12/AJR-logo-voices-black3.png"/>
    
    <!--======= JAVASCRIPT ========-->
    <!-- <script>document.createElement('footer');</script> -->
	
	<!--======= GOOGLE ANALYTICS TRACKING CODE ========-->
	<?php include_once("analyticstracking.php") ?>
	
	<!--======= FUNCTION TO INCLUDE ADDITIONAL CODE INTO HEAD (SOME CALLED FROM FUNCTIONS.PHP) ========-->
	<?php wp_head(); ?>
	
	</head>

<!--=============== NAV BAR ==================-->  	
	<body>
		<nav>
            <div>
				<a href="<?php echo home_url(); ?>">
					<img class="nav-item ajr" src="<?php echo get_stylesheet_directory_uri(); ?>/images/AJR-lc-logo-solid.png" width="50" height="30" alt="ajr logo">
				</a>
				<div id="nav-item">
					<?php wp_nav_menu(array('menu' => 'AJR Menu' )); ?>
				</div>
				<div id="social-media-icons">
					<!--===== SOCIAL MEDIA ICONS (LIST IN BACKWARDS ORDER OF HOW THEY WILL APPEAR) =====-->	
					<a href="http://www.pinterest.com/AmJourReview/" target="_blank">
						<img class="social-media-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pinterest-icon.png">
					</a>	
					<a href="http://www.youtube.com/channel/UCy56KeHLWb14aCJiBlHu79w" target="_blank">
						<img class="social-media-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube-iconII.png">
					</a>
					<a href="https://plus.google.com/108395316050811914517/about" target="_blank">
						<img class="social-media-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/google-icon.png">
					</a>
					<a href="https://twitter.com/AmJourReview" target="_blank">
						<img class="social-media-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter-icon.png">
					</a>
					<a href="https://www.facebook.com/pages/American-Journalism-Review/41002599368" target="_blank">
						<img class="social-media-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb-icon.png">
					</a>	
					<!--=== SEARCH FORM ===-->				    	
					<div class="header-search-wrapper">
						<img class="search-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/search-icon.png" alt="search icon">
						<div class="header-searchform">
							<div class="search-field" onclick="resizeSearch()"></div>
							<form role="search" method="get" class="header-search" action="<?php echo home_url('/'); ?>">
								<div><label class="screen-reader-text" for="s"></label>
									<input type="text" value="" name="s" id="s" />
									<!--=== OPTIONAL SUBMIT BUTTON (WILL HAVE TO BE STYLED AND CONFIGURED IF ACTIVATED) ===-->
									<!--<input type="submit" id="searchsubmit" value="Search" />-->
								</div>
							</form>
						</div>
					</div>
				</div>
            </div>
        </nav>
        
<!--=============== MOBILE NAV BAR ==================-->  
        <div id="mobile-nav">
			<img id="mobile-menu-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu-icon.png" alt="mobile menu icon"/>
			<a href="<?php echo home_url(); ?>"><img id="mobile-logo" class="ajr" src="<?php echo get_stylesheet_directory_uri(); ?>/images/AJR-lc-logo-solid.png" width="50" height="30" alt="ajr logo"></a>
			<div id="mobile-nav-items">	
				<div class="mobile-nav-item">featured</div>
				<div class="mobile-nav-item">latest</div>
				<div class="mobile-nav-item">voices</div>
			</div>
        </div>



        <div id="mobile-nav-menu">
        	<ul id="mobile-menu-search">	
        		<li>
        			<div id="mobile-header-searchform">
						<div id="mobile-search-field"></div>
						<form role="search" method="get" id="mobile-header-search" action="<?php echo home_url(); ?>">
							<div><label class="screen-reader-text" for="s"></label>
								<input type="text" value="" name="s" id="s" placeholder="Search"/>
								<!--<input type="submit" id="searchsubmit" value="Search" />-->
							</div>
						</form>
					</div>
        			<img id="mobile-search-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/mobile-search-icon.png" alt="search icon">
        		</li>
        	</ul>
        	<ul>
        		<li id="mobile-social-media-icons">
					<a href="https://www.facebook.com/pages/American-Journalism-Review/41002599368" target="_blank"><img class="mobile-social-media-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook-icon.png"></a>						
					<a href="https://twitter.com/AmJourReview" target="_blank"><img class="mobile-social-media-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter-icon.png"></a>						
					<a href="https://plus.google.com/108395316050811914517/about" target="_blank"><img class="mobile-social-media-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/google-icon.png"></a>						
					<a href="http://www.youtube.com/channel/UCy56KeHLWb14aCJiBlHu79w" target="_blank"><img class="mobile-social-media-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube-icon.png"></a>						
					<a href="http://www.pinterest.com/AmJourReview/" target="_blank"><img class="mobile-social-media-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/pinterest-icon.png"></a>						
        		</li>
        	</ul>	

			<?php wp_nav_menu(array('menu' => 'AJR Menu' )); ?>
		</div>

<!--=============== DROPDOWNS ==================-->          
        <!--=== NEWS ===-->
        <div class="nav-dropdown" id="nav-news-dropdown">
           <?php
               $args = array(
               	   'cat' => '34',
               	   'posts_per_page' => '1'
               );
               $navnews = new WP_Query($args);
               if ($navnews->have_posts() ) {
               	    while ($navnews->have_posts() ) {
               	    	$navnews->the_post();
               	    	if (has_post_thumbnail()) { ?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
						<?php } else { ?>
							<a href="<?php the_permalink(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-placeholder.jpg" ></a>
						<?php } ?>
						<div class="nav-news-dropdown-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>  
							<div class="nav-news-dropdown-text-byline">by <?php coauthors_posts_links(); ?></div> 
						</div>
               	    <?php }
               }
               wp_reset_postdata();
           ?>
            <div id="news-category-wrapper">
                <div class="nav-news-dropdown-category"><?php wp_nav_menu(array('menu' => 'News Menu' )); ?></div>
            </div>
        </div>
        
        <!--=== STORYTELLING ===-->
        <div class="nav-dropdown" id="nav-storytelling-dropdown">
			<?php 
				$args = array(
					'cat' => '57',
					'posts_per_page' => '2'
				);
				$navstorytelling = new WP_Query();
				if ($navstorytelling->have_posts() ) {
					while ($navstorytelling->have_posts() ) {
						$navstorytelling->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
						<div class="nav-news-dropdown-text storytelling-dropdown-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>  
							<div class="nav-news-dropdown-text-byline">by <?php coauthors_posts_links(); ?></div> 
						</div> 
					<?php }
				}
				wp_reset_postdata();
			?>
        </div>
        
        <!--=== VOICES ===-->
        <div class="nav-dropdown" id="nav-voices-dropdown">
        	<?php
        		$args = array(
        			'cat' => '55',
        			'posts_per_page' => '3'
        		);
        		$navVoices = new WP_Query($args);
        		if ($navVoices->have_posts() ) {
        			while ($navVoices->have_posts() ) {
        				$navVoices->the_post(); ?>
        				<a href="<?php echo home_url(); ?>/author/<?php echo get_the_author_meta('user_login', $post->post_author); ?>"><?php echo get_avatar($post->post_author, 150); ?></a>
						<div class="nav-news-dropdown-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>  
							<div class="nav-news-dropdown-text-byline">by <?php coauthors_posts_links(); ?></div> 
						</div>
        			<?php }
        		}
        		wp_reset_postdata();
        		//wp_reset_query();
        	?>
        </div>
        
        <!--=== CAREERS ===-->
        <div class="nav-dropdown" id="nav-careers-dropdown"></div>
        
        <!--=== ABOUT ===-->
		<div class="nav-dropdown" id="nav-about-dropdown">
			<div class="nav-about-dropdown-text">
				<p>AJR covers the news media, with a focus on innovation, entrepreneurship and digital storytelling.</p> 
				<img src="<?php echo home_url(); ?>/wp-content/themes/AJR-theme/images/merrill-logo-black-text.png">
			</div>
			
        </div>
		
<!--=============== TAGLINE ==================-->          
        <div id="tagline">
        	<div id="tagline-ajr">AMERICAN JOURNALISM REVIEW</div> 
        	<div id="tagline-alpha" style="display: none;">alpha</div>
        </div>
