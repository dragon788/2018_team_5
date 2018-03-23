<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Pena Lite
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function pena_lite_jetpack_setup() {
	add_theme_support( 'jetpack-responsive-videos' );

} // end function pena_lite_jetpack_setup
add_action( 'after_setup_theme', 'pena_lite_jetpack_setup' );