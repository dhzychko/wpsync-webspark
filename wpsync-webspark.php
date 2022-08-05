<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.linkedin.com/in/volodymyr-dhzychko-865348171/
 * @since             1.0.0
 * @package           Wpsync_Webspark
 *
 * @wordpress-plugin
 * Plugin Name:       Wpsync Webspark
 * Plugin URI:        https://gitlab.com/dhzychko_test/wpsync-webspark/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Volodymyr Dhzychko
 * Author URI:        https://www.linkedin.com/in/volodymyr-dhzychko-865348171/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpsync-webspark
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WPSYNC_WEBSPARK_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wpsync-webspark-activator.php
 */
function activate_wpsync_webspark() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpsync-webspark-activator.php';
	Wpsync_Webspark_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wpsync-webspark-deactivator.php
 */
function deactivate_wpsync_webspark() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpsync-webspark-deactivator.php';
	Wpsync_Webspark_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wpsync_webspark' );
register_deactivation_hook( __FILE__, 'deactivate_wpsync_webspark' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wpsync-webspark.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wpsync_webspark() {

	$plugin = new Wpsync_Webspark();
	$plugin->run();

}
run_wpsync_webspark();
