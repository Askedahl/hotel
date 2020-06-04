<?php

/*----------------------------------------------------------------------------------*/

/**
 * Adding mail functionality to the custom contact form component
 */

// validates all post requests
function validateInputs($post_data) {
    $data_array = [];

    foreach($post_data as $key => $data) {

        switch($key) {
            case 'email':
                $email = filter_var($data, FILTER_SANITIZE_EMAIL);

                // validating email
                if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                    $email_val = $email;
                } else {
                    die('Invalid email');
                }

                $data_array = array_push_assoc($data_array, $key, $email_val);
                break;

            case 'sub_duration':
                $sub_duration = filter_var($data, FILTER_SANITIZE_STRING);
                $data_array = array_push_assoc($data_array, $key, $sub_duration);
                break;

            default:
                die('Invalid data format');
        }
    }

    return $data_array;
}

function contact_form_mail() {
	// $data_validated = validateInputs($_POST);
	$data_validated = $_POST;

	die(json_encode($data_validated));
}
