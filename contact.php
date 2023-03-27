<?php 
/*
 * Template name: contact template
 */

 get_header(); 
?>
  <body>
    <main>
      <section id="contact-header">
        <div class="container-big container-big-contact mb-140">
          <div class="container container-contact bg-peach rounded">
            <div class="contact-page-text-box">
              <?php 
              if(class_exists('ACF')){
                $contact_heading = get_field('contact_heading');
                $contact_paragraph = get_field('contact_paragraph');
                $contact_locations = get_field('contact_locations');
              }
              ?>
              <?php 
              if($contact_heading){
              ?>
              <h1 class="text-white mb-30"><?php echo $contact_heading;?></h1>
              <?php
              }
              ?>
              <?php 
              if($contact_paragraph){
              ?>
              <div class="contact-paragraph-box">
                <p class="text-white">
                 <?php echo $contact_paragraph;?>
                </p>
              </div>
              <?php
              }
              ?>
            </div>
            <div class="form">
            <?php echo do_shortcode('[contact-form-7 id="218" title="Formularz 1"]')?>
            </div>
          </div>
        </div>
      </section>
      <section id="location">
        <div class="container-big container-location-big mb-140">
          <div class="container location-container">
            <div class="location-item">
              <?php 
              $contact_location_1 = get_field('contact_location_1');
              ?>
              <div class="location-picture-box mb-50">
                <?php 
                if($contact_location_1['picture']){
                ?>
                <img
                  src="<?php echo $contact_location_1['picture']; ?>"
                  alt=""
                />
                <?php
                }
                ?>
              </div>
              <?php 
                if($contact_location_1['heading']){
                ?>
              <h3 class="text-upper text-dark-gray text-center mb-50">
              <?php echo $contact_location_1['heading']; ?>
              </h3>
              <?php
                }
                ?>
                  <?php 
                if($contact_location_1['button_text']){
                ?>
              <a href="<?php echo $contact_location_1['button_url']; ?>" class="button-dark"><?php echo $contact_location_1['button_text']; ?></a>
              <?php
                }
                ?>
            </div>
            <div class="location-item">
            <?php 
              $contact_location_2 = get_field('contact_location_2');
              ?>
              <div class="location-picture-box mb-50">
                <?php 
                if($contact_location_2['picture']){
                ?>
                <img
                  src="<?php echo $contact_location_2['picture']; ?>"
                  alt=""
                />
                <?php
                }
                ?>
              </div>
              <?php 
                if($contact_location_2['heading']){
                ?>
              <h3 class="text-upper text-dark-gray text-center mb-50">
              <?php echo $contact_location_2['heading']; ?>
              </h3>
              <?php
                }
                ?>
                  <?php 
                if($contact_location_2['button_text']){
                ?>
              <a href="<?php echo $contact_location_2['button_url']; ?>" class="button-dark"><?php echo $contact_location_2['button_text']; ?></a>
              <?php
                }
                ?>
            </div>
            <div class="location-item">
            <?php 
              $contact_location_3 = get_field('contact_location_3');
              ?>
              <div class="location-picture-box mb-50">
                <?php 
                if($contact_location_3['picture']){
                ?>
                <img
                  src="  <?php echo $contact_location_3['picture']; ?>"
                  alt=""
                />
                <?php
                }
                ?>
              </div>
              <?php 
                if($contact_location_3['heading']){
                ?>
              <h3 class="text-upper text-dark-gray text-center mb-50">
              <?php echo $contact_location_3['heading']; ?>
              </h3>
              <?php
                }
                ?>
                  <?php 
                if($contact_location_3['button_text']){
                ?>
              <a href="<?php echo $contact_location_3['button_url']; ?>" class="button-dark"><?php echo $contact_location_3['button_text']; ?></a>
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