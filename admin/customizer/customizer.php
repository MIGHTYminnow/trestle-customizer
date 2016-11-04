<?php
/**
 * Trestle Customizer Controls.
 *
 * @since  2.0.0
 *
 * @package  Trestle
 */

add_action( 'customize_register', 'trestle_customizer_plugin_controls', 20 );
/**
 * Register Trestle's controls.
 *
 * @since  2.0.0
 *
 * @param  $wp_customize  The Customizer Object.
 */
function trestle_customizer_plugin_controls( $wp_customize ) {

	// Remove extra colors panel from the custom background theme support function.
	$wp_customize->remove_section('colors');

	/**
	 * Add Colors panel
	 */
	$wp_customize->add_panel( 'trestle_colors_panel', array(
		'priority'       => 30,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Colors', 'trestle'),
		'description'    => __('Color settings pertaining Trestle', 'trestle'),
	) );

	/**
	 *  Header Colors Section, controls and settings
	 */
	// Add the section.
	$wp_customize->add_section(
		'trestle_header_colors_section',
		array(
			'title'    => __( 'Header', 'trestle' ),
			'priority' => 60,
			'panel'    => 'trestle_colors_panel',
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[site_title_color]',
		array(
			'default'    => trestle_get_option( 'site_title_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_site_title_color_control',
			array(
				'section'    => 'trestle_header_colors_section',
				'settings'   => 'trestle-settings[site_title_color]',
				'label'      => __( 'Site Title', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[site_description_color]',
		array(
			'default'    => trestle_get_option( 'site_description_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_site_description_color_control',
			array(
				'section'    => 'trestle_header_colors_section',
				'settings'   => 'trestle-settings[site_description_color]',
				'label'      => __( 'Site Description', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[header_bg_color]',
		array(
			'default'    => trestle_get_option( 'header_bg_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_header_bg_color_control',
			array(
				'section'    => 'trestle_header_colors_section',
				'settings'   => 'trestle-settings[header_bg_color]',
				'label'      => __( 'Header Background Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[menu_bg_color]',
		array(
			'default'    => trestle_get_option( 'menu_bg_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_menu_bg_color_control',
			array(
				'section'    => 'trestle_header_colors_section',
				'settings'   => 'trestle-settings[menu_bg_color]',
				'label'      => __( 'Menu Background Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[menu_text_color]',
		array(
			'default'    => trestle_get_option( 'menu_text_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_menu_text_color_control',
			array(
				'section'    => 'trestle_header_colors_section',
				'settings'   => 'trestle-settings[menu_text_color]',
				'label'      => __( 'Menu Text Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[menu_text_hover_color]',
		array(
			'default'    => trestle_get_option( 'menu_text_hover_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_menu_text_hover_color_control',
			array(
				'section'    => 'trestle_header_colors_section',
				'settings'   => 'trestle-settings[menu_text_hover_color]',
				'label'      => __( 'Menu Text Hover Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[current_menu_item_color]',
		array(
			'default'    => trestle_get_option( 'current_menu_item_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_current_menu_item_color_control',
			array(
				'section'    => 'trestle_header_colors_section',
				'settings'   => 'trestle-settings[current_menu_item_color]',
				'label'      => __( 'Current Menu Item Text Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[sub_menu_bg_color]',
		array(
			'default'    => trestle_get_option( 'sub_menu_bg_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_sub_menu_bg_color_control',
			array(
				'section'    => 'trestle_header_colors_section',
				'settings'   => 'trestle-settings[sub_menu_bg_color]',
				'label'      => __( 'Sub-menu Background Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[sub_menu_text_color]',
		array(
			'default'    => trestle_get_option( 'sub_menu_text_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_sub_menu_text_color_control',
			array(
				'section'    => 'trestle_header_colors_section',
				'settings'   => 'trestle-settings[sub_menu_text_color]',
				'label'      => __( 'Sub-menu Text Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[sub_menu_text_hover_color]',
		array(
			'default'    => trestle_get_option( 'sub_menu_text_hover_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_sub_menu_text_hover_color_control',
			array(
				'section'    => 'trestle_header_colors_section',
				'settings'   => 'trestle-settings[sub_menu_text_hover_color]',
				'label'      => __( 'Sub-menu Text Hover Color', 'trestle' ),
			)
		)
	);


	/**
	 *  Body Colors Section, controls and settings
	 */
	// Add the section.
	$wp_customize->add_section(
		'trestle_body_colors_section',
		array(
			'title'    => __( 'Body', 'trestle' ),
			'priority' => 60,
			'panel'    => 'trestle_colors_panel',
		)
	);

	$wp_customize->add_setting(
	'trestle-settings[site_bg_color]',
		array(
			'default'    => trestle_get_option( 'site_bg_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_site_bg_color_control',
			array(
				'section'    => 'trestle_body_colors_section',
				'settings'   => 'trestle-settings[site_bg_color]',
				'label'      => __( 'Site Background Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[body_text_color]',
		array(
			'default'    => trestle_get_option( 'body_text_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_body_text_color_control',
			array(
				'section'    => 'trestle_body_colors_section',
				'settings'   => 'trestle-settings[body_text_color]',
				'label'      => __( 'Body Text Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[body_link_color]',
		array(
			'default'    => trestle_get_option( 'body_link_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_body_link_color_control',
			array(
				'section'    => 'trestle_body_colors_section',
				'settings'   => 'trestle-settings[body_link_color]',
				'label'      => __( 'Body Link Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[body_link_hover_color]',
		array(
			'default'    => trestle_get_option( 'body_link_hover_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_body_link_hover_color_control',
			array(
				'section'    => 'trestle_body_colors_section',
				'settings'   => 'trestle-settings[body_link_hover_color]',
				'label'      => __( 'Body Link Hover Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[entry_title_link_color]',
		array(
			'default'    => trestle_get_option( 'entry_title_link_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_entry_title_link_color_control',
			array(
				'section'    => 'trestle_body_colors_section',
				'settings'   => 'trestle-settings[entry_title_link_color]',
				'label'      => __( 'Entry Title Link Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[entry_title_link_hover_color]',
		array(
			'default'    => trestle_get_option( 'entry_title_link_hover_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_entry_title_link_hover_color_control',
			array(
				'section'    => 'trestle_body_colors_section',
				'settings'   => 'trestle-settings[entry_title_link_hover_color]',
				'label'      => __( 'Entry Title Link Hover Color', 'trestle' ),
			)
		)
	);

	/**
	 *  Sidebar Colors Section, controls and settings
	 */
	// Add the section.
	$wp_customize->add_section(
		'trestle_sidebar_colors_section',
		array(
			'title'    => __( 'Sidebar', 'trestle' ),
			'priority' => 60,
			'panel'    => 'trestle_colors_panel',
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[sidebar_text_color]',
		array(
			'default'    => trestle_get_option( 'sidebar_text_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_sidebar_text_color_control',
			array(
				'section'    => 'trestle_sidebar_colors_section',
				'settings'   => 'trestle-settings[sidebar_text_color]',
				'label'      => __( 'Sidebar Text Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[widget_title_color]',
		array(
			'default'    => trestle_get_option( 'widget_title_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_widget_title_color_control',
			array(
				'section'    => 'trestle_sidebar_colors_section',
				'settings'   => 'trestle-settings[widget_title_color]',
				'label'      => __( 'Widget Title Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[sidebar_link_color]',
		array(
			'default'    => trestle_get_option( 'sidebar_link_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_sidebar_link_color_control',
			array(
				'section'    => 'trestle_sidebar_colors_section',
				'settings'   => 'trestle-settings[sidebar_link_color]',
				'label'      => __( 'Sidebar Link Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[sidebar_link_hover_color]',
		array(
			'default'    => trestle_get_option( 'sidebar_link_hover_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_sidebar_link_hover_color_control',
			array(
				'section'    => 'trestle_sidebar_colors_section',
				'settings'   => 'trestle-settings[sidebar_link_hover_color]',
				'label'      => __( 'Sidebar Link Hover Color', 'trestle' ),
			)
		)
	);

	/**
	 *  Footer Colors Section, controls and settings
	 */
	// Add the section.
	$wp_customize->add_section(
		'trestle_footer_colors_section',
		array(
			'title'    => __( 'Footer', 'trestle' ),
			'priority' => 60,
			'panel'    => 'trestle_colors_panel',
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[footer_bg_color]',
		array(
			'default'    => trestle_get_option( 'footer_bg_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_footer_bg_color_control',
			array(
				'section'    => 'trestle_footer_colors_section',
				'settings'   => 'trestle-settings[footer_bg_color]',
				'label'      => __( 'Footer Background Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[footer_text_color]',
		array(
			'default'    => trestle_get_option( 'footer_text_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_footer_text_color_control',
			array(
				'section'    => 'trestle_footer_colors_section',
				'settings'   => 'trestle-settings[footer_text_color]',
				'label'      => __( 'Footer Text Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[footer_link_color]',
		array(
			'default'    => trestle_get_option( 'footer_link_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_footer_link_color_control',
			array(
				'section'    => 'trestle_footer_colors_section',
				'settings'   => 'trestle-settings[footer_link_color]',
				'label'      => __( 'Footer Link Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[footer_link_hover_color]',
		array(
			'default'    => trestle_get_option( 'footer_link_hover_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_footer_link_hover_color_control',
			array(
				'section'    => 'trestle_footer_colors_section',
				'settings'   => 'trestle-settings[footer_link_hover_color]',
				'label'      => __( 'Footer Link Hover Color', 'trestle' ),
			)
		)
	);

	/**
	 *  Footer Widget Colors Section, controls and settings
	 */
	// Add the section.
	$wp_customize->add_section(
		'trestle_footer_widgets_colors_section',
		array(
			'title'    => __( 'Footer Widgets Area', 'trestle' ),
			'priority' => 60,
			'panel'    => 'trestle_colors_panel',
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[footer_widgets_bg_color]',
		array(
			'default'    => trestle_get_option( 'footer_widgets_bg_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_footer_widgets_bg_color_control',
			array(
				'section'    => 'trestle_footer_widgets_colors_section',
				'settings'   => 'trestle-settings[footer_widgets_bg_color]',
				'label'      => __( 'Footer Widgets Area Background Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[footer_widgets_text_color]',
		array(
			'default'    => trestle_get_option( 'footer_widgets_text_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_footer_widgets_text_color_control',
			array(
				'section'    => 'trestle_footer_widgets_colors_section',
				'settings'   => 'trestle-settings[footer_widgets_text_color]',
				'label'      => __( 'Footer Widgets Text Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[footer_widgets_link_color]',
		array(
			'default'    => trestle_get_option( 'footer_widgets_link_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_footer_widgets_link_color_control',
			array(
				'section'    => 'trestle_footer_widgets_colors_section',
				'settings'   => 'trestle-settings[footer_widgets_link_color]',
				'label'      => __( 'Footer Widgets Link Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[footer_widgets_link_hover_color]',
		array(
			'default'    => trestle_get_option( 'footer_widgets_link_hover_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_footer_widgets_link_hover_color_control',
			array(
				'section'    => 'trestle_footer_widgets_colors_section',
				'settings'   => 'trestle-settings[footer_widgets_link_hover_color]',
				'label'      => __( 'Footer Widgets Link Hover Color', 'trestle' ),
			)
		)
	);

	/**
	 *  Text Colors Section, controls and settings
	 */
	// Add the section.
	$wp_customize->add_section(
		'trestle_text_colors_section',
		array(
			'title'    => __( 'Headings', 'trestle' ),
			'priority' => 60,
			'panel'    => 'trestle_colors_panel',
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h1_text_color]',
		array(
			'default'    => trestle_get_option( 'h1_text_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_h1_text_color_control',
			array(
				'section'    => 'trestle_text_colors_section',
				'settings'   => 'trestle-settings[h1_text_color]',
				'label'      => __( 'h1 Text Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h2_text_color]',
		array(
			'default'    => trestle_get_option( 'h2_text_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_h2_text_color_control',
			array(
				'section'    => 'trestle_text_colors_section',
				'settings'   => 'trestle-settings[h2_text_color]',
				'label'      => __( 'h2 Text Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h3_text_color]',
		array(
			'default'    => trestle_get_option( 'h3_text_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_h3_text_color_control',
			array(
				'section'    => 'trestle_text_colors_section',
				'settings'   => 'trestle-settings[h3_text_color]',
				'label'      => __( 'h3 Text Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h4_text_color]',
		array(
			'default'    => trestle_get_option( 'h4_text_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_h4_text_color_control',
			array(
				'section'    => 'trestle_text_colors_section',
				'settings'   => 'trestle-settings[h4_text_color]',
				'label'      => __( 'h4 Text Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h5_text_color]',
		array(
			'default'    => trestle_get_option( 'h5_text_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_h5_text_color_control',
			array(
				'section'    => 'trestle_text_colors_section',
				'settings'   => 'trestle-settings[h5_text_color]',
				'label'      => __( 'h5 Text Color', 'trestle' ),
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h6_text_color]',
		array(
			'default'    => trestle_get_option( 'h6_text_color' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'trestle_h6_text_color_control',
			array(
				'section'    => 'trestle_text_colors_section',
				'settings'   => 'trestle-settings[h6_text_color]',
				'label'      => __( 'h6 Text Color', 'trestle' ),
			)
		)
	);

	/**
	 * Add Fonts panel
	 */
	$wp_customize->add_panel( 'trestle_fonts_panel', array(
		'priority'       => 30,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Fonts', 'trestle'),
		'description'    => __('Font settings pertaining Trestle', 'trestle'),
	) );

	/**
	 *  Header Fonts Section, controls and settings
	 */
	// Add the section.
	$wp_customize->add_section(
		'trestle_header_fonts_section',
		array(
			'title'    => __( 'Header', 'trestle' ),
			'priority' => 10,
			'panel'    => 'trestle_fonts_panel',
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[site_title_font_size]',
		array(
			'default'    => trestle_get_option( 'site_title_font_size' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_site_title_font_size_control',
		array(
			'section'  => 'trestle_header_fonts_section',
			'settings' => 'trestle-settings[site_title_font_size]',
			'label'    => __( 'Site Title Font Size', 'trestle' ),
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[site_description_font_size]',
		array(
			'default'    => trestle_get_option( 'site_description_font_size' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_site_description_font_size_control',
		array(
			'section'  => 'trestle_header_fonts_section',
			'settings' => 'trestle-settings[site_description_font_size]',
			'label'    => __( 'Site Description Font Size', 'trestle' ),
		)
	);

	/**
	 *  Text Font Settings Section, controls and settings
	 */
	// Add the section.
	$wp_customize->add_section(
		'trestle_text_fonts_section',
		array(
			'title'    => __( 'Headings', 'trestle' ),
			'priority' => 20,
			'panel'    => 'trestle_fonts_panel',
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h1_font_size]',
		array(
			'default'    => trestle_get_option( 'h1_font_size' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_h1_font_size_control',
		array(
			'section'  => 'trestle_text_fonts_section',
			'settings' => 'trestle-settings[h1_font_size]',
			'label'    => __( 'h1 Font Size', 'trestle' ),
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h1_text_decoration]',
		array(
			'default'    => trestle_get_option( 'h1_text_decoration' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_h1_text_decoration_control',
		array(
			'section'  => 'trestle_text_fonts_section',
			'settings' => 'trestle-settings[h1_text_decoration]',
			'label'    => __( 'h1 Text Decoration', 'trestle' ),
			'type'     => 'select',
			'choices'  => array(
				''             => 'None',
				'line-through' => 'Line-through',
				'overline'     => 'Overline',
				'underline'    => 'Underline',
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h1_text_style]',
		array(
			'default'    => trestle_get_option( 'h1_text_style' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_h1_text_style_control',
		array(
			'section'  => 'trestle_text_fonts_section',
			'settings' => 'trestle-settings[h1_text_style]',
			'label'    => __( 'h1 Text Style', 'trestle' ),
			'type'     => 'select',
			'choices'  => array(
				''           => 'None',
				'capitalize' => 'Capitalize',
				'lowercase'  => 'Lowercase',
				'uppercase'  => 'Uppercase',
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h2_font_size]',
		array(
			'default'    => trestle_get_option( 'h2_font_size' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_h2_font_size_control',
		array(
			'section'  => 'trestle_text_fonts_section',
			'settings' => 'trestle-settings[h2_font_size]',
			'label'    => __( 'h2 Font Size', 'trestle' ),
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h2_text_decoration]',
		array(
			'default'    => trestle_get_option( 'h2_text_decoration' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_h2_text_decoration_control',
		array(
			'section'  => 'trestle_text_fonts_section',
			'settings' => 'trestle-settings[h2_text_decoration]',
			'label'    => __( 'h2 Text Decoration', 'trestle' ),
			'type'     => 'select',
			'choices'  => array(
				''             => 'None',
				'line-through' => 'Line-through',
				'overline'     => 'Overline',
				'underline'    => 'Underline',
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h2_text_style]',
		array(
			'default'    => trestle_get_option( 'h2_text_style' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_h2_text_style_control',
		array(
			'section'  => 'trestle_text_fonts_section',
			'settings' => 'trestle-settings[h2_text_style]',
			'label'    => __( 'h2 Text Style', 'trestle' ),
			'type'     => 'select',
			'choices'  => array(
				''           => 'None',
				'capitalize' => 'Capitalize',
				'lowercase'  => 'Lowercase',
				'uppercase'  => 'Uppercase',
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h3_font_size]',
		array(
			'default'    => trestle_get_option( 'h3_font_size' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_h3_font_size_control',
		array(
			'section'  => 'trestle_text_fonts_section',
			'settings' => 'trestle-settings[h3_font_size]',
			'label'    => __( 'h3 Font Size', 'trestle' ),
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h3_text_decoration]',
		array(
			'default'    => trestle_get_option( 'h3_text_decoration' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_h3_text_decoration_control',
		array(
			'section'  => 'trestle_text_fonts_section',
			'settings' => 'trestle-settings[h3_text_decoration]',
			'label'    => __( 'h3 Text Decoration', 'trestle' ),
			'type'     => 'select',
			'choices'  => array(
				''             => 'None',
				'line-through' => 'Line-through',
				'overline'     => 'Overline',
				'underline'    => 'Underline',
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h3_text_style]',
		array(
			'default'    => trestle_get_option( 'h3_text_style' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_h3_text_style_control',
		array(
			'section'  => 'trestle_text_fonts_section',
			'settings' => 'trestle-settings[h3_text_style]',
			'label'    => __( 'h3 Text Style', 'trestle' ),
			'type'     => 'select',
			'choices'  => array(
				''           => 'None',
				'capitalize' => 'Capitalize',
				'lowercase'  => 'Lowercase',
				'uppercase'  => 'Uppercase',
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h4_font_size]',
		array(
			'default'    => trestle_get_option( 'h4_font_size' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_h4_font_size_control',
		array(
			'section'  => 'trestle_text_fonts_section',
			'settings' => 'trestle-settings[h4_font_size]',
			'label'    => __( 'h4 Font Size', 'trestle' ),
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h4_text_decoration]',
		array(
			'default'    => trestle_get_option( 'h4_text_decoration' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_h4_text_decoration_control',
		array(
			'section'  => 'trestle_text_fonts_section',
			'settings' => 'trestle-settings[h4_text_decoration]',
			'label'    => __( 'h4 Text Decoration', 'trestle' ),
			'type'     => 'select',
			'choices'  => array(
				''             => 'None',
				'line-through' => 'Line-through',
				'overline'     => 'Overline',
				'underline'    => 'Underline',
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h4_text_style]',
		array(
			'default'    => trestle_get_option( 'h4_text_style' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_h4_text_style_control',
		array(
			'section'  => 'trestle_text_fonts_section',
			'settings' => 'trestle-settings[h4_text_style]',
			'label'    => __( 'h4 Text Style', 'trestle' ),
			'type'     => 'select',
			'choices'  => array(
				''           => 'None',
				'capitalize' => 'Capitalize',
				'lowercase'  => 'Lowercase',
				'uppercase'  => 'Uppercase',
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h5_font_size]',
		array(
			'default'    => trestle_get_option( 'h5_font_size' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_h5_font_size_control',
		array(
			'section'  => 'trestle_text_fonts_section',
			'settings' => 'trestle-settings[h5_font_size]',
			'label'    => __( 'h5 Font Size', 'trestle' ),
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h5_text_decoration]',
		array(
			'default'    => trestle_get_option( 'h5_text_decoration' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_h5_text_decoration_control',
		array(
			'section'  => 'trestle_text_fonts_section',
			'settings' => 'trestle-settings[h5_text_decoration]',
			'label'    => __( 'h5 Text Decoration', 'trestle' ),
			'type'     => 'select',
			'choices'  => array(
				''             => 'None',
				'line-through' => 'Line-through',
				'overline'     => 'Overline',
				'underline'    => 'Underline',
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h5_text_style]',
		array(
			'default'    => trestle_get_option( 'h5_text_style' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_h5_text_style_control',
		array(
			'section'  => 'trestle_text_fonts_section',
			'settings' => 'trestle-settings[h5_text_style]',
			'label'    => __( 'h5 Text Style', 'trestle' ),
			'type'     => 'select',
			'choices'  => array(
				''           => 'None',
				'capitalize' => 'Capitalize',
				'lowercase'  => 'Lowercase',
				'uppercase'  => 'Uppercase',
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h6_font_size]',
		array(
			'default'    => trestle_get_option( 'h6_font_size' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_h6_font_size_control',
		array(
			'section'  => 'trestle_text_fonts_section',
			'settings' => 'trestle-settings[h6_font_size]',
			'label'    => __( 'h6 Font Size', 'trestle' ),
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h6_text_decoration]',
		array(
			'default'    => trestle_get_option( 'h6_text_decoration' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_h6_text_decoration_control',
		array(
			'section'  => 'trestle_text_fonts_section',
			'settings' => 'trestle-settings[h6_text_decoration]',
			'label'    => __( 'h6 Text Decoration', 'trestle' ),
			'type'     => 'select',
			'choices'  => array(
				''             => 'None',
				'line-through' => 'Line-through',
				'overline'     => 'Overline',
				'underline'    => 'Underline',
			)
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[h6_text_style]',
		array(
			'default'    => trestle_get_option( 'h6_text_style' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_h6_text_style_control',
		array(
			'section'  => 'trestle_text_fonts_section',
			'settings' => 'trestle-settings[h6_text_style]',
			'label'    => __( 'h6 Text Style', 'trestle' ),
			'type'     => 'select',
			'choices'  => array(
				''           => 'None',
				'capitalize' => 'Capitalize',
				'lowercase'  => 'Lowercase',
				'uppercase'  => 'Uppercase',
			)
		)
	);

	/**
	 *  Google Fonts Settings Section, controls and settings
	 */
	// Add the section.
	$wp_customize->add_section(
		'trestle_google_fonts_section',
		array(
			'title'    => __( 'Google Fonts', 'trestle' ),
			'priority' => 60,
			'panel'    => 'trestle_fonts_panel',
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[google_font_code]',
		array(
			'default'    => trestle_get_option( 'google_font_code' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_google_font_code_control',
		array(
			'section'     => 'trestle_google_fonts_section',
			'settings'    => 'trestle-settings[google_font_code]',
			'label'       => __( 'Google Font Code', 'trestle' ),
			'description' => '<a target="_blank" href="http://themes.mightyminnow.com/trestle/google-font-styling-setup/">' . __( 'How do I setup Google fonts?' ) . '</a>',
		)
	);

	$wp_customize->add_setting(
		'trestle-settings[body_font_family]',
		array(
			'default'    => trestle_get_option( 'body_font_family' ),
			'type'       => 'option',
			'capability' => 'edit_theme_options',
		)
	);

	$wp_customize->add_control(
		'trestle_body_font_family_control',
		array(
			'section'  => 'trestle_google_fonts_section',
			'settings' => 'trestle-settings[body_font_family]',
			'label'    => __( 'Body Font Family Name', 'trestle' ),
		)
	);
}