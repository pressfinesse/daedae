<?php
/**
 * Template part for displaying content
 *
 * @package WordPress
 * @subpackage DaeDae
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-post-title">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?><div class="alert alert-success"><?php _e( 'Featured', 'daedae' ); ?></div><?php endif; ?>
		<?php the_title( sprintf( '<h2 class="display-4"><a class="text-info" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</div>

        <?php the_post_thumbnail('post-thumbnail', ['class' => 'rounded mx-auto d-block img-fluid ', 'title' => 'Feature image']); ?>

	<div class="blog-post-meta">
		<?php
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'daedae' ),
				get_the_title()
			) );

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

		<div class="entry-footer">
			<?php edit_post_link(
				sprintf(
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'daedae' ),
					get_the_title()
				),
				'<span class="edit-link">','</span>');
			?>
		</div>
</article><hr><br>

