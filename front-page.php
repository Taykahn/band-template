<?php 
/**
 * Front page
 *
 * Front page action hooks in includes/front-page-hooks.php  
 */
get_header();

global $post;

$post_id = $post->ID;

$args1 = array( 
	'post_type'      => 'media_player',
	'orderby'        => 'menu_order',
	'posts_per_page' => '5'
);
$media_player = new WP_Query( $args1 );

$args2 = array(
	'post_type'      => 'tour_dates',
	'order'          => 'ASC',
	'posts_per_page' => '-1'
);
$tour_dates=new WP_Query( $args2 );

?>

<section id="affix-navbar" class="section-one container-fluid">

	<div class="inner-wrapper container">

		<div class="col-md-12">

			<div class="row">

				<div class="instagram-feed">

					<?php the_field( 'instagram_feed', 'option' ); ?>

				</div><!-- end instagram feed -->

			</div><!-- end row -->

		</div><!-- end col-md-12 -->

		</div><!--.row-->

	</div><!--.container-->

</section><!-- end section-one -->

<section class="section-two container-fluid">

	<div class="row">

		<div class="parallax" style="background-image: url('<?php the_field( 'section_two_bg_img', $post_id ) ?>')">

	</div><!-- end row -->

</section><!-- end section-two -->

<section class="section-three container-fluid">

	<?php include ( 'template/archive-front_page.php' ); ?>

</section><!-- end section-three -->

<section id="section-four">

	<div class="row">

		<div class="parallax" style="background-image: url( '<?php the_field( 'section_four', $post_id ); ?>' )">

	</div><!-- end row -->

</section><!-- end section-four -->

<section class="container-fluid section-five">

	<div class="col-md-12">

		<div class="row">

			<?php while ( $media_player->have_posts() ) : $media_player->the_post(); ?>

				<img <?php the_post_thumbnail(); ?> >

				<p><?php the_content(); ?></p>

			<?php endwhile; wp_reset_postdata() ?>

		</div><!-- end row -->

	</div><!-- end col-md-12 -->

</section><!-- end section-five -->

<section id="section-six">

	<div class="container section-six">

		<div class="col-md-12">

		<div class="row">

			<div class="parallax" style="background-image: url( '<?php the_field( 'section_six', $post_id ); ?>' )">

		</div><!-- end row -->

		</div><!-- end col-md-12 -->

	</div><!-- end container -->

</section><!-- end section-six -->

<section class="section-seven">

	<a id="tour-dates-section"><div class="container section-seven"></a>

		<div class="parallax" style="background-image: url( '<?php the_field( 'section_seven_tour_dates', $post_id ); ?>' )"/>

		<div class="container-fluid">

			<div class="col-md-12 tour-dates-title" id="tour-dates">

				<h1>Tour Dates</h1>

			</div><!-- end col-md-12 -->

			<div class="col-xs-12 col-md-12 tour-date-titles" id="page-next">

				<div class="col-xs-3 col-md-3">

						<h2>Dates</h2>

				</div><!-- end col-md-3 -->

				<div class="col-xs-3 col-md-3">

						<h2>Location</h2>

				</div><!-- end col-md-3 -->

				<div class="col-xs-3 col-md-3">

						<h2>Venue</h2>

				</div><!-- end col-md-3 -->

				<div class="col-xs-3 col-md-3">

						<h2>Tickets</h2>

				</div><!-- end col-md-3 -->

			</div><!-- end col-md-12 tour-date-titles -->

		</div><!-- end container-fluid -->

		<?php while ( $tour_dates->have_posts() ) : $tour_dates->the_post(); ?>

		<div class="container-fluid">

			<div class="col-xs-12 col-md-12 tour-date-fields">

				<div class="col-xs-3 col-md-3">

					<div class="dates">

						<p><?php the_field( "tour_dates" ); ?></p>

					</div><!-- end dates -->

				</div><!-- end col-md-3 -->

				<div class="col-xs-3 col-md-3">

					<div class="location">

						<p><?php the_field( "tour_location" ); ?></p>

					</div><!-- end location -->

				</div><!-- end col-md-3 -->

				<div class="col-xs-3 col-md-3">

					<div class="venue">

						<p><?php the_field( "tour_venue" ); ?></p>

					</div><!-- end venue -->

				</div><!-- end col-md-3 -->

				<div class="col-xs-3 col-md-3">

					<div class="tickets">

						<p><?php the_field( "tickets" ); ?></p>

					</div><!-- end venue -->

				</div><!-- end col-md-3 -->

			</div><!-- end col-md-12 tour date fields -->

		</div><!-- end container-fluid -->

		<?php endwhile; wp_reset_postdata() ?>

	</div><!-- end container section-seven -->

</section><!-- end section-seven -->

<?php get_footer() ?>