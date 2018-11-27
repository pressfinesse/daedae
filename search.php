<?php
/**
 * The template for displaying search results pages
 *
 * @package WordPress
 * @subpackage DaeDae
 */

get_header(); ?>
<main id="main" role="main" class="site-main container pt-3 bg-light">
        <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 blog-main">
			<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'search' );
			endwhile; ?>

			<?php if ( function_exists('bampage') ) { bampage(); } ?>

			<?php else : get_template_part( 'template-parts/content', 'none' ); endif; ?>
                </div>
        </div>
</main>
<?php get_footer(); ?>

