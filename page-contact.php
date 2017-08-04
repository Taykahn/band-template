<?php 
/**
 * Template Name: Conatact Page
 */

get_header(); ?>

	<div class="container">

		<div class="row">

			<div class="col-md-8">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="page-header">

							<h1><?php the_title(); ?></h1>

						</div><!-- end page-header -->

						<p><?php the_content(); ?></p>

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- end col-md-8 -->

			<div class="container">

				<div class="row">

					<div class="col-md-4">

						<?php include( 'form/form.php' ); ?>

					</div><!-- end col-md-4 -->

				</div><!-- end row -->

			</div><!-- end container -->

		</div><!-- end row -->

	</div><!-- end container -->

<?php get_footer(); ?>