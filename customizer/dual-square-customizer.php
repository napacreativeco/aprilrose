<?php

$wp_customize->add_panel( 'dual-square-settings', 
    array(
        'priority'         => 30,
        'title'            => __( 'Dual-Square Links', 'aprilrose' ),
        'description'      => __( 'Modify the Dual Square links', 'aprilrose' ),
    ) 
);

/* LEFT SECTION */

$wp_customize->add_section( 'dual-left-settings' , array(
    'title'      => __( 'Left', 'aprilrose' ),
    'priority'   => 30,
    'panel'      => 'dual-square-settings'
) );

/* RIGHT SECTION */

$wp_customize->add_section( 'dual-right-settings' , array(
    'title'      => __( 'Right', 'aprilrose' ),
    'priority'   => 30,
    'panel'      => 'dual-square-settings'
) );


/* =======LEFT========= */

/* LEFT: SUBHEADER */
$wp_customize->add_setting( 'dual-left_sub-header' , array(
    'default'   => 'Limited',
    'transport' => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dual-left_sub-header', array(
    'label'      => __( 'Sub Header', 'aprilrose' ),
    'section'    => 'dual-left-settings',
    'settings'   => 'dual-left_sub-header',
) ) );
/* LEFT: HEADLINE */
$wp_customize->add_setting( 'dual-left_header' , array(
    'default'   => 'Fall 2021 Line',
    'transport' => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dual-left_header', array(
    'label'      => __( 'Headline', 'aprilrose' ),
    'section'    => 'dual-left-settings',
    'settings'   => 'dual-left_header',
) ) );
/* LEFT: TEXT */
$wp_customize->add_setting( 'dual-left_text' , array(
    'default'   => 'Browse through our latest products to find something that works for you.',
    'transport' => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dual-left_text', array(
    'label'      => __( 'Text', 'aprilrose' ),
    'section'    => 'dual-left-settings',
    'settings'   => 'dual-left_text',
) ) );
/* LEFT: LINK TEXT */
$wp_customize->add_setting( 'dual-left_link-text' , array(
    'default'   => 'Shop Fall 2021',
    'transport' => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dual-left_link-text', array(
    'label'      => __( 'Link Text', 'aprilrose' ),
    'section'    => 'dual-left-settings',
    'settings'   => 'dual-left_link-text',
) ) );
/* LEFT: LINK URL */
$wp_customize->add_setting( 'dual-left_link-url' , array(
    'default'   => '/shop',
    'transport' => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dual-left_link-url', array(
    'label'      => __( 'Link URL', 'aprilrose' ),
    'section'    => 'dual-left-settings',
    'settings'   => 'dual-left_link-url',
) ) );
/* LEFT: BACKGROUND */
$wp_customize->add_setting( 'dual-left_image' , array(
    'default'   => '#',
    'transport' => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dual-left_image', array(
    'label'      => __( 'Image URL', 'aprilrose' ),
    'section'    => 'dual-left-settings',
    'settings'   => 'dual-left_image',
) ) );
/* LEFT: TEXT COLOR */
$wp_customize->add_setting( 'dual-left_color' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dual-left_color', array(
    'label'      => __( 'Text Color', 'aprilrose' ),
    'section'    => 'dual-left-settings',
    'settings'   => 'dual-left_color',
) ) );

/* =======RIGHT========= */

/* RIGHT: SUBHEADER */
$wp_customize->add_setting( 'dual-right_sub-header' , array(
    'default'   => 'Limited',
    'transport' => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dual-right_sub-header', array(
    'label'      => __( 'Sub Header', 'aprilrose' ),
    'section'    => 'dual-right-settings',
    'settings'   => 'dual-right_sub-header',
) ) );
/* RIGHT: HEADLINE */
$wp_customize->add_setting( 'dual-right_header' , array(
    'default'   => 'Fall 2021 Line',
    'transport' => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dual-right_header', array(
    'label'      => __( 'Headline', 'aprilrose' ),
    'section'    => 'dual-right-settings',
    'settings'   => 'dual-right_header',
) ) );
/* RIGHT: TEXT */
$wp_customize->add_setting( 'dual-right_text' , array(
    'default'   => 'Browse through our latest products to find something that works for you.',
    'transport' => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dual-right_text', array(
    'label'      => __( 'Text', 'aprilrose' ),
    'section'    => 'dual-right-settings',
    'settings'   => 'dual-right_text',
) ) );
/* RIGHT: LINK TEXT */
$wp_customize->add_setting( 'dual-right_link-text' , array(
    'default'   => 'Shop Fall 2021',
    'transport' => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dual-right_link-text', array(
    'label'      => __( 'Link Text', 'aprilrose' ),
    'section'    => 'dual-right-settings',
    'settings'   => 'dual-right_link-text',
) ) );
/* RIGHT: LINK URL */
$wp_customize->add_setting( 'dual-right_link-url' , array(
    'default'   => '/shop',
    'transport' => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dual-right_link-url', array(
    'label'      => __( 'Link URL', 'aprilrose' ),
    'section'    => 'dual-right-settings',
    'settings'   => 'dual-right_link-url',
) ) );
/* RIGHT: BACKGROUND */
$wp_customize->add_setting( 'dual-right_image' , array(
    'default'   => '#',
    'transport' => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'dual-right_image', array(
    'label'      => __( 'Image URL', 'aprilrose' ),
    'section'    => 'dual-right-settings',
    'settings'   => 'dual-right_image',
) ) );
/* RIGHT: TEXT COLOR */
$wp_customize->add_setting( 'dual-right_color' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'dual-right_color', array(
    'label'      => __( 'Text Color', 'aprilrose' ),
    'section'    => 'dual-right-settings',
    'settings'   => 'dual-right_color',
) ) );