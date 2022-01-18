<style>
    /* Breadcrumbs */
    .product-archive .breadcrumbs {
        padding: 0;
        width: 100%;
        font-size: 0.9rem;
    }
    nav.woocommerce-breadcrumb {
        width: 100%;
        display: flex;
        justify-content: center;
        flex-direction: row;
    }
</style>

<!-- BREADCRUMBS -->
<div class="breadcrumbs">
    <?php woocommerce_breadcrumb(); ?>
</div>