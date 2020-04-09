<?php
add_action('wp_enqueue_scripts', 'cms_restaurant_enqueue_scripts');

function cms_restaurant_enqueue_scripts()
{
    wp_enqueue_style(
        'cms_restaurant-style',
        get_theme_file_uri('output.css')
    );
    wp_enqueue_script(
        'cms_restaurant-script',
        get_theme_file_uri('app.js'),
        [],
        false,
        true
    );
}
