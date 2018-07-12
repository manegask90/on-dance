<?php
/**
 * Template Name: About Page Template
 *
 * @author 3y3ik
 * @since 1.0.0
 */

get_header();
?>

<div class="about-page">
	<div class="container">
		<h2 class="page-title">
			<?php the_field( 'title' ); ?>
		</h2>

		<div class="row block">
			<div class="col-sm-offset-1 col-sm-5">
				<div class="image-block" style="background-image: url(<?php echo get_theme_file_uri( 'assets/img/about-1.jpg' ); ?>)"></div>
			</div>
			<div class="col-sm-offset-1 col-sm-4">
				<div class="text-block">
					<div class="title"><?php the_field( 'block_1_title' ); ?></div>
					<div class="desc"><?php the_field( 'block_1_description' ); ?></div>
				</div>
			</div>
            <div class="col-sm-offset-1"></div>
		</div>
		<div class="row block">
			<div class="col-sm-offset-1 col-sm-4">
				<div class="text-block">
					<div class="desc">
						<?php the_field( 'block_2_description' ); ?>
					</div>
				</div>
				<div class="info-block__wrapper">
					<div class="info-block">
						<p class="title"><?php the_field( 'info_block_1_title' ); ?></p>
						<p class="text"><?php the_field( 'info_block_1_subtitle' ); ?></p>
					</div>
					<div class="info-block">
						<p class="title"><?php the_field( 'info_block_2_title' ); ?></p>
						<p class="text"><?php the_field( 'info_block_2_subtitle' ); ?></p>
					</div>
				</div>
			</div>
			<div class="col-sm-offset-1 col-sm-4">
				<div class="image-block" style="background-image: url(<?php echo get_theme_file_uri( 'assets/img/about-2.jpg' ); ?>)"></div>
			</div>
            <div class="col-sm-offset-1"></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>

