<?php
/**
 * Template part for displaying gallery posts
 *
 * @package WordPress
 * @subpackage DaeDae
 */
?>

<div class="col-md-6 col-lg-4 col-sm-6 col-xl-4 d-inline-block float-left">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="card bg-light text-black">
			<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail('medium', ['class' => 'rounded d-block img-fluid card-img-top', 'title' => 'Feature image']); ?><br>
				</a>
			<?php endif; ?>

			<div class="card-body p-3">
				<h4 class="card-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
				<p class="card-text"><?php echo get_the_excerpt(); ?></p>
			</div>

		</div>
	</div>
</div>
