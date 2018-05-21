<?php
/**
 * Template Name: HEPC Checklist Page
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

				<div class="checklist-quiz container">
					<div class="row">
						<div class="col center">
							<h1>Checklist</h1>
							<p>Should I get tested for Hep C?</p>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/checklist.jpg" width="40%">
						</div>
					</div>
					<div class="row">
						<div class="offset-lg-2 col-lg-8">

							<?php if(have_rows('checklist')) :
								$count = 1;
								while(have_rows('checklist')) : the_row(); ?>
									<?php the_sub_field('question'); ?>
									<fieldset id="q-<?=$count?>">
										<input type="radio" id="yes-<?=$count?>" name="q-<?=$count?>" value="Yes" class="yes-check"><label for="yes-<?=$count?>">Yes</label>
										<input type="radio" id="no-<?=$count?>" name="q-<?=$count?>" value="No"><label for="no-<?=$count?>">No</label>
									</fieldset>
									<?php $count++; endwhile; endif; ?>
									<div class="center">
										<a class="cta-link" id="checklist-submit">Submit</a>
									</div>
									
								</div>
							</div>
						</div>

						<div class="checklist-result container">
							<div class="low-risk">
								<div class="row">
									<div class="offset-lg-2 col-lg-8 center">
										<h1>Checklist Results</h1>
										<p>Should you get tested for Hep C?</p>

										<p class="results">Compared to those who have more "Yes", your risk of being infected by HCV may be lower. However, the only way to find out if you are Hepatitis C free is to get your blood tested. Ask your doctor about Hepatitis C test today!</p>
									</div>
								</div>
							</div>
							<div class="high-risk">
								<div class="row">
									<div class="offset-lg-2 col-lg-8 center">
										<h1>Checklist Results</h1>
										<p>Should you get tested for Hep C?</p>

										<p class="results">You may be at risk. We recommend speaking to a doctor about Hepatitis C test.</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="offset-lg-2 col-lg-8 center">
									<h2>Congratulations</h2>
									<p>Here's a promo code for your next Hepatitis C test!</p>
								</div>
							</div>
							<div class="row">
								<div class="offset-lg-1 col-lg-10 center">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blood-vial-free.jpg" alt="">
								</div>
							</div>
							<div class="row">								
								<div class="offset-lg-2 col-lg-8 center">
									<p>Mention or present this code as you sign up for your test at any partnering locations.</p>
									<div class="center">
										<a class="cta-link" href="../hepc-locations">Locate Nearest</a>
									</div>
								</div>
							</div>
						</div>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- Wrapper end -->

		<?php get_footer(); ?>
