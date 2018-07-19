<?php
/**
 * The template includes necessary functions for theme.
 *
 * @author 3y3ik
 * @since 1.0.0
 *
 */

if ( ! isset( $content_width ) ) {
	$content_width = 960; // pixel
}

// Settings for CS Framework
define( 'CS_ACTIVE_METABOX', false );
define( 'CS_ACTIVE_TAXONOMY', false );
define( 'CS_ACTIVE_CUSTOMIZE', false );
define( 'CS_ACTIVE_SHORTCODE', false );
define( 'CS_ACTIVE_LIGHT_THEME', false );
define( 'CS_ACTIVE_FRAMEWORK', true );

// Include Custom Theme Files
require_once get_theme_file_path( 'codestar/cs-framework.php' );



/**
 * Set theme settings after setup
 */
function ondance_after_setup() {
	load_theme_textdomain( 'ondance', get_template_directory() . '/languages' );

	register_nav_menus( array( 'header-menu' => __( 'Header Menu', 'ondance' ) ) );
	register_nav_menus( array( 'home-man-menu' => __( 'Home Man Menu', 'ondance' ) ) );
	register_nav_menus( array( 'home-women-menu' => __( 'Home Woman Menu', 'ondance' ) ) );

	add_theme_support( 'title-tag' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
}
add_action( 'after_setup_theme', 'ondance_after_setup' );

/** Loads all the js and css script to frontend */
function ondance_enqueue_scripts() {
	// general settings
	if ( is_admin() ) { return; }
	if ( is_singular() ) { wp_enqueue_script( 'comment-reply' ); }


	// register style
	if ( is_page_template( 'templates/home-page-template.php' ) ) {
		wp_enqueue_style( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' );
		wp_enqueue_style( 'slick-theme', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css' );
	}

	wp_enqueue_style( 'fontawesome', '//use.fontawesome.com/releases/v5.0.10/css/all.css' );
	wp_enqueue_style( 'bootstrap', get_theme_file_uri( 'assets/libs/bootstrap/css/bootstrap.min.css' ) );
	wp_enqueue_style( 'ondance-google-fonts', '//fonts.googleapis.com/css?family=Cormorant+Garamond:400,400i,600|Montserrat:400,500,600' );
	wp_enqueue_style( 'ondance-main', get_theme_file_uri( 'assets/css/style.css' ) );


	// register js
	if ( is_page_template( 'templates/contact-template.php' ) ) {
		wp_enqueue_script( 'google-maps', '//maps.googleapis.com/maps/api/js?key=AIzaSyA0GIVGR-_jPibqOyTdo1dCWF-eGggKAtY', array(), null, true );
	}
	if ( is_page_template( 'templates/home-page-template.php' ) ) {
		wp_enqueue_script( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array( 'jquery' ), null, true );
	}

	wp_enqueue_script( 'bootstrap', get_theme_file_uri( 'assets/libs/bootstrap/js/bootstrap.min.js' ), array( 'jquery' ), null, true );
	wp_enqueue_script( 'ondance-main', get_theme_file_uri( 'assets/js/main.js' ), array( 'jquery' ), null, true );


	wp_localize_script( 'ondance-main', 'ondance', array(
		'assetsUrl' => get_theme_file_uri( 'assets' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'ondance_enqueue_scripts' );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );






/**
 * Get Instagram Photos
 *
 * @return array
 */
function ondance_get_instagram_photos() {
	$instagram = get_transient( 'instagram-photos' );

	if ( false !== $instagram ) {
		return unserialize( $instagram );
	}

	$request = wp_remote_get( 'https://instagram.com/On_dance_shop' );

	if ( ! is_wp_error( $request ) && wp_remote_retrieve_response_code( $request ) == 200 ) {
		$shared_data = explode( 'window._sharedData = ', $request['body'] );
		$shared_data_json = explode( ';</script>', $shared_data[1] );
		$shared_data_array = json_decode( $shared_data_json[0], true );

		if ( ! empty( $shared_data_array ) ) {
			$count = 0;
			$instagram = array();
			$images = $shared_data_array['entry_data']['ProfilePage'][0]['graphql']['user']['edge_owner_to_timeline_media']['edges'];

			if ( isset( $images ) ) {
				foreach ( $images as $image ) {
					if ( $count >= 10 ) {
						break;
					}
					if ( ! empty( $image['node']['display_url'] ) ) {
						$count++;
						$instagram[] = array(
							'link' => $image['node']['shortcode'],
							'image' => $image['node']['display_url'],
						);
					}
				}

				set_transient( 'instagram-photos', serialize( $instagram ), HOUR_IN_SECONDS * 3 );
				return $instagram;
			}
		}
	}

	return array();
}

add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_single_add_to_cart_text' );  // 2.1 +

function woo_custom_single_add_to_cart_text() {

    return __( 'Купити', 'woocommerce' );

}
