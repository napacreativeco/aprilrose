<?php
    /* HERO SECTION */
    $wp_customize->add_section( 'hero-settings' , array(
        'title'      => __( 'Hero', 'aprilrose' ),
        'priority'   => 30,
    ) );
    /* SUB-HEADER */
    $wp_customize->add_setting( 'hero_sub-header' , array(
        'default'   => 'Unique Collections',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero_sub-header', array(
        'label'      => __( 'Sub Header', 'aprilrose' ),
        'section'    => 'hero-settings',
        'settings'   => 'hero_sub-header',
    ) ) );
    /* HEADER */
    $wp_customize->add_setting( 'hero_header' , array(
        'default'   => 'Bio-Active Collections',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero_header', array(
        'label'      => __( 'Header', 'aprilrose' ),
        'section'    => 'hero-settings',
        'settings'   => 'hero_header',
    ) ) );
    /* LINK TEXT */
    $wp_customize->add_setting( 'hero_link-text' , array(
        'default'   => 'Shop Collections',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero_link-text', array(
        'label'      => __( 'Link Text', 'aprilrose' ),
        'section'    => 'hero-settings',
        'settings'   => 'hero_link-text',
    ) ) );
    /* LINK URL */
    $wp_customize->add_setting( 'hero_link-url' , array(
        'default'   => '/shop',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero_link-url', array(
        'label'      => __( 'Link URL', 'aprilrose' ),
        'section'    => 'hero-settings',
        'settings'   => 'hero_link-url',
    ) ) );
    /* BACKGROUND IMAGE */
    $wp_customize->add_setting( 'hero_image' , array(
        'default'   => 'https://images.unsplash.com/photo-1507652313519-d4e9174996dd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hero_image', array(
        'label'      => __( 'Image', 'aprilrose' ),
        'section'    => 'hero-settings',
        'settings'   => 'hero_image',
    ) ) );
?>