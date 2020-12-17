<?php
/*
Plugin Name: littletweak
Plugin URI: https://webbouwer.org
Description: fix common wordpress irritations
Version:     0.5.2
Author:      Webbouwer
Author URI:  http://webbouwer.org
Text Domain: littletweak
License:     © Webbouwer All rights reserved
License URI: https://webbouwer.org
Github Plugin URI: https://github.com/webbouwer/littletweak
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/// 1. Remove jetpack upsell messages https://mattreport.com/disable-jetpack-upsell-ads/
add_filter( 'jetpack_just_in_time_msgs', '__return_false' );
?>
