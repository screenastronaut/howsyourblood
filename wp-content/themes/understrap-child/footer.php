<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

global $theme;
$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<footer class="<?=$theme?>-footer site-footer <?php echo esc_attr( $container ); ?>" id="colophon">

		<div class="row">

			<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hfm-logo.png" class="logo" height="50px" alt="Hepatitis Free Malaysia logo">
			</div>
			<div class="offset-xl-6 offset-lg-6 offset-md-6 col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<span>&copy;Copyright 2017. All rights reserved by Hepatitis Free Malaysia.</span>
			</div>

		</div><!-- row end -->

	</footer><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

