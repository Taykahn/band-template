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
$media_player = new MBC_Theme( 'media_player' );

$media_player->mbc_build_cpt( 'media-player', 'Media Player', 'Media Player', $supports = array(), $settings = array(), $has_arch = true, $hier = true);

//Instantiate new class object
$band_members = new MBC_Theme( 'band_members' );

$band_members->mbc_build_cpt( 'band-members', 'Band Members', 'Band Members', $supports = array(), $settings = array(), $has_arch = true, $hier = true);