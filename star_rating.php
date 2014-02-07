<?php

	add_action('wp_ajax_my_action', 'update_rating');
	add_action('wp_ajax_nopriv_my_action', 'update_rating');
	
	function update_rating() {	
		global $wpdb;
		$table_name = $wpdb->prefix . "posts";
		$id = 25055;
		$wpdb->query(
			"
			UPDATE $table_name
			SET rating = 1
			WHERE ID = $id
			"
		);
		return 'Rating saved';		
	};
	
	update_rating();


?>