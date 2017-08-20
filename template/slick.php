<?php $images = get_field( 'header_slider', 13 ); ?>

<?php if( $images ): ?>

	<div class="slider-for">

	<div class="slider-nav">

			<?php foreach( $images as $image ): ?>

				<div class="slide">

					<?php the_field( 'band_title', 'option' ); ?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				</div><!-- end slide -->

			<?php endforeach; ?>

	</div>

<?php endif; ?> 