<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage DaeDae
 */
?>
<?php if ( is_active_sidebar( 'mainbar' )  ) : ?>
	<div id="secondary" class="mainbar container" role="complementary">
		<div class="row">
			<?php dynamic_sidebar( 'mainbar' ); ?>
		</div>
	</div>
<?php endif; ?>
