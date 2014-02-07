<!--====== DISPLAY SITE HEADER =====-->
<?php get_header(); ?>
	
	<?php wp_reset_query(); ?>
	<?php $category = get_the_category(); ?>
	<!--=== DISPLAY PAGE TITLE ===-->      	
   	<div id="news-title">
   		<!--=== DISPLAY MOBILE NEWS SUBCATEGORY MENU ICON ===-->
   	   	<div id="news-menu-icon">
   	   		<img class="news-menu-icon" src="<?php echo home_url(); ?>/wp-content/themes/AJR-theme/images/news-menu-icon.png">
   	   	</div>	
   		<a href="<?php echo home_url(); ?>/category/news">
   			news
   		</a>
   	</div>
    <div>
		<span id="news-title-line" class="page-title-line"></span>
	</div>	
	<!--=== MOBILE DROPDOWN NEWS SUBCATEGORY MENU ===-->
	<div id="mobile-news-menu">
		<?php wp_nav_menu(array('menu' => 'News Menu' )); ?>
	</div>
	
	<!--====== NEWS SUB-CATEGORY MENU =====-->
    <div id="news-category-nav">
 	   <?php wp_nav_menu(array('menu' => 'News Menu' )); ?>
   	</div>
   	
	<!--====== DISPLAY POSTS BASED ON SUB-CATEGORY =====-->   
	<div id="news-post-wrapper">
		<?php wp_reset_query(); ?>	
		<?php $i = 1; while (have_posts() && $i <= 12) : the_post(); ?> 	
			<div class="news-news-post">
				<?php if (has_post_thumbnail()) { ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				<?php } else { ?>
					<a href="<?php the_permalink(); ?>">
						<img src="<?php echo home_url(); ?>/wp-content/themes/AJR-theme/images/news-placeholder.jpg" >
					</a>
				<?php } ?>
				<div class="news-news-post-title">
					<a href="<?php the_permalink(); ?>"><?php echo title(10); ?></a>
					<div class="news-news-post-blurb">
						<a href="<?php the_permalink(); ?>"><?php echo excerpt(20); ?></a>
					</div>
				</div>
			</div>
		<?php $i++; endwhile; ?>
	</div>
	
	<!--====== DISPLAY NEWS PAGE SIDEBAR =====-->
	<div id="news-sidebar">
		<img class="single-sidebar-ad" src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/robot-ad.jpg">
		<?php featured_voices(); ?>
	</div>

<!--====== DISPLAY SITE FOOTER =====-->   
<?php get_footer(); ?>
