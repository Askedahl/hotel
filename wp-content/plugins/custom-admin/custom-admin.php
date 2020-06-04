<?php
/*
Plugin Name: Custom Admin
Plugin URI: https://www.oakdigital.dk
Description: Admin Tweaks
Version: 1
Author: Oak Digital
Author URI: https://www.oakdigital.dk
License: GPLv2
*/


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// login stylesheet
function custom_styles() {
     wp_enqueue_style( 'login-styles', plugins_url( 'styles/main.css' , __FILE__ ), false );
}
add_action( 'login_enqueue_scripts', 'custom_styles' );
add_action( 'admin_enqueue_scripts', 'custom_styles' );
add_action( 'wp_enqueue_scripts', 'custom_styles' );


// remove unwanted dashboard widgets for relevant users
function remove_dashboard_widgets(){
    remove_meta_box('dashboard_right_now', 'dashboard', 'normal');   // Right Now
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); // Recent Comments
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');  // Incoming Links
    remove_meta_box('dashboard_plugins', 'dashboard', 'normal');   // Plugins
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');  // Quick Press
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');  // Recent Drafts
    remove_meta_box('dashboard_primary', 'dashboard', 'side');   // WordPress blog
    remove_meta_box('dashboard_secondary', 'dashboard', 'side');   // Other WordPress News
    remove_meta_box('dashboard_activity', 'dashboard', 'normal');
// use 'dashboard-network' as the second parameter to remove widgets from a network dashboard.
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets');




// add new dashboard widgets
function add_dashboard_box() {
    wp_add_dashboard_widget( 'dashboard_kontakt', 'Support', 'kontakt' );
}

function kontakt(){ ?>
	<p>Oak Digital</p>
    <p>E-mail: hello@oakdigital.dk</p>
<?php
}



add_action( 'wp_dashboard_setup', 'add_dashboard_box' );


//change the footer text
function footer_text_change () {
    echo 'Site by <a target="_blank" href="https://www.oakdigital.dk">Oak Digital</a>.';
}
add_filter( 'admin_footer_text', 'footer_text_change' );



//remove wordpress logo in toolbar
function remove_toolbar_crap( $wp_admin_bar ) {
    $wp_admin_bar->remove_menu( 'wp-logo' );
    $wp_admin_bar->remove_menu( 'comments' );
    $wp_admin_bar->remove_menu( 'new-content' );
    $wp_admin_bar->remove_menu( 'my-account' );
}
add_action( 'admin_bar_menu', 'remove_toolbar_crap', 999 );


//add own logo to toolbar
function own_logo( $wp_admin_bar ) {
	$args = array(
		'id'    => 'meta-logo',
		'title' =>  '<img src="'.plugins_url( 'img/logo-wide.png' , __FILE__ ).'">'
    );
	$wp_admin_bar->add_node( $args );
}
add_action( 'admin_bar_menu', 'own_logo', 1 );


add_action( 'admin_bar_menu', 'toolbar_link_to_mypage', 999 );

function toolbar_link_to_mypage( $wp_admin_bar ) {
	$args = array(
		'id'    => 'Logout',
		'title' => 'Logout',
		'href'  =>  wp_logout_url(),
		'parent' => 'meta-logo'
	);
	$wp_admin_bar->add_node( $args );
}

function custom_menu_page_removing() {
    global $hide_pages;

    remove_menu_page('edit.php');
    if( $hide_pages ) remove_menu_page('edit.php?post_type=page');
    remove_menu_page('edit-comments.php');
}
add_action( 'admin_menu', 'custom_menu_page_removing' );



// fjern admin toolbar fra frontend
function hide_admin_bar_from_front_end(){
  if (is_blog_admin()) {
    return true;
  }
  return false;
}
add_filter( 'show_admin_bar', 'hide_admin_bar_from_front_end' );

?>
