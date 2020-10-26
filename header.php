<html lang="<?php language_attributes(); ?>">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class( 'lang-' . pll_current_language() ); ?>>
  <header class="site-header">
    <?php 
    $phone_number   = get_field('phone_number', 'option');
    $email_address  = get_field('email_address', 'option');
    $facebook       = get_field('facebook', 'option');
    $instagram      = get_field('instagram', 'option');
    $twitter        = get_field('twitter', 'option');
    $youtube        = get_field("youtube", 'option');
    $pinterest      = get_field('pinterest', 'option');
    $header_logo    = get_field('header_logo', 'option');
    ?>
    <div class="top-bar">
      <div class="container">
        <div class="d-flex">
          <!-- Top Bar Socials -->
          <div class="col-1-2">
            <div class="top-bar_socials">
              <?php 
              if( $facebook || $instagram || $twitter || $youtube || $pinterest ){
                ?>
                <ul>
                  <?php 
                  if( $facebook ){ ?><li><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li><?php }
                  if( $instagram ){ ?><li><a href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li><?php }
                  if( $twitter ){ ?><li><a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li><?php }
                  if( $youtube ){ ?><li><a href="<?php echo $youtube; ?>" target="_blank"><i class="fa fa-youtube-play"></i></a></li><?php }
                  if( $pinterest ){ ?><li><a href="<?php echo $pinterest; ?>" target="_blank"><i class="fa fa-pinterest-p"></i></a></li><?php }
                  ?>
                </ul>
                <?php
              }
              ?>
            </div>
          </div>
          <!-- Phone and Email -->
          <div class="col-1-2">
            <div class="top-bar_phone-email">
              <ul>
                <li><a href="tel:<?php echo $phone_number; ?>"><i class="fa fa-phone"></i> <?php echo $phone_number; ?></a></li>
                <li><a href="mailto:<?php echo $email_address; ?>"><i class="fa fa-envelope"></i> <?php echo $email_address; ?></a></li>
              </ul>
              <!-- Header language switcher -->
              <div class="language-switcher">
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
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-area">
      <div class="container">
        <div class="d-flex items-center">
          <!-- Logo -->
          <div class="col-20">
            <div class="logo-wrapper">
              <?php if( $header_logo ){ ?><a class="logo" href="<?php echo home_url(); ?>"><img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['title']; ?>"></a><?php } ?>
            </div>
          </div>

          <!-- Primary Menu -->
          <div class="col-80">
            <div class="menu-wrapper">
              <button class="menu-trigger"><i class="fa fa-bars"></i></button>
              <nav class="primary-menu slide">
                <?php 
                wp_nav_menu([
                  'theme_location'      =>  'primary-menu',
                  'fallback_cb'         =>  false,
                  'container'           =>  false,
                  'menu_class'          =>  'primary-menu-list',
                  'depth'               =>  2
                ]);
                ?>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>