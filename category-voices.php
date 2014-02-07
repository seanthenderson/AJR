<?php get_header(); ?>

	<!--=== PAGE TITLE ===-->
	<div id="voices-title"><a href="<?php echo home_url(); ?>/category/voices">voices</a></div>
	<div>
		<span id="voices-title-line" class="page-title-line"></span>
	</div>
	
	<!--=== VOICES POSTS ===-->
	<div id="voices-recent-blogposts">
		<?php
			$args = array(
				'cat' => '32',
				'posts_per_page' => '10'
			);
			$voices = new WP_Query($args);
			if ($voices->have_posts() ) {
				while ($voices->have_posts() ) {
					$voices->the_post(); ?>
					<div class="voices-blogpost">
						<div class="voices-blogpost-headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
						<div class="voices-blogpost-date"><?php the_time('F j, Y'); ?></div>
						<a href="<?php echo home_url( '/' ); ?>author/<?php echo get_the_author_meta('user_login'); ?>">
							<div class="voices-blogpost-headshot-byline">
								<!--<div class="voices-blogpost-headshot"><?php echo get_wp_user_avatar(get_the_author_meta('ID'), 150); ?></div>-->
								<div class="voices-blogpost-headshot"><?php echo get_avatar(get_the_author_meta('ID'), 150); ?></div>
								<div class="voices-blogpost-byline"><?php the_author(); ?></div>
							</div>
						</a>
						<div class="voices-blogpost-blurb"><?php echo excerpt(70); ?></div>
						
					</div> 
				<?php }
			} else {
				//no posts
			}
			wp_reset_postdata();
		?>
		<!--=== LOAD MORE POSTS ===-->
		<script type="text/javascript">	
			function more_voices_posts() {
				$("#more-voices-posts").hide();
				$("#voices-more-posts").show();
				$("#voices-load-image-one").show();
				$.ajax({
					url: "<?php admin_url('admin-ajax.php'); ?>",
					complete: function() {
						$("#load-more-voices").load("http://ajr.org/voices-content #voices-more-one");
						$("#voices-load-image-one").hide();
						$("#more-voices-posts-two").delay(2000).fadeIn();
					}, 
					success: function() {
						//alert("success");
					},
					error: function() {
						alert("error");
					}
				});
			}	
			function more_voices_posts_two() {
				$("#more-voices-posts-two").hide();
				$("#voices-more-posts-two").show();
				$("#voices-load-image-two").show();
				$.ajax({
					url: "<?php admin_url('admin-ajax.php'); ?>",
					complete: function() {
						$("#load-more-voices-two").load("http://ajr.org/voices-content #voices-more-two");
						$("#voices-load-image-two").hide();
						$("#more-voices-posts-three").delay(2000).fadeIn();
					}, 
					success: function() {
						//alert("success");
					},
					error: function() {
						alert("error");
					}
				});
			}
			function more_voices_posts_three() {
				$("#more-voices-posts-three").hide();
				$("#voices-more-posts-three").show();
				$("#voices-load-image-three").show();
				$.ajax({
					url: "<?php admin_url('admin-ajax.php'); ?>",
					complete: function() {
						$("#load-more-voices-three").load("http://ajr.org/voices-content #voices-more-three");
						$("#voices-load-image-three").hide();
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
		<div id="more-voices-posts" class="more-voices-posts" onclick="more_voices_posts();">MORE VOICES POSTS</div>
		<div id="voices-load-image-one" class="voices-load-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif"></div>
		<div id="load-more-voices"></div>
		<div id="more-voices-posts-two" class="more-voices-posts" onclick="more_voices_posts_two();">MORE VOICES POSTS</div>
		<div id="voices-load-image-two" class="voices-load-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif"></div>
		<div id="load-more-voices-two"></div>
		<div id="more-voices-posts-three" class="more-voices-posts" onclick="more_voices_posts_three();">MORE VOICES POSTS</div>
		<div id="voices-load-image-three" class="voices-load-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajax-loader.gif"></div>		
		<div id="load-more-voices-three"></div>
	</div>
 
 	<!--=== VOICES PAGE SIDEBAR ===-->
 	<div id="voices-sidebar">
 		<?php meet_our_bloggers(); ?>
		<a href="http://annenberg.usc.edu/AboutUs/Awards/SeldenRing.aspx" target="_blank"><img id="voices-ad" src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/SeldenRing2014.png"></a>		
		<?php editors_picks(); ?>
 	</div>

<?php get_footer(); ?>