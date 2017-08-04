<?php 
/**
 * Home page Hooks
 */

/**
 * Homepage Social Media Section One
 *
 * @add_action social_media
 *
 * @return void
 */

function social_media_section() {

?>

<?php 
	$args = array(
		'post_type' => 'social_media'
	);
	$social_media=new WP_Query( $args );
?>

<section id="affix-navbar" class="section-one">

	<div class="inner-wrapper container">

		<div class="col-md-12">

			<div class="row">

				<div class="instagram-feed">

					<?php while ( $social_media->have_posts() ) : $social_media->the_post(); ?>

						<?php the_content(); ?>

					<?php endwhile; ?>

				</div><!-- end instagram feed -->

			</div><!-- end row -->

		</div><!-- end col-md-12 -->

		</div><!--.row-->

	</div><!--.container-->

</section><!-- end section-one -->

<?php

}

add_action( 'social_media', 'social_media_section' );

/**
 * Homepage Background Image One Section Two
 *
 * @add_action background_one
 *
 * @return void
 */

function background_one_section() {

?>

<section id="section-two">

		<div class="col-md-12">

		<div class="row">

			<div class="parallax" style="background-image: url( '<?php echo esc_url( the_field( 'section_two', 150 ) ); ?>' )">

		</div><!-- end row -->

		</div><!-- end col-md-12 -->

</section><!-- end section-two -->

<?php

}

add_action( 'background_one', 'background_one_section' );

/**
 * Homepage Blog Content Section Three
 *
 * @add_action blog_content
 *
 * @return void
 */

function blog_content_section() {

?>

<section class="section-three">

	<div class="inner-wrapper container">

		<div class="col-md-12 blog-content">

			<div class="row">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post() ?>

						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

						<h5>Author: <?php the_author(); ?> | Posted on: <?php the_date(); ?></h5>

						<h5>Categories: <?php the_category(); ?></h5>

						<?php the_post_thumbnail(); ?>

						<p><?php the_content(); ?></p><hr>

					<?php endwhile ?>

					<div class="col-md-12 options border-bottom">

						<?php do_action( 'mbc_pagination' ) ?>

					</div>

					<?php wp_reset_postdata(); ?>

				<?php endif ?>

			</div><!--.blog-content-->

		</div>

</section><!-- end section-three -->

<?php

}

add_action( 'blog_content', 'blog_content_section' );

/**
 * Homepage Background Image Two Section Four
 *
 * @add_action background_two
 *
 * @return void
 */

function background_two_section() {

?>

<section id="section-four">

		<div class="col-md-12">

		<div class="row">

			<div class="parallax" style="background-image: url( '<?php echo esc_url( the_field( 'section_four', 150 ) ); ?>' )">

		</div><!-- end row -->

		</div><!-- end col-md-12 -->

</section><!-- end section-four -->

<?php

} 
add_action( 'background_two', 'background_two_section' );

/**
 * Homepage Media Player Section Five
 *
 * @add_action media_player
 *
 * @return void
 */

function media_player_section() {

?>

<?php
	$args = array( 
		'post_type'     => 'media_player',
		'orderby'       => 'menu_order',
		'post_per_page' => '4'
	);
	$media_player=new WP_Query( $args );
?>

<section class="section-five">

	<div class="col-md-12">

		<div class="row">

			<?php while ( $media_player->have_posts() ) : $media_player->the_post(); ?>

				<img <?php the_post_thumbnail(); ?> >

				<p><?php the_content(); ?></p>

			<?php endwhile; ?>

		</div><!-- end row -->

	</div><!-- end col-md-12 -->

</section><!-- end section-five -->

<?php

}

add_action( 'media_player', 'media_player_section' );

/**
 * Homepage Background Image Three Section Six
 *
 * @add_action background_three
 *
 * @return void
 */

function background_three_section() {

?>

<section id="section-six">

	<div class="container section-six">

		<div class="col-md-12">

		<div class="row">

			<div class="parallax" style="background-image: url( '<?php echo esc_url( the_field( 'section_six', 150 ) ); ?>' )">

		</div><!-- end row -->

		</div><!-- end col-md-12 -->

	</div><!-- end container -->

</section><!-- end section-six -->

<?php

}

add_action( 'background_three', 'background_three_section' );

/**
 * Homepage Tour Dates Section Seven
 *
 * @add_action tour_dates
 *
 * @return void
 */

function tour_dates_section() {

?>

<?php 
	$args = array(
		'post_type' => 'tour_dates',
		'orderby'   => 'menu_order'
	);
$tour_dates=new WP_Query( $args );
?>

<section class="section-seven">

	<div class="parallax" style="background-image: url( '<?php echo esc_url( the_field( 'section_seven_tour_dates', 150 ) ); ?>' )">

	<div class="col-md-12 tour-dates-title">

		<h1>Tour Dates</h1>

	</div><!-- end col-md-12 -->

	<div class="col-md-12 tour-date-titles">

		<div class="col-md-3">

				<h2>Dates</h2>

		</div><!-- end col-md-3 -->

		<div class="col-md-3">

				<h2>Location</h2>

		</div><!-- end col-md-3 -->

		<div class="col-md-3">

				<h2>Venue</h2>

		</div><!-- end col-md-3 -->

		<div class="col-md-3">

				<h2>Tickets</h2>

		</div><!-- end col-md-3 -->

	</div><!-- end col-md-12 tour-date-titles -->

	<?php while ( $tour_dates->have_posts() ) : $tour_dates->the_post(); ?>

	<div class="col-md-12 tour-date-fields">

		<div class="col-md-3">

			<div class="dates">

				<p><?php the_field( "tour_dates" ); ?></p>

			</div><!-- end dates -->

		</div><!-- end col-md-3 -->

		<div class="col-md-3">

			<div class="location">

				<p><?php the_field( "tour_location" ); ?></p>

			</div><!-- end location -->

		</div><!-- end col-md-3 -->

		<div class="col-md-3">

			<div class="venue">

				<p><?php the_field( "tour_venue" ); ?></p>

			</div><!-- end venue -->

		</div><!-- end col-md-3 -->

		<div class="col-md-3">

			<div class="tickets">

				<p><?php the_field( "tickets" ); ?></p>

			</div><!-- end venue -->

		</div><!-- end col-md-3 -->

	</div><!-- end col-md-12 tour date fields -->

<?php endwhile; ?>

</section><!-- end section-seven -->

<?php

}

add_action( 'tour_dates', 'tour_dates_section' );

?>