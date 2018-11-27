<?php get_header(); if ( is_home() ) { ?>

<main role="main">

<section class="w-100 topsec">
	<div class="container-fluid">
		<div class="row card bg-light text-white">
			<div class="card-body col-sm-12 col-lg-12 col-md-12">
				<img class="card-img img-fluid" src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>">
				<div class="card-img-overlay text-center">
					<div class="container d-inline-block">
						<div class="d-none d-sm-block d-md-block"><br></div>
						    <h1 class="font-weight-bold card-title display-1 text-truncate text-center text-dark"><?php bloginfo( 'title' ); ?></h1>
						    <p class="h2 text-justify text-center d-none d-sm-block d-md-block text-dark"><?php bloginfo( 'description' ); ?></p>
						<div class="d-block d-sm-none d-md-none"><br></div>
					</div>
			        </div>
			</div>
		</div><br>
	</div>
</section>

<br><div class="clearfix"></div>

	<div class="bg-trans text-muted">
		<div class="container">
			<div class="row">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?><h1><?php single_post_title(); ?></h1><?php endif; ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'home' ); ?>

				<?php endwhile; ?>

			<?php //else : get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

			</div>
		</div>
	</div>
</main>
<?php } get_footer(); ?>

