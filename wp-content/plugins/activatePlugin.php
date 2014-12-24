<?php
//= All it's for test!
/*
Plugin Name: Activation Plugin
Plugin URI: www.lfboself.site88.net 
Description: This plugin will do something when be activated
Author: Luis Boscan
Version: 1.0
Author URI: www.lfboself.site88.net
*/

// See the archive "php_errors.log"
function my_plugin_activate() {
    error_log("Has activado mi plugin");
}

register_activation_hook(__FILE__,'my_plugin_activate');

function my_plugin_deactivate() {
    error_log("Has desactivado mi plugin");
}

register_deactivation_hook(__FILE__,'my_plugin_deactivate');