<?php
function getMenuIconByNameItem($name)
{
  switch ($name) {
    case 'Главная': {
        return '<svg class="aw-navigation__icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.52 7.823C2 8.77 2 9.915 2 12.203v1.522c0 3.9 0 5.851 1.172 7.063C4.343 22 6.229 22 10 22h4c3.771 0 5.657 0 6.828-1.212C22 19.576 22 17.626 22 13.725v-1.521c0-2.289 0-3.433-.52-4.381-.518-.949-1.467-1.537-3.364-2.715l-2-1.241C14.111 2.622 13.108 2 12 2c-1.108 0-2.11.622-4.116 1.867l-2 1.241C3.987 6.286 3.039 6.874 2.52 7.823ZM11.25 18a.75.75 0 1 0 1.5 0v-3a.75.75 0 1 0-1.5 0v3Z" fill="#595959"/></svg>';
      }
    case 'Обо мне': {
        return '<svg class="aw-navigation__icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 10a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm8 7.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5Z" fill="#595959"/></svg>';
      }
    case 'Работы': {
        return '<svg class="aw-navigation__icon" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m19.852 7.617-3.96-3.563c-1.127-1.015-1.69-1.523-2.383-1.788L13.5 5c0 2.357 0 3.536.732 4.268.732.732 1.911.732 4.268.732h3.58c-.362-.704-1.012-1.288-2.228-2.383Z" fill="#595959"/><path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 22h4c3.771 0 5.657 0 6.828-1.172C22.5 19.657 22.5 17.771 22.5 14v-.437c0-.873 0-1.529-.043-2.063h-4.052c-1.097 0-2.067 0-2.848-.105-.847-.114-1.694-.375-2.385-1.066-.692-.692-.953-1.539-1.067-2.386C12 7.162 12 6.193 12 5.095l.01-2.834c0-.083.007-.164.02-.244C11.621 2 11.136 2 10.53 2 6.739 2 4.843 2 3.672 3.172 2.5 4.343 2.5 6.229 2.5 10v4c0 3.771 0 5.657 1.172 6.828C4.843 22 6.729 22 10.5 22Zm.97-6.53a.75.75 0 0 1 1.06 0l1 1a.75.75 0 0 1 0 1.06l-1 1a.75.75 0 1 1-1.06-1.06l.47-.47-.47-.47a.75.75 0 0 1 0-1.06Zm-.268-1.207a.75.75 0 1 0-1.404-.526l-1.5 4a.75.75 0 1 0 1.404.526l1.5-4ZM8.03 13.47a.75.75 0 0 1 0 1.06l-.47.47.47.47a.75.75 0 1 1-1.06 1.06l-1-1a.75.75 0 0 1 0-1.06l1-1a.75.75 0 0 1 1.06 0Z" fill="#595959"/></svg>';
      }
    case 'Статьи': {
        return '<svg class="aw-navigation__icon" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.672 3.172C3.5 4.343 3.5 6.229 3.5 10v4c0 3.771 0 5.657 1.172 6.828C5.843 22 7.729 22 11.5 22h2c3.771 0 5.657 0 6.828-1.172C21.5 19.657 21.5 17.771 21.5 14v-4c0-3.771 0-5.657-1.172-6.828C19.157 2 17.271 2 13.5 2h-2C7.729 2 5.843 2 4.672 3.172ZM8.5 9.25a.75.75 0 0 0 0 1.5h8a.75.75 0 1 0 0-1.5h-8Zm0 4a.75.75 0 1 0 0 1.5h5a.75.75 0 1 0 0-1.5h-5Z" fill="#595959"/></svg>';
      }
    case 'Контакты': {
        return '<svg class="aw-navigation__icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M22 12c0 5.523-4.477 10-10 10-1.6 0-3.112-.376-4.452-1.044a1.634 1.634 0 0 0-1.149-.133l-2.226.596a1.3 1.3 0 0 1-1.591-1.592l.595-2.226c.097-.386.05-.794-.134-1.148A9.96 9.96 0 0 1 2 12C2 6.477 6.477 2 12 2s10 4.477 10 10ZM12 7.25a.75.75 0 0 1 .75.75v8a.75.75 0 1 1-1.5 0V8a.75.75 0 0 1 .75-.75ZM8.75 10a.75.75 0 0 0-1.5 0v4a.75.75 0 1 0 1.5 0v-4ZM16 9.25a.75.75 0 0 1 .75.75v4a.75.75 0 1 1-1.5 0v-4a.75.75 0 0 1 .75-.75Z" fill="#595959"/></svg>';
      }
    default: {
        return "";
      }
  }
}
?>

<header class="aw-header" itemscope itemtype="https://schema.org/WPHeader">
  <div class="aw-header__wrapper aw-block">
    <?php
    if (has_custom_logo()) {
      $custom_logo_id = get_theme_mod('custom_logo');
      $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
      echo '<img class="aw-logo" src="' . esc_url($logo[0]) . '" alt="" width="142" height="34" itemprop="image">';
    }
    ?>
    <nav class="aw-navigation" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
      <?php
      $menu_items = wp_get_nav_menu_items("Главное меню");
      if ($menu_items) {
        foreach ($menu_items as $menu_item) {
          echo '<a class="aw-navigation__item" href="' . $menu_item->url . '" itemprop="url"><span class="aw-navigation__item-name undeline" itemprop="name">' . $menu_item->title . '</span></a>';
        }
      }
      ?>
    </nav>
  </div>
  <div class="aw-header__wrapper aw-header__wrapper_mobile">
    <?php if (is_home() || is_front_page()) { ?>
      <a class="aw-header__go-top" href="#top">
        <svg class="aw-header__go-top__icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M11.512 8.43a.75.75 0 0 1 .976 0l7 6a.751.751 0 0 1-.976 1.14L12 9.987l-6.512 5.581a.75.75 0 1 1-.976-1.138l7-6Z"
            fill="#F8F8F8" />
        </svg>
      </a>
    <?php } ?>
    <nav class="aw-navigation aw-navigation_mobile" role="navigation" itemscope
      itemtype="https://schema.org/SiteNavigationElement">
      <?php
      $menu_items = wp_get_nav_menu_items("Главное меню");
      if ($menu_items) {
        foreach ($menu_items as $menu_item) {
          echo '<a class="aw-navigation__item aw-navigation__item_mobile" href="' . $menu_item->url . '" itemprop="url">' . getMenuIconByNameItem($menu_item->title) . '<span class="aw-navigation__item-name aw-navigation__item-name_mobile" itemprop="name">' . $menu_item->title . '</span></a>';
        }
      }
      ?>
    </nav>
  </div>
</header>