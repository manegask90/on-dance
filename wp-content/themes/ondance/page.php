<?php
/**
 * Page Templates
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
                <h1><?php the_title(); ?></h1>

                <?php the_content(); ?>
            </div>
        </div>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>
