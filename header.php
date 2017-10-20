<?php
/**
* Template Name: Header
*
* Header Image hooks @includes 
*/
?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

	<title>

	<?php wp_title( '|', true, 'right' ); ?>

	<?php bloginfo('name'); ?>

	</title>

	<?php wp_head() ?>

	<?php 
		global $post;
		global $mbc_img_path;
		$post_slug = isset( $post->post_name ) ? $post->post_name : null;
		$page_slug = 'page-'.$post_slug;
		$fouc      = 'fouc';
		$classes   = array( $page_slug );
	?>

	</head>

<body <?php body_class( $classes ) ?>>

	<header>

		<div id="navbar-sm">

			<?php include( 'partials/navbar-sm.php' ); ?> 

		</div><!-- end navbar-sm -->

		<?php do_action( 'hero' ); ?>

	</header>

	<div id="navbar-lg">

		<?php include( 'partials/navbar-lg.php' ); ?> 

	</div><!-- end navbar-lg -->














