<?php
get_header();

while(have_posts()){
    the_post(); ?>
    <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>sub-title of this page/topic</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">

    <!-- Breadcrumbs Box -->
    <?php 
    // Only show the breadcrumbs box in the child page (not showing on the parent page ex. About Us page)
    // Each post/page has its own ID number(see in the url) --> echo get_the_ID();
    
    // echo wp_get_post_parent_id(get_the_ID()); --> return parent ID, 
    // if no parent it will return 0 (0 is false in programming)
    
    $theParentID = wp_get_post_parent_id(get_the_ID());

    if($theParentID) { ?>

    <div class="metabox metabox--position-up metabox--with-home-link">
      <p>
      <a class="metabox__blog-home-link" href="<?php echo get_permalink($theParentID); ?>">
      <i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParentID); ?></a> 
      <span class="metabox__main"><?php the_title() ?></span>
      </p>
    </div>

    <?php } ?>


    

    <!-- Sidebar menu -->
    <!-- <div class="page-links">
      <h2 class="page-links__title"><a href="#">About Us</a></h2>
      <ul class="min-list">
        <li class="current_page_item"><a href="#">Our History</a></li>
        <li><a href="#">Our Goals</a></li>
      </ul>
    </div> -->

    <div class="generic-content">
        <?php the_content(); ?>
    </div>

  </div>
    
<?php } 
 get_footer(); 

?>