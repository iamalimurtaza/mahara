<?php get_header(); ?>
<section class="main-slider">
  <div class="swiper-container home-slider">
    <div class="swiper-wrapper">
    <?php 
    if( have_rows('slider') ){
      while( have_rows('slider') ){
        the_row();
        $slide_background = get_sub_field('slide_background');
        $slide_title      = get_sub_field('slide_title');
        $slide_text       = get_sub_field('slide_text');
        $slide_button     = get_sub_field('slide_button');
        ?>
        <div class="swiper-slide" style="background-image: url(<?php echo $slide_background['sizes']['home-slide']; ?>)">
          <div class="slide-content">
            <h1 class="slide-title"><?php echo $slide_title; ?></h1>
            <p class="slide-text"><?php echo $slide_text; ?></p>
            <?php if( $slide_button ) { ?><a target="<?php echo $slide_button['target']; ?>" href="<?php echo $slide_button['url']; ?>" class="slide-btn"><?php echo $slide_button['title']; ?></a><?php } ?>
          </div>
        </div>
        <?php
      }
    }
    ?>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next home-slider-next"></div>
    <div class="swiper-button-prev home-slider-prev"></div>
  </div>
</section>

<!-- Courses -->
<section class="courses">
  <div class="container">
    <h2 class="section-title text-center"><span>Latest Courses</span></h2>
    <div class="courses-grid">
      <div class="d-flex">
        <?php 
        $courses = new wp_query([
          'post_type'       =>  'lp_course',
          'posts_per_page'  =>  3,
          'orderby'         =>  'date',
          'order'           =>  'DESC'
        ]);
        if( $courses->have_posts() ){
          while( $courses->have_posts() ){
            $courses->the_post();
            ?>
            <div class="col-1-3">
              <div class="course">
                <!-- Thumbnail -->
                <div class="course-image">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('home-course'); ?>
                  </a>
                  <div class="course-author">
                    <div class="author-avatar">
                      <?php 
                        $author_id = get_the_author_meta( 'ID' );
                        $author_img = get_avatar( $author_id, 90 );
                        echo $author_img;
                      ?>
                    </div>
                    <p class="author-name">
                      <a href="<?php echo get_author_posts_url( $author_id ) ?>"><?php the_author(); ?></a>
                    </p>
                  </div>
                </div>
                <div class="course-content">
                  <!-- Title -->
                  <h2 class="course-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                  <!-- Meta -->
                  <ul class="course-meta">
                    <li>
                      <span><i class="fa fa-money" aria-hidden="true"></i> Price</span>
                      <span><?php echo $course->get_price_html(); ?></span>
                    </li>
                    <li>
                      <span><i class="fa fa-clock-o" aria-hidden="true"></i> Duration in weeks</span>
                      <span><?php echo $course->get_duration() / 7 / 24 / 60 / 60; ?></span>
                    </li>
                    <li>
                      <span><i class="fa fa-graduation-cap" aria-hidden="true"></i> Students Enrolled</span>
                      <span><?php echo $count = intval($course->count_students()); ?></span>
                    </li>
                  </ul>
                  <div class="course-btn-wrapper">
                    <a href="<?php the_permalink(); ?>" class="course-btn">See Details</a>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }
          wp_reset_postdata();
        }
        ?>
      </div>
    </div>
  </div>
</section>

<!-- Home About -->
<?php 
$about_us_image   = get_field('about_us_image');
$about_us_title   = get_field('about_us_title');
$about_us_text    = get_field('about_us_text');
$about_us_button  = get_field('about_us_button');
?>
<section class="home-about">
  <div class="container">
    <h2 class="section-title text-center"><span>About Us</span></h2>
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
            <?php if( $about_us_button ) { ?><a class="about-info-btn" href="<?php echo $about_us_button['url']; ?>"><?php echo $about_us_button['title']; ?></a><?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call To Action -->
<?php 
$cta_background = get_field('cta_background');
$cta_title      = get_field('cta_title');
$cta_text       = get_field('cta_text');
$cta_button     = get_field('cta_button');
?>
<section class="home-cta" style="background-image: url(<?php echo $cta_background['url']; ?>)">
  <div class="container">
    <div class="cta-content">
      <h2 class="cta-title"><?php echo $cta_title; ?></h2>
      <p class="cta-text"><?php echo $cta_text; ?></p>
      <?php
      if( $cta_button ){ ?> <a href="<?php echo $cta_button['url']; ?>" class="cta-btn"><?php echo $cta_button['title']; ?></a> <?php } ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>