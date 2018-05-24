<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

	<?php 
	if(is_page('welcome')) : ?>
		<div class="container-fluid">
			<div class="row">
				<div class="center">
					<div style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/img/cover-photo.jpg'); background-size: cover; padding: 30px 0">
						<div class="offset-3 col-6">
							<?php the_field('title_text'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif;
	?>

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="content-area offset-1 col-10" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
