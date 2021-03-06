<?php
/**
 * Template Name: HEPC Locations Page
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );

global $theme;

global $wpdb;

$querystring = "SELECT `submit_time` AS 'Submitted',
max(if(`field_name`='org-name', `field_value`, null )) AS 'orgname',
max(if(`field_name`='state', `field_value`, null )) AS 'state',
max(if(`field_name`='country', `field_value`, null )) AS 'country',
max(if(`field_name`='your-name', `field_value`, null )) AS 'yourname',
max(if(`field_name`='mobile-phone', `field_value`, null )) AS 'mobilephone',
max(if(`field_name`='office-phone', `field_value`, null )) AS 'officephone',
max(if(`field_name`='you-are-a', `field_value`, null )) AS 'jobtitle',
max(if(`field_name`='email', `field_value`, null )) AS 'email',
max(if(`field_name`='add-1', `field_value`, null )) AS 'add1',
max(if(`field_name`='add-2', `field_value`, null )) AS 'add2',
max(if(`field_name`='add-3', `field_value`, null )) AS 'add3',
max(if(`field_name`='opening-hours', `field_value`, null )) AS 'openinghours',
max(if(`field_name`='postcode', `field_value`, null )) AS 'postcode',
max(if(`field_name`='city', `field_value`, null )) AS 'city',
max(if(`field_name`='Submitted From', `field_value`, null )) AS 'Submitted From',
GROUP_CONCAT(if(`file` is null or length(`file`) = 0, null, `field_name`)) AS 'fields_with_file'
FROM `hyb_cf7dbplugin_submits` 
WHERE `form_name` = 'Sign Up'  
OR `form_name` = 'Sign Up Mobile'  
GROUP BY `submit_time` 
ORDER BY `submit_time` DESC";

$queryresults = $wpdb->get_results($querystring);
?>

<div class="wrapper hcp-title" id="full-width-page-wrapper">

	<div class="content-area" id="primary">

		<main class="site-main entry-content <?=$theme?>-theme" id="main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="container">
					<div class="row">
						<div class="col-12"><h1 class="center">Screening Locations</h1></div>
						<div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10 col-12">
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
						<div class="offset-lg-2 col-lg-6 offset-md-1 col-md-8 col-12">							
							<input type="text" class="location-searchtext" name="location-search" placeholder="Search by City or Postcode">
						</div>
						<div class="col-md-2 col-12">
							<button class="location-searchbtn">Search</button>
						</div>
					</div>
					<div class="row">
						<div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10 col-12">
							<div class="location-container margin-30">
								<?php 
								if($queryresults) :
									global $post;
									foreach($queryresults as $post) :
										setup_postdata($post);
										$orgname = $post->orgname;
										$openinghours = $post->openinghours;
										$state = $post->state;
										$address = $post->add1.'<br>'.$post->add2.'<br>'.$post->add3;
										$postcode = $post->postcode;
										$city = $post->city;
										$officephone = $post->officephone;
										$location = str_replace(' ', '%20', $orgnam.$address);
										$googlemap = 'https://www.google.com/maps/search/?api=1&query='.$location;
										?>
										<div class="location-row container-fluid" data-state="<?php echo $state; ?>" data-postcode="<?php echo $postcode; ?>" data-city="<?php echo strtolower($city); ?>">
											<div class="row">
												<div class="col-sm-6 col-12">
													<span class="location-name"><?php echo $orgname; ?></span>
													<span class="location-hours"><?php echo $openinghours; ?></span><br>
													<span class="location-title">Address: </span><br><?php echo $address; ?><br>
												</div>
												<div class="col-sm-4 col-12 my-auto">
													<span class="location-title">Postcode: </span><?php echo $postcode; ?><br>
													<span class="location-title">City: </span><?php echo $city; ?><br>
													<span class="location-title">State: </span><?php echo $state; ?><br>
													<span class="location-title">Office No: </span><a href="tel:<?php echo $officephone; ?>"><?php echo $officephone; ?></a>
												</div>
												<div class="col-sm-2 col-12 my-auto">
													<a href="<?php echo $googlemap; ?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/img/gmap.jpg" alt="Google Map"></a>
												</div>
											</div>
										</div>									
										<?php
									endforeach;
								endif;
								?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col center">
							<p>If you would like your clinics/hospitals listed here, please click on the button below.</p>
							<a href="<?php echo get_permalink(get_page_by_path('register'));?>" rel="noopener">
								<div class="cta-link">Be a Partner</div>
							</a>
						</div>
					</div>
				</div>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
