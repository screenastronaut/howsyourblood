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

		<main class="site-main entry-content" id="main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div id="fullpage">
					<?php if(have_rows('hepc_sliders')) :
						while(have_rows('hepc_sliders')) : the_row(); ?>
							<div class="section">
								<div class="container">
									<div class="row">
										<div class="offset-1 col-10">
											<?php the_sub_field('slide'); ?>
										</div>								
									</div>
								</div>
							</div>
						<?php endwhile;
					endif; ?>
				</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
