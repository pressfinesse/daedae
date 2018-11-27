<?php
/**
 * Template for displaying image attachments
 *
 * @package WordPress
 * @subpackage DaeDae
 */

get_header(); ?>

<main id="main" role="main" class="site-main container pt-2 bg-light">
        <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 blog-main">
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></header>

					<div class="entry-content">
						<div class="entry-attachment">
							<?php $image_size = apply_filters( 'daedae_attachment_size', 'large' );
							echo wp_get_attachment_image( get_the_ID(), $image_size, "", array("class" => "rounded mx-auto d-block img-fluid")); ?>

							<?php daedae_excerpt( 'entry-caption' ); ?>

						</div><!-- .entry-attachment -->

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
					</div><!-- .entry-content -->

					<footer class="entry-footer">
						<?php daedae_entry_meta(); ?>
						<?php
							$metadata = wp_get_attachment_metadata();
							if ( $metadata ) {
								printf( '<span class="full-size-link"><span class="screen-reader-text">%1$s </span><a href="%2$s">%3$s × %4$s</a></span>',
									esc_html_x( 'Full size', 'Used before full size attachment link.', 'daedae' ),
									esc_url( wp_get_attachment_url() ),
									absint( $metadata['width'] ),
									absint( $metadata['height'] )
								);
							}
						?>
						<?php
							edit_post_link(
								sprintf(
									/* translators: %s: Name of current post */
									__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'daedae' ),
									get_the_title()
								),
								'<span class="edit-link">',
								'</span>'
							);
						?>
					</footer>
				</article>

				<?php if ( comments_open() || get_comments_number() ) {
						comments_template();
					}

					//the_post_navigation( array(
					//	'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'daedae' ),
					//) );
				endwhile;?>
		</div>
	</div>
</main>

<?php get_footer(); ?>
