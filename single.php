<?php get_header(); ?>
	
	<div id="single-page-wrapper">
	    <?php wp_reset_query(); ?>
	    <?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?> 
			<?php if (in_category('32')) { ?>
				<style>
					#nav-item li:nth-child(2) {color: #FFFFFF; border-bottom: solid 2px #659B40;}
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
					<?php 
						$articleHeadline = get_post_meta($post->ID, "article_headline_meta_value_key", true);
						if (!empty ($articleHeadline)) { ?>
							<div class="single-headline" itemprop="name"><?php echo $articleHeadline; ?></div>
						<?php } else { ?>
							<div class="single-headline" itemprop="name"><?php the_title(); ?></div>
						<?php }
					?>
	
					<?php if (in_category('32')) { ?>
						<div class="single-date single-voices-date"><?php the_date(); ?></div>
					<?php } ?>
					<?php if (in_category('32')) { ?>
						<div id="single-subhead-info">
					<?php } ?>
							<?php if (!in_category(array('32','105'))) { ?>	
								<div itemscope itemtype="http://schema.org/Article">	
									<?php if (has_post_thumbnail()) { ?>
										<img class="single-post-featured-image"<?php the_post_thumbnail(); ?>
									<?php } else { ?>
										<img class="single-post-featured-image" src="<?php echo home_url(); ?>/wp-content/themes/AJR-theme/images/news-placeholder.jpg">
									<?php } ?>
									<div class="single-photo-credit">Credit: <a href="<?php echo get_post_meta(get_post_thumbnail_id(), 'media_photographer_url', true); ?>"><?php echo get_post_meta(get_post_thumbnail_id(), 'media_photographer_name', true); ?></a></div>
									<div class="featured-image-caption"><?php the_post_thumbnail_caption(); ?></div>
								</div>
							<?php }; ?>
							<?php if (in_category('32')) { ?>
								<a href="<?php echo home_url( '/' ); ?>author/<?php echo get_the_author_meta('user_login'); ?>"><div class="single-post-headshot"><?php echo get_wp_user_avatar(get_the_author_meta('ID'), 150); ?></div></a>
							<?php }; ?>
							<div class="single-byline"><?php coauthors_posts_links(); ?></div>
							<?php if (in_category('32')) { ?>
								<div class="single-author-title" itemprop="author"><?php echo get_the_author_meta('title'); ?></div>
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
							<div id="voices-page-label"><a href="<?php echo home_url(); ?>/voices">ajr voices</a></div><br><br>
						</div>
					<?php }; ?>			
					<?php if (!in_category(array('32', '105'))) { ?>
						<div class="single-social-shares">
							 <div style="display: inline; float: left;"><a href="https://twitter.com/share" class="twitter-share-button" data-lang="en"></a></div>
							 <div style="display: inline; margin: 0 7px 5px -18px; height: 10px; float: left;" class="fb-share-button" data-href="<?php the_permalink(); ?>" data-width="50px" data-type="button_count"></div>
							 <div style="display: inline; float: left; margin: -2px 7px 0 0;"><g:plusone></g:plusone></div>
							 <div style="display: inline; margin: 0 0 0 -34px; float: left;"><a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a></div><br><br>
							 <div class="single-comments-count"><a href="<?php the_permalink(); ?>#disqus_thread"></a></div>
							 <!--Delete style: none to display total shares-->
							 <div style="display: none;">
							     <?php 
								     $permalink = get_permalink($post->ID);
									 $tweets = totalTweets($permalink);
									 $shares = totalShares($permalink);
									 $pluses = totalPluses($permalink);
									 $totalShares = $tweets + $shares + $pluses;
									 echo 'Total Shares: ' . $totalShares;
								  ?>
							  </div>
					    </div>	
						<div class="single-content"><?php the_content();?></div>   					    				
					<? }; ?>
					<?php if (in_category('32')) { ?>
						<div class="single-social-shares">
							<div style="display: inline; float: left;"><a href="https://twitter.com/share" class="twitter-share-button" data-lang="en"></a></div>
							<div style="display: inline; margin: 0 7px 5px -18px; height: 10px; float: left;" class="fb-share-button" data-href="<?php the_permalink(); ?>" data-width="50px" data-type="button_count"></div>
							<div style="display: inline; float: left; margin: -2px 7px 0 0;"><g:plusone></g:plusone></div>
							<div style="display: inline; margin: 0 0 0 -34px; float: left;"><a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a></div><br><br>
							<div class="single-comments-count"><a href="<?php the_permalink(); ?>#disqus_thread"></a></div>
					   </div>	
					   <div class="single-content voices-single-content"><?php the_content();?></div>
					<?php }; ?>
					<?php if (in_category('105')) { ?>										
						<div class="single-social-shares">
							 <div style="display: inline; float: left;"><a href="https://twitter.com/share" class="twitter-share-button" data-lang="en"></a></div>
							 <div style="display: inline; margin: 0 7px 5px -18px; height: 10px; float: left;" class="fb-share-button" data-href="<?php the_permalink(); ?>" data-width="50px" data-type="button_count"></div>
							 <div style="display: inline; float: left; margin: -2px 7px 0 0;"><g:plusone></g:plusone></div>
							 <div style="display: inline; margin: 0 0 0 -34px; float: left;"><a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" /></a></div><br><br>
					   		 <div class="single-comments-count"><a href="<?php the_permalink(); ?>#disqus_thread"></a></div>
					    </div>
					    <div class="single-content video-single-content"><?php the_content();?></div>
					<?php }; ?>
					<div class="single-comments">Comments</div>
					<div class="terms-of-use-link">By posting a comment you are agreeing to our <a href="<?php echo home_url( '/' ); ?>terms">Terms of Use</a></div>
					<div id="comments-template"><?php comments_template(); ?></div>	
				</div> 
								
				<?php $nextPost = get_next_post(true); if($nextPost) { ?>
					<div class="single-arrow" id="single-left-arrow"><?php next_post_link('%link', '&lt;', TRUE, '28 and 35'); ?></div>
				<?php } ?>
				<?php if (in_category('32')) { ?>
					<span class="single-nextprev-voices">
				<?php } ?>
					<div class="single-nextprev" id="single-prev">
						<?php if (in_category('32')) { 				
							$get_previous_post = get_next_post(true); echo get_wp_user_avatar($get_previous_post->post_author); 
						} else { 
							$nextPost = get_next_post(true); if ($nextPost) { 
								$nextPost = get_next_post(true); 
								$nextthumbnail = get_the_post_thumbnail($nextPost->ID, array(150,150) ); 
								if (!empty($nextthumbnail)) {
									echo $nextthumbnail; 
								} else {
									echo '<img src="' . home_url() . '/wp-content/themes/AJR-theme/images/news-placeholder.jpg" >';
								}
							} 
						} ?>
						<div class="single-nextprev-text"><?php next_post_link('%link', '%title', TRUE, '28 and 35'); ?></div>
						<div class="single-next-slide-close single-prev-close">x</div>
					</div>
				<?php if (in_category('32')) { ?>
					</span>
				<?php } ?>
				<?php $prevPost = get_previous_post(true); if($prevPost) { ?>
					<div class="single-arrow" id="single-right-arrow"><?php previous_post_link('%link','&gt;', TRUE, '28 and 35'); ?></div>
				<?php } ?>
				<?php if (in_category('32')) { ?>
					<span class="single-nextprev-voices">
				<?php } ?>
					<div class="single-nextprev" id="single-next">
						<?php if(in_category('32')) { 	
							$get_next_post = get_previous_post(true); echo get_wp_user_avatar($get_next_post->post_author); 
						} else { 
							$prevPost = get_previous_post(true); 
							if($prevPost) { 
								$prevPost = get_previous_post(true); 
								$prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(150,150) ); 
								if (!empty($prevthumbnail)) {
									echo $prevthumbnail; 
								} else {
									echo '<img src="' . home_url() . '/wp-content/themes/AJR-theme/images/news-placeholder.jpg" >';
								} 
							} 
						} ?>
						<div class="single-nextprev-text"><?php previous_post_link('%link','%title', TRUE, '28 and 35'); ?></div>
						<div class="single-next-slide-close single-next-close">x</div>				
					</div>
				<?php if (in_category('32')) { ?>
					</span>
				<?php } ?>
				<?php $prevPost = get_previous_post(true); if($prevPost) { ?>
					<div class="single-next-slide">
						<?php if (in_category('32')) { 
							$get_next_post = get_previous_post(true); echo get_wp_user_avatar($get_next_post->post_author); 
						} else { 
							$prevPost = get_previous_post(true); 
							$prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(150,150) ); 
							echo $prevthumbnail; 
						} 	
						if (in_category('32')) { 
							echo '<div class="single-next-slide-header">next post</div>';
						} else { 
							echo '<div class="single-next-slide-header">next story</div>';
						} ?>
						<div class="single-nextslide-text"><?php previous_post_link('%link','%title', TRUE, '28 and 35'); ?></div>
						<div class="single-next-slide-close" id="close-next-slide">x</div>
					</div>
				<?php } ?>
			</div>     
		<?php endwhile; ?>
	    <?php endif; ?>

	    <div id="single-sidebar"><?php get_sidebar(); ?></div>
	</div>
   
<?php get_footer(); ?>