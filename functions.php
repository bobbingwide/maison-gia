<?php

include_once __DIR__ . '/includes/nav-menu/top-navigation-walker.php';

/*** Child Theme Function  ***/

function maison_edge_child_theme_enqueue_scripts() {
	$parent_style = 'maison_edge_default_style';
	
	wp_enqueue_style('maison_edge_child_style', get_stylesheet_directory_uri() . '/style.css', array($parent_style), time());
}

add_action( 'wp_enqueue_scripts', 'maison_edge_child_theme_enqueue_scripts', 11 );


add_filter( 'maison_edge_filter_title_area_height_params', 'maison_child_filter_title_area_height_params' );

function maison_child_filter_title_area_height_params( $params ) {
    $params['show_title_area'] = false; // Too late to try this.
    $params['title_height'] = null;
    $params['title_background_color'] = null;
    $params['title_tag'] = 'h1';
    $params['title_color'] = 'color:#181818;';
    $params['enable_breadcrumbs'] = false;
    return $params;
}

/*
 *  [module] => title
    [layout] =>
    [show_title_area] => 1
    [type] => standard
    [enable_breadcrumbs] =>
    [title_height] => height:200px;
    [title_holder_height] =>
    [title_subtitle_holder_padding] =>
    [title_background_color] =>
    [title_background_image] =>
    [title_background_image_width] =>
    [title_background_image_src] =>
    [has_subtitle] => 1
    [title_tag] => h1
    [title_color] =>
    [subtitle_tag] => h6
    [subtitle_styles] => Array
        (
            [0] => color:#ffffff;
            [1] =>
        )
 */

