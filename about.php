<?php 
/*
 * Template name: about template
 */

 get_header(); 
?>
  <body>
    <main>
      <section id="about-header">
        <div class="container-big container-big-about-us mb-140">
          <div class="container container-about-us bg-peach rounded">
            <div class="about-us-text-box">
              <?php 
              if(class_exists('ACF')) {
                $about_h1 = get_field('about_h1');
                $about_heading_paragraph = get_field('about_heading_paragraph');
                $about_heading_picture_desktop = get_field('about_heading_picture_desktop');
                $about_heading_pictur_tablet = get_field('about_heading_pictur_tablet');
                $about_heading_picture_mobile = get_field('about_heading_picture_mobile');
              }
              ?>
              <?php
              if($about_h1){
              ?>
              <h1 class="text-white mb-30"><?php echo $about_h1; ?></h1>
              <?php 
              }
              ?>
              <div class="about-us-paragraph-box">
              <?php
              if($about_heading_paragraph){
              ?>
                <p class="text-white">
                  <?php echo $about_heading_paragraph; ?>
                </p>
              <?php 
              }
              ?>
              </div>
            </div>
            <div class="about-us-picture-box">
            <?php
              if($about_heading_paragraph){
              ?>
              <img
                src="<?php echo  $about_heading_picture_desktop;?>"
                alt=""
                class="about-us-header-picture"
              />
              <?php 
              }
              ?>
              <?php
              if($about_heading_paragraph){
              ?>
              <img
                src="<?php echo $about_heading_pictur_tablet;?>"
                alt=""
                class="about-us-header-picture-tablet"
              />
              <?php 
              }
              ?>
              <?php
              if($about_heading_paragraph){
              ?>
              <img
                src="<?php echo $about_heading_picture_mobile;?>"
                alt=""
                class="about-us-header-picture-mobile"
              />
              <?php 
              }
              ?>
            </div>
          </div>
        </div>
      </section>
      <section id="talent">
        <div class="container-big mb-140">
          <div class="container talent-container bg-light rounded">
            <div class="talent-picture-box">
              <?php 
              if(class_exists('ACF')){
                $about_seciont_2_picture_desktop = get_field('about_seciont_2_picture_desktop');
                $about_seciont_2_picture_tablet = get_field('about_seciont_2_picture_tablet');
                $about_seciont_2_picture_mobile = get_field('about_seciont_2_picture_mobile');
                $about_seciont_2_heading = get_field('about_seciont_2_heading');
                $about_seciont_2_picture_par_1 = get_field('about_seciont_2_picture_par-1');
                $about_seciont_2_picture_par_2 = get_field('about_seciont_2_picture_par-2');
              }
              ?>
              <?php 
              if($about_seciont_2_picture_desktop){
              ?>
              <img
                src="<?php echo $about_seciont_2_picture_desktop;?>"
                alt=""
                class="talent-picture"
              />
              <?php
              }
              ?>
                <?php 
              if($about_seciont_2_picture_tablet){
              ?>
              <img
                src="<?php echo $about_seciont_2_picture_tablet;?>"
                alt=""
                class="talent-picture-tablet"
              />
              <?php
              }
              ?>
                 <?php 
              if($about_seciont_2_picture_mobile){
              ?>
              <img
                src="<?php echo $about_seciont_2_picture_mobile;?>"
                alt=""
                class="talent-picture-mobile"
              />
              <?php
              }
              ?>
            </div>
            <div class="talent-text-box">
              <?php 
              if('$about_seciont_2_heading'){
              ?>
              <h2 class="text-peach mb-30"><?php echo $about_seciont_2_heading;?></h2>
              <?php 
              }
              ?>
              <?php 
              if($about_seciont_2_picture_par_1){
              ?>
              <p class="text-dark-gray mb-30">
               <?php echo $about_seciont_2_picture_par_1; ?>
              </p>
              <?php 
              }
              ?>
              <?php 
              if($about_seciont_2_picture_par_2){
              ?>
              <p class="text-dark-gray">
              <?php echo $about_seciont_2_picture_par_2; ?>
              </p>
              <?php 
              }
              ?>
            </div>
          </div>
        </div>
      </section>
      <section id="location">
        <div class="container-big container-location-big mb-140">
          <div class="container location-container">
            <?php 
            if(class_exists('ACF')){
              $locations=get_field('locations');
            }
            if($locations){
              foreach($locations as $location){
            ?>
            <div class="location-item">
              <div class="location-picture-box mb-50">
                <img
                  src="<?php echo $location['image'];?>"
                  alt=""
                />
              </div>
              <h3 class="text-upper text-dark-gray text-center mb-50">
              <?php echo $location['heading'];?>
              </h3>
              <a href="<?php echo $location['button_url'];?>"" class="button-dark"><?php echo $location['button_text'];?>"</a>
            </div>
            <?php
               }
              }
              ?>
          </div>
        </div>
      </section>
      <section id="deal">
        <div class="container-big deal-big-container">
          <div class="container deal-container bg-light rounded">
            <div class="deal-text-box">
            <?php 
              if(class_exists('ACF')){
                $about_seciont_4_picture_desktop = get_field('about_seciont_4_picture_desktop');
                $about_seciont_4_picture_tablet = get_field('about_seciont_4_picture_tablet');
                $about_seciont_4_picture_mobile = get_field('about_seciont_4_picture_mobile');
                $about_seciont_4_heading = get_field('about_seciont_4_heading');
                $about_seciont_4_picture_par_1 = get_field('about_seciont_4_picture_par_1');
                $about_seciont_4_picture_par_2 = get_field('about_seciont_4_picture_par_2');
              }
              ?>
              <?php
               if($about_seciont_4_heading){
              ?>
              <h2 class="text-peach mb-30"><?php echo $about_seciont_4_heading;?></h2>
              <?php
              }
              ?>
              <?php
               if($about_seciont_4_picture_par_1){
              ?>
              <p class="text-dark-gray mb-30">
               <?php echo $about_seciont_4_picture_par_1;?>
              </p>
              <?php
              }
              ?>
              <?php
               if($about_seciont_4_picture_par_2){
              ?>
              <p class="text-dark-gray">
              <?php echo $about_seciont_4_picture_par_2;?>
              </p>
              <?php
              }
              ?>
            </div>
            <div class="deal-picture-box">
              <?php
               if($about_seciont_4_picture_desktop){
              ?>
              <img
                src="<?php echo  $about_seciont_4_picture_desktop;?>"
                alt=""
                class="deal-picture"
              />
              <?php
              }
              ?>
               <?php
               if($about_seciont_4_picture_tablet){
              ?>
              <img
                src="<?php echo  $about_seciont_4_picture_tablet;?>"
                alt=""
                class="deal-picture-tablet"
              />
              <?php
              }
              ?>
              <?php
               if($about_seciont_4_picture_mobile){
              ?>
              <img
                src="<?php echo  $about_seciont_4_picture_mobile;?>"
                alt=""
                class="deal-picture-mobile"
              />
              <?php
              }
              ?>
            </div>
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
        <?php get_footer(); ?>