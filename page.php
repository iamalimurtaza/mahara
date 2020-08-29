<?php get_header();
if( have_posts() ){
  while( have_posts() ){
    the_post();
    ?>
    <main class="page-content">
      <section class="page-banner">
        <div class="container">
        <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>
      </section>
    </main>
    <?php
  }
}
get_footer(); ?>