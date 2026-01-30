<?php

function anha_acf_load_json($paths) {
    $paths = array(
        IMA_DIR . '/acf-json'
    );
    return $paths;
}

function anha_acf_save_json($paths) {
    $paths = IMA_DIR . '/acf-json';
    return $paths;
}


add_filter('acf/settings/save_json', 'anha_acf_save_json');
add_filter('acf/settings/load_json', 'anha_acf_load_json');

add_filter('acf/save_post', function ($post_id) {
    $format = function (&$date) {
        $tmp = sanitize_text_field($date);
        if (!empty($tmp)) {
            preg_match('~(\d{4})(\d{2})(\d{2})~', $tmp, $match);
            array_shift($match);
            $date = implode('-', $match);
        }
    };

    $format($_POST['acf']['field_58eb82d838d59']);
    $format($_POST['acf']['field_58eb835538d5a']);
}, 1, 1);


function register_acf_options_pages() {

    // check function exists
    if ( ! function_exists( 'acf_add_options_page' ) ) {
        return;
    }

    // register options page
    $my_options_page = acf_add_options_page(
        array(
            'page_title'      => __( 'Options du site' ),
            'menu_title'      => __( 'Options' ),
            'menu_slug'       => 'my-options-page',
            'capability'      => 'edit_posts',
            'show_in_graphql' => true,
            'position' => '3',
        )
    );
}

add_action( 'acf/init', 'register_acf_options_pages' );