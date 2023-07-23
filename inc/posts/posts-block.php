<section class="aw-posts aw-block" id="posty" itemscope itemtype="http://schema.org/Blog">
  <div class="aw-grid">
    <?php
    global $post;
    $query = new WP_Query([
      'post_type' => 'post',
      'posts_per_page' => 2,
      'orderby' => 'ASC',
    ]);

    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
        ?>
        <article class="aw-post-card" itemscope itemtype="http://schema.org/BlogPosting">
          <div class="aw-post-card__image">
            <?php the_post_thumbnail(); ?>
            <div class="aw-post-card__cover"></div>
          </div>
          <div class="aw-post-card__wrapper">
            <div class="aw-post-card__content">
              <div class="aw-post-card__heading">
                <h2 class="aw-post-card__head" itemprop="headline">
                  <?php the_title(); ?>
                </h2>
                <p class="aw-post-card__excerpt" itemprop="description">
                  <?php echo get_the_excerpt(); ?>
                </p>
              </div>
              <div class="aw-post-card__meta">
                <span class="aw-post-card__time">
                  Опубликовано
                  <time itemprop="datePublished" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                    <?php echo get_the_date('j F Y'); ?>
                  </time>
                </span>
              </div>
            </div>
            <div class="aw-post-card__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M6 18 18 6m0 0H9m9 0v9" stroke="#000" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
          </div>
          <a class="aw-post-card__link" aria-label="Отрыть статью" href="<?php the_permalink(); ?>"
            title="<?php the_title_attribute(); ?>" itemprop="url"></a>
        </article>
        <?php
      }
    }
    wp_reset_postdata();
    ?>
  </div>
  <div class="aw-archive-offer" itemscope itemtype="http://schema.org/CollectionPage">
    <div class="aw-archive-offer__heading">
      <h2 class="aw-archive-offer__head">Еще больше статей!</h2>
      <p class="aw-archive-offer__description">
        Вам понравились мои статьи?
        <br />
        По ссылке можете найти ещё больше статей от меня.
      </p>
    </div>
    <div class="aw-button-icon-link">
      <span class="aw-button-icon-link__title">Смотреть всё</span>
      <div class="aw-button-icon-link__icon">
        <svg class="aw-button-icon-link__svg" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
          height="24" viewBox="0 0 24 24" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M13.47 5.47a.75.75 0 0 1 1.06 0l6 6a.75.75 0 0 1 0 1.06l-6 6a.752.752 0 0 1-1.244-.23.75.75 0 0 1 .184-.83l4.72-4.72H4a.75.75 0 0 1 0-1.5h14.19l-4.72-4.72a.75.75 0 0 1 0-1.06Z"
            fill="#000" />
        </svg>
      </div>
      <a class="aw-button-icon-link__link" aria-label="Открыть страницу со статьями" href="/posty/" title="Смотреть всё"
        itemprop="url"></a>
    </div>
  </div>
</section>