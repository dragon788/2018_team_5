<?php
/**
 * Template part for displaying single posts.
 *
 * @package Lovecraft
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-wrapper">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

			<?php if ( 'aside' != get_post_format() ) : ?>
				<div class="entry-meta">
					<?php lovecraft_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lovecraft' ),
					'after'  => '</div>',
					'link_before' => '<span class="active-link">',
					'link_after' => '</span>'
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php lovecraft_entry_footer(); ?>
			<?php if ( 'aside' == get_post_format() ) : ?>
			<div class="entry-meta">
				<?php lovecraft_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->

