<?php

/*----------------------------------------------------------------------------------*/

/**
 * Integrate styles and scripts with gutenberg editor for more WYSIWYG feel
 */

 // Styles
add_action( 'after_setup_theme', 'guten_editor_style' );

function guten_editor_style() {
	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

    // Enqueue editor styles.
	add_editor_style( 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
	add_editor_style( 'style.css' );

}

// Enqueue scripts into the Gutenberg editor
add_action( 'enqueue_block_editor_assets', 'guten_editor_scripts' );

function guten_editor_scripts() {
	wp_enqueue_script('defermethod', get_template_directory_uri() . '/js/defer.js');
	wp_enqueue_script('slick-script', get_template_directory_uri() . '/assets/vendor/slick/slick.min.js');
	wp_enqueue_script('bootstrap-script', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js');
}


/*----------------------------------------------------------------------------------*/

/**
 * Enqueue scripts and styles.
 */

add_action( 'wp_enqueue_scripts', 'oak_theme_scripts' );

function oak_theme_scripts() {

	$styles = [
		array(
			'name'	=> 	'oak_themeblocks-style-reset',
			'url'	=>	get_template_directory_uri() . '/assets/css/reset.css'),
		array(
			'name'	=> 	'bootstrap',
			'url'	=>	'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'),
		array(
			'name'	=> 	'slick',
			'url'	=>	get_template_directory_uri() . '/assets/vendor/slick/slick.css'),
		array(
			'name'	=> 	'gutenbergbase-style',
			'url'	=>	get_stylesheet_uri()),
	]; // Array including all css sheets

	$scripts = [
		array(
			'name'	=> 	'jquery-3',
			'url'	=>	'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'),
		array(
			'name'	=> 	'bootstrap',
			'url'	=>	'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'),
		array(
			'name'	=> 	'slick',
			'url'	=>	get_template_directory_uri() . '/assets/vendor/slick/slick.min.js'),
		array(
			'name'	=> 	'oak-scripts',
			'url'	=>	get_template_directory_uri() . '/theme.js'),
		array(
			'name'	=> 	'object-fit-js',
			'url'	=>	get_template_directory_uri() . '/template-parts/blocks/hero/object-fit-videos.js'),
	]; // Array including all javascript files


    // Enqueue all files
	foreach($styles as $style) {
		wp_enqueue_style($style['name'], $style['url']);
	}

	foreach($scripts as $script) {
		wp_enqueue_script($script['name'],
			$script['url'],
			$scripts['deps'] ?? [],
			$script['version'] ?? false,
			$script['in_footer'] ?? false);
    }

}


/*----------------------------------------------------------------------------------*/

/**
 * Defer scripts
 */

add_filter( 'script_loader_tag', 'add_defer_attribute', 10, 3 );

function add_defer_attribute( $tag, $handle, $src ) {

	// The handles of the enqueued scripts we want to defer
	$defer_scripts = array(
		'slick',
		'oak-scripts',
	);

    if ( in_array( $handle, $defer_scripts ) ) {
        return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
    }

    return $tag;
}


/*----------------------------------------------------------------------------------*/

/**
 * Unload not needed scripts
 */

add_filter( 'wp_default_scripts', 'remove_unwanted_scripts' );

function remove_unwanted_scripts( &$scripts){
    if(!is_admin()){
        $scripts->remove( 'jquery');
        $scripts->remove( 'wp-embed');
    }
}

/*----------------------------------------------------------------------------------*/
