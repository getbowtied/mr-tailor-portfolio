<?php

add_action( 'init', 'create_portfolio_categories' );

function create_portfolio_categories() {
	
	$labels = array(
		'name'                       => __('Portfolio Categories', 'mrtailor-portfolio'),
		'singular_name'              => __('Portfolio Category', 'mrtailor-portfolio'),
		'search_items'               => __('Search Portfolio Categories', 'mrtailor-portfolio'),
		'popular_items'              => __('Popular Portfolio Categories', 'mrtailor-portfolio'),
		'all_items'                  => __('All Portfolio Categories', 'mrtailor-portfolio'),
		'edit_item'                  => __('Edit Portfolio Category', 'mrtailor-portfolio'),
		'update_item'                => __('Update Portfolio Category', 'mrtailor-portfolio'),
		'add_new_item'               => __('Add New Portfolio Category', 'mrtailor-portfolio'),
		'new_item_name'              => __('New Portfolio Category Name', 'mrtailor-portfolio'),
		'separate_items_with_commas' => __('Separate Portfolio Categories with commas', 'mrtailor-portfolio'),
		'add_or_remove_items'        => __('Add or remove Portfolio Categories', 'mrtailor-portfolio'),
		'choose_from_most_used'      => __('Choose from the most used Portfolio Categories', 'mrtailor-portfolio'),
		'not_found'                  => __('No Portfolio Category found.', 'mrtailor-portfolio'),
		'menu_name'                  => __('Portfolio Categories', 'mrtailor-portfolio'),
	);

	$args = array(
		'hierarchical'          => true,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'hierarchical' 			=> true,
		'rest_base'				=> 'portfolio-category',
		'query_var'             => true,
		'show_in_rest'			=> true,
		'rewrite'               => array( 'slug' => 'portfolio-category' ),
	);

	register_taxonomy("portfolio_categories", "portfolio", $args);
}
