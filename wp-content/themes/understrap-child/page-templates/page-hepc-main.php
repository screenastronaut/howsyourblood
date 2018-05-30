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
					<div class="section">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<?php the_field('first_section'); ?>

								</div>								
							</div>
						</div>
					</div>
					<div class="section">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<?php the_field('second_section'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="section">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<?php the_field('third_section'); ?>
								</div>
							</div>
						</div>
					</div>
					<div class="section">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<?php the_field('fourth_section'); ?>
								</div>
							</div>
							<div class="row">
								<div class="offset-2 col-8">
									<p style="margin:0;text-align:center"><strong>References</strong></p>
									<ol style="font-size: 12px;">
										<li>Stanaway et al, The global burden of viral hepatitis from 1990 to 2013: findings from the Global Burden of Disease Study 2013, Vol 388, 1081-88, Lancet, July 2016.</li>
										<li>Fatiha S, et al. Estimated 3-year acquisition cost of direct acting antiviral (DAA) for the treatment of Hepatitis C in Malaysia in 2018 to 2020. APASL 2018 Delhi.</li>
										<li>Centers for Disease Control and Prevention (CDC). Hepatitis FAQs for the Public. Retrieved from https://www.cdc.gov/hepatitis/hcv/cfaq.htm. Last accessed 19 March 2018.</li>
										<li>World Health Organization (WHO). Hepatitis C. Retrieved from http://www.who.int/mediacentre/factsheets/fs164/en/. Last accessed 19 March 2018.</li>
									</ol>
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
