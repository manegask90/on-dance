<?php
/**
 * The main template file.
 *
 * @author 3y3ik
 * @since 1.0.0
 *
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php if ( have_posts() ): ?>
                <?php while ( have_posts() ): the_post(); ?>
                    <article <?php post_class( 'post' ); ?>>
                        <div class="post-preview">
                            <h2>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                           <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>

                <footer class="split-footer">
                    <nav class="pager">
                        <?php echo paginate_links(); ?>
                    </nav>
                </footer>
            <?php else: ?>
                <article class="post">
                    <div class="post-preview">
                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'ondance' ); ?></p>
                    </div>
                </article>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
