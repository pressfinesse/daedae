<?php
/**
 * Template for the header
 *
 * @package WordPress
 * @subpackage DaeDae
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
        <!-- CDN Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<!-- Custom styles for this template -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/beta.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">

</head><body <?php body_class(); ?>>
<header>
	<div class="collapse bg-dark" id="navbarHeader">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 py-4">
				   <h4 class="text-white"><span class="oi oi-ellipses"></span></h4>
					<?php if ( has_nav_menu( 'primary' ) ) :
						wp_nav_menu(array( 'menu' => 'primary', 'container' => 'nav', 'container_class' => '', 'container_id' => '', 'menu_class' => 'topmenu', 'menu_id' => '',
						'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<ul class="nav d-flex align-items-stretch">%3$s</ul>', 'item_spacing' => 'preserve',
						'depth' => 0, 'walker' => new Main2(), 'theme_location' => 'primary' ));
					endif; ?>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-dark bg-secondary">
		<div class="container d-flex justify-content-between">
			<a href="<?php bloginfo( 'url' ); ?>" class="navbar-brand">
			<img src="<?php $custom_logo_id = get_theme_mod( 'custom_logo' ); $image = wp_get_attachment_image_src( $custom_logo_id , 'thumbnail' ); echo $image[0];?>" width="30" height="30" class="d-inline-block align-top" alt="">
			<span class="oi oi-home"></span>
			</a>

			<div class="d-flex justify-content-between flex-row-reverse">
				<button class="navbar-toggler btn btn-light" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-grid-four-up"></span>
				</button>
				&nbsp;&nbsp;
				<button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseSidebar" aria-expanded="false" aria-controls="collapseSidebar">
					<span class="oi oi-cog"></span>
				</button>
			</div>
		</div>
	</nav>

        <div class="row bg-white">
		<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 border-top-0 rounded-bottom border border-dark">
                        <div class="collapse" id="collapseSidebar"><br><?php get_sidebar(); ?></div>
		</div>
        </div>
</header>
