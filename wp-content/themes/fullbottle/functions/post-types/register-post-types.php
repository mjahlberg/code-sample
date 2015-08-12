<?php
/**
 * Registers custom post types for use with this theme
 *
 * @package WordPress
*/

add_action( 'init', 'bi_create_post_types' );

if ( !function_exists('bi_create_post_types') ) {
	
	function bi_create_post_types() {


		/******* Studies Post Type *******/

		$studies_slug = ( bi_get_data('studies_post_type_slug') ) ? bi_get_data('studies_post_type_slug') : 'studies';
		$studies_post_type_name = ( bi_get_data('studies_post_type_name') ) ? bi_get_data('studies_post_type_name') : __('Studies','gents');
		$studies_labels = array(
			'name' => $studies_post_type_name,
			'singular_name' => _x("Case Study", "post type singular name"),
			'menu_name' => 'Case Studies',
			'add_new' => _x("Add New", "Case Study item"),
			'add_new_item' => __("Add New Case Study"),
			'edit_item' => __("Edit Case Study"),
			'new_item' => __("New Case Study"),
			'view_item' => __("View Case Study"),
			'search_items' => __("Search Case Studies"),
			'not_found' =>  __("No Case Studies Found"),
			'not_found_in_trash' => __("No Case Studies Found in Trash"),
			'parent_item_colon' => '' );

		register_post_type( 'Studies',
			array(
				'labels' => apply_filters('bi_studies_labels', $studies_labels),
				'public' => true,
				'has_archive' => false,
				'supports' => array('title','editor','thumbnail'),
				'query_var' => true,
				'rewrite' => array( 'slug' => $studies_slug ),
				'menu_icon' => 'dashicons-analytics',
			)
		);
		flush_rewrite_rules();


		/******* Campaigns Post Type *******/

		$campaigns_slug = ( bi_get_data('campaigns_post_type_slug') ) ? bi_get_data('campaigns_post_type_slug') : 'campaigns';
		$campaigns_post_type_name = ( bi_get_data('campaigns_post_type_name') ) ? bi_get_data('campaigns_post_type_name') : __('Campaigns','gents');
		$campaigns_labels = array(
			'name' => $campaigns_post_type_name,
			'singular_name' => _x("Campaign", "post type singular name"),
			'menu_name' => 'Campaign Pages',
			'add_new' => _x("Add New", "Campaign item"),
			'add_new_item' => __("Add New Campaign"),
			'edit_item' => __("Edit Campaign"),
			'new_item' => __("New Campaign"),
			'view_item' => __("View Campaign"),
			'search_items' => __("Search Campaigns"),
			'not_found' =>  __("No Campaigns Found"),
			'not_found_in_trash' => __("No Campaigns Found in Trash"),
			'parent_item_colon' => '' );

		register_post_type( 'Campaigns',
			array(
				'labels' => apply_filters('bi_studies_labels', $campaigns_labels),
				'public' => true,
				'has_archive' => false,
				'supports' => array('title','editor','thumbnail'),
				'query_var' => true,
				'rewrite' => array( 'slug' => $campains_slug ),
				'menu_icon' => 'dashicons-images-alt',
			)
		);
		flush_rewrite_rules();


		/******* Creators Post Type *******/

		$creators_slug = ( bi_get_data('creators_post_type_slug') ) ? bi_get_data('creators_post_type_slug') : 'creators';
		$creators_post_type_name = ( bi_get_data('creators_post_type_name') ) ? bi_get_data('creators_post_type_name') : __('Creators','gents');
		$creators_labels = array(
			'name' => $creators_post_type_name,
			'singular_name' => _x("Creator", "post type singular name"),
			'menu_name' => 'Creators',
			'add_new' => _x("Add New", "Creator"),
			'add_new_item' => __("Add New Creator"),
			'edit_item' => __("Edit Creator"),
			'new_item' => __("New Creator"),
			'view_item' => __("View Creator"),
			'search_items' => __("Search Creators"),
			'not_found' =>  __("No Creators Found"),
			'not_found_in_trash' => __("No Creators Found in Trash"),
			'parent_item_colon' => '' );

		register_post_type( 'Creators',
			array(
				'labels' => apply_filters('bi_creators_labels', $creators_labels),
				'public' => true,
				'has_archive' => false,
				'supports' => array('title','editor','thumbnail'),
				'query_var' => true,
				'rewrite' => array( 'slug' => $creators_slug ),
				'menu_icon' => 'dashicons-edit',
			)
		);
		flush_rewrite_rules();

		/******* Clients Post Type *******/

		$clients_slug = ( bi_get_data('clients_post_type_slug') ) ? bi_get_data('clients_post_type_slug') : 'clients';
		$clients_post_type_name = ( bi_get_data('clients_post_type_name') ) ? bi_get_data('clients_post_type_name') : __('Clients','gents');
		$clients_labels = array(
			'name' => $clients_post_type_name,
			'singular_name' => _x("Client", "post type singular name"),
			'menu_name' => 'Clients',
			'add_new' => _x("Add New", "Client"),
			'add_new_item' => __("Add New Client"),
			'edit_item' => __("Edit Client"),
			'new_item' => __("New Client"),
			'view_item' => __("View Client"),
			'search_items' => __("Search Clients"),
			'not_found' =>  __("No Clients Found"),
			'not_found_in_trash' => __("No Clients Found in Trash"),
			'parent_item_colon' => '' );

		register_post_type( 'Clients',
			array(
				'labels' => apply_filters('bi_clients_labels', $clients_labels),
				'public' => true,
				'has_archive' => false,
				'supports' => array('title','editor','thumbnail'),
				'query_var' => true,
				'rewrite' => array( 'slug' => $clients_slug ),
				'menu_icon' => 'dashicons-universal-access',
			)
		);
		flush_rewrite_rules();

		/******* Team Post Type *******/

		$teams_slug = ( bi_get_data('teams_post_type_slug') ) ? bi_get_data('teams_post_type_slug') : 'teams';
		$teams_post_type_name = ( bi_get_data('teams_post_type_name') ) ? bi_get_data('teams_post_type_name') : __('Teams','gents');
		$teams_labels = array(
			'name' => $teams_post_type_name,
			'singular_name' => _x("Team", "post type singular name"),
			'menu_name' => 'Teams',
			'add_new' => _x("Add New", "Team"),
			'add_new_item' => __("Add New Team"),
			'edit_item' => __("Edit Team"),
			'new_item' => __("New Team"),
			'view_item' => __("View Team"),
			'search_items' => __("Search Teams"),
			'not_found' =>  __("No Teams Found"),
			'not_found_in_trash' => __("No Teams Found in Trash"),
			'parent_item_colon' => '' );

		register_post_type( 'Teams',
			array(
				'labels' => apply_filters('bi_teams_labels', $teams_labels),
				'public' => true,
				'has_archive' => false,
				'supports' => array('title','editor','thumbnail'),
				'query_var' => true,
				'rewrite' => array( 'slug' => $teams_slug ),
				'menu_icon' => 'dashicons-networking',
			)
		);

		/******* Partner Post Type *******/

		$partners_slug = ( bi_get_data('partners_post_type_slug') ) ? bi_get_data('partners_post_type_slug') : 'partners';
		$partners_post_type_name = ( bi_get_data('partners_post_type_name') ) ? bi_get_data('partners_post_type_name') : __('Partners','gents');
		$partners_labels = array(
			'name' => $partners_post_type_name,
			'singular_name' => _x("Partner", "post type singular name"),
			'menu_name' => 'Partners',
			'add_new' => _x("Add New", "Partner"),
			'add_new_item' => __("Add New Partner"),
			'edit_item' => __("Edit Partner"),
			'new_item' => __("New Partner"),
			'view_item' => __("View Partner"),
			'search_items' => __("Search Partners"),
			'not_found' =>  __("No Partners Found"),
			'not_found_in_trash' => __("No Partners Found in Trash"),
			'parent_item_colon' => '' );

		register_post_type( 'Partners',
			array(
				'labels' => apply_filters('bi_partners_labels', $partners_labels),
				'public' => true,
				'has_archive' => false,
				'supports' => array('title','editor','thumbnail'),
				'query_var' => true,
				'rewrite' => array( 'slug' => $partners_slug ),
				'menu_icon' => 'dashicons-admin-users',
			)
		);
	}
}