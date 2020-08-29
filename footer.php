  <footer class="site-footer">
    <?php 
    $footer_logo      = get_field('footer_logo', 'option');
    $footer_text      = get_field('footer_text', 'option');
    $footer_phone     = get_field('footer_phone', 'option');
    $footer_email     = get_field('footer_email', 'option');
    $footer_location  = get_field('footer_location', 'option');
    $footer_credits   = get_field('footer_credits', 'option');
    ?>
    <div class="container">
      <div class="d-flex">
        <div class="col-1-2">
          <div class="footer-text">
            <?php 
            if( $footer_logo ){
              ?>
              <a href="<?php echo home_url(); ?>">
                <img src="<?php echo $footer_logo['url']; ?>" alt="<?php echo $footer_logo['title']; ?>" title="<?php echo $footer_logo['title']; ?>">
              </a>
              <?php
            }
            ?>
            <p><?php echo $footer_text; ?></p>
          </div>
        </div>
        <div class="col-1-2">
          <div class="d-flex">
            <div class="col-1-2">
              <h4 class="footer-title">Quick Links</h4>
              <nav class="footer-menu">
                <?php 
                wp_nav_menu([
                  'theme_location'      =>  'footer-menu',
                  'fallback_cb'         =>  false,
                  'depth'               =>  1,
                  'container'           =>  false,
                  'menu_class'          =>  'footer-class-list'
                ])
                ?>
              </nav>
            </div>
            <div class="col-1-2">
              <div class="footer-contact">
                <h4 class="footer-title">Contact Info</h4>
                <ul>
                  <li><a href="tel:<?php echo $footer_phone; ?>"><i class="fa fa-phone"></i> <?php echo $footer_phone; ?></a></li>
                  <li><a href="mailto:<?php echo $footer_email; ?>"><i class="fa fa-envelope"></i> <?php echo $footer_email; ?></a></li>
                  <li><i class="fa fa-map-marker"></i> <?php echo $footer_location; ?></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-credits">
        <p><?php echo $footer_credits; ?></p>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  </body>
</html>