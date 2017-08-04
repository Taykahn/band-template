<?php

/**
 * Build CPTs and custom Categories for theme
 * with the MBC_Theme class
 */

$page_supports   = array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes' );
$post_supports   = array( 'title', 'editor', 'thumbnail' );

//Instantiate new class object
$tour_dates = new MBC_Theme( 'tour_dates' );

$tour_dates->mbc_build_cpt( 'tour-dates', 'Tour Dates', 'Tour Dates', $supports = array(), $settings = array(), $has_arch = true, $hier = true);

//Instantiate new class object
$background_images = new MBC_Theme( 'background_images' );

$background_images->mbc_build_cpt( 'background-images', 'Background Images (Do not delete posts just change the image!)', 'Background Images', $supports = array(), $settings = array(), $has_arch = true, $hier = true);

//Instantiate new class object
$media_player = new MBC_Theme( 'media_player' );

$media_player->mbc_build_cpt( 'media-player', 'Media Player', 'Media Player', $supports = array(), $settings = array(), $has_arch = true, $hier = true);

//Instantiate new class object
$social_media = new MBC_Theme( 'social_media' );

$social_media->mbc_build_cpt( 'social-media', 'Social Media', 'Social Media', $supports = array(), $settings = array(), $has_arch = true, $hier = true);

//Instantiate new class object
$footer_contact = new MBC_Theme( 'footer_contact' );

$footer_contact->mbc_build_cpt( 'footer-contact', 'Footer Contact', 'Footer Contact', $supports = array(), $settings = array(), $has_arch = true, $hier = true);