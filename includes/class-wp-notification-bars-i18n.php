<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://mythemeshop.com
 * @since      1.0
 *
 * @package    MTSNBF
 * @subpackage MTSNBF/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0
 * @package    MTSNBF
 * @subpackage MTSNBF/includes
 * @author     MyThemeShop
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
class MTSNBF_i18n {

	/**
	 * The domain specified for this plugin.
	 *
	 * @since    1.0
	 * @access   private
	 * @var      string    $domain    The domain identifier for this plugin.
	 */
	private $domain;

	/**
	 * Set the domain equal to that of the specified domain.
	 *
	 * @since    1.0
	 * @param    string $domain    The domain that represents the locale of this plugin.
	 */
	public function set_domain( $domain ) {
		$this->domain = $domain;
	}

}
