<?php
/**
 * Template part for displaying posts.
 *
 * @package Lovecraft
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( is_sticky() ) : ?>
		<a class="sticky-post" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<span class="genericon genericon-star">
				<span class="screen-reader-text"><?php esc_html_e( 'Featured', 'lovecraft' ); ?></span>
			</span>
		</a>
	<?php endif; ?>
	<?php if ( has_post_thumbnail() ) : ?>
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'lovecraft-post-image' ); ?></a>
	<?php endif; ?>
	<div class="entry-wrapper">
		<header class="entry-header">
			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

			<?php if ( 'post' == get_post_type() && 'aside' != get_post_format() ) : ?>
			<div class="entry-meta">
				<?php lovecraft_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'lovecraft' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lovecraft' ),
					'after'  => '</div>',
					'link_before' => '<span class="active-link">',
					'link_after' => '</span>'
				) );
			?>

			<?php if ( 'post' == get_post_type() && 'aside' == get_post_format() ) : ?>
			<div class="entry-meta">
				<?php lovecraft_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</div><!-- .entry-content -->
	</div>
</article><!-- #post-## -->
