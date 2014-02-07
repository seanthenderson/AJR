<?php get_header(); ?>
	
	<!--=== DISPLAY PAGE TITLE AND SUBCATEGORY MENU FOR MOBILE ===-->      	
   	<div id="news-title">
   		<!--=== DISPLAY MOBILE NEWS SUBCATEGORY MENU ICON ===-->
   		<div id="news-menu-icon">
   			<img class="news-menu-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-menu-icon.png">
   		</div>
   		<!--=== DISPLAY PAGE TITLE ===-->
   		news
   	</div>	
   	<div><span id="news-title-line" class="page-title-line"></span></div>
   	<!--=== MOBILE NEWS SUBCATEGORY DROPDOWN MENU ===-->
	<div id="mobile-news-menu">
		<?php wp_nav_menu(array('menu' => 'News Menu' )); ?>
	</div>
	<!--=== SUBCATEGORY MENU ITEMS (NON-MOBILE) ===-->
    <div id="news-category-nav">
 	   <?php wp_nav_menu(array('menu' => 'News Menu' )); ?>
   	</div>

	<!--=== DISPLAY NEWS POSTS ===-->
	<div id="news-post-wrapper">
		<?php 
			$args = array(
				'cat' => '30',
				'posts_per_page' => '12'
			);
			$news = new WP_Query($args);
			if ($news->have_posts() ) {
				while ($news->have_posts() ) {
					$news->the_post(); ?>
					<div class="news-news-post">
						<?php 
							if (has_post_thumbnail()) {
								the_post_thumbnail(); 
							} else { ?>
								<a href="<?php the_permalink(); ?>"><img src="<?php echo home_url(); ?>/wp-content/themes/AJR-theme/images/news-placeholder.jpg" ></a>
							<?php }
						?>	 
						<a href="<?php the_permalink(); ?>"><div class="news-news-post-title"><?php echo title(10); ?>
							<div class="news-news-post-blurb"><?php echo excerpt(17); ?></div>
						</div></a>
					</div>
				<?php } 
			} else {
				//no posts
			}
			wp_reset_postdata();
		?>
		
		<!--=== LOAD MORE POSTS ===-->
		<script type="text/javascript">
			function more_news_posts() {
				$("#more-news-posts").hide();
				$("#news-more-posts").show();
				$("#news-load-image-one").show();
				$("#news-post-wrapper").css({'min-height': '1800px'});
				$.ajax({
					url: "<?php admin_url('admin-ajax.php'); ?>",
					complete: function() {
						$("#load-more-news").load("http://ajr.org/news-content #news-more-one");
						$("#news-load-image-one").hide();
						$("#more-news-posts-two").delay(1500).fadeIn();
					}, 
					success: function() {
						//alert("success");
					},
					error: function() {
						alert("error");
					}
				});
			}
			function more_news_posts_two() {
				$("#more-news-posts-two").hide();
				$("#news-more-posts-two").show();
				$("#news-load-image-two").show();
				$("#news-post-wrapper").css({'min-height': '2600px'});
				$.ajax({
					url: "<?php admin_url('admin-ajax.php'); ?>",
					complete: function() {
						$("#load-more-news-two").load("http://ajr.org/news-content #news-more-two");
						$("#news-load-image-two").hide();
						$("#more-news-posts-three").delay(1500).fadeIn();
					}, 
					success: function() {
						//alert("success");
					},
					error: function() {
						alert("error");
					}
				});
			}
			function more_news_posts_three() {
				$("#more-news-posts-three").hide();
				$("#news-more-posts-three").show();
				$("#news-load-image-three").show();
				$("#news-post-wrapper").css({'min-height': '3400px'});
				$.ajax({
					url: "<?php admin_url('admin-ajax.php'); ?>",
					complete: function() {
						$("#load-more-news-three").load("http://ajr.org/news-content #news-more-three");
						$("#news-load-image-three").hide();
						$("#more-news-posts-four").delay(1500).fadeIn();
					}, 
					success: function() {
						//alert("success");
					},
					error: function() {
						alert("error");
					}
				});
			}
			function more_news_posts_four() {
				$("#more-news-posts-four").hide();
				$("#news-more-posts-four").show();
				$("#news-load-image-four").show();
				$("#news-post-wrapper").css({'min-height': '4200px'});
				$.ajax({
					url: "<?php admin_url('admin-ajax.php'); ?>",
					complete: function() {
						$("#load-more-news-four").load("http://ajr.org/news-content #news-more-four");
						$("#news-load-image-four").hide();
						$("#more-news-posts-five").delay(1500).fadeIn();
					}, 
					success: function() {
						//alert("success");
					},
					error: function() {
						alert("error");
					}
				});
			}
			function more_news_posts_five() {
				$("#more-news-posts-five").hide();
				$("#news-more-posts-five").show();
				$("#news-load-image-five").show();
				$("#news-post-wrapper").css({'min-height': '5000px'});
				$.ajax({
					url: "<?php admin_url('admin-ajax.php'); ?>",
					complete: function() {
						$("#load-more-news-five").load("http://ajr.org/news-content #news-more-five");
						$("#news-load-image-five").hide();
						$("#more-news-posts-six").delay(1500).fadeIn();
					}, 
					success: function() {
						//alert("success");
					},
					error: function() {
						alert("error");
					}
				});
			}
			function more_news_posts_six() {
				$("#more-news-posts-six").hide();
				$("#news-more-posts-six").show();
				$("#news-load-image-six").show();
				$.ajax({
					url: "<?php admin_url('admin-ajax.php'); ?>",
					complete: function() {
						$("#load-more-news-six").load("http://ajr.org/news-content #news-more-six");
						$("#news-load-image-six").hide();
					}, 
					success: function() {
						//alert("success");
					},
					error: function() {
						alert("error");
					}
				});
			}
		</script>
		<div id="more-news-posts" class="more-news-posts" onclick="more_news_posts();">MORE NEWS POSTS</div>
		<div id="news-load-image-one"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif"></div>
		<div id="load-more-news"></div>
		<div id="more-news-posts-two" class="more-news-posts" onclick="more_news_posts_two();">MORE NEWS POSTS</div>
		<div id="news-load-image-two"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif"></div>
		<div id="load-more-news-two"></div>
		<div id="more-news-posts-three" class="more-news-posts" onclick="more_news_posts_three();">MORE NEWS POSTS</div>
		<div id="news-load-image-three"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif"></div>		
		<div id="load-more-news-three"></div>
		<div id="more-news-posts-four" class="more-news-posts" onclick="more_news_posts_four();">MORE NEWS POSTS</div>
		<div id="news-load-image-four"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif"></div>
		<div id="load-more-news-four"></div>
		<div id="more-news-posts-five" class="more-news-posts" onclick="more_news_posts_five();">MORE NEWS POSTS</div>
		<div id="news-load-image-five"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif"></div>
		<div id="load-more-news-five"></div>
		<div id="more-news-posts-six" class="more-news-posts" onclick="more_news_posts_six();">MORE NEWS POSTS</div>
		<div id="news-load-image-six"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif"></div>		
		<div id="load-more-news-six"></div>
	</div>
	
	<!--=== NEWS PAGE SIDEBAR ===-->
	<div id="news-sidebar">
		<!--=== ADVERTISEMENT ===-->
		<a href="http://annenberg.usc.edu/AboutUs/Awards/SeldenRing.aspx" target="_blank">
			<img class="single-sidebar-ad" src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/SeldenRing2014.png">
		</a>
		<?php featured_voices(); ?>
	</div>
   
<?php get_footer(); ?>