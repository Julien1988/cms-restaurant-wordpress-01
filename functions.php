<?php

require get_theme_file_path('inc/enqueue-scripts.php');

register_post_type(
    'restaurant',
    array(
        'labels' => array('name' => __('Restaurants')),
        'public' => true,
        'supports' => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'excerpt',

        ),
        'taxonomies' => array('catégory', 'post_tag')
    )
);
