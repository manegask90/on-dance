<?php
/**
 * Header template.
 *
 * @author 3y3ik
 * @since 1.0.0
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header-menu">
    <div class="logo">
        <a href="<?php echo home_url( '/' ); ?>">
            <img src="<?php echo get_theme_file_uri( 'assets/img/logo_black.png' ); ?>" alt="">
        </a>
    </div>
    <div class="menu-container">
	    <?php if ( has_nav_menu( 'header-menu' ) ): ?>
		    <?php wp_nav_menu( array(
			    'depth' => 2,
			    'theme_location' => 'header-menu',
		    ) ); ?>
	    <?php endif; ?>
    </div>
    <div class="languages">
        <ul>
            <?php pll_the_languages( array(
                'hide_if_empty' => false,
                'display_names_as' => 'slug',
            ) ); ?>
        </ul>
    </div>
</header>
