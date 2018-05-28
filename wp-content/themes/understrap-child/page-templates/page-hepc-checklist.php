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

				<div class="checklist-quiz container margin-30">
					<div class="overlay-div">
						<h1>Checklist</h1>
						<p>Should I get tested for Hep C?</p>
					</div>
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
								<div class="col-sm-7 col-12 margin-30">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/checklist.jpg" width="85%" >
								</div>
								<div class="col-sm-5 col-12 margin-60">
									<span class="red-question"><?=$count?>. </span><?php the_sub_field('question'); ?>
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
									<div class="offset-2 col-8 center">
										<h1>Checklist Results</h1>
										<p>Should you get tested for Hep C?</p>

										<p class="results">Compared to those who have more "Yes", your risk of being infected by HCV may be lower. However, the only way to find out if you are Hepatitis C free is to get your blood tested. Ask your doctor about Hepatitis C test today!</p>
									</div>
								</div>
							</div>
							<div class="high-risk">
								<div class="row">
									<div class="offset-2 col-8 center">
										<h1>Checklist Results</h1>
										<p>Should you get tested for Hep C?</p>

										<p class="results">You may be at risk. We recommend speaking to a doctor about Hepatitis C test.</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="offset-2 col-8 center">
									<h2>Congratulations</h2>
									<p>Here's a promo code for your next Hepatitis C test!</p>
								</div>
							</div>
							<div class="row">
								<div class="offset-1 col-10 center">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blood-vial-free.jpg" alt="">
								</div>
							</div>
							<div class="row margin-60">								
								<div class="offset-2 col-8 center">
									<p>Mention or present this code as you sign up for your test at any partnering locations.</p>
									<div class="center margin-30">
										<a class="cta-link reset-quiz" href="#">Reset Quiz</a>
										<a class="cta-link" href="<?php echo get_permalink(get_page_by_path('hepc-locations')) ?>">Locate Nearest</a>
									</div>
								</div>
							</div>
						</div>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- Wrapper end -->

		<?php get_footer(); ?>
