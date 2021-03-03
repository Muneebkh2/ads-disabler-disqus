<?php
/*
 * Plugin Name: Remove Disqus Ads
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
require_once( 'includes/class-remove-disqus-ads.php' );

/**
 * Returns the main instance of Remove_Disqus_Ads to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Remove_Disqus_Ads
 */
function Remove_Disqus_Ads () {
	$instance = Remove_Disqus_Ads::instance( __FILE__, '1.0.0' );
	return $instance;
}

Remove_Disqus_Ads();