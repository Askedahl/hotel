<?php

/*----------------------------------------------------------------------------------*/

/**
 * Initial setup function
 */

add_action( 'after_setup_theme', 'oak_theme_setup' );

function oak_theme_setup() {
	load_theme_textdomain( 'oak_theme', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	/**
	 * Register menus for simplification
	 */
	register_nav_menus( array(
		'Desktop Main1' => esc_html__('Main1 desktop menu'),
		'Desktop Main2' => esc_html__('Main2 desktop menu'),
		'Værelser menu' => esc_html__('Værelser menu'),
		'Restaurant-bar menu' => esc_html__('Restaurant-bar menu'), 
		'Events-om menu' => esc_html__('Events-om menu'),
		'Kontakt-ankomst menu' => esc_html__('Kontakt-ankomst menu'),
		'Firma menu' => esc_html__('Firma menu'),
		'Aktiviteter menu' => esc_html__('Aktiviteter menu'),
		'Mobile Menubar' => esc_html__('Bar menu in bottom of mobile'),
		'Mobile Burger Menu' => esc_html__('Burger menu for rest of navigation'),
		'Footer Navigation' => esc_html__('Footer Main Navigation'),
	) );

}


/*----------------------------------------------------------------------------------*/

/**
 * Remove customize from the admin bar and comments from menu
 */

add_action( 'admin_menu', 'remove_menus' );

function oak_before_admin_bar_render() {
	global $wp_admin_bar;

	$wp_admin_bar->remove_menu('customize');
}
add_action( 'wp_before_admin_bar_render', 'oak_before_admin_bar_render' );

function remove_menus() {
	remove_menu_page( 'edit-comments.php' );
	remove_menu_page( 'customize.php' );
}


/*----------------------------------------------------------------------------------*/

/**
 * Make SVG's an accepted media upload format
 */

function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
add_filter('upload_mimes', 'cc_mime_types');


/*----------------------------------------------------------------------------------*/

/**
 * Add custom image sizes
 */

add_filter( 'image_size_names_choose', 'custom_image_sizes' );

function custom_image_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'your-custom-size' => __( 'Your Custom Size Name' ),
    ) );
}


add_action( 'after_setup_theme', 'oak_after_setup_theme' );

function oak_after_setup_theme() {
    add_image_size( 'thumbnail_big', 500, 400, true );
}

/*----------------------------------------------------------------------------------*/

/**
 * Contact form options
 */

