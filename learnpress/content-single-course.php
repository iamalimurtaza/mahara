<?php
/**
 * Template for displaying course content within the loop.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/content-single-course.php
 *
 * @author  ThimPress
 * @package LearnPress/Templates
 * @version 3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

if ( post_password_required() ) {
	echo get_the_password_form();

	return;
}

/**
 * @deprecated
 */
?>
<section class="home-cta course-cta banner" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
  <div class="container">
    <div class="cta-content">
      <h1 class="cta-title"><?php the_title(); ?></h1>
      <p class="cta-text"><?php echo wp_trim_words( get_the_content(), 35 ); ?></p>
    </div>
  </div>
</section>
<section>
  <div class='container'>
    <?php
    do_action( 'learn_press_before_main_content' );
    do_action( 'learn_press_before_single_course' );
    do_action( 'learn_press_before_single_course_summary' );

    /**
     * @since 3.0.0
     */
    do_action( 'learn-press/before-main-content' );

    do_action( 'learn-press/before-single-course' );
    $course_type = get_field('course_type');
    if($course_type){
      ?>
      <p class='course-type'><i class="fa fa-bullseye" aria-hidden="true"></i> Course Type: <strong><?php echo $course_type; ?></strong></p>
      <?php
    }
    ?>
    <div id="learn-press-course" class="course-summary">
      <?php
      /**
       * @since 3.0.0
       *
       * @see learn_press_single_course_summary()
       */
      do_action( 'learn-press/single-course-summary' );
      ?>
    </div>
    <?php

    /**
     * @since 3.0.0
     */
    do_action( 'learn-press/after-main-content' );

    do_action( 'learn-press/after-single-course' );

    /**
     * @deprecated
     */
    do_action( 'learn_press_after_single_course_summary' );
    do_action( 'learn_press_after_single_course' );
    do_action( 'learn_press_after_main_content' );
    ?>
  </div>
</section>