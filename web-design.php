<?php 
/*
 * Template name: web-design
 */

 get_header(); 
?>
  <body>
    <main>
      <section id="heading">
        <div class="container-big mb-140">
          <div class="container container-heading bg-peach mb-80 rounded">
            <div class="heading-text-box">
              <h1 class="text-white text-center mb-30"><?php the_title(); ?></h1>
                <?php the_content();?>
            </div>
          </div>
        </div>
      </section>
      <section id="projects">
        <div class="projects-background-box mb-120">
          <img
            src="<?php echo get_template_directory_uri() . '/assets/pictures/shared/desktop/bg-pattern-leaf.svg' ?>"
            alt=""
          />
        </div>
        <div class="container-big projects-big-container mb-80">
        <div class="container projects-container">
        <?php
        $args =  array(
          'post_type' => 'web-design',
          'posts_per_page' => 20,
        );
        
        $query = new WP_Query($args);
        while($query->have_posts()) {
          $query->the_post();
         
        ?>
            <div class="project-item mb-30">
                <div class="project-image-box">
                  <img
                    src="<?php echo get_the_post_thumbnail_url(); ?>"
                    alt=""
                    class="project-image"
                  />
                </div>
                <div class="project-text-box">
                  <h3 class="projects-heading text-center mb-20"><?php the_title();?></h3>
                  <p class="projects-text text-center">
                  <?php the_content(); ?>
                  </p>
                </div>
              </div>
            <?php
            }
            wp_reset_postdata();
            ?>
          </div>
        </div>
      </section>
      <section id="links">
      <?php
                if(class_exists('ACF')){
                $link_one = get_field('link_one');
                }
                ?>
            <?php 
            if($link_one){
            ?>
        <div class="container-big">
          <div class="container container-links">
            <div class="link-box rounded">
            <?php 
                if($link_one['button_url']){
                ?>
              <a href="<?php echo $link_one['button_url'];?>">
              <?php
                }
                ?>
                <?php 
                if($link_one['button_picture_desktop']){
                ?>
                <img src="<?php echo $link_one['button_picture_desktop'];?>" alt="" class="button-picture-desktop rounded">
                <?php
                }
                ?>
                <?php 
                if($link_one['button_picture_tablet']){
                ?>
                <img src="<?php echo $link_one['button_picture_tablet'];?>" alt="" class="button-picture-tablet rounded">
                <?php
                }
                ?>
                <div class="link-text">
                <?php 
                if($link_one['heading']){
                ?>
                  <h2 class="offer-upper text-white mb-20"><?php echo $link_one['heading'];?></h2>
                <?php
                }
                ?>
                <?php 
                if($link_one['button_text']){
                ?>
                  <p class="offer-text-small text-white"><?php echo $link_one['button_text'];?></p>
                <?php
                }
              }
                ?>
                </div>
              </a>
            </div>
            <div class="link-box rounded">
            <?php
                if(class_exists('ACF')){
                $link_two = get_field('link_two');
                }
                ?>
                 <?php 
            if($link_two){
            ?>
              <?php 
                if($link_two['button_url']){
                ?>
              <a href="<?php echo $link_two['button_url'];?>">
              <?php
                }
                ?>
                <?php 
                if($link_two['button_picture_desktop']){
                ?>
                <img src="<?php echo $link_two['button_picture_desktop'];?>" alt="" class="button-picture-desktop rounded">
                <?php
                }
                ?>
                <?php 
                if($link_two['button_picture_tablet']){
                ?>
                <img src="<?php echo $link_two['button_picture_tablet'];?>" alt="" class="button-picture-tablet rounded">
                <?php
                }
                ?>
                <div class="link-text">
                <?php 
                if($link_two['heading']){
                ?>
                  <h2 class="offer-upper text-white mb-20"><?php echo $link_two['heading'];?></h2>
                <?php
                }
                ?>
                <?php 
                if($link_two['button_text']){
                ?>
                  <p class="offer-text-small text-white"><?php echo $link_two['button_text'];?></p>
                <?php
                }
                }
                ?>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </main>
    <footer>
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
        <?php get_footer(); ?>