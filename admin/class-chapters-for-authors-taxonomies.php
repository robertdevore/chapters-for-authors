<?php
/**
 * The file that defines the taxonomies used by the various custom post types
 *
 * @link       https://www.deviodigital.com
 * @since      1.0.0
 *
 * @package    Chapters_For_Authors
 * @subpackage Chapters_For_Authors/admin
 */

/**
 * Books taxonomy
 *
 * Adds the Books taxonomy to all Chapters custom post type
 *
 * @since    1.0.0
 */
function chapters_books() {

	$labels = array(
		'name'              => _x( 'Books', 'taxonomy general name', 'chapters-for-authors' ),
		'singular_name'     => _x( 'Book', 'taxonomy singular name', 'chapters-for-authors' ),
		'search_items'      => __( 'Search Books', 'chapters-for-authors' ),
		'all_items'         => __( 'All Books', 'chapters-for-authors' ),
		'parent_item'       => __( 'Parent Book', 'chapters-for-authors' ),
		'parent_item_colon' => __( 'Parent Book:', 'chapters-for-authors' ),
		'edit_item'         => __( 'Edit Book', 'chapters-for-authors' ), 
		'update_item'       => __( 'Update Book', 'chapters-for-authors' ),
		'add_new_item'      => __( 'Add New Book', 'chapters-for-authors' ),
		'new_item_name'     => __( 'New Book Name', 'chapters-for-authors' ),
		'not_found'         => __( 'No books found', 'chapters-for-authors' ),
		'menu_name'         => __( 'Books', 'chapters-for-authors' ),
	); 	

	register_taxonomy( 'books', 'chapters_for_authors', array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => false,
		'query_var'         => true,
		'rewrite'           => array(
			'slug'       => 'book',
			'with_front' => false
		),
	) );

}
add_action( 'init', 'chapters_books', 0 );

/**
 * Characters Taxonomy
 *
 * Adds the Characters taxonomy to the Chapters custom post type
 *
 * @since    1.0.0
 */

add_action( 'init', 'chapters_characters', 0 );

function chapters_characters() {

  $labels = array(
	'name' => _x( 'Characters', 'general name' ),
	'singular_name' => _x( 'Character', 'singular name' ),
	'search_items' =>  __( 'Search Characters' ),
	'popular_items' => __( 'Popular Characters' ),
	'all_items' => __( 'All Characters' ),
	'parent_item' => null,
	'parent_item_colon' => null,
	'edit_item' => __( 'Edit Character' ), 
	'update_item' => __( 'Update Character' ),
	'add_new_item' => __( 'Add New Character' ),
	'new_item_name' => __( 'New Character Name' ),
	'separate_items_with_commas' => __( 'Separate characterss with commas' ),
	'add_or_remove_items' => __( 'Add or remove characterss' ),
	'choose_from_most_used' => __( 'Choose from the most used characterss' ),
	'not_found' => 'No characterss found',
	'menu_name' => __( 'Characters' ),
  ); 

  register_taxonomy('characters',array('chapters_for_authors'),array(
	'hierarchical' => false,
	'labels' => $labels,
	'show_ui' => true,
	'show_in_rest' => true,
	'show_admin_column' => true,
	'show_in_nav_menus' => false,
	'update_count_callback' => '_update_post_term_count',
	'query_var' => true,
	'rewrite' => array( 'slug' => 'character' ),
  ));
}
