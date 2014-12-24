<?php
//= All it's for test!
/*
Plugin Name: Copyright Plugin
Plugin URI: www.lfboself.site88.net 
Description: Contains information Copyright
Author: Luis Boscan
Version: 1.0
Author URI: www.lfboself.site88.net
*/

global $wp_version;

if(!version_compare($wp_version,"3.0",">=")) {
    die("Necesitas una version 3.0 o superior para usar el copyright plugin");
}

function add_copyright() {
    $copyright_message = "&copy;" . date('Y') . " Todos los derechos reservados";
    echo $copyright_message;
}