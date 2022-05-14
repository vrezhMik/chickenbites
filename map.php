<?php
$map = new WP_Query(["pagename" => "map"]);
$map->the_post();
?>
<div style="width: 100%; overflow: hidden; height: 394px" class="map">
  <div class="ifram_title">
    <h1 class="cr"><?php the_content(); ?></h1>
  </div>
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.242339361489!2d44.51185821509525!3d40.18141997784137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abdd24b3fb4cb%3A0x6d40b801db836ec4!2sChicken%20Bites%20AM!5e0!3m2!1sru!2s!4v1651139916363!5m2!1sru!2s"
    width="100%"
    frameborder="0"
    style="border: 0"
    >
  </iframe>
</div>