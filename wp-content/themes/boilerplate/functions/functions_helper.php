<?php

/*----------------------------------------------------------------------------------*/

/**
 * Creates a notice warning in the admin interface
 *
 * @param string $message the displayed message
 */

function oak_notice($message) {
	if(is_admin()) {
		echo '<div class="notice notice-warning is-dismissible"><p>' . $message . '</p></div>';
	}
}


/*----------------------------------------------------------------------------------*/

/**
 * includes an SVG icon
 *
 * @param string $name the icon slug
 */

function get_icon($name) {
	$path = get_template_directory() . '/assets/icons/' . $name . '.svg';
	include $path;
}


/*----------------------------------------------------------------------------------*/

/**
 * Replaces braces with a span that gives the text a new color
 * @param string $text
 * @return string
 */

function oak_highlight($text) {
    $text = str_replace('[[', '<span class="text--highlight">', $text);
    $text = str_replace(']]', '</span>', $text);

    return $text;
}


/*----------------------------------------------------------------------------------*/

/**
 * @param string $name
 * @param  mixed|null  $args
 * @param  string|null  $slug
 */
function get_component($name, $args = null, $slug = null) {
	if(!$slug) { // If there has not been set a specific slug, go with default
		$slug = $name;
    } else {
        $slug = $name . '--' . $slug;
    }

    $args = (object) $args; // Make $args an object
	$component_path = get_template_directory() . '/template-parts/components/' . $name . '/' . $slug . '.php';
	if(file_exists($component_path)) {
		include $component_path;
	}
}


/*----------------------------------------------------------------------------------*/

/**
 * Responsive Image Helper Function
 *
 * @param string $image_id the id of the image (from ACF or similar)
 * @param string $image_size the size of the thumbnail image or custom image size
 * @param string $max_width the max width this image will be shown to build the sizes attribute
 */

function oak_image($image_id, $image_size, $max_width){

	// check the image ID is not blank
	if($image_id != '') {

		// set the default src image size
		$image_src = wp_get_attachment_image_url( $image_id, $image_size );

		// set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

		// generate the markup for the responsive image
		echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';

	}
}


/*----------------------------------------------------------------------------------*/

/**
 * Character limited echo
 *
 * @param string $str the string to limit
 * @param int $length the length of returned string
 */

function limit_echo($str, $length) {
    if(strlen($str)<=$length) {
        return $str;
    } else {
        $y=substr($str,0,$length) . '...';
        return $y;
    }
}


/*----------------------------------------------------------------------------------*/
