<?php
/**
 * The file that defines the metaboxes used by the plugin
 *
 * @link       https://www.deviodigital.com
 * @since      1.0.0
 *
 * @package    Chapters_For_Authors
 * @subpackage Chapters_For_Authors/admin/post-types
 */

/**
 * Chapter Quote
 *
 * Adds a metabox for authors to add a custom quote for the beginning of their chapter
 *
 * @since    1.0.0
 */
function add_quotes_metaboxes() {
	add_meta_box(
		'chapters_quotes',
		__( 'Introduction', 'chapters-for-authors' ),
		'chapters_quotes',
		'chapters_for_authors',
		'side',
		'default'
	);
}

add_action( 'add_meta_boxes', 'add_quotes_metaboxes' );

/**
 * Building the metabox
 */
function chapters_quotes() {
	global $post;

	/** Noncename needed to verify where the data originated */
	echo '<input type="hidden" name="quotesmeta_noncename" id="quotesmeta_noncename" value="' .
	wp_create_nonce( plugin_basename( __FILE__ ) ) . '" />';

	/** Get the quotes data if its already been entered */
	$quote  = get_post_meta( $post->ID, '_thequote', true );
	$author = get_post_meta( $post->ID, '_theauthor', true );

	/** Echo out the fields */
	echo '<div class="cfa-quote">';
	echo '<textarea name="_thequote" class="widefat">' . $quote  . '</textarea>';
	echo '<p>' . __( 'Quote', 'chapters-for-authors' ) . ':</p>';
	echo '</div>';
	echo '<div class="cfa-quote">';
	echo '<input type="text" name="_theauthor" value="' . $author  . '" class="widefat" />';
	echo '<p>' . __( 'Author', 'chapters-for-authors' ) . ':</p>';
	echo '</div>';

}

/** Save the Metabox Data */

function chapters_save_quotes_meta( $post_id, $post ) {

	/**
	 * Verify this came from the our screen and with proper authorization,
	 * because save_post can be triggered at other times
	 */
	if ( ! wp_verify_nonce( $_POST['quotesmeta_noncename'], plugin_basename( __FILE__ ) ) ) {
		return $post->ID;
	}

	/** Is the user allowed to edit the post or page? */
	if ( ! current_user_can( 'edit_post', $post->ID ) ) {
		return $post->ID;
	}

	/**
	 * OK, we're authenticated: we need to find and save the data
	 * We'll put it into an array to make it easier to loop though.
	 */

	$quotes_meta['_thequote']	= $_POST['_thequote'];
	$quotes_meta['_theauthor']	= $_POST['_theauthor'];

	/** Add values of $quotes_meta as custom fields */

	foreach ( $quotes_meta as $key => $value ) { /** Cycle through the $quotes_meta array! */
		if ( $post->post_type == 'revision' ) { /** Don't store custom data twice */
			return;
		}
		$value = implode( ',', (array) $value ); // If $value is an array, make it a CSV (unlikely)
		if ( get_post_meta( $post->ID, $key, false ) ) { // If the custom field already has a value
			update_post_meta( $post->ID, $key, $value );
		} else { // If the custom field doesn't have a value
			add_post_meta( $post->ID, $key, $value );
		}
		if ( ! $value ) { /** Delete if blank */
			delete_post_meta( $post->ID, $key );
		}
	}

}

add_action( 'save_post', 'chapters_save_quotes_meta', 1, 2 ); // save the custom fields
