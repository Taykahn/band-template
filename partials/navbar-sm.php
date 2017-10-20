<div id="small-navbar">

	<nav class="navbar navbar-inverse navbar-fixed-top"> 

		<div class="navbar-header">

		<button type="button" id="nav-icon3" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">

			<span></span>

			<span></span>

			<span></span>

			<span></span>

		</button><!-- end navbar-toggle collapsed -->

		</div><!-- end navbar-header -->

		<div id="navbar" class="navbar-collapse collapse">

			<?php 
				$args = array(
				'menu'          => 'header-menu',
				'menu_class'    => 'nav navbar-nav',
				'container'     => 'false'
			);
				wp_nav_menu( $args );
			?>

		</div><!--/.navbar-collapse -->

	</nav><!-- end navbar navbar-inverse navbar-fixed-top -->

</div><!-- end small-nav -->