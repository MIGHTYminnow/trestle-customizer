<?php

add_action( 'wp_head', 'trestle_output_styles');
/**
 * Output the style element that contains all Customizer CSS.
 *
 * @since  2.0.0
 */
function trestle_output_styles() {

	$styles = array();
	$site_title_color                = trestle_get_option( 'site_title_color' );
	$site_description_color          = trestle_get_option( 'site_description_color' );
	$site_bg_color                   = trestle_get_option( 'site_bg_color' );
	$body_text_color                 = trestle_get_option( 'body_text_color' );
	$body_link_color                 = trestle_get_option( 'body_link_color' );
	$body_link_hover_color           = trestle_get_option( 'body_link_hover_color' );
	$entry_title_link_color          = trestle_get_option( 'entry_title_link_color' );
	$entry_title_link_hover_color    = trestle_get_option( 'entry_title_link_hover_color' );
	$header_bg_color                 = trestle_get_option( 'header_bg_color' );
	$menu_bg_color                   = trestle_get_option( 'menu_bg_color' );
	$menu_text_color                 = trestle_get_option( 'menu_text_color' );
	$menu_text_hover_color           = trestle_get_option( 'menu_text_hover_color' );
	$current_menu_item_color         = trestle_get_option( 'current_menu_item_color' );
	$sub_menu_bg_color               = trestle_get_option( 'sub_menu_bg_color' );
	$sub_menu_text_color             = trestle_get_option( 'sub_menu_text_color' );
	$sub_menu_text_hover_color       = trestle_get_option( 'sub_menu_text_hover_color' );
	$sidebar_text_color              = trestle_get_option( 'sidebar_text_color' );
	$widget_title_color              = trestle_get_option( 'widget_title_color' );
	$sidebar_link_color              = trestle_get_option( 'sidebar_link_color' );
	$sidebar_link_hover_color        = trestle_get_option( 'sidebar_link_hover_color' );
	$footer_bg_color                 = trestle_get_option( 'footer_bg_color' );
	$footer_text_color               = trestle_get_option( 'footer_text_color' );
	$footer_link_color               = trestle_get_option( 'footer_link_color' );
	$footer_link_hover_color         = trestle_get_option( 'footer_link_hover_color' );
	$footer_widgets_bg_color         = trestle_get_option( 'footer_widgets_bg_color' );
	$footer_widgets_text_color       = trestle_get_option( 'footer_widgets_text_color' );
	$footer_widgets_link_color       = trestle_get_option( 'footer_widgets_link_color' );
	$footer_widgets_link_hover_color = trestle_get_option( 'footer_widgets_link_hover_color' );
	$h1_text_color                   = trestle_get_option( 'h1_text_color' );
	$h2_text_color                   = trestle_get_option( 'h2_text_color' );
	$h3_text_color                   = trestle_get_option( 'h3_text_color' );
	$h4_text_color                   = trestle_get_option( 'h4_text_color' );
	$h5_text_color                   = trestle_get_option( 'h5_text_color' );
	$h6_text_color                   = trestle_get_option( 'h6_text_color' );
	$site_title_font_size            = trestle_get_option( 'site_title_font_size' );
	$site_description_font_size      = trestle_get_option( 'site_description_font_size' );
	$body_font_family                = trestle_get_option( 'body_font_family' );
	$h1_font_size                    = trestle_get_option( 'h1_font_size' );
	$h2_font_size                    = trestle_get_option( 'h2_font_size' );
	$h3_font_size                    = trestle_get_option( 'h3_font_size' );
	$h4_font_size                    = trestle_get_option( 'h4_font_size' );
	$h5_font_size                    = trestle_get_option( 'h5_font_size' );
	$h6_font_size                    = trestle_get_option( 'h6_font_size' );
	$h1_text_decoration              = trestle_get_option( 'h1_text_decoration' );
	$h2_text_decoration              = trestle_get_option( 'h2_text_decoration' );
	$h3_text_decoration              = trestle_get_option( 'h3_text_decoration' );
	$h4_text_decoration              = trestle_get_option( 'h4_text_decoration' );
	$h5_text_decoration              = trestle_get_option( 'h5_text_decoration' );
	$h6_text_decoration              = trestle_get_option( 'h6_text_decoration' );
	$h1_text_style                   = trestle_get_option( 'h1_text_style' );
	$h2_text_style                   = trestle_get_option( 'h2_text_style' );
	$h3_text_style                   = trestle_get_option( 'h3_text_style' );
	$h4_text_style                   = trestle_get_option( 'h4_text_style' );
	$h5_text_style                   = trestle_get_option( 'h5_text_style' );
	$h6_text_style                   = trestle_get_option( 'h6_text_style' );
	$layout                          = trestle_get_option( 'layout' );
	$google_font_code                = trestle_get_option( 'google_font_code' );

	if ( ! empty( $site_title_color ) ) {
		$styles[] = '.site-title a, .site-title a:hover { color: ' . $site_title_color . '; }';
	}

	if ( ! empty( $site_description_color ) ) {
		$styles[] = '.site-description { color: ' . $site_description_color . '; }';
	}

	if ( ! empty( $site_bg_color ) ) {
		$styles[] = 'body.bubble { background-color: ' . $site_bg_color . '; }';
		$styles[] = 'body.boxed { background-color: ' . $site_bg_color . '; }';
	}

	if ( ! empty( $body_text_color ) ) {
		$styles[] = 'body { color: ' . $body_text_color . '; }';
	}

	if ( ! empty( $body_link_color ) ) {
		$styles[] = '.site-inner a { color: ' . $body_link_color . '; }';
	}

	if ( ! empty( $body_link_hover_color ) ) {
		$styles[] = '.site-inner a:hover { color: ' . $body_link_hover_color . '; }';
	}

	if ( ! empty( $entry_title_link_color ) ) {
		$styles[] = '.entry-title a { color: ' . $entry_title_link_color . '; }';
	}

	if ( ! empty( $entry_title_link_hover_color ) ) {
		$styles[] = '.entry-title a:hover { color: ' . $entry_title_link_hover_color . '; }';
	}

	if ( ! empty( $header_bg_color ) ) {
		$styles[] = '.site-header { background-color: ' . $header_bg_color . '; }';
	}

	if ( ! empty( $menu_bg_color ) ) {
		$styles[] = '.nav-primary, .nav-secondary { background-color: ' . $menu_bg_color . '; }';
	}

	if ( ! empty( $menu_text_color ) ) {
		$styles[] = '.nav-primary a, .nav-secondary a { color: ' . $menu_text_color . '; }';
	}

	if ( ! empty( $menu_text_hover_color ) ) {
		$styles[] = '.nav-primary a:hover, .nav-secondary a:hover { color: ' . $menu_text_hover_color . '; }';
	}

	if ( ! empty( $current_menu_item_color ) ) {
		$styles[] = '.nav-primary ul li.current-menu-item > a, .nav-primary ul li.current-menu-parent > a { color: ' . $current_menu_item_color . '; }';
	}

	if ( ! empty( $sub_menu_bg_color ) ) {
		$styles[] = '.nav-primary .sub-menu { background-color: ' . $sub_menu_bg_color . '; }';
	}

	if ( ! empty( $sub_menu_text_color ) ) {
		$styles[] = '.nav-primary .sub-menu a { color: ' . $sub_menu_text_color . '; }';
		$styles[] = '.nav-primary .sub-menu-toggle .sub-menu-toggle-span { background-color: ' . $sub_menu_text_color . '; }';
	}

	if ( ! empty( $sub_menu_text_hover_color ) ) {
		$styles[] = '.nav-primary .sub-menu a:hover { color: ' . $sub_menu_text_hover_color . '; }';
		$styles[] = '.nav-primary .sub-menu-toggle .sub-menu-toggle-span { background-color: ' . $sub_menu_text_hover_color . '; }';
	}

	if ( ! empty( $sidebar_text_color ) ) {
		$styles[] = '.sidebar-primary p { color: ' . $sidebar_text_color . '; }';
	}

	if ( ! empty( $widget_title_color ) ) {
		$styles[] = '.widgettitle { color: ' . $widget_title_color . '; }';
	}

	if ( ! empty( $sidebar_link_color ) ) {
		$styles[] = '.sidebar-primary a { color: ' . $sidebar_link_color . '; }';
	}

	if ( ! empty( $sidebar_link_hover_color ) ) {
		$styles[] = '.sidebar-primary a:hover { color: ' . $sidebar_link_hover_color . '; }';
	}

	if ( ! empty( $footer_bg_color ) ) {
		$styles[] = '.site-footer { background-color: ' . $footer_bg_color . '; }';
	}

	if ( ! empty( $footer_text_color ) ) {
		$styles[] = '.site-footer p { color: ' . $footer_text_color . '; }';
	}

	if ( ! empty( $footer_link_color ) ) {
		$styles[] = '.site-footer a { color: ' . $footer_link_color . '; }';
	}

	if ( ! empty( $footer_link_hover_color ) ) {
		$styles[] = '.site-footer a:hover { color: ' . $footer_link_hover_color . '; }';
	}

	if ( ! empty( $footer_widgets_bg_color ) ) {
		$styles[] = '.footer-widgets { background-color: ' . $footer_widgets_bg_color . '; }';
	}

	if ( ! empty( $footer_widgets_text_color ) ) {
		$styles[] = '.footer-widgets p { color: ' . $footer_widgets_text_color . '; }';
	}

	if ( ! empty( $footer_widgets_link_color ) ) {
		$styles[] = '.footer-widgets a { color: ' . $footer_widgets_link_color . '; }';
	}

	if ( ! empty( $footer_widgets_link_hover_color ) ) {
		$styles[] = '.footer-widgets a:hover { color: ' . $footer_widgets_link_hover_color . '; }';
	}

	if ( ! empty( $h1_text_color ) ) {
		$styles[] = 'h1 { color: ' . $h1_text_color . '; }';
	}

	if ( ! empty( $h2_text_color ) ) {
		$styles[] = 'h2 { color: ' . $h2_text_color . '; }';
	}

	if ( ! empty( $h3_text_color ) ) {
		$styles[] = 'h3 { color: ' . $h3_text_color . '; }';
	}

	if ( ! empty( $h4_text_color ) ) {
		$styles[] = 'h4 { color: ' . $h4_text_color . '; }';
	}

	if ( ! empty( $h5_text_color ) ) {
		$styles[] = 'h5 { color: ' . $h5_text_color . '; }';
	}

	if ( ! empty( $h6_text_color ) ) {
		$styles[] = 'h6 { color: ' . $h6_text_color . '; }';
	}

	// Font size
	if ( ! empty( $site_title_font_size ) ) {
		$styles[] = '.site-title { font-size: ' . $site_title_font_size . '; }';
	}

	if ( ! empty( $site_description_font_size ) ) {
		$styles[] = '.site-description { font-size: ' . $site_description_font_size . '; }';
	}

	if ( ! empty( $body_font_family ) ) {
		$styles[] = 'body { font-family: "' . $body_font_family .  '", sans-serif; }';
	}

	if ( ! empty( $h1_font_size ) ) {
		$styles[] = 'h1 { font-size: ' . $h1_font_size . '; }';
	}

	if ( ! empty( $h2_font_size ) ) {
		$styles[] = 'h2 { font-size: ' . $h2_font_size . '; }';
	}

	if ( ! empty( $h3_font_size ) ) {
		$styles[] = 'h3 { font-size: ' . $h3_font_size . '; }';
	}

	if ( ! empty( $h4_font_size ) ) {
		$styles[] = 'h4 { font-size: ' . $h4_font_size . '; }';
	}

	if ( ! empty( $h5_font_size ) ) {
		$styles[] = 'h5 { font-size: ' . $h5_font_size . '; }';
	}

	if ( ! empty( $h6_font_size ) ) {
		$styles[] = 'h6 { font-size: ' . $h6_font_size . '; }';
	}

	// Text decoration
	if ( ! empty( $h1_text_decoration ) ) {
		$styles[] = 'h1 { text-decoration: ' . $h1_text_decoration . '; }';
	}

	if ( ! empty( $h2_text_decoration ) ) {
		$styles[] = 'h2 { text-decoration: ' . $h2_text_decoration . '; }';
	}

	if ( ! empty( $h3_text_decoration ) ) {
		$styles[] = 'h3 { text-decoration: ' . $h3_text_decoration . '; }';
	}

	if ( ! empty( $h4_text_decoration ) ) {
		$styles[] = 'h4 { text-decoration: ' . $h4_text_decoration . '; }';
	}

	if ( ! empty( $h5_text_decoration ) ) {
		$styles[] = 'h5 { text-decoration: ' . $h5_text_decoration . '; }';
	}

	if ( ! empty( $h6_text_decoration ) ) {
		$styles[] = 'h6 { text-decoration: ' . $h6_text_decoration . '; }';
	}

	// Text style
	if ( ! empty( $h1_text_style ) ) {
		$styles[] = 'h1 { text-transform: ' . $h1_text_style . '; }';
	}

	if ( ! empty( $h2_text_style ) ) {
		$styles[] = 'h2 { text-transform: ' . $h2_text_style . '; }';
	}

	if ( ! empty( $h3_text_style ) ) {
		$styles[] = 'h3 { text-transform: ' . $h3_text_style . '; }';
	}

	if ( ! empty( $h4_text_style ) ) {
		$styles[] = 'h4 { text-transform: ' . $h4_text_style . '; }';
	}

	if ( ! empty( $h5_text_style ) ) {
		$styles[] = 'h5 { text-transform: ' . $h5_text_style . '; }';
	}

	if ( ! empty( $h6_text_style ) ) {
		$styles[] = 'h6 { text-transform: ' . $h6_text_style . '; }';
	}

	// Google Font
	if ( ! empty( $google_font_code ) ) {
		echo $google_font_code;
	}

	printf(
	'<style type="text/css">%s</style>',
	implode( ' ', $styles )
	);
}
