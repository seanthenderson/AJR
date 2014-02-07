<?php get_header(); ?>

<div id="search-page-wrapper">

	<div id="search-results">Results:</div>
	<div id="search-page-archives-link">Don't see what you were looking for?<br> Try searching the <a href="http://ajrarchive.org" target="_blank">AJR archives</a> for older articles.</div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="search-post-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?>,</a> <span class="search-post-author"><?php coauthors_posts_links(); ?></span> <span class="search-post-date"><?php the_date(); ?></span><hr>
		</div>
	<?php endwhile; else: ?>

		<div class="search-no-posts-found">
			<div><?php _e('Sorry, no posts matched your search criteria.'); ?></div><br>
			<a href="javascript:javascript:history.go(-1)">&crarr; go back</a>
		</div>

	<?php endif; ?>
	
</div>

<?php get_footer(); ?>