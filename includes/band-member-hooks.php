<?php
/**
 * Band Member Hooks
 *
 * @package garret-site/includes
 *
 */

/**
 * Related Info
 *
 * @package garret-site/includes
 * @add_action gs_related_info
 * @return void
 */

function gs_related_info_band_member() {

global $post;

$posts = get_field( 'related_info', 'option' );


if( $posts ): ?>

	<ul>

	<?php foreach( $posts as $post ): // variable must be called $post (IMPORTANT) ?>

		<?php setup_postdata($post); ?>

		<li>

			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

		</li>

	<?php endforeach; ?>

	</ul>

	<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>

<?php endif;

}

add_action( 'gs_related_info', 'gs_related_info_band_member' );