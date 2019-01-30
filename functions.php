<?php 

// Adding .css and .js files
function learn_theme_files () {
    wp_enqueue_script('main-learn-theme-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('newTheme_main_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learn_theme_files');


// Add title tag in the browser tab
function learn_theme_features() {
    // add dynamic menu bars
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerLocationOne', 'Footer Location One');
    register_nav_menu('footerLocationTwo', 'Footer Location Two');
    
    // add dynamic title in browser tab for each page
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'learn_theme_features');

?>