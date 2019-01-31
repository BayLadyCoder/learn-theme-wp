<!DOCTYPE html>
<html <?php 
    language_attributes(); 
    //Wordpress automatically add the appropriate language to this tag depends on the language in your website 
    ?>>
<head>
    <meta charset="<?php bloginfo('charset') // WP automatically add the appropriate value here with this function ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); //create dynamic class name in tht body tag depends on what page you are on?>>
    
<header class="site-header">
    <div class="container">
      <h1 class="school-logo-text float-left"><a href="<?php echo site_url() ?>"><strong>Fictional</strong> University</a></h1>
      <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
      <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
      <div class="site-header__menu group">
        <nav class="main-navigation">
          <!-- <?php wp_nav_menu(array(
            'theme_location' => 'headerMenuLocation'
          )); ?> -->
          <ul>
            <li 
            <?php 
            // check if the page is About Us page or the page is a child of About Us page
            // if true, then add class "current-menu-item" (WP class) this class will highlight this link when it's active
            if(is_page('about-us') or wp_get_post_parent_id(0) == 15) echo 'class="current-menu-item"' ?>>
            <a href="<?php echo site_url('/about-us') ?>">About Us</a>
            </li>
            <li><a href="#">Programs</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Campuses</a></li>
            <li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
          </ul>
        </nav>
        <div class="site-header__util">
          <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
          <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
      </div>
    </div>
  </header>