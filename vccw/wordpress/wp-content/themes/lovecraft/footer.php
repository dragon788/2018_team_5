<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Lovecraft
 */

?>

	</div><!-- #content -->
	<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>
		<div class="footer-widgets clear">
			<div class="widget-areas">
				<?php if ( is_active_sidebar( 'footer-1' ) ): ?>
					<div class="widget-area">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div><!-- .widget-area -->
				<?php endif; //is_active_sidebar ?>

				<?php if ( is_active_sidebar( 'footer-2' ) ): ?>
					<div class="widget-area">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div><!-- .widget-area -->
				<?php endif; //is_active_sidebar ?>

				<?php if ( is_active_sidebar( 'footer-3' ) ): ?>
					<div class="widget-area">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div><!-- .widget-area -->
				<?php endif; //is_active_sidebar ?>
			</div><!-- .widget-areas -->
		</div><!-- .footer-widgets -->
	<?php endif; ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'lovecraft' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'lovecraft' ), 'WordPress' ); ?></a>
			<span class="sep"> & </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'lovecraft' ), 'lovecraft', '<a href="http://andersnoren.se" rel="designer">Anders Noren</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
