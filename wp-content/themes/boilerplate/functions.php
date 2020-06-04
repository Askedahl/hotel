<?php
/**
 * oak_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package oak_theme
 */

/*----------------------------------------------------------------------------------*/

/**
 * Require function files
 */

$require = [
    'functions/functions_setup.php',         		// Theme setup
    'functions/functions_dependencies.php',         // CSS and JS dependencies
    'functions/functions_post_types.php',           // Custom post types and functionality
    'functions/functions_helper.php',               // Helper functions
    'functions/functions_acf.php',                  // ACF PRO functions
    'functions/functions_block_templates.php',      // Custom block templates
	'functions/functions_ajax.php',                 // Custom block templates
    'functions/functions_mail.php',                 // Custom mail component functionality
];

foreach ( $require as $file ) {
    if ( ! $filepath = locate_template( $file ) ) {
        trigger_error( sprintf( __( 'Error locating %s for inclusion', 'oak' ), $file ), E_USER_ERROR );
    }
    require_once $filepath;
}
unset( $file, $filepath );


/*----------------------------------------------------------------------------------*/

/*------------------------------------------------
#                !!! NOTE !!!
------------------------------------------------*/
/**
 * Don't create your functions here.
 * Create your functions in one of the above stated files to where the category fits.
 * If your new function does not fit into any of the above categories, feel free to add a new file
 */


/*----------------------------------------------------------------------------------*/
