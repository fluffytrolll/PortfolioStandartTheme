<?php

include_once("func/comments-disabled.php");
include_once("func/custom-post-types.php");
include_once("func/custom-logo-setup.php");

// Подключение дополнительных параметров
add_action("after_setup_theme", function () {
  add_theme_support("title-tag");
  add_theme_support("post-thumbnails");
  themename_custom_logo_setup();
});

// Подключение скриптов и стилей
add_action("wp_enqueue_scripts", function () {
  wp_enqueue_style("aw_styles", get_template_directory_uri() . "/assets/css/index.min.css?v=1");
});

?>