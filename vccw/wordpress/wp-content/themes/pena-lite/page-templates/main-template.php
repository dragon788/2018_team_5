<?php
/**
 * Template Name: Front Template
 * The template for displaying a front page.
 *
 * @package Pena Lite
 */

if ( 'posts' == get_option( 'show_on_front' ) ) :

	get_template_part( 'index' );

else :

get_header( 'custom' ); ?>
	<div class="intro">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'front-page' );

		// End the loop.
		endwhile;
		?>
	</div><!-- .intro -->
	<div class="inner">
		<div class="inner-page">
			<?php if( get_theme_mod( 'pena_lite_featured_page_one' ) ) : ?>
			<?php pena_lite_featured_page_one(); ?>
			<?php endif; ?>
<?php get_footer( 'custom' );

endif; ?>