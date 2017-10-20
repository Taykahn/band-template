<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="500.08">

<div class="nav-banner" style="background-image: url( '<?php the_field( 'nav_bkgd_img', 'option' ); ?>' )">

		<div class="navbar-header">

			<div class="col-xs-6">

				<div class="row">

				<div class="band-logo">


				</div><!-- end band-logo -->

			</div><!-- end row -->

		</div><!-- end col-xs-6 -->

			<?php 
				$args = array(
				'menu'          => 'header-menu',
				'menu_class'    => 'nav navbar-nav',
				'container'     => 'false'
			);
				wp_nav_menu( $args );
			?>

		</div><!--/.navbar-collapse -->

	</nav><!-- end navbar navbar-inverse -->