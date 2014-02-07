<?php 

// =========== Related Content Admin Post Field ============
add_action( 'admin_menu', 'create_related_content_post_meta_box' );

function create_related_content_post_meta_box() {
	add_meta_box( 'related-content-box', 'Related Content Box', 'related_content_post_meta_box', 'post', 'normal', 'default' );
}

function related_content_post_meta_box( $object, $box ) { ?>
	<p style="margin-top: -10px;">
		<br>
		<label for="related-content">Story 1</label>
		<br />
		<textarea name="related-content-story-one-link" id="related-content-story-one-link" cols="60" rows="1" tabindex="30" placeholder="Link" style="width: 97%;"><?php echo wp_specialchars( get_post_meta( $object->ID, 'Related Content', true ), 1 ); ?></textarea>
		<input type="hidden" name="my_meta_box_nonce" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
	</p>
	<p style="margin-top: -10px;">
		<textarea name="related-content-story-one-headline" id="related-content-story-one-headline" cols="60" rows="1" tabindex="30" placeholder="Headline" style="width: 97%;"><?php echo wp_specialchars( get_post_meta( $object->ID, 'Related Content', true ), 1 ); ?></textarea>
		<input type="hidden" name="my_meta_box_nonce" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
	</p>
	<p style="margin-top: -10px;">
		<textarea name="related-content-story-one-source" id="related-content-story-one-source" cols="60" rows="1" tabindex="30" placeholder="Source" style="width: 97%;"><?php echo wp_specialchars( get_post_meta( $object->ID, 'Related Content', true ), 1 ); ?></textarea>
		<input type="hidden" name="my_meta_box_nonce" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
	</p><br>
	
	<p style="margin-top: -10px;">
		<label for="related-content">Story 2</label>
		<br />
		<textarea name="related-content-story-two-link" id="related-content-story-two-link" cols="60" rows="1" tabindex="30" placeholder="Link" style="width: 97%;"><?php echo wp_specialchars( get_post_meta( $object->ID, 'Related Content', true ), 1 ); ?></textarea>
		<input type="hidden" name="my_meta_box_nonce" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
	</p>
	<p style="margin-top: -10px;">
		<textarea name="related-content-story-two-headline" id="related-content-story-two-headline" cols="60" rows="1" tabindex="30" placeholder="Headline" style="width: 97%;"><?php echo wp_specialchars( get_post_meta( $object->ID, 'Related Content', true ), 1 ); ?></textarea>
		<input type="hidden" name="my_meta_box_nonce" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
	</p>
	<p style="margin-top: -10px;">
		<textarea name="related-content-story-two-source" id="related-content-story-two-source" cols="60" rows="1" tabindex="30" placeholder="Source" style="width: 97%;"><?php echo wp_specialchars( get_post_meta( $object->ID, 'Related Content', true ), 1 ); ?></textarea>
		<input type="hidden" name="my_meta_box_nonce" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
	</p><br>
	
	<p style="margin-top: -10px;">
		<label for="related-content">Story 3</label>
		<br />
		<textarea name="related-content-story-three-link" id="related-content-story-three-link" cols="60" rows="1" tabindex="30" placeholder="Link" style="width: 97%;"><?php echo wp_specialchars( get_post_meta( $object->ID, 'Related Content', true ), 1 ); ?></textarea>
		<input type="hidden" name="my_meta_box_nonce" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
	</p>
	<p style="margin-top: -10px;">
		<textarea name="related-content-story-three-headline" id="related-content-story-three-headline" cols="60" rows="1" tabindex="30" placeholder="Headline" style="width: 97%;"><?php echo wp_specialchars( get_post_meta( $object->ID, 'Related Content', true ), 1 ); ?></textarea>
		<input type="hidden" name="my_meta_box_nonce" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
	</p>
	<p style="margin-top: -10px;">
		<textarea name="related-content-story-three-source" id="related-content-story-three-source" cols="60" rows="1" tabindex="30" placeholder="Source" style="width: 97%;"><?php echo wp_specialchars( get_post_meta( $object->ID, 'Related Content', true ), 1 ); ?></textarea>
		<input type="hidden" name="my_meta_box_nonce" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
	</p><br>
	
	<p style="margin-top: -10px;">
		<label for="related-content">Story 4</label>
		<br />
		<textarea name="related-content-story-four-link" id="related-content-story-four-link" cols="60" rows="1" tabindex="30" placeholder="Link" style="width: 97%;"><?php echo wp_specialchars( get_post_meta( $object->ID, 'Related Content', true ), 1 ); ?></textarea>
		<input type="hidden" name="my_meta_box_nonce" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
	</p>
	<p style="margin-top: -10px;">
		<textarea name="related-content-story-four-headline" id="related-content-story-four-headline" cols="60" rows="1" tabindex="30" placeholder="Headline" style="width: 97%;"><?php echo wp_specialchars( get_post_meta( $object->ID, 'Related Content', true ), 1 ); ?></textarea>
		<input type="hidden" name="my_meta_box_nonce" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
	</p>
	<p style="margin-top: -10px;">
		<textarea name="related-content-story-four-source" id="related-content-story-four-source" cols="60" rows="1" tabindex="30" placeholder="Source" style="width: 97%;"><?php echo wp_specialchars( get_post_meta( $object->ID, 'Related Content', true ), 1 ); ?></textarea>
		<input type="hidden" name="my_meta_box_nonce" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
	</p>
	
	<!-- ORIGINAL ***
<p>
		<label for="related-content">Source</label>
		<br />
		<textarea name="related-content" id="related-content" cols="60" rows="1" tabindex="30" style="width: 97%;"><?php echo wp_specialchars( get_post_meta( $object->ID, 'Related Content', true ), 1 ); ?></textarea>
		<input type="hidden" name="my_meta_box_nonce" value="<?php echo wp_create_nonce( plugin_basename( __FILE__ ) ); ?>" />
	</p>
 -->
<?php }


/* ===== SAVE METADATA ===== */
	function save_related_content_box( $post_id, $post ) {

		/* Verify the nonce before proceeding. */
		if ( !isset( $_POST['my_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['my_meta_box_nonce'], basename( __FILE__ ) ) )
			return $post_id;

		/* Get the post type object. */
		$post_type = get_post_type_object( $post->post_type );

		/* Check if the current user has permission to edit the post. */
		if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
			return $post_id;

		/* Get the posted data and sanitize it for use as an HTML class. */
		$new_meta_value = ( isset( $_POST['related-content'] ) ? sanitize_html_class( $_POST['related-content'] ) : '' );

		/* Get the meta key. */
		$meta_key = 'related_content_box';

		/* Get the meta value of the custom field key. */
		$meta_value = get_post_meta( $post_id, $meta_key, true );

		/* If a new meta value was added and there was no previous value, add it. */
		if ( $new_meta_value && '' == $meta_value )
			add_post_meta( $post_id, $meta_key, $new_meta_value, true );

		/* If the new meta value does not match the old value, update it. */
		elseif ( $new_meta_value && $new_meta_value != $meta_value )
			update_post_meta( $post_id, $meta_key, $new_meta_value );

		/* If there is no new meta value but an old value exists, delete it. */
		elseif ( '' == $new_meta_value && $meta_value )
			delete_post_meta( $post_id, $meta_key, $meta_value );
	}
	add_action( 'save_post', 'save_related_content_box', 10, 2 );

?>


<?php
// =============== WORDPRESS EXAMPLE ================ 

/**
 * Adds a box to the main column on the Post and Page edit screens.
 */
function myplugin_add_custom_box() {

    $screens = array( 'post', 'page' );

    foreach ( $screens as $screen ) {

        add_meta_box(
            'myplugin_sectionid',
            __( 'My Post Section Title', 'myplugin_textdomain' ),
            'myplugin_inner_custom_box',
            $screen
        );
    }
}
add_action( 'add_meta_boxes', 'myplugin_add_custom_box' );

/**
 * Prints the box content.
 * 
 * @param WP_Post $post The object for the current post/page.
 */
function myplugin_inner_custom_box( $post ) {

  // Add an nonce field so we can check for it later.
  wp_nonce_field( 'myplugin_inner_custom_box', 'myplugin_inner_custom_box_nonce' );

  /*
   * Use get_post_meta() to retrieve an existing value
   * from the database and use the value for the form.
   */
  $value = get_post_meta( $post->ID, '_my_meta_value_key', true );

  echo '<label for="myplugin_new_field">';
       _e( "Description for this field", 'myplugin_textdomain' );
  echo '</label> ';
  echo '<input type="text" id="myplugin_new_field" name="myplugin_new_field" value="' . esc_attr( $value ) . '" size="25" />';

}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function myplugin_save_postdata( $post_id ) {

  /*
   * We need to verify this came from the our screen and with proper authorization,
   * because save_post can be triggered at other times.
   */

  // Check if our nonce is set.
  if ( ! isset( $_POST['myplugin_inner_custom_box_nonce'] ) )
    return $post_id;

  $nonce = $_POST['myplugin_inner_custom_box_nonce'];

  // Verify that the nonce is valid.
  if ( ! wp_verify_nonce( $nonce, 'myplugin_inner_custom_box' ) )
      return $post_id;

  // If this is an autosave, our form has not been submitted, so we don't want to do anything.
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return $post_id;

  // Check the user's permissions.
  if ( 'page' == $_POST['post_type'] ) {

    if ( ! current_user_can( 'edit_page', $post_id ) )
        return $post_id;
  
  } else {

    if ( ! current_user_can( 'edit_post', $post_id ) )
        return $post_id;
  }

  /* OK, its safe for us to save the data now. */

  // Sanitize user input.
  $mydata = sanitize_text_field( $_POST['myplugin_new_field'] );

  // Update the meta field in the database.
  update_post_meta( $post_id, '_my_meta_value_key', $mydata );
}
add_action( 'save_post', 'myplugin_save_postdata' );

?>