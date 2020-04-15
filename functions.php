<?php

require get_theme_file_path('inc/enqueue-scripts.php');
require get_theme_file_path('inc/register-post-type.php');
require get_theme_file_path('inc/add_menu_classes.php');

register_nav_menus($locations);

register_nav_menus(array(
    'premier' => 'menu principale',
    'deuxieme' => 'menu pied de page'
));

add_action('after_setup_theme', 'setup_theme');
