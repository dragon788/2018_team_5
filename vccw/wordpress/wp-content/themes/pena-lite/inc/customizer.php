<?php
/**
 * Pena Theme Customizer
 *
 * @package Pena Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function pena_lite_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	/* Front Page: Featured Pages */
	$wp_customize->add_section( 'pena_lite_theme_options', array(
		'title'    => esc_html__( 'Front Page', 'pena-lite' ),
		'priority' => 31,
	) );
	$wp_customize->add_setting( 'pena_lite_featured_page_one', array(
		'default'           => '',
		'sanitize_callback' => 'pena_lite_sanitize_dropdown_pages',
	) );
	$wp_customize->add_control( 'pena_lite_featured_page_one', array(
		'label'             => esc_html__( 'First Content Block', 'pena-lite' ),
		'section'           => 'pena_lite_theme_options',
		'priority'          => 1,
		'type'              => 'dropdown-pages',
	) );
	
	/* Child Pages Image Link */
	$wp_customize->add_setting( 'pena_lite_image_link', array(
		'default'           => false,
		'sanitize_callback' => 'pena_lite_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'pena_lite_image_link', array(
		'label'             => esc_html__( 'Disable Child Page Featured Image Link', 'pena-lite' ),
		'section'           => 'pena_lite_theme_options',
		'priority'          => 2,
		'type'              => 'checkbox',
	) );
		
	/* Child Pages Title Link */
	$wp_customize->add_setting( 'pena_lite_child_title_link', array(
		'default'           => false,
		'sanitize_callback' => 'pena_lite_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'pena_lite_child_title_link', array(
		'label'             => esc_html__( 'Disable Child Page Title Link', 'pena-lite' ),
		'section'           => 'pena_lite_theme_options',
		'priority'          => 3,
		'type'              => 'checkbox',
	) );

/***** Register Custom Controls *****/

	class Pena_Lite_Upgrade extends WP_Customize_Control {
		public function render_content() {  ?>
			<p class="pena-upgrade-thumb">
				<img src="<?php echo get_template_directory_uri(); ?>/screenshot.png" />
			</p>
			<p class="customize-control-title pena-upgrade-title">
				<?php esc_html_e('Pena Pro', 'pena-lite'); ?>
			</p>
			<p class="textfield pena-upgrade-text">
				<?php esc_html_e('Full version of this theme includes additional features; additional page templates, custom widgets, additional front page featured areas, different blog options, different theme options, WooCommerce, Give, The Events Calendar support, color options & premium theme support.', 'pena-lite'); ?>
			</p>
			<p class="customize-control-title pena-upgrade-title">
				<?php esc_html_e('Additional Features:', 'pena-lite'); ?>
			</p>
			<ul class="pena-upgrade-features">
				<li class="pena-upgrade-feature-item">
					<?php esc_html_e('Additional Page Templates', 'pena-lite'); ?>
				</li>
				<li class="pena-upgrade-feature-item">
					<?php esc_html_e('Custom Widgets', 'pena-lite'); ?>
				</li>
				<li class="pena-upgrade-feature-item">
					<?php esc_html_e('Several additional front page featured areas', 'pena-lite'); ?>
				</li>
				<li class="pena-upgrade-feature-item">
					<?php esc_html_e('Front Page widgetized area', 'pena-lite'); ?>
				</li>
				<li class="pena-upgrade-feature-item">
					<?php esc_html_e('Splash Page Template', 'pena-lite'); ?>
				</li>
				<li class="pena-upgrade-feature-item">
					<?php esc_html_e('Different Blog Options & Layouts', 'pena-lite'); ?>
				</li>
				<li class="pena-upgrade-feature-item">
					<?php esc_html_e('Different Header Options', 'pena-lite'); ?>
				</li>
				<li class="pena-upgrade-feature-item">
					<?php esc_html_e('Different Theme Options', 'pena-lite'); ?>
				</li>
				<li class="pena-upgrade-feature-item">
					<?php esc_html_e('WooCommerce, Give & The Events Calendar Support', 'pena-lite'); ?>
				</li>
				<li class="pena-upgrade-feature-item">
					<?php esc_html_e('Color Options', 'pena-lite'); ?>
				</li>
				<li class="pena-upgrade-feature-item">
					<?php esc_html_e('Premium Theme Support', 'pena-lite'); ?>
				</li>
			</ul>
			<p class="pena-upgrade-button">
				<a href="http://www.anarieldesign.com/themes/pena-charity-wordpress-theme/" target="_blank" class="button button-secondary">
					<?php esc_html_e('Read more about Pena', 'pena-lite'); ?>
				</a>
			</p><?php
		}
	}

	/***** Add Sections *****/

	$wp_customize->add_section('pena_lite_upgrade', array(
		'title' => esc_html__('Theme Info', 'pena-lite'),
		'priority' => 600
	) );

	/***** Add Settings *****/

	$wp_customize->add_setting('pena_lite_options[premium_version_upgrade]', array(
		'default' => '',
		'type' => 'option',
		'sanitize_callback' => 'esc_attr'
	) );

	/***** Add Controls *****/

	$wp_customize->add_control(new Pena_Lite_Upgrade($wp_customize, 'premium_version_upgrade', array(
		'section' => 'pena_lite_upgrade',
		'settings' => 'pena_lite_options[premium_version_upgrade]',
		'priority' => 1
	) ) );
}
add_action( 'customize_register', 'pena_lite_customize_register' );

/**
 * Sanitization
 */
//Checkboxes
function pena_lite_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}
//Integers
function pena_lite_sanitize_int( $input ) {
	if( is_numeric( $input ) ) {
		return intval( $input );
	}
}
//Text
function pena_lite_sanitize_text( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}
//Radio Buttons and Select Lists
function pena_lite_sanitize_choices( $input, $setting ) {
	global $wp_customize;

	$control = $wp_customize->get_control( $setting->id );

	if ( array_key_exists( $input, $control->choices ) ) {
		return $input;
	} else {
		return $setting->default;
	}
}

//Sanitize the dropdown pages.
function pena_lite_sanitize_dropdown_pages( $input ) {
	if ( is_numeric( $input ) ) {
		return intval( $input );
	}
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function pena_lite_customize_preview_js() {
	wp_enqueue_script( 'pena-lite-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20150908', true );
}
add_action( 'customize_preview_init', 'pena_lite_customize_preview_js' );
/***** Enqueue Customizer CSS *****/

function pena_lite_customizer_css() {
	wp_enqueue_style('pena-customizer', get_template_directory_uri() . '/admin/customizer.css', array());
}
add_action('customize_controls_print_styles', 'pena_lite_customizer_css');
