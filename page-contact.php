<?php 
/**
 * Template Name: Conatact Page
 */

get_header(); 

global $post;

$post_id = $post->ID;

?>

	<div class="container">

		<div class="parallax" style="background-image: url('<?php the_field( 'section_two_bg_img', $post_id ) ?>')">

		<?php include( 'form/form.php' ); ?>

	</div><!-- end container -->

<?php get_footer(); ?>