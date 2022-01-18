<style>
    /* Hero */
    .hero {
        width: 100%;
        max-width: 100vw;
        height: calc(100vh - 40px);
        display: flex;
        align-items: stretch;
        color: var(--white);
    }

    .hero .hero__row {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding-bottom: 10%;
        padding-left: 10%;
        background: url('<?php echo get_theme_mod('hero_image', 'https://images.unsplash.com/photo-1507652313519-d4e9174996dd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80'); ?>');
        background-size: cover;
    }

    .hero h1 {
        font-size: 2rem;
        margin: 0 0 20px 0;
    }

    .hero p {
        margin: 0;
    }

    .hero a.button {
        border: var(--btn-border-white);
    }

    .hero a.button:hover {
        background: var(--white);
        color: var(--black);
    }
    @media (max-width: 575.98px) {

    }

    /* Small devices (landscape phones, less than 768px) */
    @media (max-width: 767.98px) {

        /* Hero */
        .hero {
            height: calc(100vh - 85px);
        }

        .hero .hero__row {
            padding-bottom: 30%;
        }

    }

    /* Medium devices (tablets, less than 992px) */
    @media (max-width: 991.98px) {}

    /* Large devices (desktops, less than 1200px) */
    @media (max-width: 1199.98px) {}
</style>

<section class="hero">
    <div class="hero__row">
        <div class="hero__cta" data-aos="fade-up">
            <p><?php echo get_theme_mod('hero_sub-header', 'Unique Collections'); ?></p>
            <h1 class="headline"><?php echo get_theme_mod('hero_header', 'Bio-Active Collections'); ?></h1>
            <a href="<?php echo get_theme_mod('hero_link-url', '/shop'); ?>" class="button"><?php echo get_theme_mod('hero_link-text', 'Shop Collections'); ?></a>
        </div>
    </div>
</section>