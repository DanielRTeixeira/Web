<?php
/*
Plugin Name: Evil WP Plugin
Description: Basic WebShell
Version: 1.0
Author: Daniel
Author URI: http://localhost/
Plugin URI: http://localhost/evil-plugin
*/


/**
 * Define some useful constants
 **/
define('EVIL_PLUGIN_VERSION', '1.0');
define('EVIL_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('EVIL_PLUGIN_URL', plugin_dir_url(__FILE__));

/**
 * Load files
 * 
 **/
function evil_plugin_load(){

    require_once(EVIL_PLUGIN_DIR.'includes/admin.php');
    
}

evil_plugin_load();

/**
 * Activation, Deactivation and Uninstall Functions
 * 
 **/
register_activation_hook(__FILE__, 'evil_plugin_activation');
register_deactivation_hook(__FILE__, 'evil_plugin_deactivation');

function evil_plugin_activation() {
    
	//Actions to perform once on plugin activation go here    
    
	
    //Register uninstaller
    register_uninstall_hook(__FILE__, 'evil_plugin_uninstall');
}

function evil_plugin_deactivation() {
    
	//Actions to perform once on plugin deactivation go here
	    
}

function evil_plugin_uninstall(){
    
    //Actions to perform once on plugin uninstall go here
	    
}

?>
