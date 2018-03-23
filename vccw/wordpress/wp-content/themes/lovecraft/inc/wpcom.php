<?php
/**
 * WordPress.com-specific functions and definitions
 * This file is centrally included from `wp-content/mu-plugins/wpcom-theme-compat.php`.
 *
 * @package Lovecraft
 */

 /**
 * Adds support for WP.com print styles and responsive videos
 */
function lovecraft_theme_support() {

        global $themecolors;

	/**
	 * Set a default theme color array for WP.com.
	 *
	 * @global array $themecolors
	 */
	if ( ! isset( $themecolors ) ) :
		$themecolors = array(
			'bg'     => 'ffffff',
			'border' => 'dddddd',
			'text'   => '111111',
			'link'   => 'ca2017',
			'url'    => 'ca2017',
		);
	endif;

	add_theme_support( 'print-style' );
}
add_action( 'after_setup_theme', 'lovecraft_theme_support' );

//WordPress.com specific styles
function lovecraft_wpcom_styles() {
	wp_enqueue_style( 'lovecraft-wpcom', get_template_directory_uri() . '/inc/style-wpcom.css', '071315' );
}
add_action( 'wp_enqueue_scripts', 'lovecraft_wpcom_styles' );