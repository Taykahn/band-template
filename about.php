<?php 
/**
 * Template Name: About Page
 */

get_header(); ?>

<section id="affix-navbar">

	<div class="parallax" style="background-image: url( '<?php echo esc_url( the_field( 'hero', 117 ) ); ?>' )">

	<div class="inner-wrapper container">

		<div class="row">

			<div class="col-md-12">

				<div class="about-content">

					<?php if ( have_posts() ) : ?>

						<?php while ( have_posts() ) : the_post() ?>

							<h2><?php the_title(); ?></h2>

							<p><?php the_content(); ?></p>

						<?php endwhile ?>

						<?php wp_reset_postdata(); ?>

					<?php endif ?>

				</div><!-- .about-content -->

			</div><!--.col-md-12-->

		</div><!--.row-->

	</div><!--.container-->

<?php get_footer() ?>

</section><!--#blog-->