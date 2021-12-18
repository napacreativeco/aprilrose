<style>
    .hero__row {
        background: url('<?php echo get_theme_mod('hero_image', 'https://images.unsplash.com/photo-1507652313519-d4e9174996dd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80'); ?>');
        background-size: cover;
    }
</style>

<section class="hero">
    <div class="hero__row">
        <div class="hero__cta">
            <p><?php echo get_theme_mod('hero_sub-header', 'Unique Collections'); ?></p>
            <h1 class="headline"><?php echo get_theme_mod('hero_header', 'Bio-Active Collections'); ?></h1>
            <a href="<?php echo get_theme_mod('hero_link-url', '/shop'); ?>" class="button"><?php echo get_theme_mod('hero_link-text', 'Shop Collections'); ?></a>
        </div>
    </div>
</section>