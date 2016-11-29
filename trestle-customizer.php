<?php
/**
 * Plugin Name: Trestle Customizer
 * Description: Custom functionality for Trestle Customizer.
 * Version: 1.0.0
 * Author: MIGHTYminnow Web Studio
 * Author URI: http://mightyminnow.com
 */

define( 'TRC_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'TRC_PLUGIN_INCLUDES_PATH', TRC_PLUGIN_PATH . 'includes/' );
define( 'TRC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'TRC_PLUGIN_VERSION', '1.0.0' );

// Include our required functions.
require_once TRC_PLUGIN_PATH . 'functions.php';
require_once TRC_PLUGIN_PATH . 'admin/customizer/customizer.php';

//Activation Hook - Confirm site is using Trestle.
register_activation_hook( __FILE__, 'activation_hook' );
function activation_hook() {

	$theme = wp_get_theme();
	if ( 'Trestle' != $theme->name ) {
		deactivate_plugins( plugin_basename( __FILE__ ) );
		wp_die( 'Sorry, you can&rsquo;t activate unless you have activated Trestle' );
	}
}

//Disables plugin if another theme is activated.
add_action('after_switch_theme','trc_disable_plugins');
function trc_disable_plugins() {

	$theme = wp_get_theme();;
	if ('Trestle' !== $theme->name ) {
		deactivate_plugins( plugin_basename( __FILE__ ) );
	}
}

