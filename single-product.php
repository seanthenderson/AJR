<?php 

	get_header(); 

	if(have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="single-db-container">	
			<div class="single-db-image-container">
				<div class="single-db-image"><?php the_post_thumbnail(); ?></div>
				<div class="single-db-category-type">hybrid projects</div>
				<div class="single-db-category">sports</div>
				<div class="single-db-ratings">
					<div class="single-db-ratings-box">58 ratings</div>
					<div class="single-db-star-ratings"></div>
				</div>
			</div>
			<div class="single-db-info-container">
				<div class="single-db-title"><?php the_title(); ?></div>
				<div class="single-db-date">
					<?php  
						$sourceName = get_post_meta($post->ID, 'database_source_name_meta_value_key', true);
						echo $sourceName; 
					?>
					/
					<?php
						$date = get_post_meta($post->ID, 'database_date_meta_value_key', true);
						echo $date;
					?>
				</div>
				<div class="single-db-excerpt"><?php the_excerpt(); ?></div>
				<div class="single-db-source">
					<?php $source = get_post_meta($post->ID, 'database_source_meta_value_key', true); ?>
					<a href="<?php echo $source; ?>" target="_blank"><div>VISIT PAGE</div></a>	
				</div>	
			</div>
			<div class="single-db-related-links-clear"></div>
			<div class="single-db-related-links"></div>
		</div>
		<div class="single-db-related-items">
			<div class="single-db-recent-stories-category">Recent posts in
				<?php 
					$category = get_the_terms($post->ID, 'product');
					//$category = $category[1]->cat_name;
					echo the_category();
				?>
			</div>
			<div class="single-db-recent-stories"></div>
		</div>
		
	<?php endwhile; endif;

	get_footer(); 

?>