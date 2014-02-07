<?php /*Template Name: news-content*/ ?>

	<div id="news-more-one">	
		<?php 
			$args = array(
				'cat' => '30',
				'posts_per_page' => '12',
				'offset' => '12'
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
	</div>
	
	<div id="news-more-two">	
		<?php 
			$args = array(
				'cat' => '30',
				'posts_per_page' => '12',
				'offset' => '24'
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
	</div>
	
	<div id="news-more-three">	
		<?php 
			$args = array(
				'cat' => '30',
				'posts_per_page' => '12',
				'offset' => '36'
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
	</div>
	
	<div id="news-more-four">	
		<?php 
			$args = array(
				'cat' => '30',
				'posts_per_page' => '12',
				'offset' => '48'
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
	</div>
	
	<div id="news-more-five">	
		<?php 
			$args = array(
				'cat' => '30',
				'posts_per_page' => '12',
				'offset' => '60'
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
	</div>
	
	<div id="news-more-six">	
		<?php 
			$args = array(
				'cat' => '30',
				'posts_per_page' => '12',
				'offset' => '72'
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
	</div>



