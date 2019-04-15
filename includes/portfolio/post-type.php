<?php

add_action( 'init', 'create_mt_portfolio_item' );

function create_mt_portfolio_item() {

	$the_slug = get_option( 'mt_portfolio_slug', 'portfolio-item' );

	$labels = array(
		'name' 					=> __('Portfolio', 'mr_tailor'),
		'singular_name' 		=> __('Portfolio Item', 'mr_tailor'),
		'add_new' 				=> __('Add New', 'mr_tailor'),
		'add_new_item' 			=> __('Add New Portfolio item', 'mr_tailor'),
		'edit_item' 			=> __('Edit Portfolio item', 'mr_tailor'),
		'new_item' 				=> __('New Portfolio item', 'mr_tailor'),
		'all_items' 			=> __('All Portfolio items', 'mr_tailor'),
		'view_item' 			=> __('View Portfolio item', 'mr_tailor'),
		'search_items' 			=> __('Search Portfolio item', 'mr_tailor'),
		'not_found' 			=> __('No Portfolio item found', 'mr_tailor'),
		'not_found_in_trash' 	=> __('No Portfolio item found in Trash', 'mr_tailor'), 
		'parent_item_colon' 	=> '',
		'menu_name' 			=> __('Portfolio', 'mr_tailor'),
	);

	$args = array(
		'labels' 				=> $labels,
		'public' 				=> true,
		'publicly_queryable' 	=> true,
		'exclude_from_search' 	=> true,
		'show_ui' 				=> true, 
		'show_in_menu' 			=> true, 
		'show_in_nav_menus' 	=> true,
		'query_var' 			=> true,
		'show_in_rest'			=> true,
		'rewrite' 				=> true,
		'capability_type' 		=> 'post',
		'rest_base'				=> 'portfolio-item',
		'has_archive' 			=> true, 
		'hierarchical' 			=> true,
		'menu_position' 		=> 4,
		'supports' 				=> array('title', 'editor', 'block-editor', 'thumbnail'),
		'rewrite' 				=> array('slug' => $the_slug),
		'with_front' 			=> false
	);
	
	register_post_type('portfolio',$args);
}