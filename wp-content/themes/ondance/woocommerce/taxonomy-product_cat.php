<?php
/**
 * WooCommerce Category Template
 *
 * @author 3y3ik
 * @since 1.0.0
 *
 */

$cat = get_queried_object();
$thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );

get_header(); ?>

<div class="woo-category-page">
	<?php if ( isset( $thumbnail_id ) ): ?>
		<div class="banner" style="background-image: url(<?php echo wp_get_attachment_image_url( $thumbnail_id, 'large' ); ?>)">
            <div class="banner-overlay"></div>
			<h1><?php woocommerce_page_title(); ?></h1>
		</div>
	<?php endif; ?>

	<div class="woo-products">
		<div class="container">
			<?php
			if ( have_posts() ) {

				woocommerce_product_loop_start();

				if ( wc_get_loop_prop( 'total' ) ) {
					while ( have_posts() ) {
						the_post();

						/**
						 * Hook: woocommerce_shop_loop.
						 *
						 * @hooked WC_Structured_Data::generate_product_data() - 10
						 */
						do_action( 'woocommerce_shop_loop' );

						wc_get_template_part( 'content', 'product' );
					}
				}

				woocommerce_product_loop_end();

				/**
				 * Hook: woocommerce_after_shop_loop.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			} else {
				/**
				 * Hook: woocommerce_no_products_found.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action( 'woocommerce_no_products_found' );
			}
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
