<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.deviodigital.com
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
 * @author     Robert DeVore <contact@deviodigital.com>
 */
class Chapters_For_Authors_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
		// Disabled until needed - General plugin admin CSS.
		//wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/chapters-for-authors-admin.css', [], $this->version, 'all' );
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		// Disabled until needed - General plugin admin JS.
		//wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/chapters-for-authors-admin.js', [ 'jquery' ], $this->version, false );
	}

}
