<?php 
/**
 * Template Name: Home Blog
 *
 * Home page action hooks in includes/home-page-hooks.php
 */

get_header(); ?>

	<!-- Section One -->

	<?php do_action( 'social_media' ); ?>

	<!-- Section Two -->

	<?php do_action( 'background_one' ); ?>

	<!-- Section Three -->

	<?php do_action( 'blog_content' ); ?>

	<!-- Section Four -->

	<?php do_action( 'background_two' ); ?>

	<!-- Section Five -->

	<?php do_action( 'media_player' ); ?>

	<!-- Section Six -->

	<?php do_action( 'background_three' ); ?>

	<!-- Section Seven -->

	<?php do_action( 'tour_dates' ); ?>

<?php get_footer() ?>