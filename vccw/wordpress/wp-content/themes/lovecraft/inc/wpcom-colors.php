<?php
/* Custom Colors: Lovecraft */

//Background
add_color_rule( 'bg', '#fafafa', array(
	array( 'body, .toggles', 'background-color' ),
) );

add_color_rule( 'txt', '#ca2017', array(

	//Contrast with white entry content area
	array( 'a, a:visited, a:hover, a:active, a:focus', 'color', '#fff' ),
	array( '.comments-title span a, .comments-title span a:visited', 'color', '#fff' ),
	array( '.mobile-search .search-submit:hover', 'color', '#fff' ),
	array( '.entry-meta a, .entry-meta a:visited', 'color', '#fff' ),
	array( '.footer-widgets #wp-calendar thead th', 'color', '#fff' ),
	array( '.entry-meta a:hover, .entry-meta a:focus, .entry-meta a:active', 'border-bottom-color', '#fff' ),
	array( '.post-navigation a:hover, .post-navigation a:focus, .post-navigation a:active', 'color', '#fff' ),
	array( '.comment-navigation a:hover, .comment-navigation a:focus, .comment-navigation a:active', 'color', '#fff' ),
	array( '.search-submit:hover .genericon, .search-submit:focus .genericon, .search-submit:active .genericon', 'color', '#fff' ),
	
	//Contrast with background bg
	array( '.main-navigation ul li:hover > a', 'color', 'bg' ),
	array( '#secondary #wp-calendar thead th, #wp-calendar tfoot a:hover', 'color', 'bg' ),
	array( '.search-toggle:hover, .search-toggle:active, .search-toggle:focus', 'color', 'bg' ),
	array( '.main-navigation ul > .page_item_has_children > a:after, .main-navigation ul > .menu-item-has-children > a:after', 'border-top-color', 'bg' ),
	array( '.main-navigation a:hover, .main-navigation a:active, .main-navigation a:focus', 'color', 'bg' ),
	array( '.toggle-active .main-navigation a, .toggle-active .main-navigation a:visited', 'color', 'bg' ),
	array( '.site-title a:hover, .site-title a:focus, .site-title a:active', 'color', 'bg' ),
	array( '.search-toggle.active', 'color', 'bg' ),
	array( '.menu-toggle.active .bar', 'background-color', 'bg' ),
	array( '.menu-toggle:hover .bar, .menu-toggle:active .bar, .menu-toggle:focus .bar', 'background-color', 'bg' ),
	array( '.toggle-active .main-navigation ul ul li:hover > a', 'color', 'bg' ),
	array( '.toggle-active .main-navigation ul ul a:hover, .toggle-active .main-navigation ul ul a:active, .toggle-active .main-navigation ul ul a:focus', 'color', 'bg' ),
	array( '.menu-toggle:hover .bar, .menu-toggle:active .bar, .menu-toggle:focus .bar', 'background-color', 'bg' ),
	
	//Contrast with grays
	array( '.main-navigation ul ul li:hover > a', 'color', '#333' ),
	array( '.main-navigation ul ul a:hover, .main-navigation ul ul a:active, .main-navigation ul ul a:focus', 'color', '#333' ),
	array( '.site-info a:hover, .site-info a:focus, .site-info a:active', 'color', '#000' ),
	array( '.comment-author a:hover', 'color', '#ddd' ),
	array( '.entry-content blockquote:after', 'color', '#eee' ),
	array( '.site-info .sep', 'color', '#000' ),
	
	//No contrast
	array( '.entry-content .page-links a:hover', 'background-color' ),
	array( '.bypostauthor .comment-author img', 'background-color' ),
	array( '#infinite-handle span:hover', 'background-color' ),
	array( '.tags-links a:hover:before, .tagcloud a:hover:before', 'border-right-color' ),
	array( '.rtl .tags-links a:hover:before, .rtl .tagcloud a:hover:before', 'border-left-color' ),
	array( '.sticky-post', 'background-color' ),
	array( '.sticky-post:after', 'border-left-color' ),
	array( '.sticky-post:after', 'border-right-color' ),
	array( '.widget-title, .jetpack-recipe-title', 'border-color' ),
	array( '.tags-links a:hover, .tagcloud a:hover', 'background-color' ),
	array( '.footer-widgets .tagcloud a:hover', 'background-color' ),
	array( '.footer-widgets .tagcloud a:hover:before', 'border-right-color' ),
	array( '.rtl .footer-widgets .tagcloud a:hover:before', 'border-left-color' ),
	array( '.button:hover, button:hover, input[type="submit"]:hover, input[type="reset"]:hover, input[type="button"]:hover', 'background-color' ),
),
__( 'Main Accent' ) );

add_color_rule( 'link', '#ffffff', array(

) );

add_color_rule( 'fg1', '#ffffff', array(
	
) );

add_color_rule( 'fg2', '#ffffff', array(

) );


//Extra rules
add_color_rule( 'extra', '#ffffff', array(
	array( '.entry-content .page-links a:hover', 'color', 'txt' ),
	array( '.footer-widgets .tagcloud a:hover', 'color', 'txt' ),
	array( '.tags-links a:hover, .tagcloud a:hover', 'color', 'txt' ),
	array( '.sticky-post, .sticky-post .genericon', 'color', 'txt' ),
	array( '#infinite-handle span:hover', 'color', 'txt' ),
	array( '.main-navigation ul ul a, .main-navigation ul ul a:visited', 'color', '#333' ),
	array( '.button:hover, button:hover, input[type="submit"]:hover, input[type="reset"]:hover, input[type="button"]:hover', 'color', 'txt' ),
) );

//Borders
add_color_rule( 'extra', '#dddddd', array(
	array( '.mobile-search, .mobile-search .search-field, .toggle-active .main-navigation li', 'border-color', 0.3 ),
	array( '.toggles, .hentry, #wp-calendar th:first-child, #wp-calendar tbody td:first-child, #wp-calendar thead, #wp-calendar th, #wp-calendar td, .widget ul ul li:first-child, .main-navigation, .widget li, .widget + .widget, .site-footer', 'border-color', 0.3 ),
) );

add_color_rule( 'extra', '#111111', array(
	array( '#secondary a, #secondary a:visited, #secondary a:hover, #secondary a:active, #secondary a:focus', 'color', 'bg' ),
	array( '.main-navigation a, .main-navigation a:visited', 'color', 'bg' ),
	array( '.menu-toggle .bar', 'background-color', 'bg' ),
	array( '.site-title a, .site-title a:visited', 'color', 'bg' ),
	array( '.search-toggle', 'color', 'bg' ),
	array( '.site-description', 'color', 'bg' ),
	array( '#secondary', 'color', 'bg' ),
	array( '#wp-calendar, #wp-calendar caption, #wp-calendar tfoot a, #wp-calendar tfoot a:visited', 'color', 'bg' ),
	array( '.footer-widgets #wp-calendar', 'color', '#fff' ),
	array( '.widget_recent_comments .comment-author-link, .widget_recent_comments .comment-author-link a, .widget_authors a strong', 'color', 'bg' ),
	array( '#secondary .wp-caption-text, #secondary .gallery-caption', 'color', 'bg' ),
) );

add_color_rule( 'extra', '#888888', array(
	array( '.main-navigation ul > li + li:before', 'color', 'bg' ),
	array( '.widget_archive li, .widget_categories li, .widget_meta li, .widget_nav_menu li, .widget_pages', 'color', 'bg' ),
) );

add_color_rule( 'extra', '#999999', array(
	array( '.widget_archive li:before, .widget_categories li:before, .widget_meta li:before, .widget_nav_menu li:before, .widget_pages li:before, .widget_authors ul ul li:before, .widget_recent_comments li:before', 'color', 'bg' ),
) );

//Additional palettes

add_color_palette( array(
    '#333333',
    '#cccccc',
), 'Dark' );

add_color_palette( array(
    '#fdfdfd',
    '#398d8d',
), 'Turquoise' );

add_color_palette( array(
    '#f1ebe3',
    '#72534a',
), 'Vintage' );

add_color_palette( array(
    '#fafafa',
    '#6c6c8c',
), 'Purple' );