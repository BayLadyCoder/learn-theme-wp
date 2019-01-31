<?php
// When you create a custom post type
// if you don't want to to use the default post template(single.php)
// you need to create a new file (like this one)
// which must have a name like this "single-(type name).php"


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
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p>
      <a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>">
      <i class="fa fa-home" aria-hidden="true"></i> Events Home</a> 
      <span class="metabox__main"><?php the_title(); ?></span>
      </p>
    </div>

   
  <div class="generic-content"><?php the_content(); ?></div>
</div>    
    
<?php } 

get_footer();



?>