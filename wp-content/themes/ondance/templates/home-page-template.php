<?php
/**
 * Template Name: Home Page Template
 *
 * @author 3y3ik
 * @since 1.0.0
 */

get_header();
?>

<div class="home-page">
    <?php if ( $sliders = cs_get_option('home_slider') ): ?>
        <div class="home-slider">
            <?php foreach ( $sliders as $slider ): ?>
                <div class="home-slide" style="background-image: url(<?php echo wp_get_attachment_image_url( $slider['img'], 'full' ); ?>)">
                    <div class="banner-overlay"></div>
                    <div class="banner-info">
                        <h2><?php echo esc_html( $slider['title'] ); ?></h2>
                        <p><?php echo esc_html( $slider['description'] ); ?></p>
                        <div class="btn-block">
                            <a href="<?php echo esc_attr( $slider['link_url'] ); ?>">
                                <?php echo esc_html( $slider['link_text'] ); ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <div class="logos">
        <ul class="logo-list">
            <li class="logo-item">
                <img src="<?php echo get_theme_file_uri( 'assets/img/l1.png' ); ?>" alt="">
            </li>
            <li class="logo-item">
                <img src="<?php echo get_theme_file_uri( 'assets/img/l2.png' ); ?>" alt="">
            </li>
            <li class="logo-item">
                <img src="<?php echo get_theme_file_uri( 'assets/img/l3.png' ); ?>" alt="">
            </li>
            <li class="logo-item">
                <img src="<?php echo get_theme_file_uri( 'assets/img/l4.png' ); ?>" alt="">
            </li>
            <li class="logo-item">
                <img src="<?php echo get_theme_file_uri( 'assets/img/l5.png' ); ?>" alt="">
            </li>
            <li class="logo-item">
                <img src="<?php echo get_theme_file_uri( 'assets/img/l6.png' ); ?>" alt="">
            </li>
            <li class="logo-item">
                <img src="<?php echo get_theme_file_uri( 'assets/img/l7.png' ); ?>" alt="">
            </li>
            <li class="logo-item">
                <img src="<?php echo get_theme_file_uri( 'assets/img/l8.png' ); ?>" alt="">
            </li>
            <li class="logo-item">
                <img src="<?php echo get_theme_file_uri( 'assets/img/l9.png' ); ?>" alt="">
            </li>
            <li class="logo-item">
                <img src="<?php echo get_theme_file_uri( 'assets/img/l10.png' ); ?>" alt="">
            </li>
        </ul>
    </div>
    <div class="home-content">
        <div class="container">
            <div class="row row-block vertical-align">
                <div class="col-sm-7">
                    <div class="img-block">
                        <div class="img-shadow"></div>
                        <img src="<?php echo get_theme_file_uri( 'assets/img/home-img-1.jpg' ); ?>" alt="">
                    </div>
                </div>
                <div class="col-sm-offset-1 col-sm-3">
                    <div class="menu-block">
                        <h2><?php echo wp_get_nav_menu_name( 'home-women-menu' ); ?></h2>
	                    <?php wp_nav_menu( array(
		                    'depth' => 2,
		                    'theme_location' => 'home-women-menu',
	                    ) ); ?>
                    </div>
                </div>
                <div class="col-sm-offset-1"></div>
            </div>
            <div class="row row-block vertical-align">
                <div class="col-sm-offset-1 col-sm-3">
                    <div class="menu-block">
                        <h2><?php echo wp_get_nav_menu_name( 'home-man-menu' ); ?></h2>
		                <?php wp_nav_menu( array(
			                'depth' => 2,
			                'theme_location' => 'home-man-menu',
		                ) ); ?>
                    </div>
                </div>
                <div class="col-sm-offset-1 col-sm-7">
                    <div class="img-block">
                        <div class="img-shadow"></div>
                        <img src="<?php echo get_theme_file_uri( 'assets/img/home-img-2.jpg' ); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="new-products">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2><?php the_field( 'new_products_title' ); ?></h2>
                    <div class="select-type">
                        <a href="#" class="active" data-target=".man-products"><?php the_field( 'man_category_title' ); ?></a>
                        <a href="#" data-target=".women-products"><?php the_field( 'women_category_title' ); ?></a>
                    </div>
                    <div class="products-list">
                        <div class="man-products active">
                            <?php echo do_shortcode( '[products limit="8" columns="1" category="dlya-cholovikiv" orderby="id" order="DESC" visibility="visible"]' ); ?>
                        </div>
                        <div class="women-products">
                            <?php echo do_shortcode( '[products limit="8" columns="1" category="dlya-zhinok" orderby="id" order="DESC" visibility="visible"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

