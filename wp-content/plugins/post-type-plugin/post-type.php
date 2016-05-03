<?php

/*
Plugin Name: Post type
Description: Frame for post type plugin
Author: Johanna Skogh
*/

add_action('init', 'custom_cpt');

function custom_cpt() {
    register_post_type('book', array(
        'labels' => array(
            'name' => 'Books',
            'singular_name' => 'Book',
        ),
        'description' => 'Books which we will be discussing on this blog',
        'public' => true,
        'menu_position' => 20,
        'supports' => array('title', 'editor', 'custom-fields')
    ));
}