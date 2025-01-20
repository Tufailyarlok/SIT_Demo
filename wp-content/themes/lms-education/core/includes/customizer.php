<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'lms_education_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'lms-education' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'lms-education' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'lms_education_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'lms-education' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'lms-education' ),
			'off' => esc_html__( 'Disable', 'lms-education' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'lms_education_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'lms-education' ),
		'section'     => 'title_tagline',
		'default'     => false	,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'lms-education' ),
			'off' => esc_html__( 'Disable', 'lms-education' ),
		],
	] );

	// FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'lms_education_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'lms-education' ),
	) );

	Kirki::add_section( 'lms_education_font_style_section', array(
		'title'      => esc_html__( 'Typography Option',  'lms-education' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'lms-education' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( LMS_EDUCATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'lms-education' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'lms_education_font_style_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. More Font Family Options </p><p>3. Color Pallete Setup </p><p>4. Section Reordering Facility</p><p>5. For More Options kindly Go For Premium Version.</p>', 'lms-education' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_all_headings_typography',
		'section'     => 'lms_education_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'lms-education' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'lms_education_all_headings_typography',
		'label'       => esc_html__( 'Heading Typography',  'lms-education' ),
		'description' => esc_html__( 'Select the typography options for your heading.',  'lms-education' ),
		'section'     => 'lms_education_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_body_content_typography',
		'section'     => 'lms_education_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'lms-education' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'lms_education_body_content_typography',
		'label'       => esc_html__( 'Content Typography',  'lms-education' ),
		'description' => esc_html__( 'Select the typography options for your content.',  'lms-education' ),
		'section'     => 'lms_education_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

		// PANEL
	Kirki::add_panel( 'lms_education_panel_id_5', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Animations', 'lms-education' ),
	) );

	// ANIMATION SECTION
	Kirki::add_section( 'lms_education_section_animation', array(
	    'title'          => esc_html__( 'Animations', 'lms-education' ),
	    'panel'          => 'lms_education_panel_id_5',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'lms-education' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( LMS_EDUCATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'lms-education' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'lms_education_section_animation',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'lms-education' ) . '</div>',
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'lms_education_animation_enabled',
		'label'       => esc_html__( 'Turn To Show Animation', 'lms-education' ),
		'section'     => 'lms_education_section_animation',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'lms-education' ),
			'off' => esc_html__( 'Disable', 'lms-education' ),
		],
	] );

		// PANEL
	Kirki::add_panel( 'lms_education_panel_id_2', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Dark Mode', 'lms-education' ),
	) );

	// DARK MODE SECTION
	Kirki::add_section( 'lms_education_section_dark_mode', array(
	    'title'          => esc_html__( 'Dark Mode', 'lms-education' ),
	    'panel'          => 'lms_education_panel_id_2',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'lms-education' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( LMS_EDUCATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'lms-education' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'lms_education_section_dark_mode',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'lms-education' ) . '</div>',
	]);

	Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'lms_education_dark_colors',
	    'section'     => 'lms_education_section_dark_mode',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Dark Appearance', 'lms-education' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'lms_education_is_dark_mode_enabled',
		'label'       => esc_html__( 'Turn To Dark Mode', 'lms-education' ),
		'section'     => 'lms_education_section_dark_mode',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'lms-education' ),
			'off' => esc_html__( 'Disable', 'lms-education' ),
		],
	] );

	// PANEL

	Kirki::add_panel( 'lms_education_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'lms-education' ),
	) );

	// Additional Settings

	Kirki::add_section( 'lms_education_section_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'lms-education' ),
	    'panel'          => 'lms_education_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'lms-education' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( LMS_EDUCATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'lms-education' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'lms_education_section_additional_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'lms-education' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'lms_education_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'lms-education' ),
		'section'     => 'lms_education_section_additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'lms_education_scroll_top_position',
		'label'       => esc_html__( 'Alignment for Scroll To Top', 'lms-education' ),
		'section'     => 'lms_education_section_additional_settings',
		'default'     => 'Right',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'lms-education' ),
			'Center' => esc_html__( 'Center', 'lms-education' ),
			'Right'  => esc_html__( 'Right', 'lms-education' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'lms_education_scroll_top_icon',
		'label'    => esc_html__( 'Select Appropriate Scroll Top Icon', 'lms-education' ),
		'section'  => 'lms_education_section_additional_settings',
		'default'  => 'dashicons dashicons-arrow-up-alt',
		'priority' => 10,
	] );


	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_lms_education',
		'label'       => esc_html__( 'Menus Text Transform', 'lms-education' ),
		'section'     => 'lms_education_section_additional_settings',
		'default'     => 'UPPERCASE',
		'placeholder' => esc_html__( 'Choose an option', 'lms-education' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'lms-education' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'lms-education' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'lms-education' ),

		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'lms_education_menu_zoom',
		'label'       => esc_html__( 'Menu Transition', 'lms-education' ),
		'section'     => 'lms_education_additional_settings',
		'default' => 'None',
		'placeholder' => esc_html__( 'Choose an option', 'lms-education' ),
		'choices'     => [
			'None' => __('None','lms-education'),
            'Zoominn' => __('Zoom Inn','lms-education'),
            
		],
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'lms_education_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'lms-education' ),
		'section'     => 'lms_education_section_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'lms_education_sticky_header',
		'label'       => esc_html__( 'Here you can enable or disable your Sticky Header.', 'lms-education' ),
		'section'     => 'lms_education_section_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'lms_education_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'lms-education' ),
		'section'     => 'lms_education_section_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'lms_education_preloader_type',
		'label'       => esc_html__( 'Preloader Type', 'lms-education' ),
		'section'     => 'lms_education_section_additional_settings',
		'default' => 'four-way-loader',
		'placeholder' => esc_html__( 'Choose an option', 'lms-education' ),
		'choices'     => [
			'four-way-loader' => __('Type 1','lms-education'),
            'cube-loader' => __('Type 2','lms-education'),
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'lms_education_page_layout',
		'label'       => esc_html__( 'Page Layout Setting', 'lms-education' ),
		'section'     => 'lms_education_section_additional_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'lms-education' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','lms-education'),
            'Right Sidebar' => __('Right Sidebar','lms-education'),
            'One Column' => __('One Column','lms-education')
		],
	] );

	if ( class_exists("woocommerce")){

	// Woocommerce Settings

	Kirki::add_section( 'lms_education_woocommerce_settings', array(
			'title'          => esc_html__( 'Woocommerce Settings', 'lms-education' ),
			'panel'          => 'lms_education_panel_id',
			'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'lms-education' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( LMS_EDUCATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'lms-education' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'lms_education_woocommerce_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'lms-education' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'lms_education_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'lms-education' ),
		'section'     => 'lms_education_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'lms_education_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'lms-education' ),
		'section'     => 'lms_education_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'lms_education_related_product_setting',
		'label'       => esc_html__( 'Here you can enable or disable your related products.', 'lms-education' ),
		'section'     => 'lms_education_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Number(
		[
			'settings' => 'lms_education_per_columns',
			'label'    => esc_html__( 'Product Per Row', 'lms-education' ),
			'section'  => 'lms_education_woocommerce_settings',
			'default'  => 3,
			'choices'  => [
				'min'  => 1,
				'max'  => 4,
				'step' => 1,
			],
		]
	);

	new \Kirki\Field\Number(
		[
			'settings' => 'lms_education_product_per_page',
			'label'    => esc_html__( 'Product Per Page', 'lms-education' ),
			'section'  => 'lms_education_woocommerce_settings',
			'default'  => 9,
			'choices'  => [
				'min'  => 1,
				'max'  => 15,
				'step' => 1,
			],
		]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number_per_row',
		'label'    => esc_html__( 'Related Product Per Column', 'lms-education' ),
		'section'  => 'lms_education_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number',
		'label'    => esc_html__( 'Related Product Per Page', 'lms-education' ),
		'section'  => 'lms_education_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 10,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'lms_education_shop_page_layout',
		'label'       => esc_html__( 'Shop Page Layout Setting', 'lms-education' ),
		'section'     => 'lms_education_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'lms-education' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','lms-education'),
            'Right Sidebar' => __('Right Sidebar','lms-education')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'lms_education_product_page_layout',
		'label'       => esc_html__( 'Product Page Layout Setting', 'lms-education' ),
		'section'     => 'lms_education_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'lms-education' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','lms-education'),
            'Right Sidebar' => __('Right Sidebar','lms-education')
		],
	] );
}

	// COLOR SECTION

	Kirki::add_section( 'lms_education_section_color', array(
	    'title'          => esc_html__( 'Global Color', 'lms-education' ),
	    'panel'          => 'lms_education_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'lms-education' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( LMS_EDUCATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'lms-education' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'lms_education_section_color',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'lms-education' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_global_colors',
		'section'     => 'lms_education_section_color',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Here you can change your theme color on one click.', 'lms-education' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'lms_education_global_color',
		'label'       => __( 'choose your Appropriate Color', 'lms-education' ),
		'section'     => 'lms_education_section_color',
		'default'     => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'lms_education_global_color_2',
		'label'       => __( 'Choose Your Second Color', 'lms-education' ),
		'section'     => 'lms_education_section_color',
		'default'     => '',
	] );

	// POST SECTION

	Kirki::add_section( 'lms_education_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'lms-education' ),
	    'panel'          => 'lms_education_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'lms-education' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( LMS_EDUCATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'lms-education' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'lms_education_section_post',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'lms-education' ) . '</div>',
	] );

	new \Kirki\Field\Sortable(
	[
		'settings' => 'lms_education_archive_element_sortable',
		'label'    => __( 'Archive Post Page element Reordering', 'lms-education' ),
		'section'  => 'lms_education_section_post',
		'default'  => [ 'option1', 'option2', 'option3' ],
		'choices'  => [
			'option1' => esc_html__( 'Post Meta', 'lms-education' ),
			'option2' => esc_html__( 'Post Title', 'lms-education' ),
			'option3' => esc_html__( 'Post Content', 'lms-education' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'lms_education_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'lms-education' ),
		'section'     => 'lms_education_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'lms_education_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'lms-education' ),
		'section'     => 'lms_education_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'lms_education_archive_sidebar_layout',
		'label'       => esc_html__( 'Archive Post Sidebar Layout Setting', 'lms-education' ),
		'section'     => 'lms_education_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'lms-education' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','lms-education'),
            'Right Sidebar' => __('Right Sidebar','lms-education'),
            'Three Column' => __('Three Column','lms-education'),
            'Four Column' => __('Four Column','lms-education'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','lms-education'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','lms-education'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','lms-education')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'lms_education_single_post_sidebar_layout',
		'label'       => esc_html__( 'Single Post Sidebar Layout Setting', 'lms-education' ),
		'section'     => 'lms_education_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'lms-education' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','lms-education'),
            'Right Sidebar' => __('Right Sidebar','lms-education'),
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'lms_education_search_sidebar_layout',
		'label'       => esc_html__( 'Search Page Sidebar Layout Setting', 'lms-education' ),
		'section'     => 'lms_education_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'lms-education' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','lms-education'),
            'Right Sidebar' => __('Right Sidebar','lms-education'),
            'Three Column' => __('Three Column','lms-education'),
            'Four Column' => __('Four Column','lms-education'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','lms-education'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','lms-education'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','lms-education')
		],
	] );

	Kirki::add_field( 'lms_education_config', [
		'type'        => 'select',
		'settings'    => 'lms_education_post_column_count',
		'label'       => esc_html__( 'Grid Column for Archive Page', 'lms-education' ),
		'section'     => 'lms_education_section_post',
		'default'    => '2',
		'choices' => [
				'1' => __( '1 Column', 'lms-education' ),
				'2' => __( '2 Column', 'lms-education' ),
			],
	] );

	// Breadcrumb
	Kirki::add_section( 'lms_education_bradcrumb', array(
	    'title'          => esc_html__( 'Breadcrumb Settings', 'lms-education' ),
	    'panel'          => 'lms_education_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'lms-education' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( LMS_EDUCATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'lms-education' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'lms_education_bradcrumb',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'lms-education' ) . '</div>',
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_enable_breadcrumb_heading',
		'section'     => 'lms_education_bradcrumb',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Single Page Breadcrumb', 'lms-education' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'lms_education_breadcrumb_enable',
		'label'       => esc_html__( 'Breadcrumb Enable / Disable', 'lms-education' ),
		'section'     => 'lms_education_bradcrumb',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'lms-education' ),
			'off' => esc_html__( 'Disable', 'lms-education' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'default'     => '/',
        'settings' => 'lms_education_breadcrumb_separator' ,
        'label'    => esc_html__( 'Breadcrumb Separator',  'lms-education' ),
        'section'  => 'lms_education_bradcrumb',
    ] );

	// HEADER SECTION

	Kirki::add_section( 'lms_education_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'lms-education' ),
	    'panel'          => 'lms_education_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'lms-education' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( LMS_EDUCATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'lms-education' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'lms_education_section_header',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'lms-education' ) . '</div>',
	    'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_phone_icon',
		'section'     => 'lms_education_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Choose Your Icon Here', 'lms-education' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'lms_education_dashicons_setting_1',
		'label'    => esc_html__( 'Select Appropriate Icon', 'lms-education' ),
		'section'  => 'lms_education_section_header',
		'default'  => 'dashicons dashicons-phone',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_phone_text',
		'section'     => 'lms_education_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'lms-education' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'lms_education_phone_number',
		'section'  => 'lms_education_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_email_icon',
		'section'     => 'lms_education_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Choose Your Icon Here', 'lms-education' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'lms_education_dashicons_setting_2',
		'label'    => esc_html__( 'Select Appropriate Icon', 'lms-education' ),
		'section'  => 'lms_education_section_header',
		'default'  => 'dashicons dashicons-email',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_email_text',
		'section'     => 'lms_education_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Eamil Address', 'lms-education' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'lms_education_email_address',
		'section'  => 'lms_education_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_button1_text',
		'section'     => 'lms_education_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Button 1 Text', 'lms-education' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => __( 'Add Text', 'lms-education' ),
		'settings' => 'lms_education_register_text',
		'section'  => 'lms_education_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'link',
		'label'    => __( 'Add Link', 'lms-education' ),
		'settings' => 'lms_education_register_link',
		'section'  => 'lms_education_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_button2_text',
		'section'     => 'lms_education_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Button 2 Text', 'lms-education' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    => __( 'Add Text', 'lms-education' ),
		'settings' => 'lms_education_login_text',
		'section'  => 'lms_education_section_header',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'link',
		'label'    => __( 'Add Link', 'lms-education' ),
		'settings' => 'lms_education_login_link',
		'section'  => 'lms_education_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_enable_search',
		'section'     => 'lms_education_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'lms-education' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'lms_education_search_box_enable',
		'label'       => esc_html__( 'Search Enable / Disable Button', 'lms-education' ),
		'section'     => 'lms_education_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'lms-education' ),
			'off' => esc_html__( 'Disable', 'lms-education' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_enable_cart',
		'section'     => 'lms_education_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Cart', 'lms-education' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'lms_education_cart_box_enable',
		'label'       => esc_html__( 'Cart Enable / Disable Button', 'lms-education' ),
		'section'     => 'lms_education_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'lms-education' ),
			'off' => esc_html__( 'Disable', 'lms-education' ),
		],
	] );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_enable_socail_link',
		'section'     => 'lms_education_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'lms-education' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'lms_education_section_header',
		'priority'    => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'lms-education' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'lms-education' ),
		'settings'     => 'lms_education_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'lms-education' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'lms-education' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'lms-education' ),
				'description' => esc_html__( 'Add the social icon url here.', 'lms-education' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );


	// SLIDER SECTION

	Kirki::add_section( 'lms_education_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'lms-education' ),
        'panel'          => 'lms_education_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'lms-education' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( LMS_EDUCATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'lms-education' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'lms_education_blog_slide_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'lms-education' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_enable_heading',
		'section'     => 'lms_education_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'lms-education' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'lms_education_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'lms-education' ),
		'section'     => 'lms_education_blog_slide_section',
		'default'     => 'false',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'lms-education' ),
			'off' => esc_html__( 'Disable', 'lms-education' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'lms_education_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'lms-education' ),
		'section'     => 'lms_education_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'lms-education' ),
			'off' => esc_html__( 'Disable', 'lms-education' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'lms_education_text_unable_disable',
		'label'       => esc_html__( 'Slide Text Enable / Disable', 'lms-education' ),
		'section'     => 'lms_education_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'lms-education' ),
			'off' => esc_html__( 'Disable', 'lms-education' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'lms_education_phone_detail_unable_disable',
		'label'       => esc_html__( 'Slide Phone Details Enable / Disable', 'lms-education' ),
		'section'     => 'lms_education_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'lms-education' ),
			'off' => esc_html__( 'Disable', 'lms-education' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_slider_heading',
		'section'     => 'lms_education_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'lms-education' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'lms_education_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to display', 'lms-education' ),
		'section'     => 'lms_education_blog_slide_section',
		'default'     => 0,
		'choices'     => [
			'min'  => 1,
			'max'  => 5,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'lms_education_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'lms-education' ),
		'section'     => 'lms_education_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'lms-education' ),
		'priority'    => 10,
		'choices'     => lms_education_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'lms_education_slider_text_extra',
		'label'    => esc_html__( 'Slider Extra Heading', 'lms-education' ),
		'section'  => 'lms_education_blog_slide_section',	
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_slider_xcerpt_heading',
		'section'     => 'lms_education_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Number Of Text', 'lms-education' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'lms_education_slide_excerpt_number',
		'label'       => esc_html__( 'Slide Content Range', 'lms-education' ),
		'section'     => 'lms_education_blog_slide_section',
		'default'     => 20,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_slider_phone_heading',
		'section'     => 'lms_education_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Text', 'lms-education' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'lms_education_slider_phone_text',
		'section'  => 'lms_education_blog_slide_section',
		'default'  => '',
		'priority' => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'lms_education_slider_content_alignment',
		'label'       => esc_html__( 'Slider Content Alignment', 'lms-education' ),
		'section'     => 'lms_education_blog_slide_section',
		'default'     => 'CENTER-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'lms-education' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'lms-education' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'lms-education' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'lms-education' ),

		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'lms_education_slider_opacity_color',
		'label'       => esc_html__( 'Slider Opacity Option', 'lms-education' ),
		'section'     => 'lms_education_blog_slide_section',
		'default'     => 'unset',
		'placeholder' => esc_html__( 'Choose an option', 'lms-education' ),
		'choices'     => [
			'0' => esc_html__( '0', 'lms-education' ),
			'0.1' => esc_html__( '0.1', 'lms-education' ),
			'0.2' => esc_html__( '0.2', 'lms-education' ),
			'0.3' => esc_html__( '0.3', 'lms-education' ),
			'0.4' => esc_html__( '0.4', 'lms-education' ),
			'0.5' => esc_html__( '0.5', 'lms-education' ),
			'0.6' => esc_html__( '0.6', 'lms-education' ),
			'0.7' => esc_html__( '0.7', 'lms-education' ),
			'0.8' => esc_html__( '0.8', 'lms-education' ),
			'0.9' => esc_html__( '0.9', 'lms-education' ),
			'unset' => esc_html__( 'unset', 'lms-education' ),
			

		],
	] );

	// OUR COURSES SECTION

	Kirki::add_section( 'lms_education_our_courses_section', array(
        'title'          => esc_html__( 'Our Courses Settings', 'lms-education' ),
        'panel'          => 'lms_education_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'lms-education' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( LMS_EDUCATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'lms-education' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'lms_education_our_courses_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'lms-education' ) . '</div>',
	    'priority'    => 1,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_services_enable_heading',
		'section'     => 'lms_education_our_courses_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Our Courses Section', 'lms-education' ) . '</h3>',
		'priority'    => 1,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'lms_education_our_courses_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'lms-education' ),
		'section'     => 'lms_education_our_courses_section',
		'default'     => 'false',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'lms-education' ),
			'off' => esc_html__( 'Disable', 'lms-education' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'lms_education_course_title_unable_disable',
		'label'       => esc_html__( 'Course Title Enable / Disable', 'lms-education' ),
		'section'     => 'lms_education_our_courses_section',
		'default'     => '1',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'lms-education' ),
			'off' => esc_html__( 'Disable', 'lms-education' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'lms_education_course_text_unable_disable',
		'label'       => esc_html__( 'Course Text Enable / Disable', 'lms-education' ),
		'section'     => 'lms_education_our_courses_section',
		'default'     => '1',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'lms-education' ),
			'off' => esc_html__( 'Disable', 'lms-education' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_our_courses_section_title_heading',
		'section'     => 'lms_education_our_courses_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Section Title', 'lms-education' ) . '</h3>',
		'priority'    => 3,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'lms_education_our_courses_section_title',
		'section'  => 'lms_education_our_courses_section',
		'default'  => '',
		'priority' => 4,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_our_courses_section_text_heading',
		'section'     => 'lms_education_our_courses_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Section Text', 'lms-education' ) . '</h3>',
		'priority'    => 5,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'lms_education_our_courses_section_para',
		'section'  => 'lms_education_our_courses_section',
		'default'  => '',
		'priority' => 6,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'lms_education_our_courses_perpage',
		'label'       => esc_html__( 'Number of courses to display', 'lms-education' ),
		'section'     => 'lms_education_our_courses_section',
		'default'     => 10,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'lms_education_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'lms-education' ),
        'panel'          => 'lms_education_panel_id',
        'priority'       => 180,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'lms-education' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( LMS_EDUCATION_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'lms-education' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'lms_education_footer_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'lms-education' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'lms_education_footer_text_heading',
		'section'     => 'lms_education_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'lms-education' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'lms_education_footer_text',
		'section'  => 'lms_education_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'lms_education_footer_text_heading_2',
	'section'     => 'lms_education_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'lms-education' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'lms_education_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'lms-education' ),
		'section'     => 'lms_education_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'lms-education' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'lms-education' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'lms-education' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'lms-education' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'lms_education_footer_text_heading_1',
	'section'     => 'lms_education_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'lms-education' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'lms_education_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'lms-education' ),
		'section'     => 'lms_education_footer_section',
		'default'     => '',
	] );

}

add_action( 'customize_register', 'lms_education_customizer_settings' );
function lms_education_customizer_settings( $wp_customize ) {
	$lms_education_args = array(
       'type'                     => 'lp_course',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'term_group',
        'order'                    => 'ASC',
        'hide_empty'               => false,
        'hierarchical'             => 1,
        'number'                   => '',
        'taxonomy'                 => 'course_category',
        'pad_counts'               => false
    );
	$categories = get_categories($lms_education_args);
	$cat_posts = array();
	$m = 0;
	$cat_posts[]='Select';
	foreach($categories as $category){
		if($m==0){
			$default = $category->slug;
			$m++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('lms_education_our_courses_category',array(
		'default'	=> 'select',
		'priority' => 8,
		'sanitize_callback' => 'lms_education_sanitize_select',
	));

	$wp_customize->add_control('lms_education_our_courses_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select category to display courses ','lms-education'),
		'section' => 'lms_education_our_courses_section',
	));
}

/*
 *  Customizer Notifications
 */

$lms_education_config_customizer = array(
    'recommended_plugins' => array( 
        'kirki' => array(
            'recommended' => true,
            'description' => sprintf( 
                /* translators: %s: plugin name */
                esc_html__( 'If you want to show all the sections of the FrontPage, please install and activate %s plugin', 'lms-education' ), 
                '<strong>' . esc_html__( 'Kirki Customizer', 'lms-education' ) . '</strong>'
            ),
        ),
    ),
    'lms_education_recommended_actions'       => array(),
    'lms_education_recommended_actions_title' => esc_html__( 'Recommended Actions', 'lms-education' ),
    'lms_education_recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'lms-education' ),
    'lms_education_install_button_label'      => esc_html__( 'Install and Activate', 'lms-education' ),
    'lms_education_activate_button_label'     => esc_html__( 'Activate', 'lms-education' ),
    'lms_education_deactivate_button_label'   => esc_html__( 'Deactivate', 'lms-education' ),
);

LMS_Education_Customizer_Notify::init( apply_filters( 'lms_education_customizer_notify_array', $lms_education_config_customizer ) );