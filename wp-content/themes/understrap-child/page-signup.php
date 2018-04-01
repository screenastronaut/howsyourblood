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

			<main class="site-main col-xl-9 col-lg-9 col-md-12 col-sm-12 col-xs-12" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

					<div id="tnc" class="hidden-fancybox"><?php echo get_field('tnc'); ?></div>
					<div id="hcp" class="hidden-fancybox"><?php echo get_field('hcp'); ?></div>
					<div id="pdpa" class="hidden-fancybox"><?php echo get_field('pdpa'); ?></div>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<div class="blood-tube col-xl-3 col-lg-3 d-none d-lg-block">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blood-tube.png" alt="">
			</div>

		</div><!-- #primary -->

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
