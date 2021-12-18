<?php

if ( ! function_exists( 'aprilrose_setup' ) ) :


function aprilrose_setup() {

        // CSS
        wp_enqueue_style( 'style', get_stylesheet_uri() );

        // JS
        wp_enqueue_script('custom', get_stylesheet_directory_uri().'/js/scripts.js', array('jquery'), false, true);

        // LANGUAGE SUPPORT
        load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );

        // NAVIGATION
        register_nav_menus( array(
            'primary_left'   => __( 'Primary Menu - Left', 'aprilrose' ),
            'primary_right'  => __( 'Primary Menu - Right', 'aprilrose' ),
            'footer_left'    => __( 'Footer Menu - Left', 'aprilrose'),
            'footer_right'    => __( 'Footer Menu - Right', 'aprilrose'),
        ) );
    
        // FEATURED IMAGE
        add_theme_support( 'post-thumbnails' );
}

endif;

add_action( 'after_setup_theme', 'aprilrose_setup' );


function mytheme_customize_register( $wp_customize ) {

    /* Hero */
    include get_template_directory() . '/customizer/hero-customizer.php';

    /* Dual Square Links */
    include get_template_directory() . '/customizer/dual-square-customizer.php';
}
add_action( 'customize_register', 'mytheme_customize_register' );





