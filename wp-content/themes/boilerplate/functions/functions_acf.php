<?php

/**
 * TODO: add php docs to ALL functions
 */

if (class_exists('ACF')) {


    /*----------------------------------------------------------------------------------*/

    /**
     * Adjust ACF JSON save / load path
     */

    function my_acf_json_save_point( $path ) {
        $path = get_stylesheet_directory() . '/assets/acf-json';
        return $path;
    }
    add_filter('acf/settings/save_json', 'my_acf_json_save_point');

    function my_acf_json_load_point( $paths ) {
        unset($paths[0]);
        $paths[] = get_stylesheet_directory() . '/assets/acf-json';
        return $paths;
    }
    add_filter('acf/settings/load_json', 'my_acf_json_load_point');


    /*----------------------------------------------------------------------------------*/

    /**
     * Implement a global options page
     */

    $args = array(
        'page_title'      => 'Options',
        'capability'      => 'edit_posts',
        'position'        => false,
        'icon_url'        => false,
        'redirect'        => true,
        'post_id'         => 'options',
        'autoload'        => false,
        'update_button'   => __('Update', 'acf'),
        'updated_message' => __("Options Updated", 'acf'),
    );
    acf_add_options_page( $args );


    /*----------------------------------------------------------------------------------*/

    /**
     * Create block callback to render blocks in frontend
     */

    function custom_acf_block_render_callback( $block ) {

        $slug = str_replace('acf/', '', $block['name']);

        if( file_exists( get_theme_file_path("/template-parts/blocks/{$slug}/{$slug}.php") ) ) {
            include( get_theme_file_path("/template-parts/blocks/{$slug}/{$slug}.php") );
        }

    }


    /*----------------------------------------------------------------------------------*/

    /**
     * Disable Gutenberg Blocks and only allow ACF blocks
     */

    add_filter( 'allowed_block_types', 'allow_acf_blocks' );

    function allow_acf_blocks( $allowed_block_types ) {

        /* Block hook setup - Step 1
         * To hook up your new block, insert a new line into the return array.
         * The string added should be 'acf/yourblockname'
         * The block name is also the name of the block folder you created.
         */

        return array(
			'acf/headline',
			'acf/paragraph',
            'acf/text-image-column',
            'acf/hero',
            'acf/hero-vaerelser',
            'acf/hero-aktiviteter',
            'acf/hero-contact',
            'acf/hero-om',
            'acf/hero-restaurant',
            'acf/hero-firma',
            'acf/events',
            'acf/nyhedsbrev',
            'acf/contact',
            'acf/booking',
            'acf/titel',
            'acf/aktiviteter',
            'acf/info',
            'acf/vaerelser',
            'acf/historie',
            'acf/image-text',
            'acf/text-image',
            'acf/maps',
            'acf/banner',

			// TODO: Include one or the other for project
			// 'acf/contact-form--flexible',
            'acf/contact-form--limited',

        );

    }


    /*----------------------------------------------------------------------------------*/

    /**
     * Register custom blocks
     */

    add_action('acf/init', 'my_acf_init');


    function my_acf_init() {
        // check function exists
        if( function_exists('acf_register_block') ) {

            /* Block hook setup - Step 2
             * Now it is time to register your new block.
             * Duplicate one of the already existing arrays in $custom_blocks
             * Fill out the details according to your new block.
             *
             * 'name' should equal the name you gave in step 1 aswell as the folder name.
             *
             * For more detailed information about the fields to fill, read the comments in the first array.
             */

            $custom_blocks = [

                array(
                    'name'            => 'hero', // Block name, = folder name
                    'title'           => __('Hero'), // The title of the block in the editor and ACF
                    'description'     => __('Hero block'), // Description of block
                    'render_callback' => 'custom_acf_block_render_callback', // Global callback, Don't change
                    'category'        => 'common', // Block category. (common, formatting, layout, widgets, embed)
                    'icon'            => 'welcome-view-site', // Icon for block - Standard icons can be found at https://developer.wordpress.org/resource/dashicons/#editor-video)
                    'keywords'        => array( 'hero' ), // Keywords, if blocks is searched for
                    'supports'        => array( // What functionality the block supports - Read more at https://developer.wordpress.org/block-editor/developers/block-api/block-registration/
                        'align'    => false, // We don't work with align, always false
                        'multiple' => false // If the block is only supposed to be used once per page, set multiple to false
                    ),
                ),
                array(
                    'name'            => 'hero-vaerelser', // Block name, = folder name
                    'title'           => __('Hero-vaerelser'), // The title of the block in the editor and ACF
                    'description'     => __('Hero-vaerelser block'), // Description of block
                    'render_callback' => 'custom_acf_block_render_callback', // Global callback, Don't change
                    'category'        => 'common', // Block category. (common, formatting, layout, widgets, embed)
                    'icon'            => 'welcome-view-site', // Icon for block - Standard icons can be found at https://developer.wordpress.org/resource/dashicons/#editor-video)
                    'keywords'        => array( 'hero-vaerelser' ), // Keywords, if blocks is searched for
                    'supports'        => array( // What functionality the block supports - Read more at https://developer.wordpress.org/block-editor/developers/block-api/block-registration/
                        'align'    => false, // We don't work with align, always false
                        'multiple' => false // If the block is only supposed to be used once per page, set multiple to false
                    ),
                ),
                array(
                    'name'            => 'hero-aktiviteter', // Block name, = folder name
                    'title'           => __('Hero-aktiviteter'), // The title of the block in the editor and ACF
                    'description'     => __('Hero-aktiviteter block'), // Description of block
                    'render_callback' => 'custom_acf_block_render_callback', // Global callback, Don't change
                    'category'        => 'common', // Block category. (common, formatting, layout, widgets, embed)
                    'icon'            => 'welcome-view-site', // Icon for block - Standard icons can be found at https://developer.wordpress.org/resource/dashicons/#editor-video)
                    'keywords'        => array( 'hero-aktiviteter' ), // Keywords, if blocks is searched for
                    'supports'        => array( // What functionality the block supports - Read more at https://developer.wordpress.org/block-editor/developers/block-api/block-registration/
                        'align'    => false, // We don't work with align, always false
                        'multiple' => false // If the block is only supposed to be used once per page, set multiple to false
                    ),
                ),
                array(
                    'name'            => 'hero-contact', // Block name, = folder name
                    'title'           => __('Hero-contact'), // The title of the block in the editor and ACF
                    'description'     => __('Hero-contact block'), // Description of block
                    'render_callback' => 'custom_acf_block_render_callback', // Global callback, Don't change
                    'category'        => 'common', // Block category. (common, formatting, layout, widgets, embed)
                    'icon'            => 'welcome-view-site', // Icon for block - Standard icons can be found at https://developer.wordpress.org/resource/dashicons/#editor-video)
                    'keywords'        => array( 'hero-contact' ), // Keywords, if blocks is searched for
                    'supports'        => array( // What functionality the block supports - Read more at https://developer.wordpress.org/block-editor/developers/block-api/block-registration/
                        'align'    => false, // We don't work with align, always false
                        'multiple' => false // If the block is only supposed to be used once per page, set multiple to false
                    ),
                ),
                array(
                    'name'            => 'hero-om', // Block name, = folder name
                    'title'           => __('Hero-om'), // The title of the block in the editor and ACF
                    'description'     => __('Hero-om block'), // Description of block
                    'render_callback' => 'custom_acf_block_render_callback', // Global callback, Don't change
                    'category'        => 'common', // Block category. (common, formatting, layout, widgets, embed)
                    'icon'            => 'welcome-view-site', // Icon for block - Standard icons can be found at https://developer.wordpress.org/resource/dashicons/#editor-video)
                    'keywords'        => array( 'hero-om' ), // Keywords, if blocks is searched for
                    'supports'        => array( // What functionality the block supports - Read more at https://developer.wordpress.org/block-editor/developers/block-api/block-registration/
                        'align'    => false, // We don't work with align, always false
                        'multiple' => false // If the block is only supposed to be used once per page, set multiple to false
                    ),
                ),
                array(
                    'name'            => 'hero-restaurant', // Block name, = folder name
                    'title'           => __('Hero-restaurant'), // The title of the block in the editor and ACF
                    'description'     => __('Hero-restaurant block'), // Description of block
                    'render_callback' => 'custom_acf_block_render_callback', // Global callback, Don't change
                    'category'        => 'common', // Block category. (common, formatting, layout, widgets, embed)
                    'icon'            => 'welcome-view-site', // Icon for block - Standard icons can be found at https://developer.wordpress.org/resource/dashicons/#editor-video)
                    'keywords'        => array( 'hero-restaurant' ), // Keywords, if blocks is searched for
                    'supports'        => array( // What functionality the block supports - Read more at https://developer.wordpress.org/block-editor/developers/block-api/block-registration/
                        'align'    => false, // We don't work with align, always false
                        'multiple' => false // If the block is only supposed to be used once per page, set multiple to false
                    ),
                ),
                array(
                    'name'            => 'hero-firma', // Block name, = folder name
                    'title'           => __('Hero-firma'), // The title of the block in the editor and ACF
                    'description'     => __('Hero-firma block'), // Description of block
                    'render_callback' => 'custom_acf_block_render_callback', // Global callback, Don't change
                    'category'        => 'common', // Block category. (common, formatting, layout, widgets, embed)
                    'icon'            => 'welcome-view-site', // Icon for block - Standard icons can be found at https://developer.wordpress.org/resource/dashicons/#editor-video)
                    'keywords'        => array( 'hero-firma' ), // Keywords, if blocks is searched for
                    'supports'        => array( // What functionality the block supports - Read more at https://developer.wordpress.org/block-editor/developers/block-api/block-registration/
                        'align'    => false, // We don't work with align, always false
                        'multiple' => false // If the block is only supposed to be used once per page, set multiple to false
                    ),
                ),
                array(
                    'name'            => 'headline',
                    'title'           => __('Headline'),
                    'description'     => __('Headline (H1, H2, H3)'),
                    'render_callback' => 'custom_acf_block_render_callback',
                    'category'        => 'formatting',
                    'icon'            => 'welcome-view-site',
                    'keywords'        => array( 'headline, heading' ),
                    'supports'        => array(
                        'align'    => false
                    ),
                ),
                array(
                    'name'            => 'paragraph',
                    'title'           => __('Paragraph'),
                    'description'     => __('Paragraph block for text content'),
                    'render_callback' => 'custom_acf_block_render_callback',
                    'category'        => 'formatting',
                    'icon'            => 'welcome-view-site',
                    'keywords'        => array( 'paragraph, content, text' ),
                    'supports'        => array(
                        'align'    => false,
                    ),
				),
				array(
                    'name'            => 'text-image-column',
                    'title'           => __('Text & image column'),
                    'description'     => __('Text & image block for content width column style text and image'),
                    'render_callback' => 'custom_acf_block_render_callback',
                    'category'        => 'formatting',
                    'icon'            => 'align-left',
                    'keywords'        => array( 'image, content, text' ),
                    'supports'        => array(
                        'align'    => false,
                    ),
				),
				array(
                    'name'            => 'contact-form--flexible',
                    'title'           => __('Contact Form Flexible'),
                    'description'     => __('Custom made flexible Contact Form'),
                    'render_callback' => 'custom_acf_block_render_callback',
                    'category'        => 'formatting',
                    'icon'            => 'email',
                    'keywords'        => array( 'mail, contact, form, flexible' ),
                    'supports'        => array(
                        'align'    => false,
                    ),
				),
				array(
                    'name'            => 'contact-form--limited',
                    'title'           => __('Contact Form Limited'),
                    'description'     => __('Custom made limited Contact Form'),
                    'render_callback' => 'custom_acf_block_render_callback',
                    'category'        => 'formatting',
                    'icon'            => 'email',
                    'keywords'        => array( 'mail, contact, form, limited'),
                    'supports'        => array(
                        'align'    => false,
                    ),
                ),
                array(
                    'name'            => 'events',
                    'title'           => __('Events'),
                    'description'     => __('Events block'),
                    'render_callback' => 'custom_acf_block_render_callback',
                    'category'        => 'common',
                    'icon'            => 'email',
                    'keywords'        => array( 'events' ),
                    'supports'        => array(
                        'align'    => false,
                    ),
                ),
                array(
                    'name'            => 'nyhedsbrev',
                    'title'           => __('Nyhedsbrev'),
                    'description'     => __('Nyhedsbrev block'),
                    'render_callback' => 'custom_acf_block_render_callback',
                    'category'        => 'common',
                    'icon'            => 'email',
                    'keywords'        => array( 'nyhedsbrev' ),
                    'supports'        => array(
                        'align'    => false,
                    ),
                ),
                array(
                    'name'            => 'contact',
                    'title'           => __('Contact'),
                    'description'     => __('Contact block'),
                    'render_callback' => 'custom_acf_block_render_callback',
                    'category'        => 'common',
                    'icon'            => 'email',
                    'keywords'        => array( 'contact' ),
                    'supports'        => array(
                        'align'    => false,
                    ),
                ),
                array(
                    'name'            => 'booking',
                    'title'           => __('Booking'),
                    'description'     => __('Booking block'),
                    'render_callback' => 'custom_acf_block_render_callback',
                    'category'        => 'common',
                    'icon'            => 'email',
                    'keywords'        => array( 'booking' ),
                    'supports'        => array(
                        'align'    => false,
                    ),
                ),
                array(
                    'name'            => 'titel',
                    'title'           => __('Titel'),
                    'description'     => __('Titel block'),
                    'render_callback' => 'custom_acf_block_render_callback',
                    'category'        => 'common',
                    'icon'            => 'email',
                    'keywords'        => array( 'titel' ),
                    'supports'        => array(
                        'align'    => false,
                    ),
                ),
                array(
                    'name'            => 'aktiviteter',
                    'title'           => __('Aktiviteter'),
                    'description'     => __('Aktiviteter block'),
                    'render_callback' => 'custom_acf_block_render_callback',
                    'category'        => 'common',
                    'icon'            => 'email',
                    'keywords'        => array( 'aktiviteter' ),
                    'supports'        => array(
                        'align'    => false,
                    ),
                ),
                array(
                    'name'            => 'info',
                    'title'           => __('Info'),
                    'description'     => __('Info block'),
                    'render_callback' => 'custom_acf_block_render_callback',
                    'category'        => 'common',
                    'icon'            => 'email',
                    'keywords'        => array( 'info' ),
                    'supports'        => array(
                        'align'    => false,
                    ),
                ),
                array(
                    'name'            => 'vaerelser',
                    'title'           => __('Vaerelser'),
                    'description'     => __('Vaerelser block'),
                    'render_callback' => 'custom_acf_block_render_callback',
                    'category'        => 'common',
                    'icon'            => 'email',
                    'keywords'        => array( 'vaerelser' ),
                    'supports'        => array(
                        'align'    => false,
                    ),
                ),
                array(
                    'name'            => 'historie',
                    'title'           => __('Historie'),
                    'description'     => __('Historie block'),
                    'render_callback' => 'custom_acf_block_render_callback',
                    'category'        => 'common',
                    'icon'            => 'email',
                    'keywords'        => array( 'historie' ),
                    'supports'        => array(
                        'align'    => false,
                    ),
                ),
                array(
                    'name'            => 'image-text',
                    'title'           => __('Image-text'),
                    'description'     => __('Image-text block'),
                    'render_callback' => 'custom_acf_block_render_callback',
                    'category'        => 'common',
                    'icon'            => 'email',
                    'keywords'        => array( 'image-text' ),
                    'supports'        => array(
                        'align'    => false,
                    ),
                ),
                array(
                    'name'            => 'text-image',
                    'title'           => __('Text-image'),
                    'description'     => __('Text-image block'),
                    'render_callback' => 'custom_acf_block_render_callback',
                    'category'        => 'common',
                    'icon'            => 'email',
                    'keywords'        => array( 'text-image' ),
                    'supports'        => array(
                        'align'    => false,
                    ),
                ),
                array(
                    'name'            => 'maps',
                    'title'           => __('Maps'),
                    'description'     => __('Maps block'),
                    'render_callback' => 'custom_acf_block_render_callback',
                    'category'        => 'common',
                    'icon'            => 'email',
                    'keywords'        => array( 'maps' ),
                    'supports'        => array(
                        'align'    => false,
                    ),
                ),
                array(
                    'name'            => 'banner',
                    'title'           => __('Banner'),
                    'description'     => __('Banner block'),
                    'render_callback' => 'custom_acf_block_render_callback',
                    'category'        => 'common',
                    'icon'            => 'email',
                    'keywords'        => array( 'banner' ),
                    'supports'        => array(
                        'align'    => false,
                    ),
                ),
            ];

            foreach($custom_blocks as $block) {
                acf_register_block($block);
            }
        }
    }

    /*----------------------------------------------------------------------------------*/


} else {
	oak_notice('This theme depends on ACF Pro (min. version: 5.8.1) to be installed<br>Get it at <a href="https://www.advancedcustomfields.com/" target="_blank">https://www.advancedcustomfields.com/</a>');
}
