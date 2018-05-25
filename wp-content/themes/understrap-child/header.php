<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );

global $theme;

if(is_page('hepc') || is_page('about-hepc')) {
	$page_class = 'blue-theme';
	$theme = 'hepc';
} elseif(is_page('hepc-faqs') || is_page('hepc-locations') || is_page('hepc-checklist')) {
	$page_class = 'blue-theme';
	$theme = 'no';
} else {
	$page_class = 'red-theme';
	$theme = 'hcp';
}
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

<body <?php body_class($page_class); ?>>

	<div class="hfeed site" id="page">

		<header class="<?=$theme?>-header site-header">
			<div class="container">
				<div class="row">
					<div class="col-xl-2 col-lg-2 col-md-2 col-sm-6 col-6">
						<?php if($theme === 'hcp') : ?>
							<a class="logo" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hyb-logo.png" title="How's Your Blood Logo" alt="How's Your Blood Logo">
							</a>
							<?php else : ?>
								<a class="logo" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/newhyb-logo.png" title="How's Your Blood Logo" alt="How's Your Blood Logo">
								</a>
							<?php endif; ?>
						</div>
						<div class="col-8 d-none d-md-block">
							<?php 
							if($theme === 'hcp') :
								echo '<div class="header-small">You\'re currently viewing the Healthcare Professional section. For general information, click <a href="'.get_permalink(get_page_by_path('hepc')).'">here</a>.</div>';
							else :
								echo '<div class="header-small">You\'re currently viewing the Healthcare Professional section. For general information, click <a href="coming-soon">here</a>.</div>';
							endif;
							?>
							<nav class="navbar navbar-expand-md">			
								<?php 
								if($theme === 'hcp') :
									wp_nav_menu(
										array(
											'theme_location'  => 'primary',
											'container_class' => 'navbar-collapse justify-content-center',
											'container_id'    => 'navbarNavDropdown',
											'menu_class'      => 'navbar-nav ml-auto',
											'fallback_cb'     => '',
											'menu_id'         => 'main-menu',
											'walker'          => new understrap_WP_Bootstrap_Navwalker(),
										)
									);
								else :
									wp_nav_menu(
										array(
											'theme_location'  => 'hecp',
											'container_class' => 'navbar-collapse justify-content-center',
											'container_id'    => 'navbarNavDropdown',
											'menu_class'      => 'navbar-nav ml-auto',
											'fallback_cb'     => '',
											'menu_id'         => 'main-menu',
											'walker'          => new understrap_WP_Bootstrap_Navwalker(),
										)
									);
								endif;
								?>
							</nav>
						</div>
						<div class="offset-xl-0 offset-lg-0 offset-md-0 offset-sm-3 offset-3 col-xl-2 col-lg-2 col-md-2 col-sm-3 col-3 hcp-cta">
							<?php if($theme === 'hcp') { ?>
								<a href="<?php echo get_permalink(get_page_by_path('register')); ?>">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hcp-cta.png" alt="Be a Partner Today">
								</a>
							<?php } else { ?>
								<a href="<?php echo get_permalink(get_page_by_path('hepc-checklist')); ?>">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hepc-cta.png" alt="Take this Hepatitis C Checklist">
								</a>
							<?php } ?>
						</div>
					</div>
					<div class="row">					
						<div class="col-12 d-md-none d-sm-block d-block">
							<?php 
							if($theme === 'hcp') :
								echo '<div class="header-small">You\'re currently viewing the Healthcare Professional section. For general information, click <a href="'.get_permalink(get_page_by_path('hepc')).'">here</a>.</div>';
							else :
								echo '<div class="header-small">You\'re currently viewing the Healthcare Professional section. For general information, click <a href="coming-soon">here</a>.</div>';
							endif;
							?>
							<nav class="navbar navbar-expand-md">			
								<?php 
								if($theme === 'hcp') :
									wp_nav_menu(
										array(
											'theme_location'  => 'primary',
											'container_class' => 'navbar-collapse justify-content-center',
											'container_id'    => 'navbarNavDropdown',
											'menu_class'      => 'navbar-nav ml-auto',
											'fallback_cb'     => '',
											'menu_id'         => 'main-menu',
											'walker'          => new understrap_WP_Bootstrap_Navwalker(),
										)
									);
								else :
									wp_nav_menu(
										array(
											'theme_location'  => 'hecp',
											'container_class' => 'navbar-collapse justify-content-center',
											'container_id'    => 'navbarNavDropdown',
											'menu_class'      => 'navbar-nav ml-auto',
											'fallback_cb'     => '',
											'menu_id'         => 'main-menu',
											'walker'          => new understrap_WP_Bootstrap_Navwalker(),
										)
									);
								endif;
								?>
							</nav>
						</div>
					</div>
				</div>
			</header>
			<?php if($theme === 'hcp') : ?>
				<a href="<?php echo get_permalink(get_page_by_path('register')); ?>"><div class="<?=$theme?> floating-cta"></div></a>
				<div class="container-fluid">
					<div class="row">
						<div class="col">
							<?php if(is_front_page() || is_page('register')) : ?>
							<h1 class="page-title center"><?php the_title(); ?></h1>
						<?php else :
							if(get_field('cover_photo')) {
								$cover_photo = get_field('cover_photo');
							} else {
								$cover_photo = get_stylesheet_directory_uri().'/img/cover-photo.jpg';
							}
							?>
							<div class="center bg-image">
								<div class="margin-60" style="background: url('<?=$cover_photo?>'); background-position: center; background-size: cover;">
									<h1 class="page-title"><?php the_title(); ?></h1>
								</div>
							</div>
						<?php endif; ?>

						<?php if(is_page('resources')) : ?>
							<div class="center" style="margin-bottom:30px">
								<span>For more information about Hepatitis C, here's a list of resources that you can refer to.</span>
							</div>
						<?php endif; ?>
					</div>
				</div>			
			</div>
			<?php else : ?>
				<a href="<?php echo get_permalink(get_page_by_path('hepc-checklist')); ?>">
					<div class="<?=$theme?> floating-cta"></div>
				</a>
				<?php endif; ?>