<?php
// Подключение кастомного логотипа
function themename_custom_logo_setup()
{
  $defaults = array(
    'width' => 142,
    'height' => 34,
    'flex-height' => true,
    'flex-width' => true,
    'header-text' => array('site-title', 'site-description'),
    'unlink-homepage-logo' => true,
  );
  add_theme_support('custom-logo', $defaults);
}
?>