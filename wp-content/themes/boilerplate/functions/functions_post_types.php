<?php

/*----------------------------------------------------------------------------------*/

/**
 * Remove default post type
 */

add_action( 'admin_menu', 'remove_default_post_type' );
function remove_default_post_type() {
    remove_menu_page( 'edit.php' );
}

add_action( 'admin_bar_menu', 'remove_default_post_type_menu_bar', 999 );
function remove_default_post_type_menu_bar( $wp_admin_bar ) {
    $wp_admin_bar->remove_node( 'new-post' );
}

add_action( 'wp_dashboard_setup', 'remove_draft_widget', 999 );
function remove_draft_widget(){
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
}

/*----------------------------------------------------------------------------------*/

function oak_custom_taxonomy() {

    $taxonomies = [
        array (
            'slug' => 'examples',
            'plural' => 'Examples',
            'singular' => 'Example'
        ),
    ];

    foreach($taxonomies as $tax) {

        $labels = array(
            'name'                       => _x( $tax['plural'], 'taxonomy general name'),
            'singular_name'              => _x( $tax['singular'], 'taxonomy singular name'),
            'search_items'               => __( 'Search ' . $tax['plural']),
            'popular_items'              => __( 'Popular ' . $tax['plural']),
            'all_items'                  => __( 'All ' . $tax['plural']),
            'parent_item'                => null,
            'parent_item_colon'          => null,
            'edit_item'                  => __( 'Edit ' . $tax['singular']),
            'update_item'                => __( 'Update ' . $tax['singular']),
            'add_new_item'               => __( 'Add New ' . $tax['singular']),
            'new_item_name'              => __( 'New ' . $tax['singular'] . ' Name'),
            'separate_items_with_commas' => __( 'Separate ' . $tax['slug'] . ' with commas'),
            'add_or_remove_items'        => __( 'Add or remove ' . $tax['slug']),
            'choose_from_most_used'      => __( 'Choose from the most used ' . $tax['slug']),
            'not_found'                  => __( 'No ' . $tax['slug'] . ' found.'),
            'menu_name'                  => __( $tax['plural'] ),
        );
    
        $args = array(
            'hierarchical'          => $tax['hierarchical'] ?? false,
            'labels'                => $labels,
            'show_ui'               => $tax['show_ui'] ?? true,
            'show_admin_column'     => $tax['show_ui'] ?? true,
            'update_count_callback' => '_update_post_term_count',
            'query_var'             => true,
            'rewrite'               => array( 'slug' => $tax['slug'] ),
            'show_in_rest'          => true,
        );
    
        register_taxonomy( $tax['slug'], null, $args );

    }

}
add_action( 'init', 'oak_custom_taxonomy', 0 );

/*----------------------------------------------------------------------------------*/

/**
 * Creating Custom post types
 */

function oak_custom_post_type() {

    $post_types = [
        array (
            'slug' => 'post',
            'plural' => 'posts',
            'singular' => 'post',
            'tax' => ['post'],
            'icon' => 'dashicons-admin-post',
        ),
    ];

    foreach($post_types as $post_type) {

        // Set UI labels for Custom Post Type
        $labels = array(
            'name'                => _x( $post_type['plural'], 'Post Type General Name' ),
            'singular_name'       => _x( $post_type['singular'], 'Post Type Singular Name' ),
            'menu_name'           => __( $post_type['plural'] ),
            'parent_item_colon'   => __( 'Parent ' . $post_type['plural'] ),
            'all_items'           => __( 'All ' . $post_type['plural'] ),
            'view_item'           => __( 'View ' . $post_type['plural'] ),
            'add_new_item'        => __( 'Add New ' . $post_type['plural'] ),
            'add_new'             => __( 'Add New' ),
            'edit_item'           => __( 'Edit ' . $post_type['plural'] ),
            'update_item'         => __( 'Update ' . $post_type['plural'] ),
            'search_items'        => __( 'Search ' . $post_type['singular'] ),
            'not_found'           => __( 'Not Found' ),
            'not_found_in_trash'  => __( 'Not found in Trash' ),
        );

        // Set other options for Custom Post Type
        $args = array(
            'label'               => __( $post_type['plural'] ),
            'description'         => __( $post_type['plural'], 'Oak Digital Boilerplate' ),
            'labels'              => $labels,
            'show_in_rest'        => $post_type['show_in_rest'] ?? true,
            'hierarchical'        => $post_type['hierarchical'] ?? false,
            'public'              => $post_type['public'] ?? true,
            'show_ui'             => $post_type['show_ui'] ?? true,
            'show_in_menu'        => $post_type['show_in_menu'] ?? true,
            'show_in_nav_menus'   => $post_type['show_in_nav_menus'] ?? true,
            'show_in_admin_bar'   => $post_type['show_in_admin_bar'] ?? true,
            'menu_position'       => $post_type['menu_position'] ?? 20,
            'can_export'          => true,
            'has_archive'         => $post_type['has_archive'] ?? false,
            'exclude_from_search' => $post_type['exclude_from_search'] ?? false,
            'publicly_queryable'  => $post_type['public_queryable'] ?? true,
            'capability_type'     => $post_type['capability_type'] ?? 'page',
            'supports'            => $post_type['supports'] ?? array( 'editor', 'title', 'custom-fields'),
            'menu_icon'           => $post_type['icon'],
        );

        // Registering your Custom Post Type
        register_post_type( $post_type['slug'], $args );
        if(isset($post_type['tax'])) {
            foreach($post_type['tax'] as $tax) {
                register_taxonomy_for_object_type($tax, $post_type['slug']);
            }
        }

    }

}
add_action( 'init', 'oak_custom_post_type', 0 );
