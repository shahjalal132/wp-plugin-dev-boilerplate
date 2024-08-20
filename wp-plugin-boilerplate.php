<?php

/**
 * 
 * The plugin bootstrap file
 * 
 * @link              https://github.com/mtmsujan
 * @since             1.0.0
 * @package           wp-plugin-boilerplate
 * 
 * Plugin Name: WP Plugin Boilerplate
 * Plugin URI:  #
 * Author:      MTM Sujon
 * Author URI:  https://github.com/mtmsujan
 * Description: WordPress Plugin Boilerplate.
 * Version:     1.0.0
 * License:     GPL-2.0+
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: wp-plugin-boilerplate
 */

defined( "ABSPATH" ) || exit( "Direct Access Not Allowed" );

// Define plugin path
if ( !defined( 'PLUGIN_BASE_PATH' ) ) {
    define( 'PLUGIN_BASE_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) ) );
}

// Define plugin url
if ( !defined( 'PLUGIN_BASE_URL' ) ) {
    define( 'PLUGIN_BASE_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ) );
}

// Define admin assets dir path
if ( !defined( 'PLUGIN_ADMIN_ASSETS_DIR_PATH' ) ) {
    define( 'PLUGIN_ADMIN_ASSETS_DIR_PATH', untrailingslashit( plugin_dir_path( __FILE__ ) . '/assets/admin' ) );
}

// Define plugin public assets url
if ( !defined( 'PLUGIN_PUBLIC_ASSETS_URL' ) ) {
    define( 'PLUGIN_PUBLIC_ASSETS_URL', untrailingslashit( plugin_dir_url( __FILE__ ) . '/assets/public' ) );
}

// Require files
require_once PLUGIN_BASE_PATH . '/loader.php';
require_once PLUGIN_BASE_PATH . '/inc/helpers/autoloader.php';

/**
 * The code that runs during plugin activation.
 * This action is documented in inc/classes/class-plugin-activator.php file
 */
function wpb_plugin_activator() {
    require_once PLUGIN_BASE_PATH . '/inc/classes/class-plugin-activator.php';
    Plugin_Activator::activate();
}

// Register activation hook
register_activation_hook( __FILE__, 'wpb_plugin_activator' );


function get_plugin_instance() {
    \BOILERPLATE\Inc\Autoloader::get_instance();
}

get_plugin_instance();