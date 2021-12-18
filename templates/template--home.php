<?php
/*
Template Name: Home
*/
get_header(); ?>

<!-- Hero -->
<?php get_template_part('template-parts/hero'); ?>

<!-- Eco Luxe -->
<section class="home__ecoluxe">
    <h2 class="headline">Eco Luxe, Vegan, Cruelty Free</h2>
    <p>Bottled in the Napa Valley free from: Cruelty, GMO, Artificial Ingredients, Fragrance & Toxins.</p>
    <p class="small">Leaping Bunny Certified Lab</p>
</section>

<!-- Three Line Items -->
<section class="home__lineitems">
    <div class="row">
        <div class="cell left">
            <h3 class="headline">Fall 2021 Line</h3>
            <p>Browse through our latest products to find something that works for you.</p>
            <a href="#">Shop by Category</a><br />
            <a class="button">Shop Fall 2021</a>
        </div>
        <div class="cell right">
            [3 products]
        </div>
    </div>
</section>

<!-- Facial Collection -->
<section class="home__facial-collection">
    <div class="row">
        <h3 class="headline">Face Care</h3>
        <p>Facial Routines curated by us</p>
    </div>
    <div class="grid">
        [four products]
    </div>
</section>

<!-- Dual Square Links -->
<?php get_template_part('template-parts/dual-square-links'); ?>

<!-- Newsletter -->
<?php get_template_part('template-parts/newsletter'); ?>

<?php get_footer(); ?>