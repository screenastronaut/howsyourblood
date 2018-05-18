<?php
/**
 * Template Name: HEPC About Page
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="content-area" id="primary">

		<main class="site-main" id="main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div id="fullpage">
					<div class="section">
						<div class="container">
							<div class="row">
								<div class="offset-md-1 col-10">
									<?php the_field('first_section'); ?>
								</div>								
							</div>
						</div>
					</div>
					<div class="section">
						<div class="container">
							<div class="row">
								<div class="offset-md-1 col-10">
									<?php the_field('second_section'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="section">
						<div class="container">
							<div class="row">
								<div class="offset-md-1 col-10">
									<?php the_field('third_section'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="section">
						<div class="container">
							<div class="row">
								<div class="offset-md-1 col-10">
									<?php the_field('fourth_section'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
