<section class="aw-works aw-block" id="raboty">
  <div class="aw-grid">
    <?php
    global $post;
    $query = new WP_Query([
      'post_type' => 'raboty',
      'posts_per_page' => 4,
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
            </div>
            <div class="aw-post-card__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M6 18 18 6m0 0H9m9 0v9" stroke="#000" stroke-width="1.5" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
          </div>
          <a class="aw-post-card__link" aria-label="Открыть работу из портфолио" href="<?php the_permalink(); ?>"
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
      <h2 class="aw-archive-offer__head">Хотите больше моих работ?</h2>
      <p class="aw-archive-offer__description">
        У меня есть еще некоторое количество работ.
        <br />
        Можете посмотреть их по ссылке.
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
      <a class="aw-button-icon-link__link" aria-label="Открыть страницу со работами" href="/raboty/"
        title="Смотреть всё" itemprop="url"></a>
    </div>
  </div>
</section>