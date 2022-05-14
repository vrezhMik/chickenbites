<?php get_header(); ?>
<main class="page_main">
<style>
    .slider{
        display:none !important;
    }
</style>
    <div class="page_img">
        <img src="<?= get_template_directory_uri() ?>/img/product.png" alt="">
        <h1 class="cr">Title</h1>
    </div>
    <div class="page_cont">
        <div class="cont pr">Get to know us only once and be ready for the tastiest meetups every day. 
Let’s see how it usually works.  

You are walking in Yerevan, feeling hungry, but not giving up that easily. You want to find a place matching your gastro cravings,  appetite, and hunger. You are looking for a place… you know, with an eastern delicate taste, but simple as fast food, made with love as Armenian dishes, and trusty as homemade food. 

And here you are! Entering Chicken Bites to fulfill your chicken fantasies. Juicy and crunchy bites, making you visit us again and again. You take your next order with a clear decision in your head: you are coming tomorrow as well.</div>
    </div>
    <?php if (is_page("contact-us")) {
      get_template_part("form");
      get_template_part("map");
    } ?>
    </main>
    
    <?php get_footer();

?>
