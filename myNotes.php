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
?>
