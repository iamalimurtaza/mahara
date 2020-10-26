<?php get_header();
/**
 * Template Name: Contact Template
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
      <?php 
      if( !empty(get_the_content()) ){
        ?>
        <section class="contact-content">
          <div class="container">
            <div class="content-itself">
              <?php the_content(); ?>
            </div>
          </div>
        </section>
        <?php
      }
      ?>

      <!-- About us Gid -->
      <?php 
      $contact_form_title     = get_field('contact_form_title');
      $contact_info_title     = get_field('contact_info_title');
      $contact_info_text      = get_field('contact_info_text');
      $contact_form_shortcode = get_field('contact_form_shortcode');
      $google_maps            = get_field('google_maps_embedded_code');
      ?>
      <section class="contact-details">
        <div class="container">
          <div class="about-grid">
            <div class="d-flex">
              <div class="col-1-2">
                <h2 class="section-title"><span><?php echo $contact_form_title; ?></span></h2>
                <div class="contact-form">
                  <?php echo do_shortcode($contact_form_shortcode); ?>
                </div>
              </div>
              <div class="col-1-2">
                <h2 class="section-title"><span><?php echo $contact_info_title; ?></span></h2>
                <div class="contact-text">
                  <?php echo $contact_info_text; ?>
                </div>
                <div class="google-maps">
                  <?php echo $google_maps; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php
  }
}
get_footer(); ?>