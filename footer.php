<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 * */
?>

<?php wp_footer(); ?>

<footer>
    <div class="cell left">
        <p>NAPA VALLEY</p>
        <p>APRIL ROSE</p>
        <p>ESTD 2017</p>
    </div>
    <div class="cell right">
        <div>
            Navigate<br />
            <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'footer_left',
                        'menu_class'      => '',
                        'container_class' => 'footer__nav__left',
                        'items_wrap'      => '<ul>%3$s</ul>',
                        'fallback_cb'     => false,
                    )
                );
            ?>
        </div>
        <div>
            Shop <br />
            <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'footer_right',
                        'menu_class'      => '',
                        'container_class' => 'footer__nav__left',
                        'items_wrap'      => '<ul>%3$s</ul>',
                        'fallback_cb'     => false,
                    )
                );
            ?>
        </div>
    </div>
</footer>