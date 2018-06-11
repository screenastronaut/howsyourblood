<?php
/**
 * Template Name: HEPC Main Page
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

				<div class="scroll-down svg" id="home-scroll-down">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_2" x="0px" y="0px" viewBox="0 0 25.166666 37.8704414" enable-background="new 0 0 25.166666 37.8704414" xml:space="preserve">
						<path class="stroke" fill="none" stroke="#c7c4b8" stroke-width="2.5" stroke-miterlimit="10" d="M12.5833445 36.6204414h-0.0000229C6.3499947 36.6204414 1.25 31.5204487 1.25 25.2871208V12.5833216C1.25 6.3499947 6.3499951 1.25 12.5833216 1.25h0.0000229c6.2333269 0 11.3333216 5.0999947 11.3333216 11.3333216v12.7037992C23.916666 31.5204487 18.8166714 36.6204414 12.5833445 36.6204414z"></path>
						<path class="scroller" fill="#c7c4b8" d="M13.0833359 19.2157116h-0.9192753c-1.0999985 0-1.9999971-0.8999996-1.9999971-1.9999981v-5.428606c0-1.0999994 0.8999987-1.9999981 1.9999971-1.9999981h0.9192753c1.0999985 0 1.9999981 0.8999987 1.9999981 1.9999981v5.428606C15.083334 18.315712 14.1833344 19.2157116 13.0833359 19.2157116z"></path>
					</svg><i class="icon icon-arrow-down"></i>
				</div>
				<div id="fullpage">
					<div class="section fp-auto-height-responsive">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<?php the_field('first_section'); ?>

								</div>								
							</div>
						</div>
					</div>
					<div class="section fp-auto-height-responsive">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<?php the_field('second_section'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="section fp-auto-height-responsive">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<?php the_field('third_section'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="section fp-auto-height-responsive">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<?php the_field('fourth_section'); ?>
								</div>
							</div>
						</div>

						<div class="wrapper" id="wrapper-footer" style="min-height:0">

							<footer class="<?=$theme?>-footer site-footer <?php echo esc_attr( $container ); ?>" id="colophon">

								<div class="row h-100">

									<div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-4">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hfm-logo.png" class="logo" alt="Hepatitis Free Malaysia logo">
									</div>
									<div class="align-self-center offset-xl-6 offset-lg-6 offset-md-6 col-xl-4 col-lg-4 col-md-4 col-sm-8 col-8">
										<span>&copy;Copyright 2017. All rights reserved by Hepatitis Free Malaysia.</span>
										<!-- <ul class="translate"><?php pll_the_languages(array('display_names_as' => 'slug', 'hide_if_empty' => 0)); ?></ul> -->
									</div>

								</div><!-- row end -->

							</footer><!-- container end -->

						</div><!-- wrapper end -->
					</div>
				</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- Wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

<?php //get_footer(); ?>
