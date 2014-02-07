<?php /*Template Name: list-of-authors*/ get_header(); ?>

	<?php wp_reset_query(); ?>	
	<!--=== THIS PAGE CAN BE EDITED FROM THE SITE'S ADMINISTRATION BACKEND UNDER PAGES ===-->
	<div id="about-page-content"><?php the_content(); ?></div>








<?php get_header();
	$allUsers = get_users('orderby=post_count$#038;order=DESC');
	$users = array();
	foreach($allusers as $currentUser) {
		if (!in_array('subscriber', $currentUser->roles)) {
			$users[] = $currentUser;
		}
	}
	
	foreach($users as $user) {
		echo $user->display_name;
		echo $user->ID;
	}
	echo 'testing';
?>

<?php get_footer(); ?>