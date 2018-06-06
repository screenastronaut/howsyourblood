<?php
/**
 * Template Name: HEPC Checklist Page
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper hcp-title checklist-wrapper" id="full-width-page-wrapper">

	<div class="content-area" id="primary">

		<main class="site-main entry-content" id="main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<div class="checklist-quiz container">
					<h1>Checklist</h1>
					<?php if(have_rows('checklist')) :
						$count = 1;
						$maxcount = count(get_field('checklist'));
						while(have_rows('checklist')) : the_row(); 
							if($count < $maxcount) {
								$nextcount = 'q-'.($count + 1);
							} else {
								$nextcount = 'q-last';
							}
							?>
							<div class="row question-row <?php if($count===1) echo 'active-question'; ?>" id="q-<?=$count?>">
								<div class="col-sm-5 col-12 margin-30">
									<img src="<?php the_sub_field('photo'); ?>" width="85%" >
								</div>
								<div class="col-sm-7 col-12">
									<h3>Should I get tested for Hep C?</h3>
									<?php the_sub_field('question'); ?>
									<fieldset>
										<label for="yes-<?=$count?>">
											<input type="radio" id="yes-<?=$count?>" name="q-<?=$count?>" data-nextcount="<?=$nextcount?>" value="Yes" class="yes-check">
											Yes
											<div class="control_indicator"></div>
										</label>
										<label for="no-<?=$count?>">
											<input type="radio" id="no-<?=$count?>" name="q-<?=$count?>" data-nextcount="<?=$nextcount?>" value="No">
											No
											<div class="control_indicator"></div>
										</label>
									</fieldset>
								</div>
							</div>
							<?php 
							$count++; 
						endwhile; 
					endif; ?>
				</div>

				<div class="checklist-result container">
					<div class="low-risk">
						<div class="row">
							<div class="offset-sm-2 col-sm-8 col-12 center">
								<h1>Should you get tested for Hep C?</h1>

								<p class="results">Your risk may be lower, compared to those who have checked ‘Yes’ on any question but the only way to be sure that you are Hepatitis C free is through a blood test.</p>
							</div>
						</div>
					</div>
					<div class="high-risk">
						<div class="row">
							<div class="offset-sm-2 col-sm-8 col-12 center">
								<h1>Should you get tested for Hep C?</h1>

								<p class="results">You may be at risk and the only way to find out if you are Hepatitis C positive is to get your blood tested. </p>
							</div>
						</div>
					</div>
					<div class="row margin-30">								
						<div class="offset-sm-3 col-sm-6 col-12 center">
							<p>Ask your doctor about Hepatitis C test today!</p>
							<div class="center">
								<a class="cta-link reset-quiz margin-30" href="#">Take the checklist again</a>
								<a class="cta-link" href="<?php echo get_permalink(get_page_by_path('hepc-locations')) ?>">Screening Locations</a>
							</div>
						</div>
					</div>
				</div>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
