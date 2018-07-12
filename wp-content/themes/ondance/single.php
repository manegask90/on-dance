<?php
/**
 * Single Page
 *
 * @author 3y3ik
 * @since 1.0.0
 *
 */

get_header(); ?>

<?php while ( have_posts() ): the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 single-content">
                <p class="meta">
                    <?php the_author(); ?>
                    <?php esc_html_e( 'in', 'ondance' ); ?>
                    <?php the_category( ', ' ); ?>

                    <i class="link-spacer"></i>
                    <time class="post-date" datetime="<?php the_time(); ?>">
                        <?php the_time( get_option( 'date_format' ) ); ?>
                    </time>
                </p>

                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>
            </div>
        </div>
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>
