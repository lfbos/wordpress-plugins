<?php
//= All it's for test!
/*
Plugin Name: CC Comment
Plugin URI: www.lfboself.site88.net 
Description: This plugin will send an email
Author: Luis Boscan
Version: 1.0
Author URI: www.lfboself.site88.net
*/

function cc_comment() {
    global $_REQUEST;
    
    // Details
    $to = "luife642@gmail.com";
    $subject = "Nuevo comentario en el blog" . $_REQUEST['subject'];
    $mensaje = "Mensaje de: ".$_REQUEST['name']." por email " . $_REQUEST['email']."\n".$_REQUEST['comments'];
    
    wp_mail($to,$subject,$mensaje);
}

add_action('comment_post','cc_comment');