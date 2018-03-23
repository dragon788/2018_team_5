<?php

add_filter( 'typekit_add_font_category_rules', function( $category_rules ) {

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body',
		array(
			array( 'property' => 'font-family', 'value' => '"Playfair Display", Georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '17px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'optgroup',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'b,
		strong',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dfn',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'small',
		array(
			array( 'property' => 'font-size', 'value' => '80%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'sub,
		sup',
		array(
			array( 'property' => 'font-size', 'value' => '75%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'code,
		kbd,
		pre,
		samp',
		array(
			array( 'property' => 'font-family', 'value' => 'monospace, monospace' ),
			array( 'property' => 'font-size', 'value' => '1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'optgroup',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'body,
		button,
		input,
		select,
		textarea',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'h1,
		h2,
		h3,
		h4,
		h5,
		h6',
		array(
			array( 'property' => 'font-family', 'value' => '"Playfair Display", Georgia, serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'cite,
		dfn,
		em,
		i',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'pre',
		array(
			array( 'property' => 'font-family', 'value' => '"Courier 10 Pitch", Courier, monospace' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'code,
		kbd',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'tt,
		var',
		array(
			array( 'property' => 'font-family', 'value' => 'Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'big',
		array(
			array( 'property' => 'font-size', 'value' => '125%' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'dt',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.button,
		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '12px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.screen-reader-text:focus',
		array(
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '2.25em' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-description',
		array(
			array( 'property' => 'font-size', 'value' => '1.1em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation ul > li + li:before',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '15px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation ul ul a',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '2.6em' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta > span',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '0.75em' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.page-links',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '0.75em' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.tagcloud a,
		.tags-links a',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.post-navigation span',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.post-navigation h4',
		array(
			array( 'property' => 'font-size', 'value' => '1em' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '1.05em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h1,
		.entry-content h2,
		.entry-content h3,
		.entry-content h4,
		.entry-content h5',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h6',
		array(
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h1',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.75em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.25em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h5',
		array(
			array( 'property' => 'font-size', 'value' => '1.1em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h6',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content .more-link',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content blockquote',
		array(
			array( 'property' => 'font-size', 'value' => '0.95em' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content blockquote p',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.entry-content blockquote:after',
		array(
			array( 'property' => 'font-family', 'value' => 'Georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '72px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content blockquote cite',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '0.75em' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'em,
		q',
		array(
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content em strong,
		.entry-content strong em',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content big',
		array(
			array( 'property' => 'font-size', 'value' => '1.25em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'code,
		kbd,
		pre',
		array(
			array( 'property' => 'font-size', 'value' => '0.85em' ),
			array( 'property' => 'font-family', 'value' => 'Menlo, Monaco, monospace' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content dl dt',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.gallery-caption,
		.wp-caption-text',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.gallery-caption',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content table',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content th',
		array(
			array( 'property' => 'font-weight', 'value' => 'bold' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content fieldset legend',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content label',
		array(
			array( 'property' => 'font-size', 'value' => '17px' ),
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content input,
		.entry-content textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content input[type="email"],
		.entry-content input[type="password"],
		.entry-content input[type="tel"],
		.entry-content input[type="text"],
		.entry-content input[type="url"],
		.entry-content textarea',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content input[type="button"],
		.entry-content input[type="reset"],
		.entry-content input[type="submit"]',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-reply-title,
		.comments-title',
		array(
			array( 'property' => 'font-size', 'value' => '2em' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comments-title span a',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-author',
		array(
			array( 'property' => 'font-size', 'value' => '1.1em' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-metadata,
		.comment-reply-link',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '0.7em' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.comment .edit-link:before,
		.comment-metadata time:before,
		.comment-reply-link:before',
		array(
			array( 'property' => 'font-size', 'value' => '16px' ),
			array( 'property' => 'font-family', 'value' => '"Genericons"' ),
			array( 'property' => 'font-style', 'value' => 'normal' ),
			array( 'property' => 'font-weight', 'value' => 'normal' ),
			array( 'property' => 'font-variant', 'value' => 'normal' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-navigation a',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '0.9em' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-respond form label',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-respond input[type="text"],
		.comment-respond textarea',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '17px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-respond input[type="submit"]',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-list #cancel-comment-reply-link',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '13px' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.search-field',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.search-submit .genericon',
		array(
			array( 'property' => 'font-size', 'value' => '24px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.page-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '0.75em' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.posts-navigation span',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '0.9em' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#infinite-handle span',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.widget-title',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '0.78em' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_authors a strong,
		.widget_recent_comments .comment-author-link,
		.widget_recent_comments .comment-author-link a',
		array(
			array( 'property' => 'font-family', 'value' => '"Playfair Display", Georgia, serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget .search-field',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.widget_archive li:before,
		.widget_authors ul ul li:before,
		.widget_categories li:before,
		.widget_meta li:before,
		.widget_nav_menu li:before,
		.widget_pages li:before,
		.widget_recent_comments li:before',
		array(
			array( 'property' => 'font', 'value' => '16px/1 Genericons' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_recent_entries .post-date',
		array(
			array( 'property' => 'font-size', 'value' => '0.75em' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_recent_entries a,
		.widget_recent_entries a:focus,
		.widget_recent_entries a:hover,
		.widget_recent_entries a:visited',
		array(
			array( 'property' => 'font-family', 'value' => '"Playfair Display", Georgia, serif' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss li a',
		array(
			array( 'property' => 'font-family', 'value' => '"Playfair Display", Georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '1.1em' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss li .rss-date',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.widget_rss li cite',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar thead th',
		array(
			array( 'property' => 'font-size', 'value' => '0.75em' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'#wp-calendar tfoot a',
		array(
			array( 'property' => 'font-size', 'value' => '0.75em' ),
			array( 'property' => 'font-weight', 'value' => '900' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.site-info',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '12px' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.site-info .sep',
		array(
			array( 'property' => 'font-family', 'value' => '"Playfair Display", Georgia, serif' ),
			array( 'property' => 'font-size', 'value' => '18px' ),
			array( 'property' => 'font-style', 'value' => 'italic' ),
			array( 'property' => 'font-weight', 'value' => '700' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.search-toggle .genericon',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
		)
	);
	
	//Media Queries

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.main-navigation a',
		array(
			array( 'property' => 'font-size', 'value' => '0.9em' ),
		),
		array( 'screen and (max-width: 1000px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.mobile-search .search-field',
		array(
			array( 'property' => 'font-family', 'value' => 'Lato, Helvetica, sans-serif' ),
			array( 'property' => 'font-size', 'value' => '14px' ),
		),
		array( 'screen and (max-width: 1000px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.mobile-search .search-submit .genericon',
		array(
			array( 'property' => 'font-size', 'value' => '32px' ),
		),
		array( 'screen and (max-width: 1000px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.site-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		),
		array( 'screen and (max-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.search-toggle .genericon',
		array(
			array( 'property' => 'font-size', 'value' => '30px' ),
		),
		array( 'screen and (max-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '2.25em' ),
		),
		array( 'screen and (max-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'none',
		'.entry-content blockquote:after',
		array(
			array( 'property' => 'font-size', 'value' => '64px' ),
		),
		array( 'screen and (max-width: 600px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-reply-title,
		.comments-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		),
		array( 'screen and (max-width: 500px)' )
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.75em' ),
		),
		array( 'screen and (max-width: 500px)' )
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h1',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		),
		array( 'screen and (max-width: 500px)' )
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-meta > span',
		array(
			array( 'property' => 'font-size', 'value' => '0.7em' ),
		),
		array( 'screen and (max-width: 500px)' )
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h2',
		array(
			array( 'property' => 'font-size', 'value' => '1.4em' ),
		),
		array( 'screen and (max-width: 500px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h3',
		array(
			array( 'property' => 'font-size', 'value' => '1.3em' ),
		),
		array( 'screen and (max-width: 500px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h4',
		array(
			array( 'property' => 'font-size', 'value' => '1.2em' ),
		),
		array( 'screen and (max-width: 500px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-content h5',
		array(
			array( 'property' => 'font-size', 'value' => '1.1em' ),
		),
		array( 'screen and (max-width: 500px)' )
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.comment-reply-title,
		.comments-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.3em' ),
		),
		array( 'screen and (max-width: 440px)' )
	);
	
	TypekitTheme::add_font_category_rule( $category_rules, 'headings',
		'.entry-title',
		array(
			array( 'property' => 'font-size', 'value' => '1.5em' ),
		),
		array( 'screen and (max-width: 440px)' )
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.entry-content .more-link',
		array(
			array( 'property' => 'font-size', 'value' => '13px' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-content',
		array(
			array( 'property' => 'font-size', 'value' => '0.95em' ),
		)
	);

	TypekitTheme::add_font_category_rule( $category_rules, 'body-text',
		'.comment-navigation a',
		array(
			array( 'property' => 'font-size', 'value' => '0.8em' ),
		)
	);

	return $category_rules;
} );
