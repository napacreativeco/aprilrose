<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 */

?>
<!doctype html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class('public'); ?>>

<style>
    /* Top Bar */
    .top-bar {
        width: 100%;
        background: var(--black);
        color: var(--white);
        text-align: center;
        padding: 10px;
    }

    .top-bar p {
        font-size: 0.6rem;
        margin: 0;
    }

    /* Nav */
    nav.nav-container {
        height: 60px;
        width: 100%;
        max-width: 100vw;
        display: flex;
        align-items: center;
    }
    .nav-row {
        display: grid;
        grid-template-columns: 1fr 2fr 1fr;
        padding: 0 5%;
        align-items: center;
        width: 100%;
    }
    nav .left {
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }

    nav .center {
        display: flex;
        justify-content: center;
    }

    nav .right {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: row;
    }

    nav ul li {
        margin: 0 30px 0 0;
        padding: 0;
        font-size: 0.7rem;
        text-transform: uppercase;
        display: flex;
        align-items: center;
    }

    nav ul li:last-of-type {
        margin: 0 0 0 0;
        padding: 0;
    }

    nav svg {
        margin-top: 2px;
        width: 200px;
    }

    nav a {
        display: block;
        text-decoration: none;
        white-space: nowrap;
    }

    nav a:hover {
        text-decoration: underline;
    }
    /* Burger */
    nav .hamburger {
        width: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin: 0 0 0 20px;
        cursor: pointer;
    }
    nav .hamburger span {
        width: 40px;
        height: 3px;
        background: var(--black);
    }

    /* Overlay */
    .nav-overlay {
        display: none;
        align-items: center;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        max-width: 100vw;
        height: 100%;
        background: var(--black);
        z-index: 999999;
        color: var(--white);
    }

    .nav-overlay .header {
        width: 100%;
        max-width: calc(100% - 40px);
        display: grid;
        grid-template-columns: 20% 60% 20%;
        align-items: center;
        padding: 20px;
        margin: 0px auto 0px auto;
    }

    .nav-overlay .header .line-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .nav-overlay .header .line {
        width: 100%;
        height: 2px;
        background: var(--white);
    }

    .nav-overlay svg {
        fill: var(--white);
    }

    .nav-overlay .header svg {
        width: 150px;
    }

    .nav-overlay .close {
        display: grid;
        grid-template-columns: 80% 20%;
    }

    .nav-overlay .close .close-txt {
        text-align: right;
    }

    .nav-overlay .close-txt span {
        cursor: pointer;
    }

    .nav-overlay .close-btn {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        position: relative;
        cursor: pointer;
    }

    .nav-overlay .close .close-btn span {
        display: block;
        margin: 5px 0px;
        background: var(--white);
        width: 35px;
        height: 3px;
        position: absolute;
    }

    .nav-overlay .close-btn span:first-of-type {
        transform: rotate(45deg);
    }

    .nav-overlay .close-btn span:last-of-type {
        transform: rotate(-45deg);
    }

    .nav-overlay .menu {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        align-self: stretch;
        height: 100%;
        margin: -40px auto 0px auto;
    }

    .nav-overlay .menu ul {
        text-align: center;
    }

    .nav-overlay .menu li {
        font-size: 1.5rem;
        margin: 0 0 10px 0;
    }

    .nav-overlay .menu li a {
        text-decoration: none;
        position: relative;
        transition: all 0.7s;
    }
    .nav-overlay .menu li a:hover::before {
        content: '+';
        position: absolute;
        left: -40px;
        color: var(--white);
        animation: fadingLeft 0.7s;
    }
    .nav-overlay .menu li a:hover::after {
        content: '+';
        position: absolute;
        right: -40px;
        color: var(--white);
        animation: fadingRight 0.7s;
    }

    .nav-overlay ul {
        list-style: none;
        margin: 40px 0 0 0;
        padding: 0;
    }

    .nav-overlay .social-icons ul {
        display: flex;
        flex-direction: row;
        justify-content: center;
    }

    .nav-overlay .social-icons svg {
        width: 25px;
        margin: 0 8px;
    }

    /* ================= MEDIA QUERIES */
    @media (max-width: 575.98px) {

    }

    /* Small devices (landscape phones, less than 768px) */
    @media (max-width: 767.98px) {

        /* Nav */
        .nav-row {
        grid-template-columns: 1fr 1fr;
        }
        .nav-row .left,
        .nav-row .nav__right {
            display: none;
        }
        .nav-overlay .header .line-container {
            display: none;
        }

        .nav-overlay .header .close-txt {
            margin-right: 6px;
        }

        .nav-overlay .header {
            grid-template-columns: 50% 50%;
        }

    }

    /* Medium devices (tablets, less than 992px) */
    @media (max-width: 991.98px) {}

    /* Large devices (desktops, less than 1200px) */
    @media (max-width: 1199.98px) {}
</style>

<!-- PAGE CONTAINER -->
<div id="page" class="site">

<!-- Top Bar -->
<div class="top-bar">
    <p>EXCLUSIVE DEALS DUDE!</p>
</div>

<!-- HEADER -->
<nav class="nav-container">
    <div class="nav-row">

        <div class="left">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'primary_left',
                        'menu_class'      => '',
                        'container_class' => 'nav__left headline load-hidden',
                        'items_wrap'      => '<ul>%3$s</ul>',
                        'fallback_cb'     => false,
                    )
                );
            ?>
        </div>

        <div class="center">
            <a href="window.location='<?php echo home_url(); ?>'">
                <svg style="display: block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 636.69 60.78"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M58.68,60.25H49.26c-.69,0-1.15-.61-1.61-1.69l-2.83-6.35H15l-2.83,6.35c-.54,1.08-.92,1.69-1.68,1.69H1.11c-.77,0-1.46-.61-.92-1.76L26,1.61A1.63,1.63,0,0,1,27.44.54h4.9A1.66,1.66,0,0,1,33.8,1.61L59.67,58.49C60.21,59.64,59.44,60.25,58.68,60.25ZM40.76,43.1,29.89,18.91,19.1,43.1Z"/><path d="M131.7,21.51c0,10.57-7,20.9-21.36,20.9H96.49V59a1.23,1.23,0,0,1-1.23,1.3h-8.8a1.24,1.24,0,0,1-1.3-1.3V1.76A1.18,1.18,0,0,1,86.46.54h23.88C124.74.54,131.7,10.87,131.7,21.51Zm-11.25,0c0-6.05-3.6-10.79-10.34-10.79H96.49V32.23h13.62C116.85,32.23,120.45,27.48,120.45,21.51Z"/><path d="M203.05,60.25h-8A2.39,2.39,0,0,1,192.79,59L182.3,42.41H169V59a1.23,1.23,0,0,1-1.23,1.3H159a1.24,1.24,0,0,1-1.3-1.3V1.76A1.18,1.18,0,0,1,159,.54h23.88c14.4,0,21.36,10.33,21.36,21,0,7.73-3.67,15.31-11.33,18.83l11.33,17.84C204.88,59.33,204.42,60.25,203.05,60.25ZM169,32.23h13.63c6.73,0,10.33-4.75,10.33-10.72s-3.6-10.79-10.33-10.79H169Z"/><path d="M231,59V1.76a1.18,1.18,0,0,1,1.3-1.22H241a1.22,1.22,0,0,1,1.3,1.22V59a1.22,1.22,0,0,1-1.22,1.3h-8.81A1.25,1.25,0,0,1,231,59Z"/><path d="M308.45,51.29V59a1.25,1.25,0,0,1-1.3,1.3H272.62a1.25,1.25,0,0,1-1.3-1.3V1.76a1.18,1.18,0,0,1,1.3-1.22h8.73a1.22,1.22,0,0,1,1.3,1.22V50.07h24.5A1.19,1.19,0,0,1,308.45,51.29Z"/><path d="M417.3,60.25h-8A2.41,2.41,0,0,1,407,59L396.56,42.41H383.24V59a1.23,1.23,0,0,1-1.23,1.3h-8.8a1.24,1.24,0,0,1-1.3-1.3V1.76a1.18,1.18,0,0,1,1.3-1.22h23.88c14.39,0,21.36,10.33,21.36,21,0,7.73-3.67,15.31-11.33,18.83l11.33,17.84C419.14,59.33,418.68,60.25,417.3,60.25Zm-34.06-28h13.62c6.74,0,10.34-4.75,10.34-10.72s-3.6-10.79-10.34-10.79H383.24Z"/><path d="M443,30.39C443,13.55,456,0,473.79,0s30.78,13.55,30.78,30.39-12.86,30.39-30.78,30.39S443,47.23,443,30.39Zm50,0C493,19.67,485.2,11,473.79,11s-19.14,8.65-19.14,19.37,7.81,19.37,19.14,19.37S493,41.11,493,30.39Z"/><path d="M533.88,43.87a1.59,1.59,0,0,1,2.37-.31c2.07,1.91,6.44,6.43,13.48,6.43,6,0,8.88-3.22,8.88-6.74,0-4.21-4.29-5.81-8.65-7.65-11.79-5.59-20-9.72-20-19.06C530,7.81,537.33,0,549.8,0a27.06,27.06,0,0,1,17.84,6.66c.77.69,1.07,1.53.46,2.3l-4.52,5.89c-.84,1.15-1.76,1.46-2.68.69-1.53-1.07-6.5-4.75-11.78-4.75-4.44,0-7.58,2-7.58,5.59,0,3.75,3.06,5.28,8.72,7.58,10.26,4.75,19.91,8.88,19.91,19.52,0,9.88-8.27,17.3-20.59,17.3-11.79,0-18.15-7-20-8.72a1.43,1.43,0,0,1-.15-2.22Z"/><path d="M636.69,51.29V59a1.21,1.21,0,0,1-1.3,1.3H598.1a1.29,1.29,0,0,1-1.3-1.3V1.76A1.18,1.18,0,0,1,598.1.54h36.52a1.27,1.27,0,0,1,1.3,1.22V9.42a1.2,1.2,0,0,1-1.3,1.3H608.13V24.88h19.75a1.31,1.31,0,0,1,1.38,1.3v7.58a1.29,1.29,0,0,1-1.38,1.38H608.13V50.07h27.26A1.23,1.23,0,0,1,636.69,51.29Z"/></g></g></svg>
            </a>
        </div>

        <div class="right">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'primary_right',
                        'menu_class'      => '',
                        'container_class' => 'nav__right headline load-hidden',
                        'items_wrap'      => '<ul>%3$s</ul>',
                        'fallback_cb'     => false,
                    )
                );
            ?>
            <div class="hamburger">
                <span style="margin: 0 0 4px 0;">&nbsp;</span>
                <span style="margin: 0 0 4px 0;">&nbsp;</span>
                <span style="margin: 0 0 0 0;">&nbsp;</span>
            </div>
        </div>

    </div>
</nav>

<!-- Nav: Overlay -->
<div class="nav-overlay">
    <div class="header">
        <div>
            <a href="window.location='<?php echo home_url(); ?>'">
                <svg style="display: block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 636.69 60.78"><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path d="M58.68,60.25H49.26c-.69,0-1.15-.61-1.61-1.69l-2.83-6.35H15l-2.83,6.35c-.54,1.08-.92,1.69-1.68,1.69H1.11c-.77,0-1.46-.61-.92-1.76L26,1.61A1.63,1.63,0,0,1,27.44.54h4.9A1.66,1.66,0,0,1,33.8,1.61L59.67,58.49C60.21,59.64,59.44,60.25,58.68,60.25ZM40.76,43.1,29.89,18.91,19.1,43.1Z"/><path d="M131.7,21.51c0,10.57-7,20.9-21.36,20.9H96.49V59a1.23,1.23,0,0,1-1.23,1.3h-8.8a1.24,1.24,0,0,1-1.3-1.3V1.76A1.18,1.18,0,0,1,86.46.54h23.88C124.74.54,131.7,10.87,131.7,21.51Zm-11.25,0c0-6.05-3.6-10.79-10.34-10.79H96.49V32.23h13.62C116.85,32.23,120.45,27.48,120.45,21.51Z"/><path d="M203.05,60.25h-8A2.39,2.39,0,0,1,192.79,59L182.3,42.41H169V59a1.23,1.23,0,0,1-1.23,1.3H159a1.24,1.24,0,0,1-1.3-1.3V1.76A1.18,1.18,0,0,1,159,.54h23.88c14.4,0,21.36,10.33,21.36,21,0,7.73-3.67,15.31-11.33,18.83l11.33,17.84C204.88,59.33,204.42,60.25,203.05,60.25ZM169,32.23h13.63c6.73,0,10.33-4.75,10.33-10.72s-3.6-10.79-10.33-10.79H169Z"/><path d="M231,59V1.76a1.18,1.18,0,0,1,1.3-1.22H241a1.22,1.22,0,0,1,1.3,1.22V59a1.22,1.22,0,0,1-1.22,1.3h-8.81A1.25,1.25,0,0,1,231,59Z"/><path d="M308.45,51.29V59a1.25,1.25,0,0,1-1.3,1.3H272.62a1.25,1.25,0,0,1-1.3-1.3V1.76a1.18,1.18,0,0,1,1.3-1.22h8.73a1.22,1.22,0,0,1,1.3,1.22V50.07h24.5A1.19,1.19,0,0,1,308.45,51.29Z"/><path d="M417.3,60.25h-8A2.41,2.41,0,0,1,407,59L396.56,42.41H383.24V59a1.23,1.23,0,0,1-1.23,1.3h-8.8a1.24,1.24,0,0,1-1.3-1.3V1.76a1.18,1.18,0,0,1,1.3-1.22h23.88c14.39,0,21.36,10.33,21.36,21,0,7.73-3.67,15.31-11.33,18.83l11.33,17.84C419.14,59.33,418.68,60.25,417.3,60.25Zm-34.06-28h13.62c6.74,0,10.34-4.75,10.34-10.72s-3.6-10.79-10.34-10.79H383.24Z"/><path d="M443,30.39C443,13.55,456,0,473.79,0s30.78,13.55,30.78,30.39-12.86,30.39-30.78,30.39S443,47.23,443,30.39Zm50,0C493,19.67,485.2,11,473.79,11s-19.14,8.65-19.14,19.37,7.81,19.37,19.14,19.37S493,41.11,493,30.39Z"/><path d="M533.88,43.87a1.59,1.59,0,0,1,2.37-.31c2.07,1.91,6.44,6.43,13.48,6.43,6,0,8.88-3.22,8.88-6.74,0-4.21-4.29-5.81-8.65-7.65-11.79-5.59-20-9.72-20-19.06C530,7.81,537.33,0,549.8,0a27.06,27.06,0,0,1,17.84,6.66c.77.69,1.07,1.53.46,2.3l-4.52,5.89c-.84,1.15-1.76,1.46-2.68.69-1.53-1.07-6.5-4.75-11.78-4.75-4.44,0-7.58,2-7.58,5.59,0,3.75,3.06,5.28,8.72,7.58,10.26,4.75,19.91,8.88,19.91,19.52,0,9.88-8.27,17.3-20.59,17.3-11.79,0-18.15-7-20-8.72a1.43,1.43,0,0,1-.15-2.22Z"/><path d="M636.69,51.29V59a1.21,1.21,0,0,1-1.3,1.3H598.1a1.29,1.29,0,0,1-1.3-1.3V1.76A1.18,1.18,0,0,1,598.1.54h36.52a1.27,1.27,0,0,1,1.3,1.22V9.42a1.2,1.2,0,0,1-1.3,1.3H608.13V24.88h19.75a1.31,1.31,0,0,1,1.38,1.3v7.58a1.29,1.29,0,0,1-1.38,1.38H608.13V50.07h27.26A1.23,1.23,0,0,1,636.69,51.29Z"/></g></g></svg>
            </a>
        </div>

        <div class="line-container">
            <span class="line">&nbsp;</span>
        </div>

        <div class="close">
            <div class="close-txt">
                <span>Close</span>
            </div> 
            <div class="close-btn">
                <span>&nbsp;</span>
                <span>&nbsp;</span>
            </div>
        </div>
    </div>
    <div class="menu">
        <?php
            wp_nav_menu(
                array(
                    'theme_location'  => 'mobile_menu',
                    'menu_class'      => '',
                    'container_class' => '',
                    'items_wrap'      => '<ul>%3$s</ul>',
                    'fallback_cb'     => false,
                )
            );
        ?>
        <div class="social-icons">
            <?php get_template_part('template-parts/social-icons'); ?>
        </div>
    </div>
</div>