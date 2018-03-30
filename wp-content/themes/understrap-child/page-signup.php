<?php
/**
 * Template Name: Sign Up
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-12" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<div class="blood-tube col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blood-tube.png" alt="">
			</div>

		</div><!-- #primary -->

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
