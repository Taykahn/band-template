<?php 
/**
 * Template Name: About Page
 */

get_header(); 

global $post;

$post_id = $post->ID;

?>

<section id="affix-navbar">

	<div class="parallax" style="background-image: url( '<?php the_field( 'about_bkg_img', $post_id ); ?>' )">

	<div class="container">

		<div class="row">

			<div class="about-content">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post() ?>

						<h2><?php the_title(); ?></h2>

						<p><?php the_content(); ?></p>

					<?php endwhile ?>

					<?php wp_reset_postdata(); ?>

				<?php endif ?>

			</div><!-- .about-content -->

		</div><!--.row-->

	</div><!--.container-->

<?php get_footer() ?>

</section><!--#blog-->