    <footer>
      <div class="footer_cont d-flex">
        <div class="foot_section d-flex">
          <div class="foot_logo d-flex">
            <img src="<?php echo get_template_directory_uri(); ?>/img/blueChicken.png" alt="" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/house.png" class="home" alt="" />
          </div>
          <div class="foot_text">
            <a href="tel:+374 93 065 066" class="pr">Will be happy to <span>deliver</span> </a>
          </div>
        </div>
      </div>
      <div class="footer_info d-flex">
      <div class="foot_section right_section">
        <img src="<?php echo get_template_directory_uri(); ?>/img/footer_logo.png" alt="" id="footer_logo">
        <?php
        $fpost = new WP_Query(["postname" => "footer-post"]);
        $fpost->the_post();
        ?>
       <div class="footer_content"> <?php the_content(); ?></div>
        </div>
        <div class="foot_section left_section">
        <nav class="footer_menu">
             <?php wp_nav_menu([
               "theme_location" => "bottom",
               "menu_class" => "",
               "add_a_class" => "pt",
             ]); ?>
          </nav>
          <div class="social">
            <p>Follow us <br>@ChickenBites</p>
          <?php echo do_shortcode("[DISPLAY_ULTIMATE_SOCIAL_ICONS]"); ?>
          </div>
          <div class="foot_langs"><?php echo do_shortcode(
            "[gtranslate]"
          ); ?></div>
        </div>
      </div>
    </footer>
    <div class="moving_row_cont">
      <div class="moving_row">
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group 7.png" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group.png" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group 8.png" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group.png" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group 9.png" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group.png" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group 10.png" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group.png" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group 11.png" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group.png" alt="" />
        
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group 7.png" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group.png" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group 8.png" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group.png" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group 9.png" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group.png" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group 10.png" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group.png" alt="" />
        <img src="<?php echo get_template_directory_uri(); ?>/img/Group 11.png" alt="" />
      </div>
    </div>
  </body>
  

  <?php wp_footer(); ?>
</html>