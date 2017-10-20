<?php 
/**
 * Blog
 */

get_header();

global $post;

$post_id = $post->ID;

if ( get_query_var( 'paged' ) ) { 
	$paged = get_query_var( 'paged' ); 
}
elseif ( get_query_var( 'page' ) ) { 
	$paged = get_query_var( 'page' ); 
}
else { 
	$paged = 1; 
}

query_posts('posts_per_page=&paged=' . $paged); 


$query = array( 
	'post_type' => 'post',
	'paged'     => $paged
);
$blog = new WP_Query( $query );

?>

	<div class="parallax" style="background-image: url( '<?php the_field( 'blog_bkgd_img', 190 ); ?>' )">

	<div class="inner-wrapper container">

		<div class="blog-content">

			<?php if ( $blog->have_posts() ) : ?>

				<?php while ( $blog->have_posts() ) : $blog->the_post() ?>

					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

					<h5>Author: <?php the_author(); ?> | Posted on: <?php the_date(); ?></h5>

					<h5>Categories: <?php the_category(); ?></h5>

					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

					<p><?php the_content(); ?></p><hr>

				<?php endwhile ?>

				<div class="options border-bottom">

					<?php do_action( 'mbc_pagination' ) ?>

				</div><!-- end options border-bottom -->

			<?php endif; wp_reset_postdata() ?>

		</div><!--.blog-content-->

	</div><!-- end inner-wrapper container -->

<?php get_footer(); ?>