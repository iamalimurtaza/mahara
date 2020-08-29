<?php
/**
 * Template for displaying course content within the loop.
 *
 * This template can be overridden by copying it to yourtheme/learnpress/content-course.php
 *
 * @author  ThimPress
 * @package LearnPress/Templates
 * @version 3.0.0
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

$user = LP_Global::user();
$course = LP_Global::course();
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