<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package gsn-base
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content hooo">

		<?php
			// split content into array
			$content = split_content();

			// output first content section in column1
			// echo '<div id="column1">', array_shift($content), '</div>';
			// output remaining content sections in column2
			// echo '<div id="column2">', implode($content), '</div>';
			echo '<div class="col-md-6">', array_shift($content), '</div>';
			echo '<div class="col-md-6">', implode($content), '</div>';
		?>
		
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'gsn-base' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'gsn-base' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
