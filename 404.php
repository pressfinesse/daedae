<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage DaeDae
 */
get_header(); ?>
<main id="main" role="main" class="site-main container">
        <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 blog-main">
			<div class="error-404 not-found">
				<div class="alert alert-warning" role="alert">
					<h1 class="page-title"><?php _e( 'Oops! That page can’t be found.', 'daedae' ); ?></h1>
				</div>
			</div><!-- .error-404 -->
                </div>
        </div>
</main>
<?php get_footer(); ?>
