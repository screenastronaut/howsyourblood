<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116690684-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-116690684-1');
	</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="hfeed site" id="page">

		<header class="site-header container">
			<a class="logo" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hyb-logo.png" title="How's Your Blood Logo" alt="How's Your Blood Logo">
			</a>
			<div class="container">
				<div class="row">
					<div class="col">
						<h1 class="page-title"><?php the_title(); ?></h1>
						<?php if(is_page('resources')) : ?>
							<div class="center" style="margin-bottom:30px">
								<span>For more information about Hepatitis C, here's a list of resources that you can refer to.</span>
							</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="row">
					<div class="col">		
						<nav class="navbar navbar-expand-md">					
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'container_class' => 'navbar-collapse',
									'container_id'    => 'navbarNavDropdown',
									'menu_class'      => 'navbar-nav ml-auto',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu',
									'walker'          => new understrap_WP_Bootstrap_Navwalker(),
								)
							); 
							?>
						</nav>
					</div>
				</div>
			</div>

			<div class="hcp-cta">
				<a href="#">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hcp-cta.png" alt="Be a Partner Today">
				</a>
			</div>

		</header>
