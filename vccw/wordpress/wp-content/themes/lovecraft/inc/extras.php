<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Lovecraft
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function lovecraft_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( is_singular() && has_post_thumbnail() ) {
        $classes[] = 'has-featured-image';
    }

    if ( ( is_singular() && '' == get_header_image() && ! has_post_thumbnail() ) || ( ! is_singular() && '' == get_header_image() ) ) {
    	$classes[] = 'no-header-image';
    }

	return $classes;
}
add_filter( 'body_class', 'lovecraft_body_classes' );

if ( version_compare( $GLOBALS['wp_version'], '4.1', '<' ) ) :
	/**
	 * Filters wp_title to print a neat <title> tag based on what is being viewed.
	 *
	 * @param string $title Default title text for current view.
	 * @param string $sep Optional separator.
	 * @return string The filtered title.
	 */
	function lovecraft_wp_title( $title, $sep ) {
		if ( is_feed() ) {
			return $title;
		}

		global $page, $paged;

		// Add the blog name.
		$title .= get_bloginfo( 'name', 'display' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title .= " $sep $site_description";
		}

		// Add a page number if necessary.
		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
			$title .= " $sep " . sprintf( esc_html__( 'Page %s', 'lovecraft' ), max( $paged, $page ) );
		}

		return $title;
	}
	add_filter( 'wp_title', 'lovecraft_wp_title', 10, 2 );

	/**
	 * Title shim for sites older than WordPress 4.1.
	 *
	 * @link https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
	 * @todo Remove this function when WordPress 4.3 is released.
	 */
	function lovecraft_render_title() {
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
	}
	add_action( 'wp_head', 'lovecraft_render_title' );
endif;

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and a 'Continue reading' link.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
if ( ! function_exists( 'lovecraft_excerpt_more' ) ) :
    function lovecraft_excerpt_more( $more ) {
        $link = sprintf( '<p><a href="%1$s" class="more-link">%2$s</a></p>',
            esc_url( get_permalink( get_the_ID() ) ),
            /* translators: %s: Name of current post. */
            sprintf( esc_html__( 'Continue reading %s', 'lovecraft' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
            );
        return ' &hellip; ' . $link;
    }
    add_filter( 'excerpt_more', 'lovecraft_excerpt_more' );
endif;
