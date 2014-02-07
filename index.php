<?php get_header(); ?>
	 
	<style>
		@media only screen and (max-width: 910px) {
			#mobile-nav-items {display: block;}
		}
	</style> 
	        	
	<div id="category-wrapper">
	   <div class="category" id="cat-story"><a href="<?php echo home_url(); ?>/category/news">latest</a></div>
	   <div class="category" id="cat-news"><a href="<?php echo home_url(); ?>/category/storytelling">spotlight</a></div>
	   <div class="category" id="cat-voices"><a href="<?php echo home_url(); ?>/category/voices">voices</a></div>
    </div>
    
    <div id="mobile-categories">
    	<div class="mobile-category">news</div>
		<div class="mobile-category">voices</div>
	</div>
	
	<!--==== LATEST ====-->
    <div id="storytelling">
	   <div id="category-latest" class="category">latest</div>
	   <div class="storytelling-post">
	       <?php 
	           $args = array(
	               'cat' => '30',
	               'category__not_in' => array(189, 191, 192, 193, 28, 32),
	               'posts_per_page' => '3'
	           );	
	           $latest = new WP_Query($args);
	           if ($latest->have_posts() ) {
	               while ($latest->have_posts() ) {
	               	   $latest->the_post();
	               	   if (has_post_thumbnail() ) { ?>
	               	       <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>	    		
	               	   <?php } else { ?>
	               	   	   <a href="<?php the_permalink(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/news-placeholder.jpg" ></a>
	               	   <?php } ?>
	               	   <div class="storytelling-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
					   <div class="storytelling-byline"><?php if(function_exists('coauthors_posts_links')); ?>By <?php coauthors_posts_links(); ?></div> 
					   <div class="storytelling-square"></div>
					   <div class="storytelling-blurb"><?php the_excerpt(); ?>
    				       <div style="margin: -15px 0 15px 0;">		               
	               	   		   <div id="homepage-shares" class="comments-count">
	               	   		   	   <div style="display: inline;">
	               	   		   	   	   <?php 
											$permalink = get_permalink($post->ID);
											$tweets = totalTweets($permalink);
											$shares = totalShares($permalink);
											$pluses = totalPluses($permalink);
											$totalShares = $tweets + $shares + $pluses;
											echo $totalShares . ' SHARES';
										?>
	               	   		   	   </div>
	               	   		   	   <div class="comments-count" style="margin: 0 0 0 10px;"><a href="<?php the_permalink(); ?>#disqus_thread"></a></div>
	               	   		   	   <div id="homepage-social-media-shares" style="width: 305px; height: 30px;">
									   <div style="display: inline; float: left;"><a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-url="<?php the_permalink(); ?>"></a></div>
									   <div style="display: inline; margin: 0 7px 5px -18px; height: 10px; float: left;" class="fb-share-button" data-href="<?php the_permalink(); ?>" data-width="50px" data-type="button_count"></div>
									   <div style="display: none; float: left; margin: -2px 2px 0 0;"><g:plusone></g:plusone></div>
								   </div>
	               	   		   </div>
	               	   	   </div>
	               	   </div> 	
	               <?php }	
	           } else {
	           	   //no posts
	           }
	           wp_reset_postdata();
	       ?>			
	   </div>
	</div>
    
	<div id="featured">
	   <h1 id="category-spotlight" class="category">spotlight</h1>
	   <?php 
			$args = array(
				'cat' => '28',
				'posts_per_page' => '1'
			);
			$featureBox = new WP_Query($args);
			if ($featureBox->have_posts() ) {
				while ($featureBox->have_posts() ) {
					$featureBox->the_post(); ?>
					<div id="main-homepage-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
			 			<div class="featured-image-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				 			<div class="featured-text-byline"><?php if(function_exists('coauthors_posts_links')); ?>By <?php coauthors_posts_links(); ?></div>
			  			</div> 
		  			</div>
		  			<div class="featured-blurb"><?php the_excerpt(); ?>
		  				<div style="margin: -15px 0 15px 0;">	
	               	   		   <div id="homepage-shares" class="comments-count">
	               	   		   	   <div style="display: inline;">
	               	   		   	   	   <?php 
											$permalink = get_permalink($post->ID);
											$tweets = totalTweets($permalink);
											$shares = totalShares($permalink);
											$pluses = totalPluses($permalink);
											$totalShares = $tweets + $shares + $pluses;
											echo $totalShares . ' SHARES';
										?>
	               	   		   	   </div>
	               	   		   	   <div class="comments-count" style="margin: 0 0 0 10px; display: none;"><a href="<?php the_permalink(); ?>#disqus_thread">COMMENTS</a></div>
	               	   		   	   <div id="homepage-social-media-shares" style="width: 305px; height: 30px;">
									   <div style="display: inline; float: left;"><a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-url="<?php the_permalink(); ?>">Tweet</a></div>
									   <div style="display: inline; margin: 0 7px 5px -18px; height: 10px; float: left;" class="fb-share-button" data-href="<?php the_permalink(); ?>" data-width="50px" data-type="button_count"></div>
									   <div style="display: none; float: left; margin: -2px 2px 0 0;"><g:plusone></g:plusone></div>
								   </div>
	               	   		  </div>
	               	   	 </div>
		  			</div>
		  			
				<?php }
			} else {
				// no posts found
			}
			wp_reset_postdata();
		?>
	  
	   <!--==== SPOTLIGHT ====--> 		  
	   <?php 
	   		//SPOTLIGHT ONE
	   		$spotlight = new WP_Query('cat=189,-28');
	   		if ($spotlight->have_posts() ) {
	   			$i = 0; while ($spotlight->have_posts() && $i < 1) {
	   				$spotlight->the_post(); ?>
	   				<div id="news-posts" class="news-post">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
						<div class="news-post-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
						<div class="news-byline"><?php if(function_exists('coauthors_posts_links')); ?>By <?php coauthors_posts_links(); ?></div> 
						<div class="news-square"></div>
						<div class="news-blurb"><?php echo excerpt(32); ?> 
							<div style="margin: 5px 0 15px 0;">	
	               	   		   <div id="homepage-shares" class="comments-count">
	               	   		   	   <div style="display: inline;">
	               	   		   	   	   <?php 
											$permalink = get_permalink($post->ID);
											$tweets = totalTweets($permalink);
											$shares = totalShares($permalink);
											$pluses = totalPluses($permalink);
											$totalShares = $tweets + $shares + $pluses;
											echo $totalShares . ' SHARES';
										?>
	               	   		   	   </div>
	               	   		   	   <div class="comments-count" style="margin: 0 0 0 10px;"><a href="<?php the_permalink(); ?>#disqus_thread"></a></div>
	               	   		   	   <div id="homepage-social-media-shares" style="width: 305px; height: 30px;">
									   <div style="display: inline; float: left;"><a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-url="<?php the_permalink(); ?>">Tweet</a></div>
									   <div style="display: inline; margin: 0 7px 5px -18px; height: 10px; float: left;" class="fb-share-button" data-href="<?php the_permalink(); ?>" data-width="50px" data-type="button_count"></div>
									   <div style="display: none; float: left; margin: -2px 2px 0 0;"><g:plusone></g:plusone></div>
								   </div>
	               	   		  </div>
	               	   		  
	               	   	 </div> 
					 	</div> 
					 </div>
	   			<?php $i++; }
	   		} else {
	   			//no posts
	   		}	
	   		wp_reset_postdata();
	   		//SPOTLIGHT TWO
	   		$spotlight = new WP_Query('cat=191,-28');
	   		if ($spotlight->have_posts() ) {
	   			$i = 0; while ($spotlight->have_posts() && $i < 1) {
	   				$spotlight->the_post(); ?>
	   				<div id="news-posts" class="news-post">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
						<div class="news-post-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
						<div class="news-byline"><?php if(function_exists('coauthors_posts_links')); ?>By <?php coauthors_posts_links(); ?></div> 
						<div class="news-square"></div>
						<div class="news-blurb"><?php echo excerpt(32); ?>   
							<div style="margin: 5px 0 15px 0;">	
	               	   		   <div id="homepage-shares" class="comments-count">
	               	   		   	   <div style="display: inline;">
	               	   		   	   	   <?php 
											$permalink = get_permalink($post->ID);
											$tweets = totalTweets($permalink);
											$shares = totalShares($permalink);
											$pluses = totalPluses($permalink);
											$totalShares = $tweets + $shares + $pluses;
											echo $totalShares . ' SHARES';
										?>
	               	   		   	   </div>
	               	   		   	   <div class="comments-count" style="margin: 0 0 0 10px;"><a href="<?php the_permalink(); ?>#disqus_thread"></a></div>
	               	   		   	   <div id="homepage-social-media-shares" style="width: 305px; height: 30px;">
									   <div style="display: inline; float: left;"><a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-url="<?php the_permalink(); ?>">Tweet</a></div>
									   <div style="display: inline; margin: 0 7px 5px -18px; height: 10px; float: left;" class="fb-share-button" data-href="<?php the_permalink(); ?>" data-width="50px" data-type="button_count"></div>
									   <div style="display: none; float: left; margin: -2px 2px 0 0;"><g:plusone></g:plusone></div>
								   </div>
	               	   		  </div>
	               	   		  
	               	   	 </div>
						</div>
					 </div>
	   			<?php $i++; }
	   		} else {
	   			//no posts
	   		}	
	   		wp_reset_postdata();
	   		//SPOTLIGHT THREE
	   		$spotlight = new WP_Query('cat=192,-28');
	   		if ($spotlight->have_posts() ) {
	   			$i = 0; while ($spotlight->have_posts() && $i < 1) {
	   				$spotlight->the_post(); ?>
	   				<div id="news-posts" class="news-post">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
						<div class="news-post-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
						<div class="news-byline"><?php if(function_exists('coauthors_posts_links')); ?>By <?php coauthors_posts_links(); ?></div> 
						<div class="news-square"></div>
						<div class="news-blurb"><?php echo excerpt(32); ?> 
							<div style="margin: 5px 0 15px 0;">	
	               	   		   <div id="homepage-shares" class="comments-count">
	               	   		   	   <div style="display: inline;">
	               	   		   	   	   <?php 
											$permalink = get_permalink($post->ID);
											$tweets = totalTweets($permalink);
											$shares = totalShares($permalink);
											$pluses = totalPluses($permalink);
											$totalShares = $tweets + $shares + $pluses;
											echo $totalShares . ' SHARES';
										?>
	               	   		   	   </div>
	               	   		   	   <div class="comments-count" style="margin: 0 0 0 10px;"><a href="<?php the_permalink(); ?>#disqus_thread"></a></div>
	               	   		   	   <div id="homepage-social-media-shares" style="width: 305px; height: 30px;">
									   <div style="display: inline; float: left;"><a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-url="<?php the_permalink(); ?>">Tweet</a></div>
									   <div style="display: inline; margin: 0 7px 5px -18px; height: 10px; float: left;" class="fb-share-button" data-href="<?php the_permalink(); ?>" data-width="50px" data-type="button_count"></div>
									   <div style="display: none; float: left; margin: -2px 2px 0 0;"><g:plusone></g:plusone></div>
								   </div>
	               	   		  </div>
	               	   		  
	               	   	 </div> 
						</div>
					 </div>
	   			<?php $i++; }
	   		} else {
	   			//no posts
	   		}	
	   		wp_reset_postdata();
	   		//SPOTLIGHT FOUR
	   		$spotlight = new WP_Query('cat=193,-28');
	   		if ($spotlight->have_posts() ) {
	   			$i = 0; while ($spotlight->have_posts() && $i < 1) {
	   				$spotlight->the_post(); ?>
	   				<div id="news-posts" class="news-post">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
						<div class="news-post-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
						<div class="news-byline"><?php if(function_exists('coauthors_posts_links')); ?>By <?php coauthors_posts_links(); ?></div> 
						<div class="news-square"></div>
						<div class="news-blurb"><?php echo excerpt(32); ?>
							<div style="margin: 5px 0 15px 0;">	
	               	   		   <div id="homepage-shares" class="comments-count">
	               	   		   	   <div style="display: inline;">
	               	   		   	   	   <?php 
											$permalink = get_permalink($post->ID);
											$tweets = totalTweets($permalink);
											$shares = totalShares($permalink);
											$pluses = totalPluses($permalink);
											$totalShares = $tweets + $shares + $pluses;
											echo $totalShares . ' SHARES';
										?>
	               	   		   	   </div>
	               	   		   	   <div class="comments-count" style="margin: 0 0 0 10px;"><a href="<?php the_permalink(); ?>#disqus_thread"></a></div>
	               	   		   	   <div id="homepage-social-media-shares" style="width: 305px; height: 30px;">
									   <div style="display: inline; float: left;"><a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-url="<?php the_permalink(); ?>">Tweet</a></div>
									   <div style="display: inline; margin: 0 7px 5px -18px; height: 10px; float: left;" class="fb-share-button" data-href="<?php the_permalink(); ?>" data-width="50px" data-type="button_count"></div>
									   <div style="display: none; float: left; margin: -2px 2px 0 0;"><g:plusone></g:plusone></div>
								   </div>
	               	   		  </div>
	               	   		  
	               	   	 </div> 
						</div>  
					 </div>
	   			<?php $i++; }
	   		} else {
	   			//no posts
	   		}	
	   		wp_reset_postdata();
	   ?>	       
	</div>
	
	<div id="voices">
	   <div id="category-voices" class="category"><a href="<?php echo home_url(); ?>/category/voices">voices</a></div> 
           <?php 
               $args = array(
               	   'cat' => '55',
               	   'posts_per_page' => '7'
               );
               $voices = new WP_Query($args);
               if ($voices->have_posts() ) {
               	   while ($voices->have_posts() ) {
               	   	   $voices->the_post(); ?>
               	   	   <div class="voices-post">
						   <a href="<?php echo home_url( '/' ); ?>author/<?php echo get_the_author_meta('user_login'); ?>">
							   <div class="voices-homepage-headshots"><?php echo get_avatar(get_the_author_meta('ID'), 150); ?></div>
						   </a>
						   <div class="voices-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>  
						   <div class="voices-byline"><?php coauthors_posts_links(); ?></div>
					   </div>
               	   <?php }
               } else {
               	   //no posts
               }
               wp_reset_postdata();
           ?>      
	       <div class="home-page-voices-ad"><a href="<?php echo home_url(); ?>/contribute"><img src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/ajr-write-for-ad.jpg"></a></div>
		   <div class="home-page-voices-ad"><a href="http://annenberg.usc.edu/AboutUs/Awards/SeldenRing.aspx" target="_blank"><img src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/SeldenRing2014.png"></a></div>	 
	</div>
	
	<div id="mobile-featured">
		<?php 
			$mobileSpotlight = new WP_Query('cat=189,191,192,193,-28');
			if ($mobileSpotlight->have_posts() ) {
				$i = 0; while ($mobileSpotlight->have_posts() && $i < 4) {
					$mobileSpotlight->the_post(); ?>
					<div class="news-post mobile-news-posts">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
						<div class="news-post-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
						<div class="news-byline"><?php if(function_exists('coauthors_posts_links')); ?>By <?php coauthors_posts_links(); ?></div> 
						<div class="news-blurb"><?php the_excerpt(); ?>
							<!-- <div class="comments-count"><a href="<?php the_permalink(); ?>#disqus_thread">Comments</a></div> -->
						</div>   
					</div>
				<?php $i++; }
			}
		?>	
	</div>
	
	<div id="mobile-latest">
		<?php 
			$args = array(
				'cat' => '30',
				'posts_per_page' => '6',
				'category__not_in' => array(28,189,191,192,193)
			);
			$mobileLatest = new WP_Query($args);
			if ($mobileLatest->have_posts() ) {
				while ($mobileLatest->have_posts() ) {
					$mobileLatest->the_post(); ?>
					<div class="news-post mobile-news-posts">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
					<div class="news-post-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
					<div class="news-byline"><?php if(function_exists('coauthors_posts_links')); ?>By <?php coauthors_posts_links(); ?></div> 
					<div class="news-blurb"><?php the_excerpt(); ?>
						<!-- <div class="comments-count"><a href="<?php the_permalink(); ?>#disqus_thread">Comments</a></div> -->
					</div>   
				</div>
				<?php }
			} else {
				//no posts
			}
			wp_reset_postdata();
		?>	
	</div>
	
	<div id="mobile-voices">
		<?php
			$args = array(
				'cat' => '32',
				'posts_per_page' => '10'
			);
			$mobileVoices = new WP_Query($args);
			if ($mobileVoices->have_posts() ) {
				while ($mobileVoices->have_posts() ) {
					$mobileVoices->the_post(); ?>
					<div class="voices-post">
					    <a href="<?php echo home_url( '/' ); ?>author/<?php echo get_the_author_meta('user_login'); ?>"><?php echo get_avatar(get_the_author_meta('ID'), 150); ?></a>
					    <div class="voices-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>  
					    <div class="voices-byline"><?php coauthors_posts_links(); ?></div>
				    </div> 
				<?php }
			} else {
				//no posts
			}
			wp_reset_postdata();
		?>	      	 

	</div>
	
    
<?php get_footer(); ?>