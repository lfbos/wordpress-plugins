<?php
//= All it's for test!
/*
Plugin Name: First Plugin
Plugin URI: www.lfboself.site88.net 
Description: Plugin Description
Author: Luis Boscan
Version: 1.0
Author URI: www.lfboself.site88.net
*/

global $wp_version; // Para obtener la version
if(!version_compare($wp_version, "3.0", ">=")) {
    die("Necesitas una version posterior para este plugin");
}