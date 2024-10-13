<?php


function Theme1_stylesheets()
{
    wp_enqueue_style(
        'custom-styles',
        get_template_directory_uri() . '/src/styles/styles.css',
        array(),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'Theme1_stylesheets');


function Theme1_scripts()
{
    wp_enqueue_script(
        'mobile-nav-js',
        get_template_directory_uri() . '/src/js/navbar.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'Theme1_scripts');

function create_coffee_type_post_type()
{
    register_post_type(
        'coffee_type',
        array(
            'labels'      => array(
                'name'          => __('Coffee Types'),
                'singular_name' => __('Coffee Type'),
            ),
            'public'      => true,
            'has_archive' => false,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'rewrite'     => array('slug' => 'coffee-types'),
            'supports'    => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'hierarchical' => true,
        )
    );
}
add_action('init', 'create_coffee_type_post_type');



function menu_setup()
{
    register_nav_menus(array(
        'desktop-nav' => 'Desktop Navmenu'
    ));
}
add_action('after_setup_theme', 'menu_setup');
