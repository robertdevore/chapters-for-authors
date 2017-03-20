<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://www.robertdevore.com
 * @since      1.0.0
 *
 * @package    Chapters_For_Authors
 * @subpackage Chapters_For_Authors/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Chapters_For_Authors
 * @subpackage Chapters_For_Authors/admin
 * @author     Robert DeVore <deviodigital@gmail.com>
 */
if ( ! function_exists('chapters_for_authors') ) {

// Register Custom Post Type
function chapters_for_authors() {

	$labels = array(
		'name'                  => _x( 'Chapters', 'Post Type General Name', 'chapters-for-authors' ),
		'singular_name'         => _x( 'Chapter', 'Post Type Singular Name', 'chapters-for-authors' ),
		'menu_name'             => __( 'Chapters', 'chapters-for-authors' ),
		'name_admin_bar'        => __( 'Chapters', 'chapters-for-authors' ),
		'archives'              => __( 'Chapters Archives', 'chapters-for-authors' ),
		'parent_item_colon'     => __( 'Parent Chapter:', 'chapters-for-authors' ),
		'all_items'             => __( 'All Chapters', 'chapters-for-authors' ),
		'add_new_item'          => __( 'Add New Chapter', 'chapters-for-authors' ),
		'add_new'               => __( 'Add Chapters', 'chapters-for-authors' ),
		'new_item'              => __( 'New Chapter', 'chapters-for-authors' ),
		'edit_item'             => __( 'Edit Chapter', 'chapters-for-authors' ),
		'update_item'           => __( 'Update Chapter', 'chapters-for-authors' ),
		'view_item'             => __( 'View Chapter', 'chapters-for-authors' ),
		'search_items'          => __( 'Search Chapters', 'chapters-for-authors' ),
		'not_found'             => __( 'Not found', 'chapters-for-authors' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'chapters-for-authors' ),
		'featured_image'        => __( 'Featured Image', 'chapters-for-authors' ),
		'set_featured_image'    => __( 'Set featured image', 'chapters-for-authors' ),
		'remove_featured_image' => __( 'Remove featured image', 'chapters-for-authors' ),
		'use_featured_image'    => __( 'Use as featured image', 'chapters-for-authors' ),
		'insert_into_item'      => __( 'Insert into chapter', 'chapters-for-authors' ),
		'uploaded_to_this_item' => __( 'Uploaded to this chapter', 'chapters-for-authors' ),
		'items_list'            => __( 'Chapters list', 'chapters-for-authors' ),
		'items_list_navigation' => __( 'Chapters list navigation', 'chapters-for-authors' ),
		'filter_items_list'     => __( 'Filter items list', 'chapters-for-authors' ),
	);
	$rewrite = array(
		'slug'                => 'chapter',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);
	$args = array(
		'label'                 => __( 'Chapter', 'chapters-for-authors' ),
		'description'           => __( 'Write your book chapter by chapter', 'chapters-for-authors' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-book',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'		=> $rewrite,
		'capability_type'       => 'post'
	);
	register_post_type( 'chapters_for_authors', $args );

}
add_action( 'init', 'chapters_for_authors', 0 );

}
