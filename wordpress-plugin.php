<?php
/*
 * Plugin Name:       DisableRightClick or Inspect Element
 * Description:       Handle the basics with this plugin.
 * Version:           1
 * Author:            Mark Joeneil Salas
 * Domain Path:       /languages
 */

// Your PHP code goes here

// Enqueue the script
function disable_right_click_script() {
    wp_enqueue_script('disable-right-click', plugin_dir_url(__FILE__) . 'disable-right-click.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'disable_right_click_script');