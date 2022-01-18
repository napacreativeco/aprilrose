<ul class="home-products">
    <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 8, 'product_cat' => '', 'orderby' => 'rand' );
        $loop = new WP_Query( $args );


        while ( $loop->have_posts() ) : $loop->the_post(); global $product;
        $featured_img_url = get_the_post_thumbnail_url($loop->post->ID,'full');
        ?>
                <li class="product">  

                    <div class="image" style="background: url('<?php echo $featured_img_url ?>'); background-size: cover;">
                        <div class="sale">
                            <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
                        </div>
                    </div>

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