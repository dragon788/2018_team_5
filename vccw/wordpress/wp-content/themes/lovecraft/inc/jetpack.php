<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.com/
 *
 * @package Lovecraft
 */

function lovecraft_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container'      => 'main',
		'render'         => 'lovecraft_infinite_scroll_render',
		'footer'         => 'page',
		'footer_widgets' => array( 'footer-1', 'footer-2', 'footer-3' ),
	) );

	add_image_size( 'lovecraft-site-logo', '300', '300' );

	add_theme_support( 'site-logo', array( 'size' => 'lovecraft-site-logo' ) );

	add_theme_support( 'jetpack-content-options', array(
		'blog-display' => 'content',
		'author-bio'   => false,
		'post-details' => array(
			'stylesheet' => 'lovecraft-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
		),
	) );
} // end function lovecraft_jetpack_setup
add_action( 'after_setup_theme', 'lovecraft_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function lovecraft_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function lovecraft_infinite_scroll_render

