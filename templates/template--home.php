<?php
/*
Template Name: Home
*/
get_header(); ?>

<style>
    /* Home: Eco Luxe */
    .home__ecoluxe {
        width: 100%;
        font-size: 1.4rem;
    }

    .home__ecoluxe .row {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 100px 20px;
        text-align: center;
    }

    .home__ecoluxe h2 {
        margin: 0 0 10px 0;
    }

    /* Home: Line Items */
    .home__lineitems {
        width: 100%;
        padding: 80px 20px;
    }

    .home__lineitems .row {
        display: grid;
        grid-template-columns: 33.33% 1fr;
        align-items: center;
        padding: 0 0 60px 0;
        width: 100%;
        max-width: 100%;
        position: relative;
    }

    .home__lineitems .cell.right {
        max-width: 100%;
        overflow-x: scroll;
        padding-bottom: 20px;
        cursor: grab;
        box-shadow: inset 0 8px 10px -6px black;
    }

    /* Scrollbar width */
    .home__lineitems .cell.right::-webkit-scrollbar {
        display: none;
    }

    /* Track */
    .home__lineitems .right::-webkit-scrollbar-track {
        background: #000000 !important;
    }

    /* Handle */
    .home__lineitems .cell.right::-webkit-scrollbar-thumb {
        background: #000000;
        height: 2px;
    }

    .home__lineitems::-webkit-scrollbar-button {
        background: #000;
        color: #000;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    .home__lineitems .headline {
        font-size: 1.5rem;
    }

    .home__lineitems p {
        padding-right: 60px;
    }

    .home__lineitems a {
        text-decoration: none;
    }

    .home__lineitems a.button {
        display: inline-block;
        border: var(--btn-border-black);
    }

    .home__lineitems a.button:hover {
        background: var(--black);
        color: var(--white);
    }

    /* Slider */
    ul.spotlight-slider {
        list-style: none;
        display: flex;
        flex-direction: row;
        min-width: 100%;
        margin: 0;
        padding: 0 0 20px 0;
    }

    ul.spotlight-slider li.product {
        margin: 0 20px 0 0;
    }

    ul.spotlight-slider li:last-of-type {
        padding-right: 40px;
    }

    ul.spotlight-slider a {
        width: 100%;
    }

    ul.spotlight-slider .image {
        width: 400px;
        height: 500px;
    }

    ul.spotlight-slider .data {
        display: grid;
        grid-template-columns: 80% 20%;
        margin-top: 6px;
    }

    ul.spotlight-slider .data .price {
        display: flex;
        justify-content: flex-end;
    }

    ul.spotlight-slider .data .price span {
        font-size: 1rem;
    }

    ul.spotlight-slider p {
        margin: 0;
        font-size: 0.8rem;
    }

    ul.spotlight-slider .price {
        font-size: 0.6rem;
    }

    button.scroll-right {
        position: absolute;
        top: 40%;
        right: -20px;
        background: var(--black);
        color: var(--white);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        z-index: 999;
        border: 0;
        font-weight: bold;
        cursor: pointer;
    }

    /* Home: Collection */
    .home__facial-collection {
        width: 100%;
    }

    .home__facial-collection .row {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px 0px;
    }

    .home__facial-collection .headline {
        font-size: 1.5rem;
        margin: 0;
        text-transform: uppercase;
    }

    .home__facial-collection ul.home-products {
        list-style: none;
        display: grid;
        grid-template-columns: 25% 25% 25% 25%;
        margin: 0 auto 60px auto;
        grid-gap: 20px;
        padding: 0;
        max-width: 80%;
    }

    .home__facial-collection .grid {
        margin-top: 20px;
    }

    .home__facial-collection li.product {
        margin-bottom: 40px;
    }

    ul.home-products .data {
        display: grid;
        grid-template-columns: 80% 20%;
        margin-top: 6px;
    }

    ul.home-products .data .price {
        display: flex;
        justify-content: flex-end;
    }

    ul.home-products .data p {
        margin: 0px;
        font-weight: bold;
        font-size: 0.8rem;
    }

    ul.home-products .data .price span {
        font-size: 1rem;
    }

    .home__facial-collection .product p {
        margin: 4px 0px 4px 0px;
    }

    .home__facial-collection .product a {
        text-decoration: none;
    }

    .home__facial-collection .product .image {
        width: 100%;
        height: 400px;
    }

    /* ================= MEDIA QUERIES */
    @media (max-width: 575.98px) {

    }

    /* Small devices (landscape phones, less than 768px) */
    @media (max-width: 767.98px) {

        /* Ecoluxe */
        .home__ecoluxe {
            max-width: 100%;
            font-size: 1rem;
        }

        /* Line Items */
        .home__lineitems {
            padding: 0px;
        }

        .home__lineitems .row {
            display: block;
            padding: 20px;
        }

        .home__lineitems .row .cell.right {
            max-width: 100%;
            margin-top: 60px;
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .home__lineitems .row .cell.right::-webkit-scrollbar {
            display: none;
        }

        ul.spotlight-slider .image {
            width: 65vw;
            height: 400px;
        }

        button.scroll-right {
            display: none;
        }

        /* Home Products */
        .home__facial-collection {
            padding: 100px 0px;
        }

        .home__facial-collection ul.home-products {
            grid-template-columns: 100%;
            padding: 20px;
            max-width: 100%;
        }

        /* Dual Square Links */
        .comp__dual-square-links .row {
            grid-template-columns: 100%;
        }

        .comp__dual-square-links .square {
            padding: 20px 40px;
        }

        /* Newsletter */
        .comp__newsletter {
            grid-template-columns: 100%;
        }

        .comp__newsletter div {
            padding: 20px;
        }
    }

    /* Medium devices (tablets, less than 992px) */
    @media (max-width: 991.98px) {}

    /* Large devices (desktops, less than 1200px) */
    @media (max-width: 1199.98px) {}
</style>

<!-- Hero -->
<?php get_template_part('template-parts/hero'); ?>

<!-- Eco Luxe -->
<section class="home__ecoluxe">
    <div class="row" data-aos="fade-up">
        <h2 class="headline load-hidden">Eco Luxe, Vegan, Cruelty Free</h2>
        <p>Bottled in the Napa Valley free from: Cruelty, GMO, Artificial Ingredients, Fragrance & Toxins.</p>
        <p class="small">Leaping Bunny Certified Lab</p>
    </div>
</section>

<!-- Three Line Items -->
<section class="home__lineitems">
    <div class="row">
        <div class="cell left" data-aos="fade-up">
            <h3 class="headline load-hidden">Fall 2021 Line</h3>
            <p>Browse through our latest products to find something that works for you.</p>
            <a href="#">Shop by Category</a><br />
            <a class="button">Shop Fall 2021</a>
        </div>
        <div id="scroller" class="slide-container cell right">
            <!-- Spotlight Products -->
            <?php get_template_part('template-parts/spotlight-slider'); ?>
        </div>
    </div>
</section>

<!-- Facial Collection -->
<section class="home__facial-collection">
    <div class="row" data-aos="fade-up">
        <h3 class="headline load-hidden">Face Care</h3>
        <p>Facial Routines curated by us</p>
        <p style="margin: 0">or <a href="#" style="text-decoration: underline; display: inline-block;">Shop All</a></p>
    </div>
    <div class="grid">
        <!-- Spotlight Products -->
        <?php get_template_part('template-parts/home--products'); ?>
    </div>
</section>

<!-- Dual Square Links -->
<?php get_template_part('template-parts/dual-square-links'); ?>

<!-- Newsletter -->
<?php get_template_part('template-parts/newsletter'); ?>

<?php get_footer(); ?>