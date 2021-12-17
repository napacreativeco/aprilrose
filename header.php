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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- PAGE CONTAINER -->
<div id="page" class="site">

<!-- HEADER -->

<nav class="nav__container" style="padding-top: 20px;">
    <div class="nav__row">

        <div class="left">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'primary_left',
                        'menu_class'      => '',
                        'container_class' => 'nav__left',
                        'items_wrap'      => '<ul>%3$s</ul>',
                        'fallback_cb'     => false,
                    )
                );
            ?>
        </div>

        <div class="nav__center">
                <span onclick="window.location='<?php echo home_url(); ?>'">April Rose</span>
        </div>

        <div class="right">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'primary_right',
                        'menu_class'      => '',
                        'container_class' => 'nav__right',
                        'items_wrap'      => '<ul>%3$s</ul>',
                        'fallback_cb'     => false,
                    )
                );
            ?>
        </div>


    </div>
</nav>