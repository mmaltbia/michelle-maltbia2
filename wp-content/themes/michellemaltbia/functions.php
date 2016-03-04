<?php

// Navigation Menus

register_nav_menus(array(
	'primary' => __('Primary Menu', 'kbcf'),
	'footer' => __('Footer Menu', 'kbcf'),
));

// Register Custom Navigation Walker
require_once('navwalker.php');

// Adds post thumbnail functionality

add_theme_support('post-thumbnails'); 

// Custom wp-admin login screen
 
function gtcdc_login_logo()
{
    echo '<style  type="text/css"> html, body {background-color:#27AAE1;}.login #backtoblog a, .login #nav a {color:#fff;}</style>';
}
add_action('login_head',  'gtcdc_login_logo');
	 
// Admin footer modification and removal of dashboard widgets
 
function clean_dashboard () 
{
    echo '<span id="footer-thankyou">Developed by <a href="http://www.laurenmichelledesign.com" style="color:#D0DE47;" target="_blank">Lauren Michelle Design</a></span>';
    echo '<style type="text/css">.count{color: #D0DE47;}.wrap>h1{color:#fff;}#footer-upgrade{display:none;}#dashboard_right_now{display:none;}#published-posts{display:none;}#dashboard_primary{display:none;}#dashboard_activity{display:none;}.update-nag{display:none;}</style>';

}

add_filter('admin_footer_text', 'clean_dashboard');

function my_init() {
	if (!is_admin()) {
        wp_register_script( 'jquery', get_stylesheet_directory_uri().'/js/jquery.js' );
		wp_enqueue_script('jquery');
        wp_register_script( 'main', get_stylesheet_directory_uri().'/js/main.js' );
        wp_enqueue_script( 'main' );
        $translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
        //after wp_enqueue_script
        wp_localize_script( 'main', 'svg', $translation_array );
	}
}
add_action('init', 'my_init');

// Adds ability to upload .svg file types

add_filter('upload_mimes', 'custom_upload_mimes');

function custom_upload_mimes ( $existing_mimes=array() ) {

	// add the file extension to the array

	$existing_mimes['svg'] = 'mime/type';

        // call the modified list of extensions

	return $existing_mimes;

}

