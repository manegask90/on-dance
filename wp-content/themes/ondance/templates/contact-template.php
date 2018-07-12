<?php
/**
 * Template Name: Contact Page Template
 *
 * @author 3y3ik
 * @since 1.0.0
 */

get_header();
?>

<div class="contact-page">
	<div class="contact-info">
		<h2 class="title"><?php the_field( 'page_title' ); ?></h2>

		<div class="container">
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
	</div>
	<div class="google-map-wrapper">
		<div id="google-map-id"></div>
	</div>
</div>

<?php get_footer(); ?>

