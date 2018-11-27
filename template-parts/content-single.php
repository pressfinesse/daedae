<?php
/**
 * Template part for displaying single posts
 *
 * @package WordPress
 * @subpackage DaeDae
 */
?>

<div class="blog-post">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="blog-post-title bg-light p-2"><?php the_title( '<h1 class="display-4">', '</h1>' ); ?></div>

	<?php the_post_thumbnail('post-thumbnail', ['class' => 'rounded mx-auto d-block img-fluid ', 'title' => 'Feature image']); ?><br>

	<div class="entry-header bg-light">
		<?php daedae_entry_meta(); ?>
		<?php edit_post_link(
			sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit <span class="screen-reader-text"> "%s"</span>', 'daedae' ),
				get_the_title()
			),
			'<span class="edit-link">','</span>');
		?>
	</div>

	<div class="entry-content bg-light">
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'daedae' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'daedae' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );

		?>
	</div>
	</article>
</div>
