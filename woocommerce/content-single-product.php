<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product; ?>

<style>
	/* Shop: Single Product */
	.single-product--main {
		display: grid;
		grid-template-columns: 50% 50%;
		height: 100vh;
		max-height: 100vh;
		overflow-y: scroll;
		overflow-x: hidden;
		position: relative;
		-ms-overflow-style: none;
		/* IE and Edge */
		scrollbar-width: none;
		/* Firefox */
		position: relative;
	}

	.single-product--main::-webkit-scrollbar {
		display: none;
	}

	.single-product__main-mobile {
		display: none;
	}

	/* Error */
	ul.woocommerce-error {
		background: var(--black);
		color: var(--white);
		list-style: none;
		margin: 0;
	}

	ul.woocommerce-error {
		font-size: 0.8rem;
		padding: 10px;
	}

	ul.woocommerce-error li a {
		padding: 0;
		margin: 0;
	}

	/* Breadcrumbs */
	.site-main {
		position: relative;
	}

	nav.woocommerce-breadcrumb {
		color: var(--black);
		display: flex;
		flex-direction: row;
		align-items: center;
		font-size: 0.7rem;
		padding: 10px 0px;
		font-family: 'Venti CF';
		font-weight: normal;
	}

	nav.woocommerce-breadcrumb a {
		color: var(--black);
		font-family: 'Venti CF';
		font-weight: normal;
	}

	/* Gallery Button */
	.single-product--main .image .woocommerce-product-gallery__trigger {
		position: absolute;
		top: 0;
		right: 0;
		z-index: 9999;
	}

	/* Image */
	figure.woocommerce-product-gallery__wrapper {
		margin: 0;
	}

	.woocommerce-product-gallery__image img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}

	/* Thumbnails */
	ol.flex-control-thumbs {
		list-style: none;
		margin: 0;
		padding: 0;
	}

	ol.flex-control-thumbs li {
		max-width: 100%;
		overflow: hidden;
		object-fit: cover;
	}

	ol.flex-control-thumbs li img {
		width: 100%;
	}

	/* Summary */
	.single-product--main .summary {
		top: 0;
		margin-top: 0;
		margin-right: 0;
		padding: 0px 40px;
		width: 50vw;
		height: 100vh;
		position: -webkit-sticky;
		position: sticky;
		display: flex;
		flex-direction: column;
		justify-content: center;
	}
	.single-product-container .summary .container {

	}
	.single-product--main .summary h1,
	.single-product--main .summary p {
		margin: 0 0 10px 0;
	}

	/* Add To Cart */
	form.cart {
		display: flex;
		flex-direction: row;
		padding: 10px 0;
	}

	form.cart input[type="number"] {
		padding: 10px;
		text-align: center;
		font-weight: bold;
		border: var(--btn-border-black);
	}

	form.cart button {
		margin-left: 20px;
		background: var(--black);
		color: var(--white);
		border: 0;
		padding: 10px 20px;
	}

	/* Chrome, Safari, Edge, Opera */
	input::-webkit-outer-spin-button,
	input::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}

	/* Firefox */
	input[type=number] {
		-moz-appearance: textfield;
	}

	/* Description */
	.description-block {
		padding: 40px 80px 80px 40px;
	}
	.description-block h2 {
		margin-bottom: 14px;
	}
	.description-block .woocommerce-tabs {
		padding-bottom: 80px;
	}

	ul.tabs {
		display: none;
	}

	/* Custom Fields */
	ul.info-panel {
		list-style: none;
		margin: 0;
		padding: 0;
	}
	ul.info-panel li {
		padding: 40px 0px;
		border-bottom: var(--border-blk);
	}
	ul.info-panel li:first-of-type {
		border-top: var(--border-blk);
	}
	.ingredients {
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
	.ingredients,
	.instructions {
		display: none;
		cursor: pointer;
		transition: all 0.7s;
	}
	.info-panel li {

	}
	.info-panel li .title {
		display: flex;
		justify-content: space-between;
		align-items: center;
		width: 100%;
	}
	.info-panel .ingredients-indicator,
	.info-panel .instructions-indicator {
		font-size: 2rem;
		padding: 0;
		margin: 0;
	}

	/* Related Products */
	.related.products {
		padding: 80px 0px;
	}

	.related.products ul {
		list-style: none;
		display: grid;
		grid-template-columns: 33.33% 33.33% 33.33%;
		justify-content: center;
		padding: 0;
	}

	.related.products ul li.product {
		margin-right: 20px;
	}

	.related.products ul li.product:last-of-type {
		margin-right: 0px;
	}

	.related.products ul li.product img {
		width: 100%;
		object-fit: cover;
		height: 600px;
	}

	.related.products h2 {
		margin: 0 0 0 0;
		font-size: 0.9rem;
	}

	.related.products ul a {
		text-decoration: none;
	}

	.related.products .add_to_cart_button {
		display: none;
	}

	.related.products .price {
		display: none;
	}

	/* ================= MEDIA QUERIES */
	@media (max-width: 575.98px) {

	}

	/* Small devices (landscape phones, less than 768px) */
	@media (max-width: 767.98px) {
		/* Single Product */
		.single-product--main {
			display: none;
		}

		/* Single Product: Summary */
		.single-product__main-mobile {
			display: flex;
			flex-direction: column;
		}

		.single-product__main-mobile .summary {
			padding: 20px 20px 40px 20px;
		}

		.single-product__main-mobile .summary h1 {
			margin: 0 0 10px 0;
		}

		.single-product__main-mobile .product_meta {
			margin: 20px 0 0 0;
		}

		.single-product--main .summary {
			display: block;
			position: relative;
			width: 100vw;
			min-height: 100vh;
			height: auto;
		}

		.single-product--main .description #tab-description {
			padding: 40px 20px;
		}

		/* Single Product: Related Products */
		.related.products {
			padding: 0;
		}
		.related.products ul.products {
            grid-template-columns: 100%;
            padding: 20px;
        }

        .related.products ul.products li {
            margin-right: 0px;
            margin-bottom: 30px;
        }
	}

	/* Medium devices (tablets, less than 992px) */
	@media (max-width: 991.98px) {}

	/* Large devices (desktops, less than 1200px) */
	@media (max-width: 1199.98px) {}
</style>

<?php
/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<!-- Desktop Main -->
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'single-product--main', $product ); ?>>
	
	<div class="image">
		<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
		?>
	</div>

	<div class="summary entry-summary">
		<div class="container">
		<?php woocommerce_breadcrumb(); ?>
			<?php
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );
			?>
		</div>
	</div>

</div>

<!-- Mobile Main -->
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'single-product__main-mobile', $product ); ?>>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<div class="image">
		<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
		?>
	</div>


</div>

<div class="description-block">
	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
