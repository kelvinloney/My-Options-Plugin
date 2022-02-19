<?php

/*************************** 
* script control 
****************************/

function mo_load_scripts() {
    if (is_single()) {
        wp_enqueue_style('mo-styles', plugin_dir_url( __FILE__ ) . 'css/plugin_styles.css');
    }
}
add_action('wp_enqueue_scripts', 'mo_load_scripts');