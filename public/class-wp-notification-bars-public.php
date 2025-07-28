<?php
/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://mythemeshop.com
 * @since      1.0
 *
 * @package    MTSNBF
 * @subpackage MTSNBF/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    MTSNBF
 * @subpackage MTSNBF/public
 * @author     MyThemeShop
 */
 // If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
if ( ! class_exists( 'MTSNBF_Public' ) ) {

	class MTSNBF_Public {

		/**
		 * The ID of this plugin.
		 *
		 * @since    1.0
		 * @access   private
		 * @var      string    $plugin_name    The ID of this plugin.
		 */
		private $plugin_name;

		/**
		 * The version of this plugin.
		 *
		 * @since    1.0
		 * @access   private
		 * @var      string    $version    The current version of this plugin.
		 */
		private $version;

		/**
		 * Initialize the class and set its properties.
		 *
		 * @since    1.0
		 * @param    string $plugin_name    The name of the plugin.
		 * @param    string $version        The version of this plugin.
		 */
		public function __construct( $plugin_name, $version ) {

			$this->plugin_name = $plugin_name;
			$this->version     = $version;
		}

		/**
		 * Check if the notification bar should be displayed
		 *
		 * @return bool
		 */
		private function should_display_notification_bar() {
			$options = get_option('wp_notification_bars_settings');
			if (!isset($options['enabled']) || !$options['enabled']) {
				return false;
			}

			// All conditions have been removed
			return true;
		}
	}
}
