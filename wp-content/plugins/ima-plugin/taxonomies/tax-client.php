<?php
	
//hook into the init action and call create_book_taxonomies when it fires
  
add_action( 'init', 'create_clients_hierarchical_taxonomy', 0 );
  
//create a custom taxonomy name it subjects for your posts
  
function create_clients_hierarchical_taxonomy() {
  
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
  
  $labels = array(
    'name' => _x( 'Clients', 'taxonomy general name' ),
    'singular_name' => _x( 'Client', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Client' ),
    'all_items' => __( 'All Clients' ),
    'parent_item' => __( 'Parent Client' ),
    'parent_item_colon' => __( 'Parent Clients:' ),
    'edit_item' => __( 'Edit Client' ), 
    'update_item' => __( 'Update Client' ),
    'add_new_item' => __( 'Add New Client' ),
    'new_item_name' => __( 'New Client Name' ),
    'menu_name' => __( 'Clients' ),
  );    
  
// Now register the taxonomy
  register_taxonomy('clients',array('projets'), array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => false,
    'show_admin_column' => true,
    'query_var' => true,
    'show_in_graphql' => true,
    'graphql_single_name' => 'client',
    'graphql_plural_name' => 'clients',
    'rewrite' => array( 'slug' => 'clients' ),
  ));
  
}