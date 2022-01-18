<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>


<?php include( get_template_directory() .'/assets/archive-style--css.php'); ?>


<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' ); ?>



<div class="product-archive">

  <div class="notices">
      <?php woocommerce_output_all_notices(); ?>
  </div>

  <!-- HEADER -->
  <header class="header">
          
      <?php get_template_part('template-parts/breadcrumbs'); ?>

      <div class="title">
          <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
              <h1 class="woocommerce-products-header__title page-title">
                  <?php woocommerce_page_title(); ?>
              </h1>
          <?php endif; ?>
      </div>

      <div class="description">
          <?php
          /**
           * Hook: woocommerce_archive_description.
           *
           * @hooked woocommerce_taxonomy_archive_description - 10
           * @hooked woocommerce_product_archive_description - 10
           */
          do_action( 'woocommerce_archive_description' );
          ?>
      </div>

  </header>


    <!-- Row -->
    <div class="row">

      <!-- SIDEBAR -->
      <div id="primary-sidebar" class="sidebar primary-sidebar widget-area" role="complementary">
          <div class="total" style="display: block">
              <?php woocommerce_result_count(); ?>
          </div>

          <?php dynamic_sidebar( 'shop_sidebar' ); ?>
      </div>

      <!-- PRODUCT LOOP -->
      <div class="product-loop">

        <?php 
        // Check if there are any posts to display
        if ( have_posts() ) : ?>

          <?php
          /**
           * Hook: woocommerce_before_shop_loop
           * @hooked woocommerce_output_all_notices - 10
           * @hooked woocommerce_result_count - 20
           * @hooked woocommerce_catalog_ordering - 30
           */
          do_action( 'woocommerce_before_shop_loop' ); ?>

          <?php woocommerce_product_loop_start(); ?>


          <?php
          // The Loop
          while ( have_posts() ) : the_post(); ?>

            <?php
            /* Hook: woocommerce_shop_loop. */
            do_action( 'woocommerce_shop_loop' ); ?>

            <li class="item">

              <!-- Image -->
              <div class="image" style="background: url('<?php  echo get_the_post_thumbnail_url(); ?>'); background-size: cover;">
                  &nbsp;
              </div>

              <!-- Info -->
              <div class="info">
                <div class="title">
                    <a href="<?php echo get_post_permalink(); ?>">
                        <p><?php the_title(); ?></p>
                    </a>
                </div>
                <div class="price">
                    <?php echo $product->get_price_html(); ?>
                </div>
              </div>

            </li>
            
          <?php endwhile; 

          woocommerce_product_loop_end();
        
          /**
          * Hook: woocommerce_after_shop_loop
          * @hooked woocommerce_pagination - 10
          */
          do_action( 'woocommerce_after_shop_loop' );
  
        else: ?>

          <p>Sorry, no posts matched your criteria.</p>
  

        <?php endif; ?> 

    </div> <!-- /product-loop --> 
  </div><!-- /row -->
 
</div>

<?php get_footer(); ?>