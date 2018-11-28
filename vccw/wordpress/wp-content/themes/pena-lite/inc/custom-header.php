<?php
/**
 *
 * @package Pena Lite
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses pena_lite_header_style()
 * @uses pena_lite_admin_header_style()
 * @uses pena_lite_admin_header_image()
 */
function pena_lite_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'pena_lite_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'ffffff',
		'width'                  => 2600,
		'height'                 => 300,
		'flex-height'            => true,
		'wp-head-callback'       => 'pena_lite_header_style',
		'admin-head-callback'    => 'pena_lite_admin_header_style',
		'admin-preview-callback' => 'pena_lite_admin_header_image',
	) ) );
}
add_action( 'after_setup_theme', 'pena_lite_custom_header_setup' );

if ( ! function_exists( 'pena_lite_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see pena_lite_custom_header_setup().
 */
function pena_lite_header_style() {
	$header_text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail.
	// get_header_textcolor() options: add_theme_support( 'custom-header' ) is default, hide text (returns 'blank') or any hex value.
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css">
	<?php
		// Has the text been hidden?
		if ( 'blank' == $header_text_color ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.site-title a,
		.site-description,
		.site-title a:visited, 
		.site-title a:focus, 
		.site-title a:active,
		.site-title {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // pena_lite_header_style

if ( ! function_exists( 'pena_lite_admin_header_image' ) ) :
/**
 * Custom header image markup displayed on the Appearance > Header admin panel.
 *
 * @see pena_lite_custom_header_setup().
 */
function pena_lite_admin_header_image() {
?>
	<div id="headimg">
		<h1 class="displaying-header-text">
			<a id="name" style="<?php echo esc_attr( 'color: #' . get_header_textcolor() ); ?>" onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
		</h1>
		<div class="displaying-header-text" id="desc" style="<?php echo esc_attr( 'color: #' . get_header_textcolor() ); ?>"><?php bloginfo( 'description' ); ?></div>
		<?php if ( get_header_image() ) : ?>
		<img src="<?php header_image(); ?>" alt="">
		<?php endif; ?>
	</div>
<?php
}
endif; // pena_lite_admin_header_image