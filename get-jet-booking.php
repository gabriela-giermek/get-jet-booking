<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://gabriela-giermek.dev
 * @since             1.0.0
 * @package           Get_Jet_Booking
 *
 * @wordpress-plugin
 * Plugin Name:       GetJet Booking
 * Description:       WordPress Plugin - Private jet booking
 * Version:           1.0.0
 * Author:            Gabriela Giermek
 * Author URI:        https://gabriela-giermek.dev
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       get-jet-booking
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
define( 'GET_JET_BOOKING_VERSION', '1.0.0' );

/**
 * Plugin base dir path.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * used to locate plugin resources primarily code files
 */
define( 'GET_JET_BOOKING_BASE_DIR', plugin_dir_path( __FILE__ ) );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-get-jet-booking-activator.php
 */
function activate_get_jet_booking() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-get-jet-booking-activator.php';
	Get_Jet_Booking_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-get-jet-booking-deactivator.php
 */
function deactivate_get_jet_booking() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-get-jet-booking-deactivator.php';
	Get_Jet_Booking_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_get_jet_booking' );
register_deactivation_hook( __FILE__, 'deactivate_get_jet_booking' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-get-jet-booking.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_get_jet_booking() {

	$plugin = new Get_Jet_Booking();
	$plugin->run();

}
run_get_jet_booking();
