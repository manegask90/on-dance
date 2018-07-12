<?php
/**
 * Shop breadcrumb
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/breadcrumb.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.0
 * @see         woocommerce_breadcrumb()
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$back_url = '#';

if ( wp_get_referer() ) {
    $back_url = wp_get_referer();
} else {
    $product_categories = get_the_terms( get_the_ID(), 'product_cat' );

    if ( ! is_wp_error( $product_categories ) && ! empty( $product_categories[0]->term_id ) ) {
        $back_url = get_term_link( $product_categories[0] );
    }
}
?>

<div class="woo-breadcrumb">
	<div class="container">
		<a href="<?php echo esc_url( $back_url ); ?>">
            <i class="fas fa-arrow-left"></i>
            Повернутись до списку усіх товарів
        </a>
	</div>
</div>
