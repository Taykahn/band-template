<?php
/**
 * Band Member Archive
 */

global $post;

$post_id = $post->ID;

$args = array( 

	'post_type' => 'band_member',

);

$band_member=new WP_Query( $args );

get_header() ?>

<section id="diy-archive" class="container">

	<div class="row">

		<article class="content col-md-8">

			<?php if ( $band_member->have_posts() ) : ?>

				<?php while ( $band_member->have_posts() ) : $band_member->the_post(); ?>

					<a href="<?php the_permalink() ?>"><?php the_title() ?></a>

				<?php endwhile ?>

			<?php endif; wp_reset_postdata() ?>

		</article><!--.content-->

		<aside id="sidebar" class="col-md-4">

		</aside>

	</div><!--.row-->

</section><!--.container-->

<?php get_footer() ?>