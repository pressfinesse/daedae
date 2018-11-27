<?php
/**
 * Template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * @package WordPress
 * @subpackage DaeDae
 */

get_header(); ?>
<main id="main" role="main" class="site-main container pt-3 pb-5 bg-light">
	<div class="row">
	        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 blog-main">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', get_post_format() );
			endwhile; ?>

			<?php if ( function_exists('bampage') ) { bampage(); } ?>

		<?php else : get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

                </div>
        </div>
</main>
<?php get_footer(); ?>
