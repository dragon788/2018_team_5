/* Add theme related links to theme customizer */

(function($) {
	if ('undefined' !== typeof pena_lite_links) {

		// Add Upgrade Notice
		upgrade = $('<a class="pena-upgrade-link"></a>')
			.attr('href', pena_lite_links.upgradeURL)
			.attr('target', '_blank')
			.text(pena_lite_links.upgradeLabel);

		$('.preview-notice').append(upgrade);

		// Theme Links
		box = $('<div class="pena-theme-links-wrap"></div>');

		title = $('<h3 class="pena-theme-links-title"></h3>')
			.text(pena_lite_links.title);

		themePage = $('<a class="pena-theme-link pena-theme-link-info"></a>')
			.attr('href', pena_lite_links.themeURL)
			.attr('target', '_blank')
			.text(pena_lite_links.themeLabel);

		themeDocu = $('<a class="pena-theme-link pena-theme-link-docs"></a>')
			.attr('href', pena_lite_links.docsURL)
			.attr('target', '_blank')
			.text(pena_lite_links.docsLabel);

		themeSupport = $('<a class="pena-theme-link pena-theme-link-support"></a>')
			.attr('href', pena_lite_links.supportURL)
			.attr('target', '_blank')
			.text(pena_lite_links.supportLabel);

		themeRate = $('<a class="pena-theme-link pena-theme-link-rate"></a>')
			.attr('href', pena_lite_links.rateURL)
			.attr('target', '_blank')
			.text(pena_lite_links.rateLabel);

		// Add Theme Links
		links = box.append(title).append(themePage).append(themeDocu).append(themeSupport).append(themeRate);

		setTimeout(function() {
			$('#accordion-panel-pena_theme_options .control-panel-content').append(links);
		}, 2000);

		// Remove accordion click event
		$('.pena-upgrade-link, .pena-theme-link').on('click', function(e) {
			e.stopPropagation();
		});

	}
})(jQuery);