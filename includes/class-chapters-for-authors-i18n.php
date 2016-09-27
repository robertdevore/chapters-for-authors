<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.robertdevore.com
 * @since      1.0.0
 *
 * @package    Chapters_For_Authors
 * @subpackage Chapters_For_Authors/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Chapters_For_Authors
 * @subpackage Chapters_For_Authors/includes
 * @author     Robert DeVore <deviodigital@gmail.com>
 */
class Chapters_For_Authors_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'chapters-for-authors',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
