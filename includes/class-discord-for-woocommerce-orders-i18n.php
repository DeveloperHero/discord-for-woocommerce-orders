<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://developerhero.net
 * @since      1.0.0
 *
 * @package    Discord_For_Woocommerce_Orders
 * @subpackage Discord_For_Woocommerce_Orders/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Discord_For_Woocommerce_Orders
 * @subpackage Discord_For_Woocommerce_Orders/includes
 * @author     DeveloperHero <ask@developerhero.net>
 */
class Discord_For_Woocommerce_Orders_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'discord-for-woocommerce-orders',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
