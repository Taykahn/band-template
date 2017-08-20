<?php
/**
 * Band Members Single
 */

get_header(); ?>

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

					<div class="page-header">

						<h1><?php the_title(); ?></h1>

					</div><!-- end page-header -->

					<section class="col-md-6">

							<div class="sgl-bm-img">

							<?php the_post_thumbnail(); ?>

						</div><!-- end sgl-bm-img -->

					</section><!-- end col-md-6 -->

					<section class="col-md-6">

						<div class="sgl-bm-content">

							<p><?php the_content(); ?></p>

						</div><!-- end sgl-bm-content -->

					</section><!-- end col-md-6 -->

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- end col-md-12 -->

		</div><!-- end row -->

	</div><!-- end container -->

<?php get_footer(); ?>