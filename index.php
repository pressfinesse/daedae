<?php
/**
 * The main template file
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage DaeDae
 */
get_header(); ?>

<main id="main" role="main" class="site-main container bg-light">
	<div class="row">
	        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 blog-main">

			<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?><h1><?php single_post_title(); ?></h1><?php endif; ?>

			<?php while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			endwhile; ?>

			<?php if ( function_exists('bampage') ) { bampage(); } ?>

			<?php else : get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</div>
	</div>
</main>
<?php get_footer(); ?>
