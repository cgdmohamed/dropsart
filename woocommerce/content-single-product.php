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

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<!-- Start Product Details Area -->
<section class="product-details-area pt-5">
	<div class="container" id="product-<?php the_ID(); ?>" <?php wc_product_class('', $product); ?>>
	<div class="breadcrumbs rounded px-3 pt-2 pb-0.5 mb-1"><?php custom_breadcrumbs(); ?></div>

		<div class="row">
			<div class="col-lg-4 col-md-12">
				<div class="product-details-image">
					<?php wc_get_template_part('single-product/product-image'); ?>
				</div>
			</div>

			<div class="col-lg-8 col-md-12">
				<div class="product-details-desc summary entry-summary">
					<?php do_action('woocommerce_single_product_summary'); ?>
					
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid description-section">
		<div class="container">
			<div class="col-lg-12 col-md-12">
				<div class="tab products-details-tab">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<ul class="tabs pt-3">
								<li>
									<a href="#">
										الوصف
									</a>
								</li>
							</ul>
						</div>

						<div class="col-lg-12 col-md-12">
							<div class="tab_content pb-3">
								<div class="tabs_item">
									<div class="products-details-tab-content">
										<?php wc_get_template_part('single-product/tabs/description'); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- End Product Details Area -->
<?php do_action('woocommerce_after_single_product'); ?>