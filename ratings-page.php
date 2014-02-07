<?php
/* Template Name: Ratings */

get_header(); 

the_content();

global $wpdb;
$results = $wpdb->get_results("SELECT * FROM wp_postmeta");
print_r($results);

get_footer();


?> 