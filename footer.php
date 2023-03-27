<div class="container footer-upper-container mb-20">
          <div class="footer-logo-box">
            <img src="<?php echo get_template_directory_uri() .'/assets/pictures/shared/desktop/logo-light.png' ?>" alt="">
          </div>
          <div class="footer-menu-box">
            <ul class="footer-menu">
            <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'primary-menu',
                                'menu_class'     => 'menu'   
                            ));
                        ?>
            </ul>
          </div>
        </div>
        <div class="container footer-bottom-container">
          <div class="address-box">
            <?php 
            if(class_exists('ACF')){
             $address = get_field('address', 'options'); 
             $contact = get_field('contact', 'options'); 
            }
            ?>
            <?php
            if($address['one']){
            ?>
            <p class="text-white text-fat"><?php echo $address['one']; ?></p>
            <?php
            }
            ?>
            <?php
            if($address['two']){
            ?>
            <p class="text-white"><?php echo $address['two']; ?></p>
            <?php
            }
            ?>
            <?php
            if($address['three']){
            ?>
            <p class="text-white"><?php echo $address['three']; ?></p>
            <?php
            }
            ?>
          </div>
          <div class="contact-box">
          <?php
            if($contact['one']){
            ?>
            <p class="text-white text-fat"><?php echo $contact['one']; ?></p>
            <?php
            }
            ?>
            <?php
            if($contact['two']){
            ?>
            <p class="text-white"><?php echo $contact['two']; ?></p>
            <?php
            }
            ?>
            <?php
            if($contact['three']){
            ?>
            <p class="text-white"><?php echo $contact['three']; ?></p>
            <?php
            }
            ?>
          </div>
          <div class="media-box">
            <?php 
            if(class_exists('ACF')){
              $socials = get_field('socials', 'options');
            }
            foreach($socials as $social){
              ?>
            <a href="<?php echo $social['link'];?>"><i class="fa <?php echo $social['icon'];?> fa-2x text-light-peach"></i></a>
              <?php 
            }
                ?>
          </div>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
