<?php 
/*
Plugin Name: Michelle Maltbia Portfolio Site Plugin
Description: Adds custom pages to the admin sidebar.
Author: Michelle Maltbia
Author URI: www.michellemaltbia.com
Version: 1.0
 */

/* Exit if accessed directly */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* Links to each file in plugins*/ 
include( plugin_dir_path( __FILE__ ) . '/lmd-callback-portfolio.php');

/* Links to the style and script files */
add_action('admin_enqueue_scripts', 'my_admin_scripts');
 
function my_admin_scripts() {
    if (isset($_GET['page']) && $_GET['page'] == 'site-pages') {
        wp_enqueue_media();
        wp_register_script('my-admin-js', WP_PLUGIN_URL .'/mm-site/js/media_uploads.js', array('jquery','jquery-ui-datepicker'), '20150204', true );
        wp_register_script('main', WP_PLUGIN_URL .'/mm-site/js/main.js', array('jquery'));
        wp_enqueue_style('jquery-style', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/themes/smoothness/jquery-ui.css');
        wp_register_script('my-calendar-js', WP_PLUGIN_URL .'/mm-site/js/calendar.js', array('jquery'));
        wp_register_script('jquery-ui', WP_PLUGIN_URL .'/mm-site/js/jquery-ui.js', array('jquery'));
        wp_enqueue_script('jquery-ui');
        wp_enqueue_script('main');
        wp_enqueue_script('my-admin-js');
        wp_enqueue_script('my-calendar-js');
        wp_enqueue_style('bootstrap-style', plugins_url('css/bootstrap.css', __FILE__ ));
        wp_enqueue_style('admin-style', plugins_url('css/style.css', __FILE__ ));
    }
}

function load_fonts(){
    wp_enqueue_style('open-sans-font', 'https://fonts.googleapis.com/css?family=Open+Sans:700,300', false);
}

add_action('admin_enqueue_scripts', 'load_fonts');


// Registers 'Site Pages' as a custom menu page

function register_my_custom_menu_page(){
	add_menu_page( 'Lauren Michelle Design Site', 'Site Elements', 'administrator', 'site-pages', 'lmd_callback_portfolio', 'dashicons-admin-home', 6 ); 
	add_submenu_page( 'site-pages', 'Portfolio', 'Portfolio', 'administrator', 'site-pages', 'lmd_callback_portfolio');
}

// Add action
add_action( 'admin_menu', 'register_my_custom_menu_page' );



?>