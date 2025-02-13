<?php
function remove_classic_theme_inline_styles() {
    // WordPress tarafından eklenen klasik tema ve blok stillerini kaldır
    wp_dequeue_style('classic-theme-styles'); // Klasik tema stillerini kaldırır
    wp_dequeue_style('wp-block-library'); // WordPress blok kütüphanesi stillerini kaldırır
    wp_dequeue_style('wp-block-library-theme'); // Tema ile gelen blok stillerini kaldırır
    wp_dequeue_style('global-styles'); // WordPress global stillerini kaldırır (WP 5.9 ve sonrası)
    
}
add_action('wp_enqueue_scripts', 'remove_classic_theme_inline_styles', 100);


function remove_unwanted_links() {
    remove_action('wp_head', 'rel_canonical');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('wp_head', 'wp_generator'); // WordPress versiyonunu kaldırır
    remove_action('wp_head', 'wlwmanifest_link'); // Windows Live Writer linkini kaldırır
    remove_action('wp_head', 'rsd_link'); // Really Simple Discovery linkini kaldırır
    remove_action('wp_head', 'rest_output_link_wp_head'); // REST API linkini kaldırır
    remove_action('wp_head', 'classic-theme-styles-inline-css', 1);

}
add_action('init', 'remove_unwanted_links');


?>