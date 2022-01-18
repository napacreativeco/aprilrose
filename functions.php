<?php

if ( ! function_exists( 'aprilrose_setup' ) ) :


function aprilrose_setup() {

        // CSS
        wp_enqueue_style( 'style', get_stylesheet_uri() );

        // Animate on Scroll
        wp_enqueue_style( 'aos', 'https://unpkg.com/aos@next/dist/aos.css' );
        wp_enqueue_script('aosjs', 'https://unpkg.com/aos@next/dist/aos.js', '', '', true);

        // SCROLL REVEAL
        wp_enqueue_script('scrollreveal', 'https://unpkg.com/scrollreveal', '', '', true);

        // JS
        wp_enqueue_script('custom', get_stylesheet_directory_uri().'/js/scripts.js', array('jquery'), '', true);

        // LANGUAGE SUPPORT
        load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );

        // NAVIGATION
        register_nav_menus( array(
            'primary_left'   => __( 'Primary Menu - Left', 'aprilrose' ),
            'primary_right'  => __( 'Primary Menu - Right', 'aprilrose' ),
            'footer_left'    => __( 'Footer Menu - Left', 'aprilrose'),
            'footer_right'    => __( 'Footer Menu - Right', 'aprilrose'),
            'mobile_menu'    => __( 'Mobile Menu', 'aprilrose'),
        ) );
    
        // FEATURED IMAGE
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'woocommerce' );


        // Register our sidebars and widgetized areas.
        register_sidebar( array(
            'name'          => 'Shop Sidebar',
            'id'            => 'shop_sidebar',
            'before_widget' => '<div>',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="rounded">',
            'after_title'   => '</h2>',
        ) );


        

        // Disable WooCommerce CSS
        add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
}

endif;

add_action( 'after_setup_theme', 'aprilrose_setup' );

/* Customizer Imports */
function mytheme_customize_register( $wp_customize ) {

    /* Hero */
    include get_template_directory() . '/customizer/hero-customizer.php';

    /* Dual Square Links */
    include get_template_directory() . '/customizer/dual-square-customizer.php';
}
add_action( 'customize_register', 'mytheme_customize_register' );


/* Trim zeros in price decimals */
add_filter( 'woocommerce_price_trim_zeros', '__return_true' );

/* Remove Sidebar on Single Products */
add_action( 'wp', 'remove_sidebar_product_pages' );
 
function remove_sidebar_product_pages() {
    if ( is_product() ) {
        remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
        remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
    }
}

// remove_action('woocommerce_output_content_wrapper', 'woocommerce_output_content_wrapper', 30, 0);
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10, 0 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30, 0 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_filter('woocommerce_breadcrumb_defaults', function( $defaults ) {
    unset($defaults['home']); //removes home link.
    return $defaults; //returns rest of links
});
add_action( 'woocommerce_review_before', 'woocommerce_review_display_gravatar', 10 );
add_action( 'woocommerce_review_before_comment_meta', 'woocommerce_review_display_rating', 10 );
add_action( 'woocommerce_review_meta', 'woocommerce_review_display_meta', 10 );
do_action( 'woocommerce_review_before_comment_text', $comment );
add_action( 'woocommerce_review_comment_text', 'woocommerce_review_display_comment_text', 10 );
do_action( 'woocommerce_review_after_comment_text', $comment );

// Custom Fields for Products

add_filter('woocommerce_after_single_product_summary', 'ingredients_field', 12);
function ingredients_field() {
    echo '<ul class="info-panel">'
    .'<li class="instructions-link"><div class="title"><h3><span>Instructions for use</span></h3><p class="instructions-indicator">+</p></div><div class="instructions"><p>'. do_shortcode('[acf field="instructions"]') .'</p></div></li>'
    .'<li class="ingredients-link"><div class="title"><h3><span>Ingredients</span></h3><p class="ingredients-indicator">+</p></div><div class="ingredients"><p>'. do_shortcode('[acf field="ingredients"]') .'</p></div></li>'
    .'</ul>';
}





