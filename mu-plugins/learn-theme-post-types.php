<?php

// This is just an example code/file/folder
// In reality, the folder "mu-plugins" must be in the "wp-content" folder 
// in order to work with Wordpress

function learn_theme_post_types(){
    // https://codex.wordpress.org/Function_Reference/register_post_type
    register_post_type('event', array(
        'supports' => array('title', 'editor', 'excerpt'), // manually add support excerpt to event editor
        'rewrite' => array( 'slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar' //https://developer.wordpress.org/resource/dashicons/#carrot
    ));
}

add_action('init', 'learn_theme_post_types');