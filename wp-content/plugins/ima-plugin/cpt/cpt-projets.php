<?php 

function cptui_register_my_cpts_project() {

	/**
	 * Post Type: Projets.
	 */

	$labels = [
		"name" => esc_html__( "Projets", "blankslate" ),
		"singular_name" => esc_html__( "Projet", "blankslate" ),
		'menu_name'             => _x( 'Projets', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar'        => _x( 'Projet', 'Add New on Toolbar', 'textdomain' ),
		'add_new'               => __( 'Ajouter un Projet', 'textdomain' ),
		'add_new_item'          => __( 'Ajouter nouveau Projet', 'textdomain' ),
		'new_item'              => __( 'Nouveau Projet', 'textdomain' ),
		'edit_item'             => __( 'Editer le Projet', 'textdomain' ),
		'view_item'             => __( 'Voir Projet', 'textdomain' ),
		'all_items'             => __( 'Tous les Projets', 'textdomain' ),
		'search_items'          => __( 'Rechercher Projet', 'textdomain' )
	];

	$args = [
		"label" => esc_html__( "Projets", "blankslate" ),
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
		"rewrite" => [ "slug" => "project", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "project", $args );
}

add_action( 'init', 'cptui_register_my_cpts_project' );
