<?php

function styles()
{
  wp_enqueue_style("others", get_template_directory_uri() . "/css/others.css");

  wp_enqueue_style("style", get_template_directory_uri() . "/css/style.css");
  wp_enqueue_style(
    "classes",
    get_template_directory_uri() . "/css/classes.css"
  );
  wp_enqueue_style("fonts", get_template_directory_uri() . "/css/fonts.css");
  wp_enqueue_style("min", get_template_directory_uri() . "/css/min.css");
  wp_enqueue_style("sizes", get_template_directory_uri() . "/css/sizes.css");
}
function scripts()
{
  wp_enqueue_script(
    "script",
    get_template_directory_uri() . "/scripts/script.js"
  );
}

register_nav_menus([
  "topLeft" => __("Top Left"),
  "topRight" => __("Top Right"),
  "bottom" => __("Bottom"),
]);

function add_additional_class_on_a($classes, $item, $args)
{
  if (isset($args->add_a_class)) {
    $classes["class"] = $args->add_a_class;
  }
  return $classes;
}
add_theme_support("custom-logo");

add_theme_support("post-thumbnails");

add_filter("nav_menu_link_attributes", "add_additional_class_on_a", 1, 3);

add_action("wp_enqueue_scripts", "styles");
add_action("wp_enqueue_scripts", "scripts");

function enable_svg_upload($upload_mimes)
{
  $upload_mimes["svg"] = "image/svg+xml";

  $upload_mimes["svgz"] = "image/svg+xml";

  return $upload_mimes;
}

add_filter("upload_mimes", "enable_svg_upload", 10, 1);
