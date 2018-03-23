<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Pena Lite
 */

get_header(); ?>
	<div class="featured-image">
	<?php if ( has_post_thumbnail() ): ?>
		<?php $image_id = get_post_thumbnail_id(); ?>
		<?php $image_url = wp_get_attachment_image_src( $image_id,'full' );   ?>
		<div class="header section pages" style="background-image:url(<?php echo esc_url( $image_url[0] ); ?>);">
		<div class="entry-content">
			<h1><?php the_title(); ?></h1>
		</div>
		<span class="overlay"></span>
		</div>
	<?php else: ?>
		<div class="header section pages without-featured-image">
		<div class="entry-content">
		<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<hr class="short">
		</header><!-- .entry-header -->
		</div>
		</div>
	<?php endif; ?>
	</div>
	<div class="hfeed site page-content">
		<div class="content site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'template-parts/content', 'page-default' ); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
				?>

					<?php endwhile; // End of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->
			<?php get_sidebar(); ?>
		</div><!-- .content -->
	</div><!-- .site -->

<?php get_footer(); ?>