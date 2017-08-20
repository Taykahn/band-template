<?php
/**
 * Excerpt loop
 */
 ?>

 <section class="container">
 
 	<header><h1>Our Blog</h1></header>

 	<div class="content-wrap col-md-8">

 		<?php if( have_posts() ) : ?>

 			<?php while( have_posts() ) : the_post() ?>

 				<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>

 				<p><?php the_excerpt() ?></p>

 			<?php endwhile ?>

 		<?php endif ?>

 	</div><!--.content-wrap-->

 	<aside class="col-md-4">
 
 		<?php get_sidebar() ?>

 	</aside>

 </section>