<?php get_header(); ?>
	
	<div id="single-page-wrapper">
	    <?php wp_reset_query(); ?>
	    <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?> 
			<?php if (in_category('32')) { ?>
				<style>
					#nav-item li:nth-child(2) {color: #FFFFFF; border-bottom: solid 2px #FF5500;}
				</style>
			<?php } elseif (in_category('30')) { ?>
				<style>
					#nav-item li:nth-child(1) {color: #FFFFFF; border-bottom: solid 2px #1291B5;}
				</style>
			<?php } elseif (in_category('31')) { ?>
				<style>
					#nav-item li:nth-child(3) {color: #FFFFFF; border-bottom: solid 2px green;}
				</style>
			<?php }; ?>
			<div class="single-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div id="single-post-content-wrapper">	
					<div class="single-headline"><?php the_title(); ?></div>
					<?php if (in_category('32')) { ?>
						<div class="single-date single-voices-date"><?php the_date(); ?></div>
					<?php } ?>
					<?php if (in_category('32')) { ?>
						<div id="single-subhead-info">
					<?php } ?>
							<?php if (!in_category('32')) { ?>	
								<div>	
									<!--<img class="single-post-featured-image"<?php the_post_thumbnail(); ?>-->
									<div class="single-photo-credit">Credit: <a href="<?php echo get_post_meta(get_post_thumbnail_id(), 'be_photographer_url', true); ?>"><?php echo get_post_meta(get_post_thumbnail_id(), 'be_photographer_name', true); ?></a></div>
								</div>
							<?php }; ?>
							<?php if (in_category('32')) { ?>
								<a href="<?php echo home_url( '/' ); ?>author/<?php echo get_the_author_meta('user_login'); ?>"><img class="single-post-headshot" <?php the_post_thumbnail(); ?></a>
							<?php }; ?>
							<div class="single-byline"><?php coauthors_posts_links(); ?></div>
							<?php if (in_category('32')) { ?>
								<div class="single-author-title"><?php echo get_the_author_meta('title'); ?></div>
							<?php }; ?>
							<?php if (!in_category('32')) { ?>
								<div class="single-date"><?php the_date(); ?></div>
							<?php } ?>
					<?php if  (in_category('32')) { ?>
						</div>
					<?php } ?>
					<?php if (in_category('32')) { ?>
						<div id="ajr-voices-content">	
							<div id="single-voices-square"></div>
							<div id="voices-page-label"><a href="<?php echo home_url(); ?>/voices">ajr voices</a></div>
							<div id="voices-single-social-media-icons">
								<img class="single-social-media-icon" src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/fb-icon.png">					    	
								<img class="single-social-media-icon" src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/twitter-icon.png">
								<img class="single-social-media-icon" src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/google-icon.png">
							</div>
						</div>
					<?php }; ?>			
					<?php if (!in_category('32')) { ?>
						<img class="single-social-media-icon" src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/fb-icon.png">					    	
						<img class="single-social-media-icon" src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/twitter-icon.png">
						<img class="single-social-media-icon" src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/google-icon.png">	
						<div class="single-content"><?php the_content();?></div>   
					<? }; ?>
					<?php if (in_category('32')) { ?>
						<div class="single-content voices-single-content"><?php the_content();?></div>
					<?php }; ?>
				</div>
	
				<?php /*echo do_shortcode('[fbcomments]');*/ ?>
				Comments
				<?php comments_template(); ?>  
								
				<?php $nextPost = get_next_post(true); if($nextPost) { ?>
					<div class="single-arrow" id="single-left-arrow"><?php next_post_link('%link', '&lt;', TRUE, '28 and 35'); ?></div>
				<?php } ?>
				<div class="single-nextprev" id="single-prev">
					<?php $nextPost = get_next_post(true); if($nextPost) { ?>
					<?php $nextPost = get_next_post(true); $nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(150,150) ); echo $nextthumbnail; } ?>
					<div class="single-nextprev-text"><?php next_post_link('%link', '%title', TRUE, '28 and 35'); ?></div>
					<div class="single-next-slide-close single-prev-close">x</div>
				</div>
				
				<?php $prevPost = get_previous_post(true); if($prevPost) { ?>
					<div class="single-arrow" id="single-right-arrow"><?php previous_post_link('%link','&gt;', TRUE, '28 and 35'); ?></div>
				<?php } ?>
				<div class="single-nextprev" id="single-next">
					<?php $prevPost = get_previous_post(true); if($prevPost) { ?>
					<?php $prevPost = get_previous_post(true); $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(150,150) ); echo $prevthumbnail; } ?>
					<div class="single-nextprev-text"><?php previous_post_link('%link','%title', TRUE, '28 and 35'); ?></div>
					<div class="single-next-slide-close single-next-close">x</div>				
				</div>
				
				<div class="single-next-slide">
					<?php $prevPost = get_previous_post(true); $prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(150,150) ); echo $prevthumbnail; ?>
					<div class="single-next-slide-header">next story</div>
					<div class="single-nextprev-text"><?php previous_post_link('%link','%title', TRUE, '28 and 35'); ?></div>
					<div class="single-next-slide-close" id="close-next-slide">x</div>
				</div>
			</div>     
		<?php endwhile; ?>
	    <?php endif; ?>

	    <div id="single-sidebar"><?php get_sidebar(); ?></div>
	</div>
   
<?php get_footer(); ?>