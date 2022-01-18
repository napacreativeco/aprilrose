<?php 
/* Horizontal Scroll product slider */
?>

<ul class="spotlight-slider">
    <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 5, 'product_cat' => 'cleansers', 'orderby' => 'rand' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                <li class="product">  

                    <!-- Image -->
                    <a class="image-link" href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                        <div class="image" style="background: url('<?php echo get_the_post_thumbnail_url($loop->post->ID, 'shop_catalog'); ?>'); background-size: cover; background-position: center;">
                            <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
                        </div>  
                    </a>
                    <!-- Title and Price -->
                    <div class="data">
                        <div>
                            <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                                <p><?php the_title(); ?></p>
                            </a>
                        </div>
                        <div class="price">
                            <?php echo $product->get_price_html(); ?>   
                        </div>
                    </div>                 
    

                </li>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</ul><!--/.products-->

<button class="scroll-right">></button>