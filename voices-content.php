<?php /*Template Name: voices-content*/ ?>
	<div id="voices-more-one">
		<?php echo '<div id="voices-more-posts">';
			$args = array(
				'cat' => '32',
				'posts_per_page' => '10',
				'offset' => '10'
			);
			$voices = new WP_Query($args);
			if ($voices->have_posts() ) {
				while ($voices->have_posts() ) {
					$voices->the_post(); ?>
					<div class="voices-blogpost">
						<div class="voices-blogpost-headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
						<div class="voices-blogpost-date"><?php the_date(); ?></div>
						<a href="<?php home_url(); ?>/author/<?php get_the_author_meta('user_login'); ?>">
							<div class="voices-blogpost-headshot-byline">
								<div class="voices-blogpost-headshot"><?php echo get_wp_user_avatar(get_the_author_meta('ID'), 150); ?></div>
								<div class="voices-blogpost-byline"><?php the_author(); ?></div>
							</div>
						</a>
						<div class="voices-blogpost-blurb"><?php the_excerpt(' ...read more'); ?></div>
					</div>
				<?php }
			} else {
				//no posts
			}
			wp_reset_postdata();
		echo '</div>'; ?>
	</div>
	
	<div id="voices-more-two">
		<?php echo '<div id="voices-more-posts">';
			$args = array(
				'cat' => '32',
				'posts_per_page' => '10',
				'offset' => '20'
			);
			$voices = new WP_Query($args);
			if ($voices->have_posts() ) {
				while ($voices->have_posts() ) {
					$voices->the_post(); ?>
					<div class="voices-blogpost">
						<div class="voices-blogpost-headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
						<div class="voices-blogpost-date"><?php the_date(); ?></div>
						<a href="<?php home_url(); ?>/author/<?php get_the_author_meta('user_login'); ?>">
							<div class="voices-blogpost-headshot-byline">
								<div class="voices-blogpost-headshot"><?php echo get_wp_user_avatar(get_the_author_meta('ID'), 150); ?></div>
								<div class="voices-blogpost-byline"><?php the_author(); ?></div>
							</div>
						</a>
						<div class="voices-blogpost-blurb"><?php the_excerpt(' ...read more'); ?></div>
					</div>
				<?php }
			} else {
				//no posts
			}
			wp_reset_postdata();
		echo '</div>'; ?>
	</div>
	
	<div id="voices-more-three">
		<?php echo '<div id="voices-more-posts">';
			$args = array(
				'cat' => '32',
				'posts_per_page' => '10',
				'offset' => '30'
			);
			$voices = new WP_Query($args);
			if ($voices->have_posts() ) {
				while ($voices->have_posts() ) {
					$voices->the_post(); ?>
					<div class="voices-blogpost">
						<div class="voices-blogpost-headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
						<div class="voices-blogpost-date"><?php the_date(); ?></div>
						<a href="<?php home_url(); ?>/author/<?php get_the_author_meta('user_login'); ?>">
							<div class="voices-blogpost-headshot-byline">
								<div class="voices-blogpost-headshot"><?php echo get_wp_user_avatar(get_the_author_meta('ID'), 150); ?></div>
								<div class="voices-blogpost-byline"><?php the_author(); ?></div>
							</div>
						</a>
						<div class="voices-blogpost-blurb"><?php the_excerpt(' ...read more'); ?></div>
					</div>
				<?php }
			} else {
				//no posts
			}
			wp_reset_postdata();
		echo '</div>'; ?>
	</div>
	



