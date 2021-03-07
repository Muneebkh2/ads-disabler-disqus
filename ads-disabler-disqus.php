<?php
/*
 * Plugin Name: Disqus Ads Disabler
 * Version: 1.0.2
 * Plugin URI: https://github.com/Muneebkh2/ads-disabler-disqus.git
 * Description: Remove annoying ads from Disqus Comments.
 * Author: Muneeb
 * Author URI: https://github.com/muneebkh2
 * Author Email: muneebkh24@gmail.com
 * Requires at least: 4.0
 * Tested up to: 5.1
 *
 * @package WordPress
 * @author Muneeb
 * @since 1.0.2
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-ads-disabler-disqus.php' );

/**
 * Returns the main instance of Disable_Disqus_Ads to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Disable_Disqus_Ads
 */
function Disable_Disqus_Ads () {
	$instance = Disable_Disqus_Ads::instance( __FILE__, '1.0.0' );
	return $instance;
}

Disable_Disqus_Ads();