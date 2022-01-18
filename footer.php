<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 * */
?>

<style>
    /* Footer */
    footer {
        width: 100%;
        padding: 40px 10%;
    }

    footer .row {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }

    footer .cell.left {
        display: flex;
        flex-direction: column;
    }

    footer .cell.right {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }

    footer ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    footer li {
        margin: 0px padding: 0px;
    }

    footer svg {
        width: 200px;
        margin-top: 2px;
    }

    footer p {
        margin: 10px 0 10px 0;
    }

    footer .cell.left p {
        font-size: 0.7rem;
    }

    footer .title {
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
    }

    footer a {
        text-decoration: none;
    }

    footer .social-icons ul {
        display: flex;
        flex-direction: row;
        padding-top: 15px;
    }

    footer .social-icons svg {
        width: 30px;
        margin-right: 2px;
    }

    /* ==================== MEDIA QUERIES */

    @media (max-width: 575.98px) {}

    @media (max-width: 767.98px) {

        /* Footer */
        footer {
            padding: 20px;
        }

        footer .row {
            grid-template-columns: 100%;
        }
    }

    /* Medium devices (tablets, less than 992px) */
    @media (max-width: 991.98px) {}

    /* Large devices (desktops, less than 1200px) */
    @media (max-width: 1199.98px) {}

</style>
<?php wp_footer(); ?>

<footer>
    <div class="row">
        <div class="cell left">
            <p>NAPA VALLEY</p>
            <a href="window.location='<?php echo home_url(); ?>'">
                <svg style="display: block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 636.69 60.78"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M58.68,60.25H49.26c-.69,0-1.15-.61-1.61-1.69l-2.83-6.35H15l-2.83,6.35c-.54,1.08-.92,1.69-1.68,1.69H1.11c-.77,0-1.46-.61-.92-1.76L26,1.61A1.63,1.63,0,0,1,27.44.54h4.9A1.66,1.66,0,0,1,33.8,1.61L59.67,58.49C60.21,59.64,59.44,60.25,58.68,60.25ZM40.76,43.1,29.89,18.91,19.1,43.1Z"/><path d="M131.7,21.51c0,10.57-7,20.9-21.36,20.9H96.49V59a1.23,1.23,0,0,1-1.23,1.3h-8.8a1.24,1.24,0,0,1-1.3-1.3V1.76A1.18,1.18,0,0,1,86.46.54h23.88C124.74.54,131.7,10.87,131.7,21.51Zm-11.25,0c0-6.05-3.6-10.79-10.34-10.79H96.49V32.23h13.62C116.85,32.23,120.45,27.48,120.45,21.51Z"/><path d="M203.05,60.25h-8A2.39,2.39,0,0,1,192.79,59L182.3,42.41H169V59a1.23,1.23,0,0,1-1.23,1.3H159a1.24,1.24,0,0,1-1.3-1.3V1.76A1.18,1.18,0,0,1,159,.54h23.88c14.4,0,21.36,10.33,21.36,21,0,7.73-3.67,15.31-11.33,18.83l11.33,17.84C204.88,59.33,204.42,60.25,203.05,60.25ZM169,32.23h13.63c6.73,0,10.33-4.75,10.33-10.72s-3.6-10.79-10.33-10.79H169Z"/><path d="M231,59V1.76a1.18,1.18,0,0,1,1.3-1.22H241a1.22,1.22,0,0,1,1.3,1.22V59a1.22,1.22,0,0,1-1.22,1.3h-8.81A1.25,1.25,0,0,1,231,59Z"/><path d="M308.45,51.29V59a1.25,1.25,0,0,1-1.3,1.3H272.62a1.25,1.25,0,0,1-1.3-1.3V1.76a1.18,1.18,0,0,1,1.3-1.22h8.73a1.22,1.22,0,0,1,1.3,1.22V50.07h24.5A1.19,1.19,0,0,1,308.45,51.29Z"/><path d="M417.3,60.25h-8A2.41,2.41,0,0,1,407,59L396.56,42.41H383.24V59a1.23,1.23,0,0,1-1.23,1.3h-8.8a1.24,1.24,0,0,1-1.3-1.3V1.76a1.18,1.18,0,0,1,1.3-1.22h23.88c14.39,0,21.36,10.33,21.36,21,0,7.73-3.67,15.31-11.33,18.83l11.33,17.84C419.14,59.33,418.68,60.25,417.3,60.25Zm-34.06-28h13.62c6.74,0,10.34-4.75,10.34-10.72s-3.6-10.79-10.34-10.79H383.24Z"/><path d="M443,30.39C443,13.55,456,0,473.79,0s30.78,13.55,30.78,30.39-12.86,30.39-30.78,30.39S443,47.23,443,30.39Zm50,0C493,19.67,485.2,11,473.79,11s-19.14,8.65-19.14,19.37,7.81,19.37,19.14,19.37S493,41.11,493,30.39Z"/><path d="M533.88,43.87a1.59,1.59,0,0,1,2.37-.31c2.07,1.91,6.44,6.43,13.48,6.43,6,0,8.88-3.22,8.88-6.74,0-4.21-4.29-5.81-8.65-7.65-11.79-5.59-20-9.72-20-19.06C530,7.81,537.33,0,549.8,0a27.06,27.06,0,0,1,17.84,6.66c.77.69,1.07,1.53.46,2.3l-4.52,5.89c-.84,1.15-1.76,1.46-2.68.69-1.53-1.07-6.5-4.75-11.78-4.75-4.44,0-7.58,2-7.58,5.59,0,3.75,3.06,5.28,8.72,7.58,10.26,4.75,19.91,8.88,19.91,19.52,0,9.88-8.27,17.3-20.59,17.3-11.79,0-18.15-7-20-8.72a1.43,1.43,0,0,1-.15-2.22Z"/><path d="M636.69,51.29V59a1.21,1.21,0,0,1-1.3,1.3H598.1a1.29,1.29,0,0,1-1.3-1.3V1.76A1.18,1.18,0,0,1,598.1.54h36.52a1.27,1.27,0,0,1,1.3,1.22V9.42a1.2,1.2,0,0,1-1.3,1.3H608.13V24.88h19.75a1.31,1.31,0,0,1,1.38,1.3v7.58a1.29,1.29,0,0,1-1.38,1.38H608.13V50.07h27.26A1.23,1.23,0,0,1,636.69,51.29Z"/></g></g></svg>
            </a>
            <p>ESTD 2017</p>
            <div class="social-icons">
                <?php get_template_part('template-parts/social-icons'); ?>
            </div>
        </div>
        <div class="cell right">
            <div>
                <p class="title">Navigate</p>
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
                <p class="title">Shop</p>
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
    </div>
</footer>

</body>
</html>