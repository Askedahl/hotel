<?php

/*----------------------------------------------------------------------------------*/

/**
 * Block template for activities
 */

// Remove comment to enable
// add_action( 'init', 'oak_block_templates' );

function oak_block_templates() {

    $page_type_object = get_post_type_object( 'games' );
    $page_type_object->template = array(
        array( 'acf/hero--games' ),
        array( 'acf/featured-games' ),
        array( 'acf/paragraph' ),
    );

    // Lock the template?
    // $page_type_object->template_lock = 'all';    
}


/*----------------------------------------------------------------------------------*/

