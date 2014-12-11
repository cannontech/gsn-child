
 <?php 
/**
 * Template Name: Two Columns
 */
 get_header(); 
?>

	<div id="primary" class="content-area-two">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>
				<?php /*get_template_part( 'content', 'single' ); */?>
				
			<?php endwhile; // end of the loop. ?>		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
