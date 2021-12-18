<style>
    .square.left {
        background: url('<?php echo get_theme_mod('dual-left_image', 'https://images.unsplash.com/photo-1639753528176-fea260eda9ea?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=626&q=80'); ?>');
        background-size: cover;
        color: <?php echo get_theme_mod('dual-left_color', '#000000'); ?>;
    }
    .square.right {
        background: url('<?php echo get_theme_mod('dual-right_image', 'https://images.unsplash.com/photo-1639753528176-fea260eda9ea?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=626&q=80'); ?>');
        background-size: cover;   
        color: <?php echo get_theme_mod('dual-right_color', '#000000'); ?>;
    }
</style>


<div class="comp__dual-square-links">
    <div class="row">

        <div class="square left">
            <p class="sub-headline">
                <?php echo get_theme_mod('dual-left_sub-header', 'Limited'); ?>
            </p>
            <h2 class="headline">
                <?php echo get_theme_mod('dual-left_header', 'Fall 2021 Line'); ?>
            </h2>
            <p class="desc">
                <?php echo get_theme_mod('dual-left_text', 'Browse through our latest products to find something that works for you.'); ?>
            </p>
            <a href="<?php echo get_theme_mod('dual-left_link-url', '#'); ?>" class="button">
                <?php echo get_theme_mod('dual-left_link-text', 'Shop Fall 2021'); ?>
            </a>
        </div>

        <div class="square right">
            <p class="sub-headline">
                <?php echo get_theme_mod('dual-right_sub-header', 'Limited'); ?>
            </p>
            <h2 class="headline">
                <?php echo get_theme_mod('dual-right_header', 'Fall 2021 Line'); ?>
            </h2>
            <p class="desc">
                <?php echo get_theme_mod('dual-right_text', 'Browse through our latest products to find something that works for you.'); ?>
            </p>
            <a href="<?php echo get_theme_mod('dual-right_link-url', '#'); ?>" class="button">
                <?php echo get_theme_mod('dual-right_link-text', 'Shop Fall 2021'); ?>
            </a>
        </div>

    </div>
</div>