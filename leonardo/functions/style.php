<?php
wp_enqueue_style('normalize_css', get_template_directory_uri() . '/assets/css/normalize.css');

wp_enqueue_style('main_css', get_template_directory_uri() . '/assets/css/main.css');

wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js');




// remove wp version number from scripts and styles
function remove_css_js_version($src)
{
    if (strpos($src, '?ver='))
        $src = remove_query_arg('ver', $src);
    return $src;
}
add_filter('style_loader_src', 'remove_css_js_version', 9999);
add_filter('script_loader_src', 'remove_css_js_version', 9999);
