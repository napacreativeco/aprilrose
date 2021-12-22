<ul class="spotlight-slider">
    <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 5, 'product_cat' => 'cleansers', 'orderby' => 'rand' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                <li class="product">  

                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                        <?php woocommerce_show_product_sale_flash( $post, $product ); ?>
                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
                        <p><?php the_title(); ?></p>
                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    
                    </a>

                </li>
    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</ul><!--/.products-->

<button class="scroll-right">></button>