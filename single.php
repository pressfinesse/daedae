<?php
/**
 * Template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage DaeDae
 */

get_header(); ?>
<main id="main" role="main" class="site-main container">
	<div class="row">
	        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 blog-main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'single' );

			if ( is_singular( 'attachment' ) ) {
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'daedae' ),
				) );
			}

			if ( comments_open() || get_comments_number() ) {comments_template();}

		endwhile; ?>
                </div>
	</div>
</main>
<?php get_footer(); ?>
