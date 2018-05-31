<?php
/**
 * Template Name: HEPC FAQ Page
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );

global $theme;
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="content-area" id="primary">

		<main class="site-main entry-content <?=$theme?>-theme" id="main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="container">
					<div class="row">
						<div class="col">
							<h1 class="center">Frequently Asked Questions (FAQs)</h1>
						</div>
						<div class="faq-container offset-1 col-10">
							<ol>
								<?php if(have_rows('faq')) :
									while(have_rows('faq')) : the_row(); ?>
										<div class="faq-question">
											<li><?php the_sub_field('question'); ?></li>
											<div class="faq-answer"><?php the_sub_field('answer'); ?></div>
										</div>
									<?php endwhile;
								endif; ?>
							</ol>
						</div>
					</div>
				</div>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
