<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?> 
    <style>
      .hero-container-small {
        background-image: url("<?php echo get_template_directory_uri() . '/assets/pictures/home/desktop/bg-pattern-hero-home.svg' ?>");
      }

      <?php 
      if(class_exists('ACF')) {
      $offer_1_desktop = get_field('offer_1_desktop', 'options');
      $offer_1_tablet = get_field('offer_1_tablet', 'options');
      $offer_1_mobile = get_field('offer_1_mobile', 'options');
      $offer_2_desktop = get_field('offer_2_desktop', 'options');
      $offer_2_tablet = get_field('offer_2_tablet', 'options');
      $offer_2_mobile = get_field('offer_2_mobile', 'options');
      $offer_3_desktop = get_field('offer_3_desktop', 'options');
      $offer_3_tablet = get_field('offer_3_tablet', 'options');
      $offer_3_mobile = get_field('offer_3_mobile', 'options');
      }
      ?>

      <?php 
        if ($offer_1_desktop) {
      ?>
      .offer-box-one {
        background-image: url("<?php echo $offer_1_desktop?>");
      }
      <?php 
        }
        ?>

      <?php 
        if ($offer_2_desktop) {
      ?>
      .offer-box-two {
        background-image: url("<?php echo $offer_2_desktop?>");
      }
      <?php
        }
      ?>
       <?php 
        if ($offer_3_desktop) {
      ?>
      .offer-box-three {
        background-image: url("<?php echo $offer_3_desktop?>");
      }
      <?php 
        }
      ?>

      @media only screen and (max-width: 1024px) {
        <?php 
        if ($offer_1_tablet) {
        ?>
        .offer-box-one {
          background-image: url("<?php echo $offer_1_tablet?>");
        }
        <?php 
        }
        ?>
         <?php 
        if ($offer_2_tablet) {
        ?>
        .offer-box-two {
          background-image: url("<?php echo $offer_2_tablet?>");
        }
        <?php 
        }
        ?>
        ?>
         <?php 
        if ($offer_3_tablet) {
        ?>
        .offer-box-three {
          background-image: url("<?php echo $offer_3_tablet?>");
        }
        <?php 
        }
        ?>
      }
      @media only screen and (max-width: 768px) {
        <?php 
        if ($offer_1_mobile) {
        ?>
        .offer-box-one {
          background-image: url("<?php echo $offer_1_mobile?>");
        }
        <?php 
        }
        ?>
         <?php 
        if ($offer_2_mobile) {
        ?>
        .offer-box-two {
          background-image: url("<?php echo $offer_2_mobile?>");
        }
        <?php 
        }
        ?>
        ?>
         <?php 
        if ($offer_3_mobile) {
        ?>
        .offer-box-three {
          background-image: url("<?php echo $offer_3_mobile?>");
        }
        <?php 
        }
        ?>
      }

      .cta-container {
        background-image: url("<?php echo get_template_directory_uri() ."/assets/pictures/shared/desktop/bg-pattern-call-to-action.svg" ?>");
      }

      .container-about-us {
        background-image: url("<?php echo get_template_directory_uri() .'/assets/pictures/about/desktop/bg-pattern-hero-about-desktop.svg'?>");
      }

      .talent-container {
        background-image: url("<?php echo get_template_directory_uri() . '/assets/pictures/shared/desktop/bg-pattern-two-circles.svg'?>");
      }

      .deal-container {
        background-image: url("<?php echo get_template_directory_uri() . '/assets/pictures/shared/desktop/bg-pattern-two-circles.svg'?>");
      }

      .container-contact{
        background-image: url("<?php echo get_template_directory_uri() . '/assets/pictures/shared/desktop/bg-pattern-two-circles.svg'?>");
      }

      textarea {
        max-height: 102px!important;
      }

      .button-box {
        width: 380px;
      }

      .button-picture-tablet {
          display: none;
        }
  

      @media only screen and (max-width: 1160px){
        .button-picture-desktop {
          display: none;
        }
        .button-picture-tablet {
          display: block;
        }
      }

      .container-heading{
        background-image: url("<?php echo get_template_directory_uri() . '/assets/pictures/web-design/desktop/bg-pattern-intro-web.svg' ?>");
      }

      .project-text-box p {
        color: #fff;
        text-align: center;
        transition: 0.5s ease-in-out;
      }

      @media only screen and (max-width: 1079px) {
        .project-text-box p {
          color: #333136 !important;
        }
      }

      .projects-container {
        justify-content: flex-start;
        align-items: flex-start;
        gap: 30px;
      }

    </style>
  </head>
  <nav class="navbar container mb-50">
    <div class="logo-box">
    <img src="<?php echo get_template_directory_uri() . '/assets/pictures/shared/desktop/logo-dark.png' ?>" alt="" />
    </div>
    <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'primary-menu',
                                'menu_class'     => 'menu'   
                            ));
                        ?>
    <button type="button" id="openMobile" class="mobile-button">
      <img src="<?php echo get_template_directory_uri() . '/assets/pictures/shared/mobile/icon-hamburger.svg' ?>" alt="">
    </button>
    <div class="mobile-nav" id="box-menu-mobile" style="display: none;">
      <div class="offcanva">
        <div class="mobile-logo-box">
          <div class="logo-box">
            <img src="<?php echo get_template_directory_uri() . '/assets/pictures/shared/desktop/logo-dark.png' ?>" alt="" />
          </div>
          <button id="closeMobile"><img src="<?php echo get_template_directory_uri() . '/assets/pictures/shared/mobile/icon-close.svg' ?>" alt=""></button>
        </div>
        <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'primary-menu',
                                'menu_class'     => 'menu-mobile'   
                            ));
                        ?>
    </div>
  </div>
  </nav>