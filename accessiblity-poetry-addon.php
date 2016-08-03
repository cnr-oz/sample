<?php
/*
 * Plugin Name: Accessibility Poetry Addon for VC
 * Description: An accessibility poetry addon for Visual Composer.
 * Version: 0.1
 * Author: Code n' Roll
 * Author URI: http://www.codenroll.co.il/
 * License: GPLv2 or later
 * Text Domain: cnr
*/

function themeslug_enqueue_style()
{
    wp_enqueue_style('style.css', '/wp-content/plugins/accessiblity-poetry-addon/css/style.css', false);
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );

function themeslug_enqueue_script()
{
    wp_enqueue_script('script.js', '/wp-content/plugins/accessiblity-poetry-addon/js/scripts.js', false);
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );