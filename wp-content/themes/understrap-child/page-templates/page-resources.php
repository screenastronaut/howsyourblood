<?php
/**
 * Template Name: Resources Page
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="content-area" id="primary">

			<main class="site-main resources" id="main" role="main">

				<div class="row">
					<?php 
					if(have_rows('organizations')) : 
						while(have_rows('organizations')) : the_row(); ?>
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6">
								<div class="org-logo">
									<a href="<?php echo get_sub_field('subtext'); ?>" target="_blank"><img src="<?php echo get_sub_field('logo');?>" alt="<?php echo get_sub_field('name'); ?>'s logo"></a>
								</div>
								<h4><?php echo get_sub_field('name'); ?></h4>
							</div>
						<?php endwhile; 
					endif; ?>
				</div>

				<div class="row">
					<div class="entry-content col-12">

						<?php while ( have_posts() ) : the_post(); ?>

							<?php the_content(); ?>

						<?php endwhile; // end of the loop. ?>

					</div>
				</div>

			</main><!-- #main -->

		</div><!-- #primary -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
