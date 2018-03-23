<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Pena Lite
 */

?>
	<?php if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) ) : ?>

	<div class="site-footer" role="complementary">

		<div class="hfeed site">

			<div class="content site-content">

				<div class="footer-widgets clear">

					<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>

						<div class="widget-area">

							<?php dynamic_sidebar( 'footer-1' ); ?>

						</div><!-- .widget-area -->

					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>

						<div class="widget-area">

							<?php dynamic_sidebar( 'footer-2' ); ?>

						</div><!-- .widget-area -->

					<?php endif; ?>

					<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>

						<div class="widget-area">

							<?php dynamic_sidebar( 'footer-3' ); ?>

						</div><!-- .widget-area -->

				<?php endif; ?>

				</div><!-- .footer-widgets -->

			</div><!-- .site -->

		</div><!-- .content -->

	</footer><!-- #colophon -->
	<?php endif; ?>
			<footer id="colophon" class="site-info" role="contentinfo">
				<div class="hfeed site">
					<div class="content site-content">
						<a href="http://www.anarieldesign.com/free-charity-wordpress-theme-pena/"><?php printf( esc_html__( 'Theme: %1$s.', 'pena-lite' ), 'Pena Lite designed by Anariel Design' ); ?></a>
					</div><!-- .content -->
				</div><!-- .site -->
			</footer><!-- .site-info -->
		</div><!-- .inner-page -->
	</div><!-- .inner -->
	</div><!-- #content -->
<?php wp_footer(); ?>

</body>
</html>