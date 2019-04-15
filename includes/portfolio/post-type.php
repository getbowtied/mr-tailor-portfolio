<?php

add_action( 'init', 'create_portfolio_item' );

function create_portfolio_item() {
	
	$the_slug = get_option( 'gbt_portfolio_item_slug', 'portfolio-item' );

	$labels = array(
		'name' 					=> __('Portfolio', 'mrtailor-portfolio'),
		'singular_name' 		=> __('Portfolio Item', 'mrtailor-portfolio'),
		'add_new' 				=> __('Add New', 'mrtailor-portfolio'),
		'add_new_item' 			=> __('Add New Portfolio item', 'mrtailor-portfolio'),
		'edit_item' 			=> __('Edit Portfolio item', 'mrtailor-portfolio'),
		'new_item' 				=> __('New Portfolio item', 'mrtailor-portfolio'),
		'all_items' 			=> __('All Portfolio items', 'mrtailor-portfolio'),
		'view_item' 			=> __('View Portfolio item', 'mrtailor-portfolio'),
		'search_items' 			=> __('Search Portfolio item', 'mrtailor-portfolio'),
		'not_found' 			=> __('No Portfolio item found', 'mrtailor-portfolio'),
		'not_found_in_trash' 	=> __('No Portfolio item found in Trash', 'mrtailor-portfolio'), 
		'parent_item_colon' 	=> '',
		'menu_name' 			=> __('Portfolio', 'mrtailor-portfolio'),
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
		'rewrite' 				=> true,
		'show_in_rest'			=> true,
		'capability_type' 		=> 'post',
		'rest_base'				=> 'portfolio-item',
		'menu_icon'   			=> 'dashicons-category',
		'has_archive' 			=> true, 
		'hierarchical' 			=> true,
		'menu_position' 		=> 4,
		'supports' 				=> array('title', 'editor', 'block-editor', 'thumbnail', 'revisions'),
		'rewrite' 				=> array('slug' => $the_slug),
		'with_front' 			=> false,
	);
	
	register_post_type('portfolio',$args);
}