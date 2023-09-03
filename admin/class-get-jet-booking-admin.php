<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://gabriela-giermek.dev
 * @since      1.0.0
 *
 * @package    Get_Jet_Booking
 * @subpackage Get_Jet_Booking/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Get_Jet_Booking
 * @subpackage Get_Jet_Booking/admin
 * @author     Gabriela Giermek <gabriela@i-creativedesign.pl>
 */
class Get_Jet_Booking_Admin {

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
		 * defined in Get_Jet_Booking_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Get_Jet_Booking_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/get-jet-booking-admin.css', array(), $this->version, 'all' );

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
		 * defined in Get_Jet_Booking_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Get_Jet_Booking_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/get-jet-booking-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Add admin menu
	 *
	 * @since    1.0.0
	 */
	public function admin_menu() {

		// Top-Level Menu
		add_menu_page(
			'GetJet Booking',
			'GetJet Booking',
			'manage_options',
			'get-jet-booking-forms',
			array( $this, 'admin_booking_forms_page' ),
			'dashicons-airplane',
			30
		);

		// Sub-Menus
		add_submenu_page(
			'get-jet-booking-forms',
			'Booking forms',
			'Booking forms',
			'manage_options',
			'get-jet-booking-forms',
			array( $this, 'admin_booking_forms_page' ),
		);

		add_submenu_page(
			'get-jet-booking-forms',
			'Reservations',
			'Reservations',
			'manage_options',
			'get-jet-booking-reservations',
			array( $this, 'admin_reservations_page' ),
		);

		add_submenu_page(
			'get-jet-booking-forms',
			'Settings',
			'Settings',
			'manage_options',
			'get-jet-booking-settings',
			array( $this, 'admin_settings_page' ),
		);

		add_submenu_page(
			'get-jet-booking-forms',
			'Reports',
			'Reports',
			'manage_options',
			'get-jet-booking-reports',
			array( $this, 'admin_reports_page' ),
		);

		add_submenu_page(
			'get-jet-booking-forms',
			'Informations',
			'Info',
			'manage_options',
			'get-jet-booking-info',
			array( $this, 'admin_info_page' ),
		);

	}

	/**
	 * Displays a page with booking forms
	 *
	 * @since    1.0.0
	 */
	public function admin_booking_forms_page() {

		include 'views/get-jet-booking-forms-page.php';

	}

	/**
	 * Displays a page with booking forms
	 *
	 * @since    1.0.0
	 */
	public function admin_reservations_page() {

		include 'views/get-jet-reservations-page.php';

	}

	/**
	 * Displays a page with settings
	 *
	 * @since    1.0.0
	 */
	public function admin_settings_page() {

		include 'views/get-jet-settings-page.php';

	}

	/**
	 * Displays a page with reports
	 *
	 * @since    1.0.0
	 */
	public function admin_reports_page() {

		include 'views/get-jet-reports-page.php';

	}

	/**
	 * Displays a page with informations
	 *
	 * @since    1.0.0
	 */
	public function admin_info_page() {

		include 'views/get-jet-info-page.php';

	}

}
