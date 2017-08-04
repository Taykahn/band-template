<?php $images = get_field( 'header_slider', 13 ); ?>

<?php if( $images ): ?>

	<div class="slider-for">

	<div class="slider-nav">

			<?php foreach( $images as $image ): ?>

				<div>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				</div>

			<?php endforeach; ?>

	</div>

<?php endif; ?> 