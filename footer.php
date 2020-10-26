  <footer class="site-footer">
    <?php 
    $footer_logo      = get_field('footer_logo', 'option');
    $footer_text      = get_field('footer_text', 'option');
    $footer_phone     = get_field('footer_phone', 'option');
    $footer_email     = get_field('footer_email', 'option');
    $footer_location  = get_field('footer_location', 'option');
    $footer_credits   = get_field('footer_credits', 'option');
    $newsletter_text  = get_field('newsletter_text', 'option');
    $newsletter       = get_field('footer_newsletter_form_shortcode', 'option');
    $newsletter_text_arabic = get_field('newsletter_text_arabic', 'option');
    $footer_text_arabic     = get_field('footer_text_arabic', 'option');
    $footer_credits_arabic  = get_field('footer_credits_arabic', 'option');
    ?>
    <div class="footer-newsletter">
      <div class="container">
        <div class="footer-newsletter-content">
        <?php 
          if( pll_current_language() == 'ar' ){
            ?>
            <p class='newsletter-text'><?php echo $newsletter_text_arabic; ?></p>
            <?php
          } else if( pll_current_language() == 'en' ){
            ?>
            <p class='newsletter-text'><?php echo $newsletter_text; ?></p>
            <?php
          }
        ?>
          <?php echo do_shortcode($newsletter); ?>
        </div>
      </div>
    </div>
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

            if( pll_current_language() == 'ar' ){
              ?>
              <p><?php echo $footer_text_arabic; ?></p>
              <?php
            } else if( pll_current_language() == 'en' ){
              ?>
              <p><?php echo $footer_text; ?></p>
              <?php
            }
            ?>
          </div>
        </div>
        <div class="col-1-2">
          <div class="d-flex">
            <div class="col-1-2">
            <?php 
              if( pll_current_language() == 'ar' ){
                ?>
                <h4 class="footer-title">روابط سريعة</h4>
                <?php
              } else if( pll_current_language() == 'en' ){
                ?>
                <h4 class="footer-title">Quick Links</h4>
                <?php
              }
            ?>
              
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
              <?php 
                if( pll_current_language() == 'ar' ){
                  ?>
                  <h4 class="footer-title">معلومات الاتصال</h4>
                  <?php
                } else if( pll_current_language() == 'en' ){
                  ?>
                  <h4 class="footer-title">Contact Info</h4>
                  <?php
                }
              ?>
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
      <div class="footer-lang-switcher">
        <?php 
        wp_nav_menu([
          'theme_location'      =>  'language-switch',
          'container'           =>  'false',
          'menu_class'          =>  'language-switcher',
          'fallback_cb'         =>  false,
          'depth'               =>  1
        ])
        ?>
      </div>
      <div class="footer-credits">
      <?php 
        if( pll_current_language() == 'ar' ){
          ?>
          <p><?php echo $footer_credits_arabic; ?></p>
          <?php
        } else if( pll_current_language() == 'en' ){
          ?>
          <p><?php echo $footer_credits; ?></p>
          <?php
        }
      ?>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  </body>
</html>