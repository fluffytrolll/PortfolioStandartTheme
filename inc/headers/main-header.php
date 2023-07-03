<header class="aw-header" itemscope itemtype="https://schema.org/WPHeader">
  <div class="aw-header__wrapper aw-block">
    <?php
    if (has_custom_logo()) {
      $custom_logo_id = get_theme_mod('custom_logo');
      $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
      echo '<img class="aw-header__logo" src="' . esc_url($logo[0]) . '" alt="" width="142" height="34" itemprop="image">';
    }
    ?>
    <nav class="aw-navigation" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
      <?php
      $menu_items = wp_get_nav_menu_items("Главное меню");
      if ($menu_items) {
        foreach ($menu_items as $menu_item) {
          echo '<a class="aw-navigation__item" href="' . $menu_item->url . '" itemprop="url"><span class="aw-navigation__item-name" itemprop="name">' . $menu_item->title . '</span></a>';
        }
      }
      ?>
    </nav>
  </div>
</header>