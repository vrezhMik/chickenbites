<div class="products">
<?php
$post_nuber = 0;

$menu_items = new WP_Query(["category_name" => "menu_item"]);
if ($menu_items->have_posts()):
  while ($menu_items->have_posts()):
    $menu_items->the_post(); ?>
    <div class="product" id="<?php the_title(); ?>">
      <div class="menu_title">
        <h1 class="cr"><?php the_title(); ?></h1>
        <p class="cr">
          <?php the_content(); ?>
        </p>
      </div>
      <?php
      $postName = $menu_items->posts[$post_nuber]->post_name;
      $product = new WP_Query(["category_name" => $postName]);
      if ($product->have_posts()):
        while ($product->have_posts()):
          $product->the_post(); ?>
        <div class="prod">
        <div class="prod_img">
          <?php the_post_thumbnail("svg"); ?>
          </div>
          <div class="prod_info">
            <h1 class="psb"><?php the_title(); ?></h1>
            <p class="pr prod_cont">
            <?php the_content(); ?>
            </p>
   
            <p class="price psb"><?php echo get_post_custom()[
              "Price"
            ][0]; ?> AMD</p>
          </div>
          </div>
    <?php
        endwhile;
      endif;
      ?>
      <br>
      </div>
<?php $post_nuber++;
  endwhile;
endif;
?>
    </div>

    </div> 
