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

				<img class="mouse-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mouse.svg">
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
