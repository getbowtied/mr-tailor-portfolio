<?php

add_action( 'init', 'create_portfolio_categories' );

function create_portfolio_categories() {
	
	$labels = array(
		'name'                       => __('Portfolio Categories', 'mr_tailor'),
		'singular_name'              => __('Portfolio Category', 'mr_tailor'),
		'search_items'               => __('Search Portfolio Categories', 'mr_tailor'),
		'popular_items'              => __('Popular Portfolio Categories', 'mr_tailor'),
		'all_items'                  => __('All Portfolio Categories', 'mr_tailor'),
		'edit_item'                  => __('Edit Portfolio Category', 'mr_tailor'),
		'update_item'                => __('Update Portfolio Category', 'mr_tailor'),
		'add_new_item'               => __('Add New Portfolio Category', 'mr_tailor'),
		'new_item_name'              => __('New Portfolio Category Name', 'mr_tailor'),
		'separate_items_with_commas' => __('Separate Portfolio Categories with commas', 'mr_tailor'),
		'add_or_remove_items'        => __('Add or remove Portfolio Categories', 'mr_tailor'),
		'choose_from_most_used'      => __('Choose from the most used Portfolio Categories', 'mr_tailor'),
		'not_found'                  => __('No Portfolio Category found.', 'mr_tailor'),
		'menu_name'                  => __('Portfolio Categories', 'mr_tailor'),
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_in_rest'			=> true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'hierarchical' 			=> true,
		'rest_base'				=> 'portfolio-category',
		'rewrite'               => array( 'slug' => 'portfolio-category' ),
	);

	register_taxonomy("portfolio_categories", "portfolio", $args);
}