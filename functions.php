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
            'primary_left'   => __( 'Primary Menu - Left', 'ncc' ),
            'primary_right'   => __( 'Primary Menu - Right', 'ncc' ),
            'secondary' => __( 'Secondary Menu', 'ncc' ),
            'mobile'    => __( 'Mobile Menu', 'ncc')
        ) );
    
        // FEATURED IMAGE
        add_theme_support( 'post-thumbnails' );
}

endif;

add_action( 'after_setup_theme', 'aprilrose_setup' );





