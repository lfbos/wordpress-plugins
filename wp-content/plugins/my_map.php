<?php
//= All it's for test!
/*
Plugin Name: Maps with Shortcode
Plugin URI: www.lfboself.site88.net 
Description: Plugin with Google API Maps
Author: Luis Boscan
Version: 1.0
Author URI: www.lfboself.site88.net
*/

function smp_map_it($atts, $content=NULL) {
    
    shortcode_atts(array('tittle' => 'your map','address' => ''), $atts);
    $addr = "Ejido, Mérida";
    $base_map_url = "http://maps.googleapis.com/maps/api/staticmap?zoom=14&size=300x300&sensor=false&center=";
    
    return '
    <h2>'. $atts['title'] . '</h2>
    <img width="300" height="300"
        src="' . $base_map_url . urlencode($atts['address']) . '" />';
}

add_shortcode('map-it','smp_map_it');
//remove_all_shortcodes()