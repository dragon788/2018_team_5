<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Lovecraft
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lovecraft' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php if ( function_exists( 'jetpack_the_site_logo' ) ) : ?>
				<?php jetpack_the_site_logo(); ?>
			<?php endif; ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div><!-- .site-branding -->

		<div class="toggles clear">
			<button class="menu-toggle toggle" aria-controls="primary-menu" aria-expanded="false">
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
				<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'lovecraft' ); ?></span>
			</button><!-- .menu-toggle -->
			<button class="search-toggle toggle">
				<div class="genericon genericon-search" aria-expanded="false">
					<span class="screen-reader-text"><?php esc_html_e( 'Search', 'lovecraft' ); ?></span>
				</div><!-- .genericon-search -->
			</button><!-- .search-toggle -->
		</div><!-- .toggles -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<div class="mobile-search">
			<?php get_search_form(); ?>
		</div>
	</header><!-- #masthead -->

	<?php if ( is_singular() && has_post_thumbnail() ) : ?>
		<?php
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'lovecraft-post-image-cover' );
			$post_image = $thumb['0'];
		?>
		<div class="header-image bg-image" style="background-image: url(<?php echo esc_url( $post_image ); ?>)">

			<?php the_post_thumbnail( 'lovecraft-post-image' ); ?>

		</div>

	<?php elseif ( get_header_image() ) : ?>
		<a class="header-image-wrapper" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<div class="header-image bg-image" style="background-image: url(<?php header_image(); ?>)">
				<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
			</div>
		</a>
	<?php endif; // End header image check. ?>

	<div id="content" class="site-content">
