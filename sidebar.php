<?php 
/**
 * Sidebar
 */
?>

<div class="two-column row no-pad">

	<div class="col-md-12 sidebar">

		<div class="row">

			<div class="parallax" style="background-image: url( '<?php echo esc_url( the_field( 'social_media_bk_images', 150 ) ); ?>' )">

			<div class="sidebar-front-left col-md-6">

				<div class="row">

					<div class="twitter-feed">

						<?php if ( ! dynamic_sidebar( 'front-left' )  ): ?>

						<?php endif; ?>

					</div><!-- end twitter feed -->

				</div><!-- end row -->

			</div><!-- end sidebar-front-left col-md-6 -->

			<div class="sidebar-front-right col-md-6">

				<div class="row">

					<div class="fb-feed">

						<?php if ( ! dynamic_sidebar( 'front-right' )  ): ?>

						<?php endif; ?>

					</div><!-- end fb feed -->

				</div><!-- end row -->

			</div><!-- end sidebar-front-right col-md-6 --> 

		</div><!-- end col-md-12 sidebar -->

	</div><!-- end row -->

</div><!-- end two-column container -->













