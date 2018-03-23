<?php
/**
 * Template Name: Basic/Page Builder Template
 * The template for displaying a full width page.
 *
 * @package Pena Lite
 */

get_header(); ?>

<div class="basic">
	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page-default' );

		// End the loop.
		endwhile;
	?>
		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>

</div>

<?php get_footer(); ?>