<?php
// Функция для регистрации кастомного типа записей "work"
function register_work_post_type()
{
  $labels = array(
    'name' => 'Работы',
    'singular_name' => 'Работа',
    'menu_name' => 'Работы',
    'add_new' => 'Добавить новую',
    'add_new_item' => 'Добавить новую работу',
    'edit' => 'Редактировать',
    'edit_item' => 'Редактировать работу',
    'new_item' => 'Новая работа',
    'view' => 'Просмотреть',
    'view_item' => 'Просмотреть работу',
    'search_items' => 'Найти работы',
    'not_found' => 'Работ не найдено',
    'not_found_in_trash' => 'Работ не найдено в корзине',
    'parent' => 'Родительская работа'
  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'publicly_queryable' => true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
    'menu_position' => 5,
    'menu_icon' => 'dashicons-portfolio',
    'show_in_rest' => true // Для поддержки блока редактора Gutenberg
  );

  register_post_type('raboty', $args);
}
add_action('init', 'register_work_post_type');

?>