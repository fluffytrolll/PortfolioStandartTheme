<?php
// Функция для отключения комментариев в WordPress
function disable_comments()
{
  // Запрещаем комментарии для постов и страниц
  remove_post_type_support('post', 'comments');
  remove_post_type_support('page', 'comments');

  // Запрещаем комментарии в административной панели
  update_option('comments_per_page', 0);
  update_option('default_comments_page', 'newest');

  // Запрещаем комментарии в ссылках на комментарии
  add_filter('rewrite_rules_array', 'disable_comments_rewrite_rules');
}

// Функция для обновления правил перезаписи и удаления ссылок на комментарии
function disable_comments_rewrite_rules($rules)
{
  foreach ($rules as $rule => $rewrite) {
    if (false !== strpos($rewrite, 'comments_popup=')) {
      unset($rules[$rule]);
    }
  }
  return $rules;
}

// Запускаем функцию отключения комментариев
add_action('init', 'disable_comments');

// Убираем комментарии из админ-панели WordPress
add_action('admin_menu', function () {
  remove_menu_page('edit-comments.php');
});

?>