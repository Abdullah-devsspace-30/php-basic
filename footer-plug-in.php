<?php
/*
Plugin Name: My First Plugin
Plugin URI: https://www.example.com/my-first-plugin
Description: This is a simple WordPress plugin to demonstrate plugin structure with activation and deactivation hooks.
Version: 1.0
Author: Your Name
Author URI: https://www.example.com
License: GPL2
*/

// Plugin Activation Hook
function my_first_plugin_activate() {
    // Actions to take when the plugin is activated
    // For example, creating a custom database table or default options
    add_option('my_first_plugin_option', 'Default Value');
    error_log('My First Plugin activated.');
}
register_activation_hook(__FILE__, 'my_first_plugin_activate');

// Plugin Deactivation Hook
function my_first_plugin_deactivate() {
    // Actions to take when the plugin is deactivated
    // For example, removing custom options or cleaning up
    delete_option('my_first_plugin_option');
    error_log('My First Plugin deactivated.');
}
register_deactivation_hook(__FILE__, 'my_first_plugin_deactivate');

// A simple function that adds a message to the footer of every page
function my_first_plugin_footer_message() {
    echo '<p style="text-align: center; color: #0073aa;">This message is added by My First Plugin.</p>';
}

// Hook to add the message to the footer
add_action('wp_footer', 'my_first_plugin_footer_message');

// A simple shortcode to display a message
function my_first_plugin_shortcode() {
    return 'Hello from My First Plugin!';
}

// Register the shortcode [my_first_plugin]
add_shortcode('my_first_plugin', 'my_first_plugin_shortcode');
