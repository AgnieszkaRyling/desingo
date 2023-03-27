<?php 
/*
 * Template name: home template
 */

 get_header(); 
?>
  <body>
    <main>
      <section id="hero">
        <div class="hero-container-big container-big mb-80">
          <div class="container hero-container-small bg-peach rounded"">
            <div class="hero-text-box">
              <?php
              $h1_title = get_field('h1_tag');
             ?>
             <?php 
             if($h1_title) {
              ?>
              <h1 class="text-white mb-50">
              <?php echo esc_attr(get_field('h1_tag')); ?>
              </h1>
              <?php 
             }
             ?>
              <div class="hero-p-box mb-50">
              <?php
              $hero_paragraph = get_field('hero_paragraph');
             ?>
             <?php 
             if($hero_paragraph) {
              ?>
                <p class="text-white">
                <?php echo esc_attr(get_field('hero_paragraph')); ?>
                </p>
            <?php
             }
             ?>
              </div>
              <?php
              $hero_button = get_field('hero_button');
             ?>
             <?php 
             if($hero_button) {
              ?>
              <a href="<?php echo $hero_button['url']?>" class="button-light"><?php echo $hero_button['text']?></a>
              <?php 
             }
             ?>
            </div>
            <?php
              $hero_picture = get_field('hero_picture');
             ?>
             <?php 
             if($hero_picture) {
              ?>
            <div class="hero-picture-box">
              <img
                src="<?php echo esc_attr(get_field('hero_picture'));?>"
                alt=""
              />
            </div>
            <?php 
             }
             ?>
          </div>
        </div>
      </section>
      <section id="offer">
        <div class="cointainer-big mb-80">
          <div class="container offer-container">
          <?php 
              $link_1 = get_field('link_1');
              ?>
              <?php
              if($link_1){
              ?>
            <div class="offer-box-one rounded">
              <a href="<?php echo $link_1['url'];?>">
                <div class="offer-text-one">
                  <h2 class="text-upper text-white mb-20"><?php echo $link_1['text'];?></h2>
                  <p class="offer-text-small text-white">View projects</p>
                </div>
              </a>
            </div>
            <?php
              }
            ?>
            <?php 
              $link_2 = get_field('link_2');
              ?>
              <?php
              if($link_2){
              ?>
            <div class="offer-box-two rounded">
            <a href="<?php echo $link_2['url'];?>">
                <div class="offer-text">
                  <h2 class="offer-upper text-white mb-20"><?php echo $link_2['text'];?></h2>
                  <p class="offer-text-small text-white">View projects</p>
                </div>
              </a>
            </div>
            <?php
              }
            ?>
            <?php 
              $link_3 = get_field('link_3');
              ?>
              <?php
              if($link_3){
              ?>
            <div class="offer-box-three rounded">
            <a href="<?php echo $link_3['url'];?>">
                <div class="offer-text">
                  <h2 class="offer-upper text-white mb-20"><?php echo $link_3['text'];?></h2>
                  <p class="offer-text-small text-white">View projects</p>
                </div>
              </a>
            </div>
            <?php
              }
            ?>
          </div>
        </div>
      </section>
      <section id="about-us">
        <div class="container-big container-about-big">
          <div class="container about-container">
            <?php 
            if(class_exists('ACF')) {
              $characteristics = get_field('characteristic');
            }
            foreach ($characteristics as $characteristic){
            ?>
            <div class="about-box">
              <div class="about-picture-box mb-20">
                <img src="<?php echo $characteristic['picture'];?>" alt="">
              </div>
              <div class="about-text-box">
                <h3 class="text-upper text-dark-gray text-center mb-20">
                <?php echo $characteristic['heading'];?>
                </h3>
                <p class="text-center text-dark-gray"><?php echo $characteristic['paragrapth'];?></p>
              </div>
            </div>
            <?php 
            }
            ?>
          </div>
          <div class="about-background-box">
            <img src="<?php echo get_template_directory_uri() . 'assets/pictures/shared/desktop/bg-pattern-leaf.svg' ?>" class="image-flip" alt="">
          </div>
        </div>
      </section>
    </main>
    <footer>
      <div class="container-big footer-container bg-black">
        <section id="CTA">
          <div class="container-big">
            <div class="container cta-container bg-peach rounded">
              <div class="cta-text-box">
                <?php 
                if(class_exists('ACF')) {
                  $cta_heading = get_field('cta_heading', 'options');
                  $cta_paragraph = get_field('cta_paragraph', 'options');
                  $cta_button = get_field('cta_button', 'options');
                }
                ?>
                <?php 
                if($cta_heading) {
                ?>
                <div class="cta-header-box mb-20">
                  <h2 class="text-white"><?php echo $cta_heading?></h2>
                </div>
                <?php
                }
                ?>
                <?php 
                if($cta_paragraph) {
                ?>
                <p class="text-white"><?php echo $cta_paragraph?></p>
                <?php
                }
                ?>
              </div>
              <?php 
                if($cta_button) {
                ?>
              <a href="<?php echo $cta_button['url'];?>" class="button-light"><?php echo $cta_button['text'];?></a>
              <?php
                }
                ?>
            </div>
          </div>
        </section>
       <?php get_footer();?>