<nav class="menu_list">
        <ul class="d-flex menu">
          <?php
          $menu_items = new WP_Query(["category_name" => "menu_item"]);
          if ($menu_items->have_posts()):
            while ($menu_items->have_posts()):
              $menu_items->the_post(); ?>
          <div class="col-1 d-flex justify-content-center">
            <li>
              <button href="<?php the_title(); ?>" class="menubtn">	
                <?php the_post_thumbnail(); ?>
              </button>
            </li>
          </div>
          <?php
            endwhile;
          endif;
          ?>
        </ul>
</nav>