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