<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="entry-content">
		<!-- <div class="row"> -->
			<?php the_content(); ?>
		<!-- </div> -->
	</div><!-- .entry-content -->
</article><!-- #post-## -->
