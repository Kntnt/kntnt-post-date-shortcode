<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Post Date Shortcode
 * Plugin URI:        https://github.com/Kntnt/kntnt-post-date-shortcode.php
 * Description:       Provides shortcode that output the publishing date of the current post.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

defined( 'ABSPATH' ) || die;

add_shortcode( 'post_date', function() {
	return get_the_date();
} );
