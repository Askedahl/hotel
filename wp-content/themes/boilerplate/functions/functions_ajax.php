<?php
/*----------------------------------------------------------------------------------*/

/**
 * Prepare ajax path
 */

function oak_prepare_ajax(){ ?>
	<script type="text/javascript">
		var ajax_url = '<?php echo admin_url( 'admin-ajax.php' ); ?>';
		var ajax_nonce = '<?php echo wp_create_nonce( 'secure_nonce_name' ); ?>';
	</script>
	<?php
}
add_action ( 'wp_head', 'oak_prepare_ajax' );
add_action ( 'admin_head', 'oak_prepare_ajax' );


/*----------------------------------------------------------------------------------*/

/**
 * Prepare site for AJAX calls
 */

function add_ajax_actions() {
    // add_action( 'wp_ajax_oak_sort', 'oak_sort' );
	// add_action( 'wp_ajax_nopriv_oak_sort', 'oak_sort' );

	// TODO: Including custom made mail system if needed
	add_action( 'wp_ajax_contact_form_mail', 'contact_form_mail' );
    add_action( 'wp_ajax_nopriv_contact_form_mail', 'contact_form_mail' );
}
add_action( 'init', 'add_ajax_actions' );


/*----------------------------------------------------------------------------------*/
