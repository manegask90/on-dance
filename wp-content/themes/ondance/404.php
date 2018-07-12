<?php
/**
 * 404 Page template.
 *
 * @author 3y3ik
 * @since 1.0.0
 *
 */

get_header(); ?>

<main class="container">
    <div class="row">
        <div class="col-xs-12 single-content">
            <h1><?php esc_html_e( '404', 'ondance' ); ?></h1>
            <p><?php esc_html_e( 'Page not found', 'ondance'); ?></p>
            <p><a href="<?php echo home_url( '/' ); ?>"><?php esc_html_e( '&larr; Go home', 'ondance' ); ?></a></p>
        </div>
    </div>
</main>

<?php get_footer(); ?>
