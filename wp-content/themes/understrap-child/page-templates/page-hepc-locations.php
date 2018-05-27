<?php
/**
 * Template Name: HEPC Locations Page
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
						<div class="col-12"><h1 class="center">Screening Locations</h1></div>
						<div class="offset-2 col-8">
							<select name="state" id="state" class="location-state">
								<option value="all" default>Select Your State:</option>
								<option value="Johor">Johor</option>
								<option value="Kedah">Kedah</option>
								<option value="Kelantan">Kelantan</option>
								<option value="Kuala Lumpur">Kuala Lumpur</option>
								<option value="Labuan">Labuan</option>
								<option value="Malacca">Malacca</option>
								<option value="Negeri Sembilan">Negeri Sembilan</option>
								<option value="Pahang">Pahang</option>
								<option value="Perak">Perak</option>
								<option value="Perlis">Perlis</option>
								<option value="Penang">Penang</option>
								<option value="Sabah">Sabah</option>
								<option value="Sarawak">Sarawak</option>
								<option value="Selangor">Selangor</option>
								<option value="Terengganu">Terengganu</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="location-container offset-2 col-8">
							<?php if(have_rows('locations')) :
								while(have_rows('locations')) : the_row(); ?>
									<div class="location-row container-fluid" data-state="<?php the_sub_field('state'); ?>">
										<div class="row">
											<div class="col-10">
												<span class="location-name"><?php the_sub_field('name'); ?></span>
												<span class="location-hours"><?php the_sub_field('opening_hours'); ?></span><br>
												<span class="location-title">Address: </span><?php the_sub_field('address'); ?><br>
												<span class="location-title">Contact: </span><?php the_sub_field('contact'); ?>
											</div>
											<div class="col-2 my-auto">
												<a href="<?php the_sub_field('waze_link'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/waze.jpg" alt="Waze"></a>
												<a href="<?php the_sub_field('google_map_link'); ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/gmap.jpg" alt="Google Map"></a>
											</div>
										</div>
									</div>
								<?php endwhile;
							endif; ?>
						</div>
					</div>
				</div>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
