<?php
/*
Plugin Name: My Options plugin
Plugin URI: https://github.com/kelvinloney
Description: A plugin that offers customization options for social media links.
Version: 1.0
Author: Kelvin Loney
Author URI: https://www.linkedin.com/in/kelvinloney/
*/


/*************************** 
* global variables 
****************************/

$mo_prefix = 'mo_';
$mo_plugin_name = 'My Options Plugin';

// retrieve the plugin settings from the options table
$mo_options = get_option('mo_settings');

$mo_options_fb = get_option('mo_settings');

$mo_options_ig = get_option('mo_settings');

/*************************** 
* includes 
****************************/

include('includes/scripts.php'); // this controls all JS / CSS
include('includes/data-processing.php'); // this controls all saving of data
include('includes/display-functions.php'); // display content functions
include('includes/admin-page.php'); // the plugins option page HTML and save functions