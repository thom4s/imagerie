<?php 

function collaborations_register_post_types() {
	
    $labels = array(
        'name' => 'Collaborations',
        'all_items' => 'Toutes les Collaborations',  // affiché dans le sous menu
        'singular_name' => 'Collaboration',
        'add_new_item' => 'Ajouter une Collaboration',
        'edit_item' => 'Modifier la Collaboration',
        'menu_name' => 'Collaborations'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail','custom-fields','excerpt'),
        'taxonomies' => array('category', 'post_tag'),
        'rewrite' => array('slug' => 'collaborations','with_front' => false),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-networking',
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_graphql' => true, # Set to false if you want to exclude this type from the GraphQL Schema
        'graphql_single_name' => 'collaboration', 
        'graphql_plural_name' => 'collaborations', # If set to the same name as graphql_single_name, the field name will default to `all${graphql_single_name}`, i.e. `allDocument`.	);
    );
    
	register_post_type( 'collaborations', $args );
}
add_action( 'init', 'collaborations_register_post_types' ); // Le hook init lance la fonction