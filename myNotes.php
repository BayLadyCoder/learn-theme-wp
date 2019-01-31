<?php

// Why sometimes we have to echo/no echo the wordpress functions?

the_title(); // THE... no need to use echo since the function already ECHO automatically
get_the_title(); // GET... it RETURN the value to us, we have to manually ECHO it when we need

the_ID(); // THE... no need to use echo since the function already ECHO automatically
get_the_id(); // GET... it RETURN the value to us, we have to manually ECHO it when we need

// Official Wordpress websites (Wordpress Functions)
// https://codex.wordpress.org
// https://developer.wordpress.org



/* 
    Adding dynamic menu
    in functions.php, add this below code in the function learn_theme_features()
    // *** add dynamic menu bars
    register_nav_menu('headerMenuLocation', 'Header Menu Location');

    Adjusting menu in WP dashboard
    Appearance -> Menus -> Create New Menu -> choose pages -> Menu Setting (choose Display Location)
    *** custom links ***

    in HTML nav tags, add this php code
     wp_nav_menu(array(
            'theme_location' => 'headerMenuLocation'
          ));

    to change the order of the list in the menu
    Appearance -> Menus -> drag the list in Menu Structure to change the order -> Save Menu

*/

/*
    Creating Blog page
    in WP Dash Board
    create new page with title "Home" with no content
    create new page with title "Blog" with no content

    Settings -> Reading -> Front Page Displays 
    -> choose A Static Page 
    -> set Front Page to "Home" page
    -> set Posts Page to "Blog" page

    create a new file's name "front-page.php"
    - Add all code from index.php (homepage code) to front-page.php
    - now index.php is the "Blog" page

 */

/*
    change author name (in the Front End)
    In Wordpress Dash Board
    Users -> Your Profile -> Name 
    -> Nickname - change to new Nickname
    -> Display name publicly as - choose the new Nickname
    -> Update
 */

/*
    get time dynamically using the_time();
    Formatting Date and Time
    https://codex.wordpress.org/Formatting_Date_and_Time
 */

/**
 *  Change archive dynamic sub-title
 * 1. Author
 *    Users -> Your Profile -> About Yourself
 *     -> Biography Info - Add description here
 * 2. Categories
 *     Posts -> Categories 
 *      - Edit Existing Categories - Add Description
 *      - Add New Category - Add Description
 */


/*
    Custom Post Types
    1. create a new folder name "mu-plugins" inside "wp-content" folder 
    ( "mu-plugins" comes from MUST USE PLUGINS) 
    this type will always show in every theme
    *** Wordpress automatically download this code to any theme we use
 */

    /**
     * To fix "Page not found" when add a new post type like 'event'
     * 1. In Wordpress dash board, Settings -> Permalinks
     * 2. choose a common permalink setting -> Save Changes
     * 3. refresh the page, then it should work
     */


    /**
     *  Manually write/use excerpt
     * 1. in Dash Board, Posts -> Edit Post -> Excerpt - write your excerpt for that post
     * 2. add this code in php,
     *          if(has_excerpt()) {
     *                 echo get_the_excerpt();
     *               } else {
     *                 echo wp_trim_words(get_the_content(), 18);
     *               }
     * 
     */
?>
