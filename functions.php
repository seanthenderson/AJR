<?php

/* ============ REGISTER AND ENQUEUE STYLES AND SCRIPTS ============ */
	function AJR_scripts_styles() {
		wp_enqueue_style('reset', get_stylesheet_directory_uri() . '/css/reset.css');
		wp_enqueue_style('main-stylesheet', get_stylesheet_directory_uri() . '/css/stylesheet.css');
		wp_enqueue_style('news-style', get_stylesheet_directory_uri() . '/css/news-style.css');
		wp_enqueue_style('category-style', get_stylesheet_directory_uri() . '/css/category-style.css');
		wp_enqueue_style('voices-style', get_stylesheet_directory_uri() . '/css/voices-style.css');
		wp_enqueue_style('storytelling-style', get_stylesheet_directory_uri() . '/css/storytelling-style.css');
		wp_enqueue_style('careers-style', get_stylesheet_directory_uri() . '/css/careers-style.css');
		wp_enqueue_style('about-style', get_stylesheet_directory_uri() . '/css/about-style.css');
		wp_enqueue_style('single-style', get_stylesheet_directory_uri() . '/css/single-style.css');
		wp_enqueue_style('author-style', get_stylesheet_directory_uri() . '/css/author-style.css');
		wp_enqueue_style('database-style', get_stylesheet_directory_uri() . '/css/product-style.css');
		wp_enqueue_style('firefox', get_stylesheet_directory_uri() . '/css/firefox.css');
		wp_enqueue_style('print', get_stylesheet_directory_uri() . '/css/print.css', 'print');
		wp_enqueue_style('mobile', get_stylesheet_directory_uri() . '/css/mobile.css');
		wp_enqueue_script( 'jquery-BU', get_stylesheet_directory_uri() . '/js/jquery.1.10.2.js', true);
		wp_deregister_script('jquery-BU');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
		wp_enqueue_script('jquery');
		wp_register_script('javascript', get_stylesheet_directory_uri() . '/js/javascript.js', true);
		wp_enqueue_script('javascript');
	}
	add_action('wp_enqueue_scripts', 'AJR_scripts_styles');

/* ============ REDIRECT OLD AJR LINKS TO ARCHIVE PAGE ============ */
	$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

	if (false !== strpos($url,'.asp') && false == strpos($url,'ajrabout.asp') && false == strpos($url,'search.asp') && false == strpos($url,'contact.asp')) {
		$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$new_link = str_replace("ajr.org", "ajrarchive.org", $actual_link);
		header('Location:' . $new_link);
		exit();
	} else {
		//Proceed as normal
	}

	/* Redirect old about link to new about page */
	if (false !== strpos($url, 'ajrabout.asp')) {
		header('Location: http://ajr.org/about');
		exit();
	} else {
		//Proceed as normal
	}
	
	/* Redirect old search link to new search page */
	if (false !== strpos($url, 'search.asp')) {
		header('Location: http://ajr.org');
		exit();
	} else {
		//Proceed as normal
	}
	
	/* Redirect old contact link to new contact page */
	if (false !== strpos($url, 'contact.asp')) { 
		header('Location: http://ajr.org/about');
		exit(); 
	} else {
		//Proceed as normal
	}

/* ============ REGISTER AND ENQUEUE STYLES ============ */
	//function AJR_theme_enqueue_custom_scripts() {
		//wp_enqueue_style('AJR-theme', get_template_directory_uri() . '/css/voices-style.css');
		//wp_enqueue_script('javascript', get_template_directory_uri() . '/js/javascript.js', true);
	//}
	
	//add_action('wp_enqueue_scripts', 'AJR_theme_enqueue_custom_scripts');

/* ============ REMOVE GUEST AUTHOR FUNCTIONALITY FROM CO-AUTHORS PLUS PLUGIN ============ */
	add_filter( 'coauthors_guest_authors_enabled', '__return_false' );

/* ============ ADD HOMEPAGE HEADLINE META BOX ============ */
	function article_headline_meta_box() {
		add_meta_box(
			'article_headline', 
			__('Alternate Article Page Headline (no character max)'),  
			'article_headline_inner_custom_box', 
			'post', 
			'normal', 
			'high'
		);
	}
	
	add_action('add_meta_boxes', 'article_headline_meta_box');

	function article_headline_inner_custom_box($post) { 
		wp_nonce_field('article_headline_inner_custom_box', 'article_headline_box_nonce' );
		$value = get_post_meta($post->ID, 'article_headline_meta_value_key', true ); 
			echo '<label for="article_headline">';
       			_e( "Headline", 'article_headline_textdomain');
  			echo '</label><br>';
 			echo '<input type="text" id="article-headline" name="article-headline" value="' . esc_attr($value) . '" class="large-text ui-autocomplete-input" />';
	}

	function save_article_headline($post_id, $post) {
		if (!isset($_POST['article_headline_box_nonce']))
			return $post_id;
		$nonce = $_POST['article_headline_box_nonce'];
		if (!wp_verify_nonce($nonce, 'article_headline_inner_custom_box'))
      		return $post_id;
      	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) 
      		return $post_id;
      	if ('page' == $_POST['post_type']) {
		    if (!current_user_can('edit_page', $post_id))
        		return $post_id;
  		} else {
    		if (!current_user_can('edit_post', $post_id))
        		return $post_id;
  		}
  		$mydata = sanitize_text_field($_POST['article-headline']);
  		update_post_meta($post_id, 'article_headline_meta_value_key', $mydata);
	}
	
	add_action('save_post', 'save_article_headline');

/* ============ ADD RELATED CONTENT META BOX ============ */
	function add_related_content_meta_boxes() {
		add_meta_box('related-content-meta-box', 'Related Content', 'display_related_content_meta_box', 'post', 'side', 'low');
	}
	add_action('add_meta_boxes', 'add_related_content_meta_boxes');

	function display_related_content_meta_box($post) {
		echo "To add related content items: copy and paste this code into the body of the post (in the text editor, not visual). Then switch to the visual editor to fill out the fields."; ?>
	?>
<textarea id="related-items-textarea" style="color: #B0B0B0; margin-top: 5px;" cols="28" rows="5" style="overflow: scroll;">
<div class="related-items-box">
   <div class="related-items-box-title">RELATED ITEMS</div>
   <div class="related-item-headline"><a href="" target="_blank">Headline One</a>
 	  <div class="related-item-source">Source One</div>
   </div>
   <div class="related-item-headline"><a href="" target="_blank">Headline Two</a>
 	  <div class="related-item-source">Source Two</div>
   </div>
   <div class="related-item-headline"><a href="" target="_blank">Headline Three</a>
 	  <div class="related-item-source">Source Three</div>
   </div>
</div>
</textarea>
<?php }

/* ============ ADD COMMENTS META BOX ============ */
	 // Adds a box to the main column on the Post and Page edit screens. 
	function add_comments_meta_box() {
		$screens = array( 'post', 'page' );
		foreach ( $screens as $screen ) {
			add_meta_box(
				'comments_box',
				__( 'Editor Comments', 'comments_textdomain' ),
				'comments_inner_custom_box',
				$screen,
				'side',
				'low'
			);
		}
	}
	add_action( 'add_meta_boxes', 'add_comments_meta_box' );

	 // Prints the box content. @param WP_Post $post The object for the current post/page.
	function comments_inner_custom_box( $post ) {

	  // Add an nonce field so we can check for it later.
	  wp_nonce_field( 'comments_inner_custom_box', 'comments_inner_custom_box_nonce' );

	   //Use get_post_meta() to retrieve an existing value from the database and use the value for the form.
	  $value = get_post_meta( $post->ID, '_my_meta_value_key', true );

	  echo '<label for="comments">';
		   _e( "Add comments here:", 'comments_textdomain' );
	  echo '</label> ';
	  //echo '<input type="text" id="comments" name="comments" value="' . esc_attr( $value ) . '" size="32" style="height: 100px; overflow: scroll;" />';
	  echo '<textarea name="comments" id="comments" rows="15" cols="28" >' . esc_attr($value) . '</textarea>';
	}

	// When the post is saved, saves our custom data. @param int $post_id The ID of the post being saved. 
	function comments_box_save_postdata( $post_id ) {
	  // We need to verify this came from the our screen and with proper authorization, because save_post can be triggered at other times. 
	  // Check if our nonce is set
	  if ( ! isset( $_POST['comments_inner_custom_box_nonce'] ) )
		return $post_id;

	  $nonce = $_POST['comments_inner_custom_box_nonce'];

	  // Verify that the nonce is valid
	  if ( ! wp_verify_nonce( $nonce, 'comments_inner_custom_box' ) )
		  return $post_id;

	  // If this is an autosave, our form has not been submitted, so we don't want to do anything
	  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
		  return $post_id;

	  // Check the user's permissions
	  if ( 'page' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_page', $post_id ) )
			return $post_id;
  
	  } else {

		if ( ! current_user_can( 'edit_post', $post_id ) )
			return $post_id;
	  }

	  // Sanitize user input
	  $mydata = sanitize_text_field( $_POST['comments'] );

	  // Update the meta field in the database
	  update_post_meta( $post_id, '_my_meta_value_key', $mydata );
	}
	add_action( 'save_post', 'comments_box_save_postdata' );


/* ============ EDITOR SCREEN EXTRA STYLE OPTIONS ============ */
	function enable_more_buttons($buttons) {
	  $buttons[] = 'styleselect';
	  return $buttons;
	}
	add_filter("mce_buttons_3", "enable_more_buttons");

	function add_mce_before_init_insert_formats($init_array) {
		$style_formats = array(
			array(
				'title'   => '.ajr-subhead',
				'block' => 'h2',
			),
		);
	
		$init_array['style_formats'] = json_encode($style_formats);
		return $init_array;
	}

	add_filter('tiny_mce_before_init', 'add_mce_before_init_insert_formats');

/* ============ USER PROFILE PAGE - USER TITLE ============ */
	function modify_contact_methods($profile_fields) {
		// Add new fields
		$profile_fields['title'] = 'Title';
		// Remove unwanted fields
		unset($profile_fields['aim']);
		unset($profile_fields['yim']);
		unset($profile_fields['jabber']);
		return $profile_fields;
	}
	add_filter('user_contactmethods', 'modify_contact_methods');

/* ============ RESTRICT USERS FROM SEEING POSTS OTHER THAN THEIR OWN ============ */
	add_action( 'load-edit.php', 'posts_for_current_contributor' );
	function posts_for_current_contributor() {
		global $user_ID;
		if ( current_user_can( 'faculty_bloggers' ) ) {
		   if ( ! isset( $_GET['author'] ) ) {
			  wp_redirect( add_query_arg( 'author', $user_ID ) );
			  exit;
		   }
		}
		if ( current_user_can( 'outside_bloggers' ) ) {
		   if ( ! isset( $_GET['author'] ) ) {
			  wp_redirect( add_query_arg( 'author', $user_ID ) );
			  exit;
		   }
		}
		if ( current_user_can( 'capstone_students_and_interns' ) ) {
		   if ( ! isset( $_GET['author'] ) ) {
			  wp_redirect( add_query_arg( 'author', $user_ID ) );
			  exit;
		   }
		}

	}

/* ============ EDIT POST LIST PAGE COLUMNS ============ */
	add_action('admin_head', 'edit_post_list_admin_head');

	function edit_post_list_admin_head() {
		echo '<style type="text/css">';
		//echo '.column-date { display: none }';
		echo '.column-tags { display: none }';
		//echo '.column-author { width:30px !important; overflow:hidden }';
		echo '.column-categories { width:100px !important; overflow:hidden }';
		echo '.column-title { width:280px !important }';
		echo '</style>';
	}

/* ============ RESTRICT USERS FROM SEEING CERTAIN META BOXES ON THE EDIT POST SCREEN ============ */
	if (is_admin()) :
		function remove_meta_boxes() {
		 if( !current_user_can('manage_options') ) {
		  remove_meta_box('tagsdiv-post_tag', 'post', 'normal');
		  remove_meta_box('ef_editorial_meta', 'post', 'normal');
		  remove_meta_box('postcustom', 'post', 'normal');
		  remove_meta_box('slugdiv', 'post', 'normal');
		  remove_meta_box('edit-flow-editorial-comments', 'post', 'normal');
		  remove_meta_box('trackbacksdiv', 'post', 'normal');
		  //remove_meta_box('commentstatusdiv', 'post', 'normal');
		  remove_meta_box('related-content-meta-box', 'post', 'normal');
		  remove_menu_page('index.php'); //Remove dashboard menu item for non admins  
		  remove_menu_page('tools.php'); //Remove tools menu item for non admins  
		  //remove_menu_page('edit-comments.php'); //Remove comments menu item for non admins  
		  remove_meta_box('wp_attachment_details', 'post', 'normal');
		  //remove_meta_box('commentsdiv', 'post', 'normal');
	/* === REMOVE DASHBORD META BOXES FOR NON ADMINS === */
		  remove_meta_box('dashboard_secondary', 'dashboard', 'normal');
		  remove_meta_box('dashboard_primary', 'dashboard', 'normal');
		  remove_meta_box('dashboard_recent_drafts', 'dashboard', 'normal');
		  remove_meta_box('dashboard_quick_press', 'dashboard', 'normal');
		  remove_meta_box('myposts_widget', 'dashboard', 'normal');
		  remove_meta_box('post_status_widget', 'dashboard', 'normal');
		  remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
		  add_meta_box('postexcerpt', 'post', 'normal', 'high');
		 }
		}
	add_action( 'admin_menu', 'remove_meta_boxes' );
	endif;

	function remove_plugin_metaboxes() {
		if ( ! current_user_can( 'delete_others_pages' ) ) { // Only run if the user is an Author or lower.
			remove_meta_box( 'ef_editorial_meta', 'post', 'side' ); // Remove Edit Flow Editorial Metadata
			remove_meta_box( 'related-content-meta-box', 'post', 'side' ); // Remove Edit Flow Editorial Metadata 
		}
	}
	add_action( 'do_meta_boxes', 'remove_plugin_metaboxes' );

	function remove_featured_image_metabox() {
		if ( current_user_can('outside_bloggers') || current_user_can('faculty_bloggers') ) { 
			remove_meta_box( 'postimagediv', 'post', 'side' );
		}
	}
	add_action( 'do_meta_boxes', 'remove_featured_image_metabox' );

/* === REDIRECT RESTRICTED USERS TO POST PAGE ON LOGIN === */
function change_login_redirect() {
	global $redirect_to;
	if ($redirect_to == 'wp_admin/') {
		$redirect_to = 'wp-admin/post-new.php';
	}
}

add_action('login_form', 'change_login_redirect');

/* === SET DEFAULT SCREEN OPTIONS AND META BOX ORDER === */
	add_action('admin_init', 'set_user_metaboxes');
	function set_user_metaboxes($user_id=NULL) {

		// These are the metakeys to update
		$meta_key['order'] = 'meta-box-order_post';
		$meta_key['hidden'] = 'metaboxhidden_post';

		// So this can be used without hooking into user_register
		if ( ! $user_id)
			$user_id = get_current_user_id(); 

		// Set the default order if it has not been set yet
		if ( ! get_user_meta( $user_id, $meta_key['order'], true) ) {
			$meta_value = array(
				'side' => 'submitdiv,formatdiv,categorydiv,postimagediv',
				'normal' => 'postexcerpt,wpseo_meta,tagsdiv-post_tag,postcustom,commentstatusdiv,commentsdiv,trackbacksdiv,slugdiv,authordiv,revisionsdiv',
				'advanced' => '',
			);
			update_user_meta( $user_id, $meta_key['order'], $meta_value );
		}

		// Set the default hidden meta boxes if they have not been set yet
		if ( ! get_user_meta( $user_id, $meta_key['hidden'], true) ) {
			$meta_value = array('postcustom','trackbacksdiv','commentstatusdiv',/*'commentsdiv',*/'slugdiv','revisionsdiv');
			update_user_meta( $user_id, $meta_key['hidden'], $meta_value );
		}
	}

/* === USE VIDEO TEMPLATE PAGE FOR VIDEOS === */
  add_action('template_include', 'load_single_template');
  function load_single_template($template) {
    $new_template = '';

    // single post template
    if( is_single() ) {
      global $post;
      // 'cat-1' and 'cat-2' are category slugs

      if( has_term('cat-105', 'category', $post) ) {
        // use template file single-template-cat-105.php
        $new_template = locate_template(array('single-template-cat-105.php' ));
      }

    }
    return ('' != $new_template) ? $new_template : $template;
  }

/* === INFINITE SCROLL === */	
	
	/* === REGISTER AND ENQUEUE SCRIPT FOR INFINITE SCROLL === */
	function custom_theme_js() {
		wp_register_script('infinite_scroll', 
		home_url() . 'wp-content/themes/AJR-theme/js/jquery.infinitescroll.min.js',
		array('jquery'),null,true );
		if(!is_singular()) {
			wp_enqueue_script('infinite_scroll');
		}
	}
	//add_action('wp_enqueue_scripts', 'custom_theme_js');

	/**
	 * Infinite Scroll
	 */
	function custom_infinite_scroll_js() {
		if( ! is_singular() ) { ?>
		<script>
		var infinite_scroll = {
			loading: {
				img: "<?php echo home_url(); ?>wp-content/themes/AJR-theme/images/ajax-loader.gif",
				msgText: "<?php _e( 'Loading more posts...', 'custom' ); ?>",
				finishedMsg: "<?php _e( 'All posts loaded.', 'custom' ); ?>"
			},
			"nextSelector": "#nav-below .nav-previous a",
			"navSelector": "#nav-below",
			"itemSelector": "article",
			"contentSelector": "body"
		};
		jQuery( infinite_scroll.contentSelector ).infinitescroll( infinite_scroll );
		</script>
		<?php
		}
	}
	//add_action( 'wp_footer', 'custom_infinite_scroll_js', 100 );
	
/* === ADD A STYLE OPTION FOR SUBHEAD IN THE DROPDOWN MENU OF THE POST EDITOR SCREEN === */
	function add_custom_subhead_style() {
		add_editor_style('subhead-style.css');
	}
	add_action('init', 'add_custom_subhead_style');

/* === ADD A DESCRIPTION COLUMN TO THE MEDIA LIBRARY PAGE === */
	function description_column($cols) {
		$cols["description"] = "Description";
		return $cols;
	}

	function description_value($column_name, $id) {
		//$meta = wp_get_attachment_metadata($id);
		//echo substr(strrchr($meta['attachment_content'], '/' ), 1);
		echo  get_the_content($id);
	}

	function description_column_sortable($cols) {
		$cols["description"] = "name";
		return $cols;
	}

	function hook_new_media_columns() {
		add_filter('manage_media_columns', 'description_column');
		add_action('manage_media_custom_column', 'description_value', 10, 2);
		add_filter('manage_upload_sortable_columns', 'description_column_sortable');
	}
	add_action('admin_init', 'hook_new_media_columns');

/* === POPULATE MEET OUR BLOGGERS SECTION ON VOICES/AUTHOR SIDEBAR === */
	function meet_our_bloggers() {
		/* Display Header and Meet Our Bloggers */
		echo '<div id="voices-bloggers-list">
 			<a href="' . home_url() . '/contribute"><div id="become-a-blogger">Become an AJR Voice</div></a><hr>
			<div id="voices-bloggers-list-title">Meet Our Bloggers</div>';
			
			/* Change user IDs here in the order that you want them to appear */
			$one = get_option('headshot_one');
			$two = get_option('headshot_two');
			$three = get_option('headshot_three');
			$four = get_option('headshot_four');
			$five = get_option('headshot_five');
			$six = get_option('headshot_six');
			$seven = get_option('headshot_seven');
			$eight = get_option('headshot_eight');
			$nine = get_option('headshot_nine');
			
			$bloggers = array($one,$two,$three,$four,$five,$six,$seven,$eight,$nine); 
			$i = 0; while ($i < 9) : 	
				$username = get_userdata($bloggers[$i]); 
				$login = $username->user_login;
				$firstname =  $username->first_name;
				$lastname = $username->last_name;
				$homeurl =  home_url('/');
				/* Concatenate author URL */
				$userlink = $homeurl . 'author/' . $login; 
				/* Remove any spaces in URL */
				$userlink = str_replace(' ', '', $userlink);

				/* Display avatar and blogger name */
				$options = array();
				$options = get_option('headshot_one');
				echo '<a href="' . $userlink . '"><div class="voices-bloggers-headshot">';
					echo '<div class="meet-our-bloggers-photos">' . get_avatar($bloggers[$i], 150) . '</div>';
					echo '<div class="voices-bloggers-info">
						<div class="voices-bloggers-info-text">';
							echo $firstname, '<br>', $lastname;
							echo '<!--<div class="voices-bloggers-bio">BIO</div>-->
						</div>	
					</div>
				</div></a>';
			 $i++; endwhile; 
		echo '</div>';
	}
	
/* === POPULATE EDITOR'S PICKS SECTION ON SIDEBAR === */
	function editors_picks() {	
		echo '<div class="single-sidebar-related-story">';
			echo '<div class="single-sidebar-related-story-header">Editor\'s Picks</div>';
			$args = array(
				'cat' => '99',
				'posts_per_page' => '4',
				'post__not_in' => array(get_the_ID())
			);
		
			$picks = new WP_Query($args);
		
			if ($picks->have_posts() ) {
				$i = 1; while ($picks->have_posts() ) {
					$picks->the_post();
					if (0 == $picks->current_post) { ?>
						<div class="single-sidebar-related-story-image" style="margin-bottom: 10px;">
							<?php if (has_post_thumbnail()) {
								the_post_thumbnail('medium'); 
							} else {
								echo '<img src="' . get_stylesheet_directory_uri() . '/images/news-placeholder.jpg">';
							} ?>
							<div class="single-sidebar-related-story-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<div class="single-sidebar-related-story-blurb"><a href="<?php the_permalink(); ?>"><?php echo excerpt(28); ?></a></div>
								<div class="single-sidebar-related-story-byline"><?php coauthors_posts_links(); ?></div>
							</div>	
						</div>
					<?php } else { ?>
						<div class="single-sidebar-thumbnail">
							<div class="single-sidebar-related-story-thumbnail-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>	
						</div><br>
						<?php if ($i <= 3) { 
							echo '<hr style="width: 92%;">';
						} 
					}
				$i++; }
			} else {
				//no posts
			}
		
			wp_reset_postdata();
		echo '</div>';
		
	}

/* === POPULATE MORE IN CATEGORY SECTION ON SIDEBAR === */
	function more_in_category() {	
	    if (!in_category('1')) { ?>
		    <div class="single-sidebar-related-story">
				<?php wp_reset_query(); ?>
				<?php $this_post = $post->ID;
					if (in_category('32')) { ?>
						<a href="<?php echo home_url(); ?>/voices">
							<div class="single-sidebar-related-story-header single-sidebar-related-story-header-voices">More in Voices</div>
						</a>
						<?php $args = array(
							'cat' => '32',
							'post__not_in' => array($this_post),
							'category__not_in' => '99'
						);
						$the_query = new WP_Query($args);
				
						if ($the_query->have_posts()) {
							$i = 0; while ($the_query->have_posts() && $i < 3) { 
								$the_query->the_post(); ?>
								<div class="single-sidebar-related-story-thumbnail-text">
									<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
									<hr>
								</div>
							<?php $i++; }
						} else {
							//no posts
						}
						wp_reset_postdata();
				
					} else {

						// MORE IN SUBCATEGORY LABEL
						$categories = get_the_category();
						foreach( $categories as $category ){
							if( 0 != $category->parent ) {
								$child_cat = $category;
							}
						}
						if(isset($child_cat)) {
							$child_cat_name = $child_cat->name;
							$child_cat_name = strtolower($child_cat_name);
							if ($child_cat_name == 'Storytelling Story' || $child_cat_name == 'News' || $child_cat_name == 'Editor' . "'" . 's Picks') {
								$cat_name = $categories[1]->cat_name;
							}
							if ($child_cat_name == 'Storytelling Story' || $child_cat_name == 'News' || $child_cat_name == 'Editor' . "'" . 's Picks') {
									$cat_name = $categories[2]->cat_name;
							}	
							if ($child_cat_name == 'Storytelling Story' || $child_cat_name == 'News' || $child_cat_name == 'Editor' . "'" . 's Picks') {
										$cat_name = $categories[3]->cat_name;
							}
							if ($child_cat_name == 'Storytelling Story' || $child_cat_name == 'News' || $child_cat_name == 'Editor' . "'" . 's Picks') {
								echo '<a href="' . home_url() . '/news/' . $child_cat_name . '"><div class="single-sidebar-related-story-header">more in ' . $cat_name . '</a></div>';
							} else {
								echo '<a href="' . home_url() . '/news/' . $child_cat_name . '"><div class="single-sidebar-related-story-header">more in ' . $child_cat->name . '</a></div>';
							}

							// DISPLAY SUBCATEGORY POSTS	 		
							$args = array(
								'cat' => $child_cat->term_id,
								'post__not_in' => array( get_the_ID() ),
								'posts_per_page' => '4',
								'category__not_in' => '99'
							);
							$related = new WP_Query( $args );
							if( $related->have_posts() ){
								$i = 0; while( $related->have_posts() ) {
									$related->the_post();
									if( 0 == $related->current_post ){ ?>
										<div class="single-sidebar-related-story-image single-sidebar-related-story-image-category">
											<?php the_post_thumbnail('medium'); ?>
											<div class="single-sidebar-related-story-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
												<div class="single-sidebar-related-story-blurb"><a href="<?php the_permalink(); ?>"><?php echo excerpt(27); ?></a></div>
												<div class="single-sidebar-related-story-byline"><?php the_author(); ?></div>
											</div>
										</div>
									<?php }
									if ($related->current_post > 0) { ?>
										<div class="single-sidebar-related-story-thumbnail-text single-sidebar-hide-first-child">
											<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
										</div> 
									<?php }
									if ($i > 0 && $i < 3) { 
										echo '<hr style="width: 92%;">';
									}
								$i++; }
								wp_reset_postdata();
							}
						}
			
					} 		
		 	echo '</div>';
	 	} //end if
	 } //end function

/* === POPULATE FEATURED VOICES SECTION ON SIDEBAR === */
	function featured_voices() { ?>
		<div class="single-sidebar-related-story">
			<div class="single-sidebar-related-story-header news-page-featured-voices"><a href="<?php echo home_url(); ?>/voices">featured voices</a></div>
			<?php 
				$args = array(
					'cat' => '55',
					'posts_per_page' => '5'
				);
				$featuredVoices = new WP_Query($args);
				if ($featuredVoices->have_posts() ) {
					$i = 0; while ($featuredVoices->have_posts() ) {
						$featuredVoices->the_post(); ?>
						<div class="single-sidebar-thumbnail">
							<div class="single-sidebar-related-story-thumbnail-text">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</div>	
						</div><br>
						<?php if ($i <= 3) { 
							echo '<hr style="width: 92%;">';
						} 
					$i++; }
				}
			?>	
		 </div>
	<?php }

/* === FUNCTION TO LIMIT EXCERPT/TITLE LENGTH - EDIT LENGTH AT POINT OF ENTRY === */	
	function excerpt($limit) {
	  $excerpt = explode(' ', get_the_excerpt(), $limit);
	  if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	  } else {
		$excerpt = implode(" ",$excerpt);
	  }	
	  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	  return $excerpt;
	}
	
	function title($limit) {
	  $title = explode(' ', get_the_title(), $limit);
	  if (count($title)>=$limit) {
		array_pop($title);
		$title = implode(" ",$title).'...';
	  } else {
		$title = implode(" ",$title);
	  }	
	  $title = preg_replace('`\[[^\]]*\]`','',$title);
	  return $title;
	}
	
	function content($limit) {
	  $content = explode(' ', get_the_content(), $limit);
	  if (count($content)>=$limit) {
		array_pop($content);
		$content = implode(" ",$content).'...';
	  } else {
		$content = implode(" ",$content);
	  }	
	  $content = preg_replace('`\[[^\]]*\]`','',$content);
	  return $content;
	}

/* PRESET VALUE FOR POST EDITOR SCREEN EXCERPT META BOX AND TITLE */	
	add_filter( 'default_title', 'title_default_value' );

	function title_default_value( $value ) {
		$value = 'This title is the max character length that can be used (60)';
		return $value;
	}
	
	add_filter( 'default_excerpt', 'my_editor_content' );

	function my_editor_content( $content ) {
		$content = 'This excerpt is the max character length that the can be used (120). Anything longer will be truncated with an ellipsis.';
		return $content;
	}
	
/* ============ PINTEREST STUFF ============ */
	function pinterest_data() {
		echo the_excerpt();
	}
	
/* ============ FACEBOOK OPEN GRAPH ============ */
	//Add the Open Graph in the Language Attributes
	function add_opengraph_doctype($output) {
		return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
	}
	add_filter('language_attributes', 'add_opengraph_doctype');

	//Add Open Graph Meta Info
	function insert_fb_in_head() {
		global $post;
		if (is_singular()) {
			//PINTEREST DATA
			$authors = get_the_author_meta('user_login'); 
			$authors = str_replace(' ', '', $authors);
			echo '<meta property="article:author" content="' . $authors . '"';
			//FACEBOOK USE AJR LOGO IF POST HAS NO FEATURED IMAGE
			if (!has_post_thumbnail( $post->ID )) { //the post does not have featured image, use a default image
				$default_image="http://ajr.org/wp-content/uploads/2013/12/AJR-logo-voices-black3.png"; //default image
				echo '<meta property="og:image" content="' . $default_image . '"/>';
			}
			else {
				$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
				echo '<meta property="og:image" content="' . esc_attr( $thumbnail_src[0] ) . '"/>';
			}
		}
	}
	add_action( 'wp_head', 'insert_fb_in_head', 5 );
	
/* ============ SEARCH BY AUTHOR NAME ============ */
	// Include posts from authors in the search results where either their display name or user login matches the query string
	add_filter( 'posts_search', 'db_filter_authors_search' );
	function db_filter_authors_search( $posts_search ) {

		// Don't modify the query at all if we're not on the search template
		// or if the LIKE is empty
		if ( !is_search() || empty( $posts_search ) )
			return $posts_search;

		global $wpdb;
		// Get all of the users of the blog and see if the search query matches either
		// the display name or the user login
		add_filter( 'pre_user_query', 'db_filter_user_query' );
		$search = sanitize_text_field( get_query_var( 's' ) );
		$args = array(
			'count_total' => false,
			'search' => sprintf( '*%s*', $search ),
			'search_fields' => array(
				'display_name',
				'user_login',
			),
			'fields' => 'ID',
		);
		$matching_users = get_users( $args );
		remove_filter( 'pre_user_query', 'db_filter_user_query' );
		// Don't modify the query if there aren't any matching users
		if ( empty( $matching_users ) )
			return $posts_search;
		// Take a slightly different approach than core where we want all of the posts from these authors
		$posts_search = str_replace( ')))', ")) OR ( {$wpdb->posts}.post_author IN (" . implode( ',', array_map( 'absint', $matching_users ) ) . ")))", $posts_search );
		return $posts_search;
	}
	// Modify get_users() to search display_name instead of user_nicename
	function db_filter_user_query( &$user_query ) {

		if ( is_object( $user_query ) )
			$user_query->query_where = str_replace( "user_nicename LIKE", "display_name LIKE", $user_query->query_where );
		return $user_query;
	}

/* ============ INCLUDE ONLY POSTS IN SEARCH RESULTS ============ */
	function SearchFilter($query) {
		if ($query->is_search) {
			$query->set('post_type', 'post');
		}
		return $query;
	}

	add_filter('pre_get_posts','SearchFilter');

/* ============ ADD SOCIAL MEDIA SHARES ============ */ 
 	/*Twitter*/
 	 $sharesPermalink = get_permalink($post->ID);
  	
  	function get_tweets($url) {
  		$json_string = file_get_contents('http://urls.api.twitter.com/1/urls/count.json?url=' . $url);
  		$json = json_decode($json_string, true);
  		return intval( $json['count'] );
  	}
 
  	function totalTweets($url) { 
  		return get_tweets($url); 
  	} 
  		
  	/*Facebook*/
  	function get_shares($url) {
  		$json_string = file_get_contents('http://graph.facebook.com/?id=' . $url);
  		$json = json_decode($json_string, true);
  		return intval( $json['shares'] );
  	}
  	
  	function totalShares($url) { 
  		return get_shares($url); 
  	} 

  	/*Google+*/
  	function get_pluses($url) {
  		$html = file_get_contents("https://plusone.google.com/_/+1/fastbutton?url=".urlencode($url));
  		$doc = new DOMDocument();   $doc->loadHTML($html);
    	$counter=$doc->getElementById('aggregateCount');
    	return $counter->nodeValue;
  	}
  	
  	function totalPluses($url) { 
  		return get_pluses($url); 
  	}
  	
?>