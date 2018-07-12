<?php
/**
 * Footer template.
 *
 * @author 3y3ik
 * @since 1.0.0
 *
 */

$instagram_photos = ondance_get_instagram_photos();
?>

<?php if ( ! empty( $instagram_photos ) ): ?>
    <div class="instagram-wrapper">
        <div class="images">
            <?php foreach ( $instagram_photos as $instagram_photo ): ?>
                <img src="<?php echo esc_url( $instagram_photo['image'] ); ?>" alt="">
            <?php endforeach; ?>
        </div>
        <div class="subscribe">
            <img src="<?php echo get_theme_file_uri( 'assets/img/logo-instagram.jpg' ); ?>" class="icon" alt="">
            <a href="//instagram.com/On_dance_shop" target="_blank" class="link">On_dance_shop</a>
        </div>
    </div>
<?php endif; ?>

<footer class="footer-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="copyright">
                    <div class="copyright__title">
                        <img src="<?php echo get_theme_file_uri( 'assets/img/logo_white.png' ); ?>" alt="">
                    </div>
                    <div class="copyright__text"><?php echo cs_get_option( 'footer_description' ); ?></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="block">
                    <div class="block__title"><?php echo cs_get_option( 'contact_address_title' ); ?></div>
                    <div class="block__text"><?php echo cs_get_option( 'contact_address_content' ); ?></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="block">
                    <div class="block__title"><?php echo cs_get_option( 'contact_communications_title' ); ?></div>
                    <div class="block__text"><?php echo cs_get_option( 'contact_communications_content' ); ?></div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="block">
                    <div class="block__title"><?php echo cs_get_option( 'contact_schedule_title' ); ?></div>
                    <div class="block__text"><?php echo cs_get_option( 'contact_schedule_content' ); ?></div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php if ( is_singular( 'product' ) ): ?>
    <div class="modal fade" id="table-sizes--modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

                <div class="modal-body">
                    <h2><?php echo esc_html( cs_get_option( 'product_ts_title' ) ); ?></h2>
                    <p><?php echo esc_html( cs_get_option( 'product_ts_desc' ) ); ?></p>

                    <div class="sizes-wrapper one">
                        <h4><?php echo esc_html( cs_get_option( 'product_ts_whiteness_women' ) ); ?></h4>
                        <img src="<?php echo get_theme_file_uri( 'assets/img/size-women-whiteness.jpg' ); ?>" alt="">
                    </div>
                    <div class="sizes-wrapper two">
                        <h4><?php echo esc_html( cs_get_option( 'product_ts_whiteness_man' ) ); ?></h4>
                        <img src="<?php echo get_theme_file_uri( 'assets/img/size-man-whiteness.jpg' ); ?>" alt="">
                    </div>
                    <div class="sizes-wrapper three">
                        <h4><?php echo esc_html( cs_get_option( 'product_ts_footwear' ) ); ?></h4>
                        <img src="<?php echo get_theme_file_uri( 'assets/img/size-footwear.png' ); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
