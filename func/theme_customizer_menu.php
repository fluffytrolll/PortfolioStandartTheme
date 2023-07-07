<?php
/**
 * Регистрация настраиваемых опций (Theme Customizer)
 */
add_action('customize_register', 'theme_customizer_menu_social_links');
function theme_customizer_menu_social_links($wp_customize)
{
  // Создаем секцию для настроек социальных сетей
  $wp_customize->add_section(
    'social_links_section',
    array(
      'title' => 'Социальные сети',
      'priority' => 30,
    )
  );

  // Создаем поле для ссылки на Telegram
  $wp_customize->add_setting(
    'telegram_link',
    array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    )
  );
  $wp_customize->add_control(
    'telegram_link_control',
    array(
      'label' => 'Ссылка на Telegram',
      'section' => 'social_links_section',
      'settings' => 'telegram_link',
      'type' => 'url',
    )
  );

  // Создаем поле для мобильного Behance
  $wp_customize->add_setting(
    'behance_link',
    array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    )
  );
  $wp_customize->add_control(
    'behance_link_control',
    array(
      'label' => 'Behance',
      'section' => 'social_links_section',
      'settings' => 'behance_link',
      'type' => 'url',
    )
  );

  // Создаем поле для мобильного LinkedIn
  $wp_customize->add_setting(
    'linkedIn_link',
    array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    )
  );
  $wp_customize->add_control(
    'linkedIn_link_control',
    array(
      'label' => 'LinkedIn',
      'section' => 'social_links_section',
      'settings' => 'linkedIn_link',
      'type' => 'url',
    )
  );

  // Создаем поле для почты организации
  $wp_customize->add_setting(
    'email_organization',
    array(
      'default' => '',
      'sanitize_callback' => 'sanitize_email',
    )
  );
  $wp_customize->add_control(
    'email_organization_control',
    array(
      'label' => 'E-mail организации',
      'section' => 'social_links_section',
      'settings' => 'email_organization',
      'type' => 'email',
    )
  );

  // Создаем поле для мобильного телефона
  $wp_customize->add_setting(
    'phone_number',
    array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field',
    )
  );
  $wp_customize->add_control(
    'phone_number_control',
    array(
      'label' => 'Мобильный телефон',
      'section' => 'social_links_section',
      'settings' => 'phone_number',
      'type' => 'text',
    )
  );
}

/**
 * Вывод настраиваемых опций в меню
 */
add_filter('wp_nav_menu_items', 'theme_custom_menu_links', 10, 2);
function theme_custom_menu_links($items, $args)
{
  // Проверяем, что текущее меню - "Основное меню"
  if ($args->theme_location == 'primary') {
    // Получаем значения настраиваемых опций
    $telegram_link = get_theme_mod('telegram_link');
    $behance_link = get_theme_mod('behance_link');
    $linkedIn_link = get_theme_mod('linkedIn_link');
    $phone_number = get_theme_mod('phone_number');
    $email_organization = get_theme_mod('email_organization');

    $menu_items = '';
    if ($telegram_link) {
      $menu_items .= '<li><a href="' . esc_url($telegram_link) . '">Telegram</a></li>';
    }
    if ($behance_link) {
      $menu_items .= '<li><a href="' . esc_url($behance_link) . '">Behance</a></li>';
    }
    if ($linkedIn_link) {
      $menu_items .= '<li><a href="' . esc_url($linkedIn_link) . '">LinkedIn</a></li>';
    }
    if ($phone_number) {
      $menu_items .= '<li><a href="tel:' . sanitize_text_field($phone_number) . '">Телефон</a></li>';
    }
    if ($email_organization) {
      $menu_items .= '<li><a href="mailto:' . sanitize_email($email_organization) . '">E-mail</a></li>';
    }
    $items .= $menu_items;
  }

  return $items;
}
?>