<!DOCTYPE >
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo("name"); ?></title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/89b4b289f7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php wp_head(); ?>

  </head>
  <body>
 
    <header class="d-flex align-items-center">
      <div class="burger_menu col-4 d-block d-sm-none">
      <button class="hamburger">
      <i class="fa-solid fa-bars"></i>
      </button>  
      <button class="cross"><i class="fa-solid fa-x"></i></button>
      <div class="menu">
      <?php wp_nav_menu([
        "theme_location" => "bottom",
        "menu_class" => "",
        "add_a_class" => "pt",
      ]); ?>
      </div>
      </div>
      <div class="offset-lg-2 offset-md-2 col-lg-2 col-md-2 d-none d-sm-block text-align-right">
        <?php wp_nav_menu([
          "theme_location" => "topLeft",
          "menu_class" => "",
          "add_a_class" => "pt",
        ]); ?>
        
      </div>
      <div class="col-4 d-flex justify-content-center">
        <div class="logo">
         
         <?php
         $custom_logo_id = get_theme_mod("custom_logo");
         $image = wp_get_attachment_image_src($custom_logo_id, "full");
         ?>
        <a href="<?php echo home_url(); ?>"><img src="<?php echo $image[0]; ?>" alt=""></a>

        </div>
      </div>
      <div class="col-2 d-none d-sm-block">
        <nav>
          <ul>
            <li> <?php wp_nav_menu([
              "theme_location" => "topRight",
              "menu_class" => "",
              "add_a_class" => "pt",
            ]); ?></li>
          </ul>
        </nav>
      </div>
      <div class="col col-lg-2 col-md-2 col-xl-2 col-sm-4 d-flex langs">
        <?php echo do_shortcode("[gtranslate]"); ?>

      </div>
    </header>
    <div class="slider">
      <?php echo do_shortcode('[smartslider3 slider="3"]'); ?> 
    </div>