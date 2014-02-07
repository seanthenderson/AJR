

<?php get_header(); ?>

	<div id="storytelling-title">storytelling</div>
	<div>
		<span id="storytelling-title-line" class="page-title-line"></span>
	</div>
	
	<div id="storytelling-stories">
		<?php query_posts('cat=56'); ?>
		<?php $i = 1; while (have_posts() && $i <= 4) : the_post(); ?>
			<div class="storytelling-story">
				<div class="storytelling-story-text-wrapper">
					<?php the_post_thumbnail(); ?>
					<div class="storytelling-story-text">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<div class="storytelling-story-blurb"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></div>
						<!--=== star ratings iFrame widget ===--> 
						<iframe src="http://ajr.org/star-frame-2/" width="433px" height="130px" border="1"></iframe>

					</div>
				</div>
			</div>
		<?php $i++; endwhile; ?>  		
		<!--<img id="storytelling-stories-ad" src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/netflix_ad.gif">-->
	</div>
	
	<div id="storytelling-databases">
		<div class="storytelling-database" id="projects-database">
			<div class="database-text">
				<div class="database-title"><a href="">Projects Database</a></div>
				<div class="database-writeup">
					Duo ut aeque electram omittantur, qui an exerci phaedrum. Reque tation imperdiet eu cum, ne homero aliquip vim. Facete indoctum quaerendum vix ex, id posse evertitur sit. Sea quot quodsi sanctus in, est tale dicunt id. Ex quod gubergren assentior per, novum causae praesent vim no, eu sed tota solum putent. Id sed appetere deterruisset consectetuer, sea id consul populo.<br>
				</div>
			</div>
			<img class="featured-database-example" src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/bethlehem_feature.jpg">
			<img class="database-example" src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/monk-interview.jpg">
			<img class="database-example" src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/metal-balls.jpg">
			<img class="database-example" src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/tablet-hands.jpg">
			<img class="database-example" src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/ipad-muttonchops.jpg">
		</div>
		<div class="storytelling-database" id="tools-database">
			<div class="database-text">
				<div class="database-title">Tools Database</div>
				<div class="database-writeup">Duo ut aeque electram omittantur, qui an exerci phaedrum. Reque tation imperdiet eu cum, ne homero aliquip vim. Facete indoctum quaerendum vix ex, id posse evertitur sit. Sea quot quodsi sanctus in, est tale dicunt id. Ex quod gubergren assentior per, novum causae praesent vim no, eu sed tota solum putent. Id sed appetere deterruisset consectetuer, sea id consul populo.</div>
			</div>
			<img class="featured-database-example" src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/tech-pyramid.png">
			<img class="database-example" src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/iphone-microphone.jpg">
			<img class="database-example" src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/frontier-journalism.jpg">
			<img class="database-example" src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/educational_technology.jpg">
			<img class="database-example" src="<?php echo home_url( '/' ); ?>/wp-content/themes/AJR-theme/images/keyboard-grass.jpg">
		</div>
	</div>

<!--==== BEGIN DATABASE IMPLEMENTATION TESTING ====-->		
	<?php 
		/*function update_rating() {	
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
		};*/ 
	?>	
	
	<?php
	   $args = array(
		   'cat' => '30',
		   'posts_per_page' => '3',
		   'offset' => '25'
	   );
	   $stars = new WP_Query($args);
	   if ($stars->have_posts()) {
	   	   while ($stars->have_posts()) {
	   	   		$stars->the_post(); ?>
	   	   		<script type="text/javascript">
					$("#star_rating_one").click(function() {
						$.ajax({
							url: "<?php admin_url('admin-ajax.php'); ?>",
							complete: function() {
								<?php update_post_meta($post->ID, project_rating, 1); ?>
							}, 
							success: function() {
								alert("success");
							},
							error: function() {
								alert("error");
							}
						});
					});
					$("#star_rating_two").click(function() {
						$.ajax({
							url: "<?php admin_url('admin-ajax.php'); ?>",
							complete: function() {
								<?php update_post_meta($post->ID, project_rating, 2); ?>
							}, 
							success: function() {
								alert("success");
							},
							error: function() {
								alert("error");
							}
						});
					});
					$("#star_rating_three").click(function() {
						$.ajax({
							url: "<?php admin_url('admin-ajax.php'); ?>",
							complete: function() {
								<?php update_post_meta($post->ID, project_rating, 3); ?>
							}, 
							success: function() {
								alert("success");
							},
							error: function() {
								alert("error");
							}
						});
					});
					$("#star_rating_four").click(function() {
						$.ajax({
							url: "<?php admin_url('admin-ajax.php'); ?>",
							complete: function() {
								<?php update_post_meta($post->ID, project_rating, 4); ?>
							}, 
							success: function() {
								alert("success");
							},
							error: function() {
								alert("error");
							}
						});
					});
					$("#star_rating_five").click(function() {
						$.ajax({
							url: "<?php admin_url('admin-ajax.php'); ?>",
							complete: function() {
								<?php update_post_meta($post->ID, project_rating, 5); ?>
							}, 
							success: function() {
								alert("success");
							},
							error: function() {
								alert("error");
							}
						});
					});
				</script>
	   	   		<?php $post_id = get_the_id(); 
	   	        echo '<div style="clear: both;">';
					the_title();
					echo '<br><br>';
					$post_id = $post->ID;
					echo '<div id="rating_id_' . $post_id . '">' . $post_id . '</div>';
					echo '<br><br>'; ?>
					<div style="clear:both;">
						<img id="star_rating_one" src="<?php echo get_stylesheet_directory_uri(); ?>/images/star.png">
						<img id="star_rating_two" src="<?php echo get_stylesheet_directory_uri(); ?>/images/star.png">
						<img id="star_rating_three" src="<?php echo get_stylesheet_directory_uri(); ?>/images/star.png">
						<img id="star_rating_four" src="<?php echo get_stylesheet_directory_uri(); ?>/images/star.png">
						<img id="star_rating_five" src="<?php echo get_stylesheet_directory_uri(); ?>/images/star.png"><br><br>
					</div>
				</div>
	   	   <?php }
	   }
	?>
	
	<div style="clear:both; display: none;">
		<img id="oneStar" onclick="star_rating()" src="<?php echo get_stylesheet_directory_uri(); ?>/images/star.png">
		<img id="twoStar" onclick="star_rating_two()" src="<?php echo get_stylesheet_directory_uri(); ?>/images/star.png">
		<img id="threeStar" onclick="star_rating_three()" src="<?php echo get_stylesheet_directory_uri(); ?>/images/star.png">
		<img id="fourStar" onclick="star_rating_four()" src="<?php echo get_stylesheet_directory_uri(); ?>/images/star.png">
		<img id="fiveStar" onclick="star_rating_five()" src="<?php echo get_stylesheet_directory_uri(); ?>/images/star.png"><br><br>
	</div>
	
	<?php
//		global $wpdb;
// 		$rating_count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->users" );
// 		echo "<p>Rating count is {$rating_count}</p>";
// 		
// 		$mylink = $wpdb->get_row("SELECT * FROM $wpdb->posts WHERE ID = 25055");
// 		echo $mylink->rating; // prints "10"
// 		
// 		$table_name = $wpdb->prefix . "posts";
// 		$id = 25055;	
// 		function updateRating() {	
// 			$wpdb->query(
// 				"
// 				UPDATE $table_name
// 				SET rating = 2
// 				WHERE ID = $id
// 				"
// 			);
// 		};
// 		
// 		$wpdb->show_errors();
// 		
// 		//echo $mylink->rating;
// 	?></div>
// 	
// 	<?php
// 		$numberofpost = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts;");
// 		echo "<br>The number of rows in posts table are: " . $numberofpost;
// 		
// 		$post = $wpdb->get_row("SELECT * FROM $wpdb->posts WHERE ID = 25055");
// 		//print_r($post);
// 		echo '<br><br> The rating is: ' . $post->rating . '<br><br>';
// 
// 		$table_name = $wpdb->prefix . "posts";
//  		$id = 25055;
//  		$rating = 5;
//  		//$wpdb->insert($table_name, 
//  		//	array(
//  		//		'ID' => $id,
//  		//		'rating' => $rating
//  		//	)	
//  		//);	
	?>
	
	<?php
		// function ratingsPrint() {
// 			global $wpdb;
// 			$ratings_table = $wpdb->prefix . 'wp_ratings';
// 			$rating = $wpdb->get_results("SELECT COUNT(*) FROM $ratings_table");
// 			
// 			$numRows = count((array) $rating);
// 			$randNum = rand(0, $numRows);
// 			
// 			print $rating[$randNum]->stars;
// 			print $rating[$randNum]->about;
// 			//echo 'working?' . $rating[0];
// 		}
// 		echo ratingsPrint();
// 		
// 		$ratings = $wpdb->get_results("SELECT * FROM ratings;");
// 		//print_r($ratings);
// 		//echo $ratings[0];
// 		
// 		
// 		$my_post = array(
// 			'ID' => 25055,
// 			'rating' => 5
// 		);
		
		//wp_update_post($my_post);
	?>
<!--==== END DATABASE IMPLEMENTATION TESTING ====-->	
	

<?php get_footer(); ?>