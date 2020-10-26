<?php get_header();
/**
 * Template Name: About Template
*/
if( have_posts() ){
  while( have_posts() ){
    the_post();
    $banner_background_image  = get_field('banner_background_image');
    $title                    = get_field('title');
    $text                     = get_field('text');
    ?>
    <main class="page-content">
      <section class="home-cta page-banner banner" style="background-image: url(<?php echo $banner_background_image['url']; ?>)">
        <div class="container">
          <div class="cta-content">
            <h1 class="cta-title"><?php echo $title; ?></h1>
            <p class="cta-text"><?php echo $text; ?></p>
          </div>
        </div>
      </section>

      <!-- Content 1 -->
      <section class="about-the_content">
        <div class="container">
          <div class="content-itself">
            <?php the_content(); ?>
          </div>
        </div>
      </section>

      <!-- About us Gid -->
      <?php 
      $about_section_title = get_field('about_section_title');
      $about_us_image   = get_field('about_us_image');
      $about_us_title   = get_field('about_us_title');
      $about_us_text    = get_field('about_us_text');
      ?>
      <section class="home-about">
        <div class="container">
          <h2 class="section-title text-center"><span><?php echo $about_section_title; ?></span></h2>
          <div class="about-grid">
            <div class="d-flex">
              <div class="col-1-2">
                <div class="about-image">
                  <img src="<?php echo $about_us_image['url']; ?>" alt="<?php echo $about_us_image['title']; ?>" title="<?php echo $about_us_image['title']; ?>">
                </div>
              </div>
              <div class="col-1-2">
                <div class="about-info">
                  <h3 class="about-info-title"><?php echo $about_us_title; ?></h3>
                  <p class="about-info-text"><?php echo $about_us_text ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Content 2 -->
      <?php 
      $content_title  = get_field('content_title');
      $content_text   = get_field('content_text');
      ?>
      <section class="about-content">
        <div class="container">
          <div class="content-itself">
            <h3><?php echo $content_title; ?></h3>
            <p><?php echo $content_text; ?></p>
          </div>
        </div>
      </section>
    </main>
    <?php
  }
}
get_footer(); ?>