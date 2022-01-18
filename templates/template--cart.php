<?php
/*
Template Name: Cart
*/
get_header(); ?>

<?php include( get_template_directory() . '/includes/css--shop-global.php' ); ?>

<style>
    /* Container */
    .cart-page .woocommerce {
        min-height: 80vh;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .cart-page form.woocommerce-cart-form {
        display: flex;
        justify-content: center;
        width: 100%;
        max-width: 900px;
    }
    .cart-page table {
        width: 100%;
        border-collapse: collapse;
    }
    .cart-page table a {
        text-decoration: none;
        color: inherit;
    }

    /* Column Sizing */
    /* tr.cart_item th.product-remove { width: 10%; }
    tr.cart_item th.product-name { width: 50%; text-align: left; }
    tr.cart_item th.product-price { width: 15%; }
    tr.cart_item th.product-quantity { width: 10%; }
    tr.cart_item th.product-subtotal { width: 15%; }

    tr.cart_item td.product-remove { width: 10%; }
    tr.cart_item td.product-name { width: 50%; padding: 10px; text-align: left; }
    tr.cart_item td.product-price { width: 15%; }
    tr.cart_item td.product-quantity { width: 10%; }
    tr.cart_item td.product-subtotal { width: 15%; } */

    /* thead tr,
    tbody tr {
        display: grid;
        grid-template-columns: 1fr 2fr 1fr 1fr 1fr;
        align-items: stretch;
        width: 100%;
    } */

    
    /* Table Head */
    .cart-page th {
        padding: 10px 0px;
        border-right: var(--border-wht) !important;
        background: var(--black);
        color: var(--white);
        font-size: 0.8rem;
        text-transform: uppercase;
    }
    .cart-page th:last-of-type {
        border-right: 0px !important;
    }

    /* Row */
    .cart-page tr {
        border-top: 0;
        border-right: 0;
        border-bottom: 2px solid #000;
        border-left: 0;
        display: grid;
        grid-template-columns: 1fr 4fr 2fr 2fr 2fr;
        align-items: stretch;
        width: 100%;
    }

    /* Cells */
    .cart-page td {
        text-align: center;
        border-right: 3px solid rgba(0, 0, 0, 1) !important;
        border-style: dashed;
        border-left: 0px;
        border-top: 0px;
        border-bottom: 0px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
    }
    .cart-page td:last-of-type {
        border-right: 0px !important;
    } 

    /* Remove */
    .cart-page td.product-remove {
        border-right: 0px !important;
    }
    /* Quantity */
    .cart-page td.product-quantity {
        vertical-align: middle;
        margin: 0;
        padding: 10px;
        text-align: center;
    }
    .cart-page div.quantity {
        display: grid;
        justify-content: center;
        grid-template-columns: 1fr 2fr 1fr;
    }
    .cart-page form .quantity a {
		color: var(--white);
		background: var(--black);
        padding: 0.4rem;
		cursor: pointer;
        -webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
    .cart-page input[type="number"] {
        /* max-width: 40px; */
        padding: 0.4rem;
        text-align: center;
        -moz-appearance: textfield;
        border: var(--border-blk);
    }
	.cart-page input::-webkit-outer-spin-button,
	.cart-page input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}
    /* Remove */
    .cart-page td.product-remove svg {
        width: 30px;
    }
    .cart-page .return-to-shop a.button {
        background: var(--black);
        color: var(--white);
        padding: 10px 20px;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 0.9rem;
    }

    /* Coupons */
    .cart-page .coupon {
        display: flex;
        align-items: stretch;
    }
    .cart-page .actions {
        width: 100%;
        max-width: 900px;
        display: flex;
        justify-content: flex-end;
        padding: 20px 0px;
    }
    .cart-page label[for="coupon_code"] {
        display: none;
    }
    .cart-page .actions input#coupon_code {
        padding: 10px 0;
        border-top: 0px;
        border-right: 0px;
        border-bottom: var(--border-blk);
        border-left: 0px;
        margin: 0 10px 0 0;
    }
    .cart-page .actions button.button {
        background: var(--black);
        color: var(--white);
        text-transform: uppercase;
        padding: 10px 20px;
        border: 0px;
    }
    /* Total */
    .cart-page .cart-collaterals {
        width: 100%;
        max-width: 900px;
    }
    .cart-page .cart-collaterals table {
    }
    .cart-page .cart-collaterals h2 {
        text-transform: uppercase;
        font-size: 0.9rem;
    }
    .cart-page .cart-collaterals tr {
        display: grid;
        grid-template-columns: 50% 50%;
        margin: 0;
    }
    .cart-page .cart-collaterals td {
        padding: 5px;
        border: var(--border-blk);
        border-spacing: 0;
    }
    .cart-page tr.cart-subtotal th {
        background: var(--white);
        color: var(--black);
        border-right: var(--border-blk) !important;
    }
    .cart-page tr.order-total th {
        border-right: var(--border-blk) !important;
    }
    /* Checkout */
    .wc-proceed-to-checkout {
        padding: 40px 0px;
        text-align: right;
    }
    .wc-proceed-to-checkout a {
        padding: 10px 20px;
        background: var(--black);
        color: var(--white);
        text-decoration: none;
        text-transform: uppercase;
    }
    /* =========================== MEDIA QUERIES */
    @media (max-width: 575.98px) {
        
    }
    @media (max-width: 767.98px) {
        .cart-page div.quantity a { display: none; }
        .cart-page td.product-price { display: none; }
        .cart-page th.product-price { display: none; }
        .cart-page tr { grid-template-columns: 1fr 4fr 2fr 2fr; }
        .cart-page .coupon { width: 100%; }
    }
    @media (max-width: 991.98px) {
        
    }
    @media (max-width: 1199.98px) {
        
    }
</style>

<div class="cart-page">
    <?php echo do_shortcode('[woocommerce_cart]'); ?>
</div>

<?php get_footer(); ?>