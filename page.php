<?php
/**
 * Template for displaying pages
 *
 *
 * @package WordPress
 * @subpackage DaeDae
 */
get_header(); ?>
<main id="main" role="main" class="site-main container pt-2 bg-light">
        <div class="row pt-3 pb-5">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 blog-main">
			<?php while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
				if ( comments_open() || get_comments_number() ) { comments_template(); }
			endwhile; ?>
		</div>
        </div>
</main>
<?php get_footer(); ?>
