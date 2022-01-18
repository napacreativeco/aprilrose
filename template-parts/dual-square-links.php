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
    /* Component: Dual Square Links */
    .comp__dual-square-links {
        width: 100%;
    }

    .comp__dual-square-links .row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        justify-content: center;
    }

    .comp__dual-square-links .square {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 600px;
        padding: 20px 100px;
        color: var(--white);
        text-align: center;
    }

    .comp__dual-square-links .row .square {
        color: var(--white);
    }

    .comp__dual-square-links .headline {
        font-size: 1.8rem;
        margin: 0 0 20px 0;
    }

    .comp__dual-square-links .sub-headline {
        font-size: 0.8rem;
        margin: 0 0 10px 0;
    }

    .comp__dual-square-links a.button {
        border: var(--btn-border-white);
    }

    .comp__dual-square-links a.button:hover {
        background: var(--white);
        color: var(--black);
    }
</style>


<div class="comp__dual-square-links">
    <div class="row">

        <div class="square left">
            <div data-aos="fade-up">
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
        </div>

        <div class="square right">
            <div data-aos="fade-up" data-aos-delay="300">
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
</div>