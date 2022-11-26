<?php

// Variables

// Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/front/head.php'));

// Hooks
add_action('wp_enqueue_scripts', 'u_enqueue');
add_action('wp_head', 'u_head', 5);