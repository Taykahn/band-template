<?php
/**
 * Template Name: Archives
 */

get_header(); 

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$query = array( 
	'post_type' => 'post',
	'paged'     => $paged
);
$blog = new WP_Query( $query );

?>

	<div class="inner-wrapper container">

		<div class="row blog-content">

			<?php if ( $blog->have_posts() ) : ?>

				<?php while ( $blog->have_posts() ) : $blog->the_post() ?>

					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

					<h5>Author: <?php the_author(); ?> | Posted on: <?php the_date(); ?></h5>

					<h5>Categories: <?php the_category(); ?></h5>

					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

					<p><?php the_content(); ?></p><hr>

				<?php endwhile ?>

				<div class="col-md-12 options border-bottom">

					<?php do_action( 'mbc_pagination' ) ?>

				</div><!-- end col-md-12 options border-bottom -->

			<?php endif; wp_reset_postdata() ?>

		</div><!--.blog-content-->

	</div>

<?php get_footer(); ?>