<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.linkedin.com/in/volodymyr-dhzychko-865348171/
 * @since      1.0.0
 *
 * @package    Wpsync_Webspark
 * @subpackage Wpsync_Webspark/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wpsync_Webspark
 * @subpackage Wpsync_Webspark/includes
 * @author     Volodymyr Dhzychko <dhzychko@gmail.com>
 */
class Wpsync_Webspark_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wpsync-webspark',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
