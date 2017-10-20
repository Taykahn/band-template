<?php
/**
 * Header Hero Image Hook
 */

/**
 * Header Image
 *
 * @add_action Header Image
 *
 * @return void
 */

function hero_image_section() {

?>

	<?php if ( is_front_page() ) { ?>

		<div class="container-fluid no pad">

			<?php $images = get_field( 'header_slider', 'option' ); ?>

			<?php if( $images ): ?>

				<div class="slider-for">

				<div class="slider-nav">

						<?php foreach( $images as $image ): ?>

							<div class="slide">

								<?php the_field( 'band_title', 'option' ); ?>

								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

							</div><!-- end slide-nav -->

						<?php endforeach; ?>

				</div><!-- end slider-for -->

			<?php endif; ?> 

		</div><!-- end container-fluid -->

<?php } elseif ( is_page ( 'contact-us' ) ) { ?>

	<div class="parallax" style="background-image: url( '<?php echo esc_url( the_field( 'header_contact_img', 'option' ) ); ?>' )">

<?php } elseif ( is_page( 'blog' ) ) { ?>

	<div class="parallax" style="background-image: url( '<?php echo esc_url( the_field( 'header_blog_img', 'option' ) ); ?>' )">

<?php } elseif ( is_page ( 'about-us' ) ) { ?>

	<div class="parallax" style="background-image: url( '<?php echo esc_url( the_field( 'header_about_img', 'option' ) ); ?>' )">

<?php } else { ?>

	<div class="parallax" style="background-image: url( '<?php echo esc_url( the_field( 'header_default_img', 'option' ) ); ?>' )">

<?php }

}

add_action( 'hero', 'hero_image_section' );
