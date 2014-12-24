<?php
//= All it's for test!
/*
Plugin Name: Feed Copyright
Plugin URI: www.lfboself.site88.net 
Description: Add information to your feeds in RSS
Author: Luis Boscan
Version: 1.0
Author URI: www.lfboself.site88.net
*/

function cewp_add_feed_content($content) {
    if (is_feed()) {
        return $content . 'Creado por Luis Boscan ' . date('Y') . 'Todos los derechos reservados';
    }
    
    return $content;
}

add_filter('the_content', 'cewp_add_feed_content');