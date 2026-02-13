<?php 
function cptui_register_my_cpts_tuiles() {

	/**
	 * Post Type: Objets.
	 */

	$labels = [
		"name" => esc_html__( "[2025] Tuiles", "blankslate" ),
		"singular_name" => esc_html__( "Tuiles", "blankslate" ),
		'menu_name'             => _x( 'Tuiles', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Tuile', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Ajouter une Tuile', 'textdomain' ),
		'add_new_item'          => __( 'Ajouter nouvelle Tuile', 'textdomain' ),
		'new_item'              => __( 'Nouvelle Tuile', 'textdomain' ),
		'edit_item'             => __( 'Editer la Tuile', 'textdomain' ),
		'view_item'             => __( 'Voir Projet', 'textdomain' ),
		'all_items'             => __( 'Toutes les Tuiles', 'textdomain' ),
		'search_items'          => __( 'Rechercher Tuile', 'textdomain' )
		];

	$args = [
		"label" => esc_html__( "Tuiles", "blankslate" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "tuile", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "tuile", $args );
}

add_action( 'init', 'cptui_register_my_cpts_tuiles' );
