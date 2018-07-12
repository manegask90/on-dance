<?php
/**
 * Template Name: Custom Order Page Template
 *
 * @author 3y3ik
 * @since 1.0.0
 */

get_header();
?>

<div class="custom-order-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-offset-2 col-sm-8">
                <h2 class="page-title"><?php the_field( 'page_title' ); ?></h2>
                <div class="block">
                    <strong class="block__title"><?php the_field( 'block_1_title' ); ?></strong>
                    <p class="block__text"><?php the_field( 'block_1_description' ); ?></p>
                </div>
                <div class="block">
                    <strong class="block__title"><?php the_field( 'block_2_title' ); ?></strong>
                    <p class="block__text"><?php the_field( 'block_2_description' ); ?></p>
                </div>
                <div class="block">
                    <strong class="block__title"><?php the_field( 'block_3_title' ); ?></strong>
                    <p class="block__text"><?php the_field( 'block_3_description' ); ?></p>
                </div>
                <div class="block">
                    <strong class="block__title"><?php the_field( 'block_4_title' ); ?></strong>
                    <div class="map-measures">
                        <img src="<?php echo get_theme_file_uri( 'assets/img/map-measures.jpg' ); ?>" alt="">
                    </div>
                    <a href="<?php echo get_theme_file_uri( 'assets/img/map-measures.jpg' ); ?>" class="download-map-measures__btn" target="_blank">
                        <?php the_field( 'download_button_text' ); ?>
                    </a>
                </div>
            </div>
            <div class="col-sm-offset-2"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

