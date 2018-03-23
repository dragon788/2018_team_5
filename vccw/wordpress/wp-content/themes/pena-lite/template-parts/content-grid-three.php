<?php
/**
 * Template part for displaying posts.
 *
 * @package Pena Lite
 */

?>

<div class="threecolumn clear">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">

			<?php if ( has_post_thumbnail() ) { ?>
			<div class="post-thumbnail">
				<?php if(get_theme_mod( 'pena_lite_image_link' )) : ?>
					<?php the_post_thumbnail( 'pena-lite-front-child-page-thumbnail' ); ?>
				<?php else: ?>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( 'pena-lite-front-child-page-thumbnail' ); ?>
					</a>
				<?php endif; ?>
			</div>
			<?php } ?>

			<?php if(get_theme_mod( 'pena_lite_child_title_link' )) : ?>
				<?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ), '</h2>' ); ?>
			<?php else: ?>
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			<?php endif; ?>

			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php pena_lite_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>

		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'pena-lite' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pena-lite' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
</div>