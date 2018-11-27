<footer class="text-muted blog-footer text-white bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-xl-12 col-sm-12">
				<span class="text-muted"><a class="text-light" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php $custom_logo_id = get_theme_mod( 'custom_logo' ); $image = wp_get_attachment_image_src( $custom_logo_id , 'thumbnail' ); echo $image[0];?>" width="30" height="30" class="d-inline-block align-bottom" alt="">
				<?php bloginfo( 'name' ); ?></a></span>
				<p class="float-right"><a class="text-light" href="#"><span class="oi oi-arrow-thick-top"></span></a></p>
			</div>
	        </div>
	</div>
</footer>
<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body></html>
