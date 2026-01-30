<?php
/*
Plugin Name: Fonctions Core du site MNM IMA
Author: Thomas Florentin
Version: 1.0
*/

define('IMA_DIR', WP_PLUGIN_DIR.'/ima-plugin');
define('IMA_URL', WP_PLUGIN_URL.'/ima-plugin');
define('IMA_PATH', '/'.str_replace(ABSPATH, '', IMA_DIR));


require_once(IMA_DIR.'/acf.php');
require_once(IMA_DIR.'/cpt/cpt-projets.php');
require_once(IMA_DIR.'/cpt/cpt-objets.php');
//require_once(ANHA_DIR.'/taxonomies/tax-client.php');


if ( ! function_exists( 'mytheme_register_nav_menu' ) ) {

	function mytheme_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'text_domain' ),
	    	'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
}

