<?php

if (!defined('ABSPATH')) {
	exit;
}

/***** Welcome Notice in WordPress Dashboard *****/

if (!function_exists('pena_lite_admin_notice')) {
	function pena_lite_admin_notice() {
		global $pagenow, $pena_lite_version;
		if (current_user_can('edit_theme_options') && 'index.php' === $pagenow && !get_option('pena_lite_notice_welcome') || current_user_can('edit_theme_options') && 'themes.php' === $pagenow && isset($_GET['activated']) && !get_option('pena_lite_notice_welcome')) {
			wp_enqueue_style('pena-lite-admin-notice', get_template_directory_uri() . '/admin/admin-notice.css', array(), $pena_lite_version);
			pena_lite_welcome_notice();
		}
	}
}
add_action('admin_notices', 'pena_lite_admin_notice');

/***** Hide Welcome Notice in WordPress Dashboard *****/

if (!function_exists('pena_lite_hide_notice')) {
	function pena_lite_hide_notice() {
		if (isset($_GET['pena-lite-hide-notice']) && isset($_GET['_pena_lite_notice_nonce'])) {
			if (!wp_verify_nonce($_GET['_pena_lite_notice_nonce'], 'pena_lite_hide_notices_nonce')) {
				wp_die(esc_html__('Action failed. Please refresh the page and retry.', 'pena-lite'));
			}
			if (!current_user_can('edit_theme_options')) {
				wp_die(esc_html__('You do not have the necessary permission to perform this action.', 'pena-lite'));
			}
			$hide_notice = sanitize_text_field($_GET['pena-lite-hide-notice']);
			update_option('pena_lite_notice_' . $hide_notice, 1);
		}
	}
}
add_action('wp_loaded', 'pena_lite_hide_notice');

/***** Content of Welcome Notice in WordPress Dashboard *****/

if (!function_exists('pena_lite_welcome_notice')) {
	function pena_lite_welcome_notice() {
		global $pena_lite_data; ?>
		<div class="notice notice-success pena-welcome-notice">
			<a class="notice-dismiss pena-welcome-notice-hide" href="<?php echo esc_url(wp_nonce_url(remove_query_arg(array('activated'), add_query_arg('pena-lite-hide-notice', 'welcome')), 'pena_lite_hide_notices_nonce', '_pena_lite_notice_nonce')); ?>">
				<span class="screen-reader-text">
					<?php echo esc_html__('Dismiss this notice.', 'pena-lite'); ?>
				</span>
			</a>
			<p><?php printf(esc_html__('Thanks for choosing Pena Lite! To get started please make sure you visit our %2$swelcome page%3$s.', 'pena-lite'), $pena_lite_data['Name'], '<a href="' . esc_url(admin_url('themes.php?page=charity')) . '">', '</a>'); ?></p>
			<p><?php printf(esc_html__('Pena Lite is proudly brought to you by Anariel Design. If you like the theme do us a favor and give it a 5-star rating on WordPress to help us spread the word.', 'pena-lite')); ?><a href="<?php echo esc_url('https://wordpress.org/support/view/theme-reviews/pena-lite?filter=5'); ?>">
				<?php esc_html_e('Rate This Theme', 'pena-lite'); ?></a></p>
			<p class="pena-welcome-notice-button">
				<a class="button" href="<?php echo esc_url(admin_url('themes.php?page=charity')); ?>">
					<?php printf(esc_html__('Get Started with Pena Lite', 'pena-lite'), $pena_lite_data['Name']); ?>
				</a>
				<a class="button-primary" href="<?php echo esc_url('https://wordpress.org/support/view/theme-reviews/pena-lite?filter=5'); ?>">
					<?php printf(esc_html__('Rate This Theme', 'pena-lite'), $pena_lite_data['Name']); ?>
				</a>
			</p>
		</div><?php
	}
}

/***** Theme Info Page *****/

if (!function_exists('pena_lite_theme_info_page')) {
	function pena_lite_theme_info_page() {
		add_theme_page(esc_html__('Welcome to Pena Lite', 'pena-lite'), esc_html__('Theme Info', 'pena-lite'), 'edit_theme_options', 'charity', 'pena_lite_display_theme_page');
	}
}
add_action('admin_menu', 'pena_lite_theme_info_page');

if (!function_exists('pena_lite_display_theme_page')) {
	function pena_lite_display_theme_page() {
		global $pena_lite_data; ?>
		<div class="theme-info-wrap">
			<h1>
				<?php printf(esc_html__('Welcome to Pena Lite', 'pena-lite')); ?>
			</h1>
			<div class="pena-row theme-intro clearfix">
				<div class="pena-col-1-4">
					<img class="theme-screenshot" src="<?php echo get_template_directory_uri(); ?>/screenshot.png" alt="<?php esc_html_e('Theme Screenshot', 'pena-lite'); ?>" />
				</div>
				<div class="pena-col-3-4 theme-description">
					<p class="about">
						<?php printf(esc_html__('This theme has been inspired by "Living on One Dollar" documentary we watched one night. We were deeply touched and wanted to somehow contribute to the whole project. As theme developers we decided to develop a WordPress theme to help spread the word about it. Pena Lite can easily be used for variety of purposes, but it is built with non-profit sites in mind. Theme features modern, clean and mobile friendly responsive design that in the last year or two became crucial for a good SEO.', 'pena-lite')); ?>
					</p>
				</div>
			</div>

			<hr>
			<div class="theme-links clearfix">
				<p>
					<strong><?php esc_html_e('Important Links:', 'pena-lite'); ?></strong>
					<a href="<?php echo esc_url('http://www.anarieldesign.com/free-charity-wordpress-theme-pena/'); ?>">
						<?php esc_html_e('Theme Info Page', 'pena-lite'); ?>
					</a>
					<a href="<?php echo esc_url('https://wordpress.org/support/theme/pena-lite'); ?>">
						<?php esc_html_e('Free Support Forum', 'pena-lite'); ?>
					</a>
					<a href="<?php echo esc_url('http://www.anarieldesign.com/support/'); ?>">
						<?php esc_html_e('Membership Support Center', 'pena-lite'); ?>
					</a>
					<a href="<?php echo esc_url('http://www.anarieldesign.com/showcase/'); ?>">
						<?php esc_html_e('Anariel Design Themes Showcase', 'pena-lite'); ?>
					</a>
				</p>
			</div>
			<hr>
			<div id="getting-started" class="bg">
				<h3>
					<?php printf(esc_html__('Get Started with %s', 'pena-lite'), $pena_lite_data['Name']); ?>
				</h3>
				<div class="pena-row clearfix">
					<div class="pena-col-1-2">
						<div class="section">
							<h4>
								<span class="dashicons dashicons-welcome-learn-more"></span>
								<?php esc_html_e('Theme Documentation', 'pena-lite'); ?>
							</h4>
							<p class="about">
								<?php printf(esc_html__('Please check the documentation to get better overview of how the theme is structured.', 'pena-lite'), $pena_lite_data['Name']); ?>
							</p>
							<p>
								<a href="<?php echo esc_url('http://www.anarieldesign.com/documentation/pena-lite/'); ?>" class="button button-secondary">
									<?php esc_html_e('Theme Documentation', 'pena-lite'); ?>
								</a>
								<a href="<?php echo esc_url('https://wordpress.org/support/theme/pena-lite'); ?>" class="button button-secondary">
									<?php esc_html_e('Support Forum', 'pena-lite'); ?>
								</a>
							</p>
						</div>
						<div class="section">
							<h4>
								<span class="dashicons dashicons-admin-appearance"></span>
								<?php esc_html_e('Theme Options', 'pena-lite'); ?>
							</h4>
							<p class="about">
								<?php printf(esc_html__('Click "Customize" to open the Customizer.',  'pena-lite'), $pena_lite_data['Name']); ?>
							</p>
							<p>
								<a href="<?php echo admin_url('customize.php'); ?>" class="button button-secondary">
									<?php esc_html_e('Customize Theme', 'pena-lite'); ?>
								</a>
							</p>
						</div>
					</div>
					<div class="pena-col-1-2">
						<div class="section">
							<h4>
								<span class="dashicons dashicons-cart"></span>
								<?php esc_html_e('Pena Pro', 'pena-lite'); ?>
							</h4>
							<p class="about">
								<?php esc_html_e('Full version of this theme includes additional features; additional page templates, custom widgets, additional front page featured pages, different blog options, different theme options, WooCommerce, Give, The Events Calendar support color options & premium theme support.', 'pena-lite'); ?>
							</p>
							<p>
								<a href="<?php echo esc_url('http://www.anarieldesign.com/themes/pena-charity-wordpress-theme/'); ?>" class="button button-primary">
									<?php esc_html_e('Upgrade to Pena Pro', 'pena-lite'); ?>
								</a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="theme-comparison">
				<h3 class="theme-comparison-intro">
					<?php esc_html_e('Upgrade to Pena for more awesome features:', 'pena-lite'); ?>
				</h3>
				<table>
					<thead class="theme-comparison-header">
						<tr>
							<th class="table-feature-title"><h3><?php esc_html_e('Features', 'pena-lite'); ?></h3></th>
							<th><h3><?php esc_html_e('Pena Lite', 'pena-lite'); ?></h3></th>
							<th><h3><?php esc_html_e('Pena', 'pena-lite'); ?></h3></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><h3><?php esc_html_e('Theme Price', 'pena-lite'); ?></h3></td>
							<td><?php esc_html_e('Free', 'pena-lite'); ?></td>
							<td>
								<a href="<?php echo esc_url('http://www.anarieldesign.com/pricing/'); ?>">
									<?php esc_html_e('View Pricing', 'pena-lite'); ?>
								</a>
							</td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Responsive Layout', 'pena-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-yes"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Page Templates', 'pena-lite'); ?></h3></td>
							<td><?php esc_html_e('4', 'pena-lite'); ?></td>
							<td><?php esc_html_e('12', 'pena-lite'); ?></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Front Page Featured Blocks', 'pena-lite'); ?></h3></td>
							<td><?php esc_html_e('1', 'pena-lite'); ?></td>
							<td><?php esc_html_e('5', 'pena-lite'); ?></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Front Page Widgetized Areas', 'pena-lite'); ?></h3></td>
							<td><?php esc_html_e('0', 'pena-lite'); ?></td>
							<td><?php esc_html_e('1', 'pena-lite'); ?></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Custom Menus', 'pena-lite'); ?></h3></td>
							<td><?php esc_html_e('1', 'pena-lite'); ?></td>
							<td><?php esc_html_e('2', 'pena-lite'); ?></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Custom Widgets', 'pena-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Different Blog Layouts', 'pena-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Different Theme Options', 'pena-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Different Header Options', 'pena-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Different Blog Options', 'pena-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Splash Page Template', 'pena-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Premium Slider', 'pena-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('WooCommerce, Give & The Events Calendar Support', 'pena-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Custom Plugins', 'pena-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Color Options', 'pena-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Extended Features', 'pena-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><span class="dashicons dashicons-yes"></span></td>
						</tr>
						<tr>
							<td><h3><?php esc_html_e('Support', 'pena-lite'); ?></h3></td>
							<td><span class="dashicons dashicons-no"></span></td>
							<td><?php esc_html_e('Help Desk Ticketing System', 'pena-lite'); ?></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>
								<a href="<?php echo esc_url('http://www.anarieldesign.com/themes/pena-charity-wordpress-theme/'); ?>" class="upgrade-button">
									<?php esc_html_e('Upgrade to Pena Pro', 'pena-lite'); ?>
								</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<hr>
			<div class="section bg1">
				<h3>
					<?php esc_html_e('More Themes by Anariel Design', 'pena-lite'); ?>
				</h3>
				<p class="about">
					<?php printf(esc_html__('Build Your Dream WordPress Site with Premium Niche Themes for Bloggers & Charities',  'pena-lite'), $pena_lite_data['Name']); ?>
				</p>
				<a href="<?php echo esc_url('http://www.anarieldesign.com/themes/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/anarieldesign-themes.jpg" alt="<?php esc_html_e('Theme Screenshot', 'pena-lite'); ?>" /></a>
				<p>
					<a href="<?php echo esc_url('http://www.anarieldesign.com/themes/'); ?>" class="button button-primary advertising">
						<?php esc_html_e('More Themes', 'pena-lite'); ?>
					</a>
				</p>
			</div>
			<hr>
			<div id="theme-author">
				<p>
					<?php printf(esc_html__('%1$1s is proudly brought to you by %2$2s. If you like %3$3s: %4$4s.', 'pena-lite'), $pena_lite_data['Name'], '<a href="http://www.anarieldesign.com/" title="Anariel Design Themes">Anariel Design Themes</a>', $pena_lite_data['Name'], '<a href="https://wordpress.org/support/view/theme-reviews/pena-lite?filter=5" title="Pena Lite Review">' . esc_html__('Rate this theme', 'pena-lite') . '</a>'); ?>
				</p>
			</div>
		</div><?php
	}
}

?>