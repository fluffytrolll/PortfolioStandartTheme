<footer class="aw-footer aw-block" itemscope itemtype="https://schema.org/Organization">
  <div class="aw-footer__wrapper">
    <div class="aw-footer__navigation">
      <?php
      if (has_custom_logo()) {
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        echo '<img class="aw-logo" src="' . esc_url($logo[0]) . '" alt="" width="142" height="34" itemprop="image">';
      }
      ?>
      <nav class="aw-navigation aw-navigation_wrap" role="navigation" itemscope
        itemtype="https://schema.org/SiteNavigationElement">
        <?php
        $menu_items = wp_get_nav_menu_items("Главное меню");
        if ($menu_items) {
          foreach ($menu_items as $menu_item) {
            echo '<a class="aw-navigation__item" href="' . $menu_item->url . '" itemprop="url"><span class="aw-navigation__item-name undeline undeline_yellow" itemprop="name">' . $menu_item->title . '</span></a>';
          }
        }
        ?>
      </nav>
    </div>
    <div class="aw-footer__organization">
      <div class="aw-socials">
        <span class="aw-socials__item aw-socials__item_black" itemscope itemtype="http://schema.org/SocialMediaPosting">
          <svg class="aw-socials__icon" aria-hidden="true" width="24" height="25" viewBox="0 0 24 25" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#a)">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M19.777 4.93a1.5 1.5 0 0 1 2.062 1.626l-2.268 13.757c-.22 1.327-1.676 2.088-2.893 1.427-1.018-.553-2.53-1.405-3.89-2.294-.68-.445-2.763-1.87-2.507-2.884.22-.867 3.72-4.125 5.72-6.062.785-.761.427-1.2-.5-.5-2.303 1.738-5.998 4.381-7.22 5.125-1.078.656-1.64.768-2.312.656-1.226-.204-2.363-.52-3.291-.905-1.254-.52-1.193-2.244-.001-2.746l17.1-7.2Z"
                fill="#000" />
            </g>
            <defs>
              <clipPath id="a">
                <path fill="#fff" d="M0 .5h24v24H0z" />
              </clipPath>
            </defs>
          </svg>
          <a class="aw-socials__link" href="<?php echo get_theme_mod('telegram_link'); ?>" target="_blank"
            rel="noopener noreferrer" itemprop="url" aria-label="Я в телегам"></a>
        </span>
        <span class="aw-socials__item aw-socials__item_black" itemscope itemtype="http://schema.org/SocialMediaPosting">
          <svg class="aw-socials__icon" aria-hidden="true" width="24" height="25" viewBox="0 0 24 25" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M6.981 5c.692 0 1.33.053 1.917.21a4.237 4.237 0 0 1 1.494.587c.429.264.745.639.962 1.12.21.48.324 1.067.324 1.706 0 .744-.16 1.383-.535 1.863-.322.48-.849.909-1.495 1.225.909.264 1.6.744 2.022 1.383.421.639.691 1.436.691 2.345 0 .744-.157 1.383-.427 1.916-.27.538-.673.996-1.173 1.331a5.442 5.442 0 0 1-1.705.744 7.992 7.992 0 0 1-1.917.264L0 19.704V5h6.981Zm-.428 5.967c.585 0 1.066-.158 1.436-.428.369-.27.532-.745.532-1.33 0-.324-.052-.639-.157-.85a1.471 1.471 0 0 0-.48-.533 2.76 2.76 0 0 0-.692-.264c-.264-.053-.534-.053-.85-.053H3.255v3.466c0-.008 3.298-.008 3.298-.008Zm.158 6.29c.322 0 .639-.053.909-.106.264-.052.534-.159.744-.323a2.04 2.04 0 0 0 .534-.585 2.57 2.57 0 0 0 .21-.962c0-.744-.21-1.278-.639-1.653-.428-.322-1.014-.48-1.705-.48h-3.51v4.101h3.458l-.002.008Zm10.287-.053c.429.427 1.066.639 1.917.639.585 0 1.119-.159 1.548-.429.427-.323.69-.639.795-.96h2.61c-.429 1.276-1.068 2.186-1.917 2.772-.849.533-1.864.849-3.09.849a6.202 6.202 0 0 1-2.29-.427 4.24 4.24 0 0 1-1.706-1.174 4.277 4.277 0 0 1-1.068-1.758c-.263-.691-.375-1.435-.375-2.292 0-.796.105-1.547.375-2.239a5.8 5.8 0 0 1 1.12-1.81c.48-.48 1.067-.91 1.706-1.174a6.027 6.027 0 0 1 2.24-.427c.909 0 1.705.158 2.396.533.69.374 1.226.797 1.654 1.436.427.585.744 1.277.961 2.022.105.744.158 1.494.105 2.345h-7.725c0 .87.315 1.665.744 2.094Zm3.36-5.598c-.375-.375-.963-.586-1.655-.586-.48 0-.848.104-1.171.264-.323.157-.534.374-.744.584a1.435 1.435 0 0 0-.375.746c-.054.262-.105.48-.105.69h4.794c-.105-.789-.373-1.323-.744-1.698Zm-4.69-5.592h5.966v1.435h-5.966V6.014Z"
              fill="#000" />
          </svg>
          <a class="aw-socials__link" href="<?php echo get_theme_mod('behance_link'); ?>" target="_blank"
            rel="noopener noreferrer" itemprop="url" aria-label="Я на Behance"></a>
        </span>
        <span class="aw-socials__item aw-socials__item_black" itemscope itemtype="http://schema.org/SocialMediaPosting">
          <svg class="aw-socials__icon" aria-hidden="true" width="24" height="25" viewBox="0 0 24 25" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M6.94 5.5a2 2 0 1 1-4-.002 2 2 0 0 1 4 .002ZM7 8.98H3V21.5h4V8.98Zm6.32 0H9.34V21.5h3.94v-6.57c0-3.66 4.77-4 4.77 0v6.57H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68Z"
              fill="#000" />
          </svg>
          <a class="aw-socials__link" href="<?php echo get_theme_mod('linkedIn_link'); ?>" target="_blank"
            rel="noopener noreferrer" itemprop="url" aria-label="Я в LinkedIn"></a>
        </span>
      </div>
      <div class="aw-footer__contact" itemprop="contactPoint" itemscope itemtype="https://schema.org/ContactPoint">
        <a class="aw-footer__phone" href="tel:+7<?php echo get_theme_mod('phone_number'); ?>" itemprop="telephone"
          aria-label="Телефон">
          <span class="undeline undeline_yellow">
            +7

            <?php echo formatPhoneNumber(get_theme_mod('phone_number')); ?>
          </span>
        </a>
        <a class="aw-footer__email" href="mailto:<?php echo get_theme_mod('email_organization'); ?>" itemprop="email"
          aria-label="Электронная почта">
          <span class="undeline undeline_yellow">
            <?php echo get_theme_mod('email_organization'); ?>
          </span>
        </a>
      </div>
    </div>
  </div>
</footer>