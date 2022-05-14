<div class="sides">
  <?php
  $sides = new WP_Query(["pagename" => "sides"]);
  while ($sides->have_posts()):
    $sides->the_post(); ?>
          <h1 class="cr"><?php the_title(); ?></h1>
          <?php the_content(); ?>
      <div class="sides_titles d-flex">

    <?php
    $adds = new WP_Query(["category_name" => "adds"]);
    if ($adds->have_posts()):
      while ($adds->have_posts()):
        $adds->the_post(); ?>
        <div class="side">
              <p class="side_title"><?php the_title(); ?></p>
              <div class="pt side_info"><?php the_content(); ?></div>
            </div>
      <?php
      endwhile;
    endif;
    ?>
     <?php
     $souses = new WP_Query(["category_name" => "souses"]);
     if ($souses->have_posts()):
       while ($souses->have_posts()):
         $souses->the_post(); ?>
        <div class="side">
              <p class="side_title"><?php the_title(); ?></p>
              <div class="pt side_info"><?php the_content(); ?></div>
            </div>
      <?php
       endwhile;
     endif;
     ?>
      </div>

  <?php
  endwhile;
  ?>
</div>
