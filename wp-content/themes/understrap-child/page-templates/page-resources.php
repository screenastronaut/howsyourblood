<?php
/**
 * Template Name: Resources Page
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="content-area" id="primary">

			<main class="site-main resources" id="main" role="main">

				<div class="row">
					<?php 
					if(have_rows('organizations')) : 
						$count = 0;
						while(have_rows('organizations')) : the_row(); ?>
						<div class="col-3 <?php if($count===4) echo "offset-3"; ?>">
							<h4><?php echo get_sub_field('name'); ?></h4>
							<div class="org-logo">
								<img src="<?php echo get_sub_field('logo');?>" alt="<?php echo get_sub_field('name'); ?>'s logo">
							</div>
							<div><?php echo get_sub_field('subtext'); ?></div>
						</div>
					<?php $count++; endwhile; endif; ?>
				</div>

				<div class="row">
					<div class="offset-2 col-8">
						
					<?php while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>

					<?php endwhile; // end of the loop. ?>

					</div>
				</div>

			</main><!-- #main -->

		</div><!-- #primary -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
