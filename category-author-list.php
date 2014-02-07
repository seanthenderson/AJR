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