<?php get_header();
if( have_posts() ){
  while( have_posts() ){
    the_post();
    ?>
    <main class="page-content">
      <?php
        if(is_archive() ){
          $courses_background_image = get_field('courses_background_image', 'option');
          $courses_title            = get_field('courses_title', 'option');
          $courses_text             = get_field('courses_text', 'option');
          ?>
          <section class="home-cta banner" style="background-image: url(<?php echo $courses_background_image['url']; ?>)">
            <div class="container">
              <div class="cta-content">
                <h1 class="cta-title"><?php echo $courses_title; ?></h1>
                <p class="cta-text"><?php echo $courses_text; ?></p>
              </div>
            </div>
          </section>

          <section class="page-content">
            <div class="container">
              <?php the_content(); ?>
            </div>
          </section>
          <?php
        }
        if(is_page()){
          $banner_background_image  = get_field('banner_background_image');
          $title                    = get_field('title');
          $text                     = get_field('text');
          ?>
          <section class="home-cta page-banner banner" style="background-image: url(<?php echo $banner_background_image['url']; ?>)">
            <div class="container">
              <div class="cta-content">
                <h1 class="cta-title"><?php echo $title; ?></h1>
                <p class="cta-text"><?php echo $text; ?></p>
              </div>
            </div>
          </section>

          <section class="page-content">
            <div class="container">
              <?php the_content(); ?>
            </div>
          </section>
          <?php
        }
        if(is_single()){
          the_content();
        }
      ?>
    </main>
    <?php
  }
}
get_footer(); ?>