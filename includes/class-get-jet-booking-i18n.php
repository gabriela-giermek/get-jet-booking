<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://gabriela-giermek.dev
 * @since      1.0.0
 *
 * @package    Get_Jet_Booking
 * @subpackage Get_Jet_Booking/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Get_Jet_Booking
 * @subpackage Get_Jet_Booking/includes
 * @author     Gabriela Giermek <gabriela@i-creativedesign.pl>
 */
class Get_Jet_Booking_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'get-jet-booking',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
