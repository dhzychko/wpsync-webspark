<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.linkedin.com/in/volodymyr-dhzychko-865348171/
 * @since      1.0.0
 *
 * @package    Wpsync_Webspark
 * @subpackage Wpsync_Webspark/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wpsync_Webspark
 * @subpackage Wpsync_Webspark/admin
 * @author     Volodymyr Dhzychko <dhzychko@gmail.com>
 */
class Wpsync_Webspark_Admin {

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
		$this->version = $version;

		// settings pages
		add_action('admin_menu',  array( $this, 'wpswspark_register_settings_page' ) );

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wpsync_Webspark_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wpsync_Webspark_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wpsync-webspark-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wpsync_Webspark_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wpsync_Webspark_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wpsync-webspark-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Settings page
	 * 
	 * @since    1.0.0
	 */
	public function wpswspark_register_settings_page() {

		add_submenu_page( 
			'woocommerce', 
			__('db-api-synk', 'wpsync-webspark'),
			__('DB API Synk', 'wpsync-webspark'), 
			'manage_woocommerce', 
			'db-api-synk-settings-page', 
			array( $this, 'wpswspark_show_settings_page' )
		);
	}

	/**
	 * DFF custom events settings page
	 * 
	 * @since    1.0.0
	 */
	public function wpswspark_show_settings_page_html() {

		?>
		<h1>Settings</h1>
		<?php
	}

}
