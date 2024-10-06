<?php

/**
 * The plugin bootstrap file
 *
 * @link              https://www.deviodigital.com
 * @since             1.0.0
 * @package           Chapters_For_Authors
 *
 * @wordpress-plugin
 * Plugin Name:       Chapters for Authors
 * Plugin URI:        https://www.robertdevore.com/chapters-for-authors-wordpress-plugin
 * Description:       Write your next book from the comfort of your WordPress dashboard.
 * Version:           1.1.1
 * Author:            Devio Digital
 * Author URI:        https://www.deviodigital.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       chapters-for-authors
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Current plugin version.
 */
define( 'CHAPTERS_FOR_AUTHORS_VERSION', '1.1.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-chapters-for-authors-activator.php
 */
function activate_chapters_for_authors() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-chapters-for-authors-activator.php';
	Chapters_For_Authors_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-chapters-for-authors-deactivator.php
 */
function deactivate_chapters_for_authors() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-chapters-for-authors-deactivator.php';
	Chapters_For_Authors_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_chapters_for_authors' );
register_deactivation_hook( __FILE__, 'deactivate_chapters_for_authors' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-chapters-for-authors.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_chapters_for_authors() {

	$plugin = new Chapters_For_Authors();
	$plugin->run();

}
run_chapters_for_authors();

/**
 * Display a custom admin notice to inform users about plugin update issues.
 *
 * This function displays a dismissible admin notice warning users about 
 * restrictions imposed by WordPress leadership that may impact automatic 
 * plugin updates. It provides a link to a resource where users can learn how 
 * to continue receiving updates.
 *
 * @since  1.1.1
 * @return void
 */
function cfa_custom_update_notice() {
    // Translating the notice text using WordPress translation functions.
    $notice_text = sprintf(
        esc_html__( 'Important Notice: Due to recent changes initiated by WordPress leadership, access to the plugin repository is being restricted for certain hosting providers and developers. This may impact automatic updates for your plugins. To ensure you continue receiving updates and to learn about the next steps, please visit %s.', 'dispensary-age-verification' ),
        '<a href="https://robertdevore.com/wordpress-plugin-updates/" target="_blank">this page</a>'
    );

    // Display the admin notice.
    echo '<div class="notice notice-warning is-dismissible">
        <p>' . $notice_text . '</p>
    </div>';
}
add_action( 'admin_notices', 'cfa_custom_update_notice' );
