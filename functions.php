<?php

function finalproject_files()
{
    wp_enqueue_style('finalproject_main_files', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'finalproject_files');

//Theme support
add_theme_support('custom-logo');

function finalproject_post_types()
{
    register_post_type('programs', array(
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug', 'program'),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'labels' => array(
            'name' => 'Programs',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'all_items' => 'All Programs',
            'singular_name' => 'Programs'
        )
    )
    );

    register_post_type('trainers', array(
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug', 'trainer'),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-groups',
        'labels' => array(
            'name' => 'Trainers',
            'add_new_item' => 'Add New Trainer',
            'edit_item' => 'Edit Trainer',
            'all_items' => 'All Trainers',
            'singular_name' => 'Trainers'
        )
    )
    );

    register_post_type('pricing', array(
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug', 'pricing'),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-money-alt',
        'labels' => array(
            'name' => 'Pricing',
            'add_new_item' => 'Add New Pricing',
            'edit_item' => 'Edit Pricing',
            'all_items' => 'All Pricing',
            'singular_name' => 'Pricing'
        )
    )
    );
}

add_action('init', 'finalproject_post_types');

?>