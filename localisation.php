<?php 
/*
 * Template name: locations template
 */

 get_header(); 
?>
  <body>
    <main>
      <div class="div container-big contact-container">
        <div class="container">
          <?php 
          if(class_exists('ACF')){
            $location_1 = get_field('location_1');
          }
          ?>
          <?php 
          if($location_1){
          ?>
          <div class="contact-item mb-80 contact-reverse">
            <div class="contact-text-box rounded">
              <div>
                <?php 
                if($location_1['heading_orange']){
                ?>
                <h2 class="text-peach mb-30"><?php echo $location_1['heading_orange'];?></h2>
                <?php 
                }
                ?>  
                 <?php 
                if($location_1['address_1']){
                ?>
                <p class="text-dark gray text-fat mb-20">
                  <?php echo $location_1['address_1'];?>
                </p>
                <?php 
                }
                ?> 
                 <?php 
                if($location_1['address_2']){
                ?>
                <p class="text-dark-gray mb-10"><?php echo $location_1['address_2'];?></p>
                <?php 
                }
                ?> 
                <?php 
                if($location_1['address_3']){
                ?>
                <p class="text-dark-gray"><?php echo $location_1['address_3'];?></p>
                <?php 
                }
                ?> 
              </div>
              <div>
                <?php 
                if($location_1['contact_1']){
                ?>
                <p class="text-dark gray text-fat mb-20">
                  <?php echo $location_1['contact_1'];?>
                </p>
                <?php 
                }
                ?>
                <?php 
                if($location_1['contact_2']){
                ?>
                <p class="text-dark-gray mb-10"><?php echo $location_1['contact_2'];?></p>
                <?php 
                }
                ?>
                <?php 
                if($location_1['contact_3']){
                ?>
                <p class="text-dark-gray"><?php echo $location_1['contact_3'];?></p>
                <?php 
                }
                ?>
              </div>
            </div>
            <div class="contact-picture-box">
                <?php 
                if($location_1['map']){
                ?>
              <img
                src="<?php echo $location_1['map'];?>"
                alt=""
                class="rounded contact-picture"
              />
              <?php 
                }
                ?>
                <?php 
                if($location_1['map_tablet']){
                ?>
              <img
                src="<?php echo $location_1['map_tablet'];?>"
                alt=""
                class="rounded contact-picture-tablet"
              />
              <?php 
                }
                ?>
            </div>
          </div>
          <?php
          }
          ?>
             <?php 
          if(class_exists('ACF')){
            $location_2 = get_field('location_2');
          }
          ?>
          <?php 
          if($location_2){
          ?>
          <div class="contact-item mb-80">
            <div class="contact-picture-box">
            <?php 
            if($location_2['map']){
            ?>
              <img
                src="<?php echo $location_2['map']; ?>"
                alt=""
                class="rounded contact-picture"
              />
              <?php 
              }
              ?>
              <?php 
              if($location_2['map_tablet']){
              ?>
              <img
              src="<?php echo $location_2['map_tablet']; ?>"
                alt=""
                class="rounded contact-picture-tablet"
              />
              <?php 
              }
              ?>
            </div>
            <div class="contact-text-box rounded">
              <div>
              <?php 
              if($location_2['heading_orange']){
              ?>
                <h2 class="text-peach mb-30"><?php echo $location_2['heading_orange']; ?></h2>
              <?php 
              }
              ?>
              <?php 
              if($location_2['address_1']){
              ?>
                <p class="text-dark gray text-fat mb-20">
                <?php echo $location_2['address_1']; ?>
                </p>
              <?php 
              }
              ?>
              <?php 
              if($location_2['address_2']){
              ?>
                <p class="text-dark-gray mb-10"><?php echo $location_2['address_2']; ?></p>
              <?php 
              }
              ?>
              <?php 
              if($location_2['address_3']){
              ?>
                <p class="text-dark-gray"><?php echo $location_2['address_3']; ?></p>
              <?php 
              }
              ?>
              </div>
              <div>
              <?php 
              if($location_2['contact_1']){
              ?>
                <p class="text-dark gray text-fat mb-20">
                <?php echo $location_2['contact_1']; ?>
                </p>
              <?php 
              }
              ?>
              <?php 
              if($location_2['contact_2']){
              ?>
                <p class="text-dark-gray mb-10"><?php echo $location_2['contact_2']; ?></p>
              <?php 
              }
              ?>
              <?php 
              if($location_2['contact_3']){
              ?>
                <p class="text-dark-gray"><?php echo $location_2['contact_3']; ?></p>
              <?php 
              }
              ?>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
          <?php 
          if(class_exists('ACF')){
            $location_3 = get_field('location_3');
          }
          ?>
          <?php 
          if($location_3){
          ?>
          <div class="contact-item contact-reverse">
            <div class="contact-text-box rounded">
              <div>
                <?php 
                if($location_3['heading_orange']){
                ?>
                <h2 class="text-peach mb-30"><?php echo $location_3['heading_orange']; ?></h2>
                <?php 
                }
                ?>
                <?php 
                if($location_3['address_1']){
                ?>
                <p class="text-dark gray text-fat mb-20">
                <?php echo $location_3['address_1']; ?>
                </p>
                <?php 
                }
                ?>
                <?php 
                if($location_3['address_2']){
                ?>
                <p class="text-dark-gray mb-10"><?php echo $location_3['address_2']; ?></p>
                <?php 
                }
                ?>
                <?php 
                if($location_3['address_3']){
                ?>
                <p class="text-dark-gray"><?php echo $location_3['address_3']; ?></p>
                <?php 
                }
                ?>
              </div>
              <div>
                <?php 
                if($location_3['contact_1']){
                ?>
                <p class="text-dark gray text-fat mb-20">
                <?php echo $location_3['contact_1']; ?>
                </p>
                <?php
                }
                ?>
                <?php 
                if($location_3['contact_2']){
                ?>
                <p class="text-dark-gray mb-10"><?php echo $location_3['contact_2']; ?></p>
                <?php
                }
                ?>
                <?php 
                if($location_3['contact_3']){
                ?>
                <p class="text-dark-gray"><?php echo $location_3['contact_3']; ?></p>
                <?php
                }
                ?>
              </div>
            </div>
            <div class="contact-picture-box">
                <?php 
                if($location_3['map']){
                ?>
              <img
                src="<?php echo $location_3['map']; ?>"
                alt=""
                class="rounded contact-picture"
              />
                <?php
                }
                ?>
                <?php 
                if($location_3['map_tablet']){
                ?>
              <img
              src="<?php echo $location_3['map_tablet']; ?>"
                alt=""
                class="rounded contact-picture-tablet"
              />
              <?php
                }
                ?>
            </div>
          </div>
          <?php 
          }
          ?>
        </div>
      </div>
    </main>
    <footer>
      <div class="container-big footer-container bg-black">
        <section id="CTA">
          <div class="container-big">
            <div class="container cta-container bg-peach rounded">
              <div class="cta-text-box">
                <div class="cta-header-box mb-20">
                  <h2 class="text-white">Let’s talk about your project</h2>
                </div>
                <p class="text-white">
                  Ready to take it to the next level? Contact us today and find
                  out how our expertise can help your business grow.
                </p>
              </div>
              <a href="" class="button-light">Get in touch</a>
            </div>
          </div>
        </section>
        <?php get_footer(); ?>