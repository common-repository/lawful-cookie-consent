<?php
/**
 * Plugin Name: Lawful Cookie Consent
 * Plugin URI:  https://profiles.wordpress.org/walexconcepts/
 * Description: It is great-looking and responsive, and absolutely free!. Lawful cookie consent is the interaction on your website that enables users to decide whether they will allow cookies to collect their personal data. 
 * Version:     2.0
 * Author:      Awodeyi Adewale Emmanuel
 * Author URI:  https://www.walexconcepts.com/
 * License:     GPLv2+
 */
function lawfulcookieconsent_call_after_install(){
define('LAWFUL_COOKIE_CONSENT_PATH', __FILE__ . '/'); 
$installpath = explode('plugins', LAWFUL_COOKIE_CONSENT_PATH);
define('LAWFUL_COOKIE_CONSENT_INSTALLATION_PATH', dirname($installpath[0]) . '/'); 
$path = plugin_dir_path( __FILE__ ) . 'system/wc_lawful_cookie_consent.sql';
$sql = file_get_contents($path);
require_once( LAWFUL_COOKIE_CONSENT_INSTALLATION_PATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );
}
register_activation_hook( __FILE__, 'lawfulcookieconsent_call_after_install' );

function lawfulcookieconsent_call_after_uninstall() {
global $wpdb;
$wpdb->query( 'DROP TABLE IF EXISTS wc_lawful_cookie_consent' );
}
register_uninstall_hook( __FILE__, 'lawfulcookieconsent_call_after_uninstall' );


function home_lawful_cookie_consent() {
 //require dirname( __FILE__ ) . '/include/lawful_cookie_consent_myform.php';
 require plugin_dir_path( __FILE__ ) . 'include/lawful_cookie_consent_myform.php';

}

function home_lawful_cookie_consent_script() {
add_action('wp_head', 'home_lawful_cookie_consent');
wp_enqueue_style( 'cookiestyle', plugins_url( 'css/lawful_cookieconsent_cookiestyle.min.css', __FILE__ ));
wp_enqueue_style( 'formstylesheet', plugins_url( 'css/lawful_cookieconsent_formstylesheet.css', __FILE__ ));
wp_enqueue_script('formvalidation', plugins_url('js/lawful_cookieconsent_formvalidation.js', __FILE__ )); //form valisation here!
wp_enqueue_script('cookieconsent', plugins_url('js/lawful_cookieconsent_cookieconsent.min.js', __FILE__ ));
}
add_action('wp_enqueue_scripts', 'home_lawful_cookie_consent_script');


function lawful_cookie_consent_admin_menu() {
    add_menu_page( 'Lawful Cookie Consent', 'Lawful Cookie Consent', 'null', 'administrator_lawful_cookie_consent');
    add_submenu_page( 'administrator_lawful_cookie_consent', 'Settings', 'Settings', 'manage_options', 'settings_lawful_cookie_consent', 'lawful_cookie_consent_settings' );
	add_submenu_page( 'administrator_lawful_cookie_consent', __( 'Help', 'administrator_lawful_cookie_consent' ), __( 'Help', 'administrator_lawful_cookie_consent' ), 'manage_options', 'help_lawful_cookie_consent', 'lawful_cookie_consent_help');
	wp_enqueue_style( 'formstylesheet', plugins_url( 'admin/css/lawful_cookieconsent_formstylesheet.css', __FILE__ ));

}
function lawful_cookie_consent_settings(){
	global $wpdb;
	require plugin_dir_path( __FILE__ ) . 'system/msg.inc.php';
	require plugin_dir_path( __FILE__ ) . 'admin/lawful_cookie_consent_myform.php';
}
function lawful_cookie_consent_help(){
	require plugin_dir_path( __FILE__ ) . 'admin/lawful_cookie_consent_help.php';
}
add_action('admin_menu', 'lawful_cookie_consent_admin_menu');


