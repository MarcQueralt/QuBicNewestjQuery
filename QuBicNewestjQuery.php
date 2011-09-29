<?php
/*
  Plugin Name: QuBic Newest jQuery 
  Plugin URI: 
  Description: Uses the newest jQuery instead of the one offered by default by Wordpress. Only is used in non admin pages.
  Author: Marc
 */
if(!is_admin()):
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
endif;
?>

