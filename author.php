<?php get_header(); ?>

    <?php 
    	// FIND CURRENT AUTHOR AND CURRENT USERNAME
    	$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); 
    	$user = get_user_by('slug', $author_name);
    ?>
		
		<!--=== PAGE TITLE ===-->
		<div id="author-title">author <span id="author-title-profile">profile</span></div>
		<div>
			<span id="author-title-line" class="page-title-line"></span>
		</div>
	
	<!--=== MAIN CONTENT ===-->
	<div id="author-page-wrapper">
		<div class="author-profile-wrapper">
			<!--=== DISPLAYS AUTHOR'S AVATAR ===-->
			<div class="author-image"><?php echo get_avatar($user->ID, 150); ?>
				<?php if ($curauth->user_url) { ?>
					<div class="author-website">
						<div class="author-category">Website </div>
						<a href="<?php echo $curauth->user_url; ?>" target="_blank">
							<?php echo $curauth->user_url; ?>
						</a>
					</div>
				<?php } ?>
				<!--=== DISPLAYS AUTHOR'S EMAIL ADDRESS ===-->
				<?php if ($curauth->user_email) { ?>
					<div class="author-email">
						<div class="author-category">Email </div>
							<a href="mailto:<?php echo $curauth->user_email; ?>" target="_top">
								<?php echo $curauth->user_email; ?>
							</a>
						</div>
				<?php } ?>
				<!--=== DISPLAYS AUTHOR'S TWITTER HANDLE ===-->
				<?php if ($curauth->twitter) { ?>
					<div class="author-twitter">
						<div class="author-category">Twitter </div>
							<a href="http://twitter.com/<?php echo $curauth->twitter; ?>" target="_blank">
								@<?php echo $curauth->twitter; ?>
							</a>
						</div>
				<?php } ?>
			</div>
			<!--=== DISPLAYS AUTHOR'S BIO ===-->
			<div class="author-profile">
				<div class="author-name"><?php echo $curauth->display_name; ?></div><hr>
				<p><?php echo $curauth->user_description; ?></p>
			</div>
		</div><br>	
		<!--=== DISPLAYS LIST OF AUTHOR'S POSTS ===-->
		<div class="author-stories"><div class="stories-by">Stories by <?php echo $curauth->display_name ?></div></div>
		<?php wp_reset_query(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="author-stories-list">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a>,
				<span class="author-stories-date"><?php the_time('d M Y'); ?></span>
			</div>
		<?php endwhile; else: ?>
			<p><?php _e('No posts by this author.'); ?></p>
		<?php endif; ?>
	</div>
	
	<!--=== AUTHOR PAGE SIDEBAR ===-->
	<div id="author-voices-sidebar">
 		<?php meet_our_bloggers(); ?>
		<a href="<?php echo home_url(); ?>/contribute"><img id="voices-ad" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ajr-write-for-ad.jpg"></a>
		<?php editors_picks(); ?>
 	</div>

<div><?php get_footer(); ?></div>