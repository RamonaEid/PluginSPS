<?php
/**
 * Plugin Name: SPS Plugin by Ramona Eid
 * Plugin URI: http://www.checklistme.com/Bio.html
 * Description: Do NOT deactivate or delete.  Necessary plugin for SPS's Website functionality.
 * Version: 0.0.09
 * Author: Ramona Eid
 * Author URI: http://www.checklistme.com/Bio.html
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Domain Path: /languages
 * Text Domain: sustainable
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
define( 'SPS_VERSION', '0.0.09' );

add_action( 'init', 'sps_init' );

function sps_init() {
	include( plugin_dir_path( __FILE__ ) . 'shortcodes/shortcodes.php' );

	/*wp_register_script($id, $path, $dependencies, $version, $in_footer);*/
	wp_register_script( 'sps-full', plugins_url( 'js/sps_full.js', __FILE__ ), array( 'jquery' ), SPS_VERSION, true );

	add_action( 'wp_enqueue_scripts', 'sps_enqueue_scripts' );

//	add_shortcode( 'sps-technical-columns', 'create_sps_technical_columns' );

}

function sps_enqueue_scripts() {
	wp_enqueue_script( 'sps-full', plugins_url( 'js/sps_full.js', __FILE__ ), array( 'jquery' ), SPS_VERSION, true );
	// See: https://codex.wordpress.org/AJAX_in_Plugins
	// in JavaScript, object properties are accessed as ajax_object.ajax_url, ajax_object.we_value
//	wp_localize_script( 'sps-full', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ), 'we_value' => 1234 ) );
    // TODO: add named array values like:  gallery4249 => do_shortcode([foogallery id="4249c"])
//	wp_localize_script( 'sps-full', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ), gallery4249 => do_shortcode('[foogallery id="4249"]') ) );
    wp_localize_script( 'sps-full', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}

include( plugin_dir_path( __FILE__ ) . 'widgets/ramona-latest-news-and-articles.php' );
