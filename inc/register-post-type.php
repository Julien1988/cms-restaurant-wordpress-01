<?php

// New post type : Restaurant
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

// New post type : Menu

register_post_type(
    'menu',
    array(
        'labels' => array('name' => __('Menus')),
        'public' => true,
        'hierarchical' => true,
        'slug' => 'menu',
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

// New post type : Social

register_post_type(
    'social',
    array(
        'labels' => array('name' => __('Socials')),
        'public' => true,
        'hierarchical' => true,
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

// New post type : Social

register_post_type(
    'footer-info',
    array(
        'labels' => array('name' => __('Footer-infos')),
        'public' => true,
        'hierarchical' => true,
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

// New post type : Horaire

register_post_type(
    'horaire',
    array(
        'labels' => array('name' => __('Horaires')),
        'public' => true,
        'hierarchical' => true,
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
