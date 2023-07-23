<?php
http_response_code(200);

get_header();
?>

<section class="aw-single aw-block" id="top">
  <article class="aw-article" itemscope itemtype="https://schema.org/Article">
    <?php if (have_posts()):
      while (have_posts()):
        the_post(); ?>
        <div class="aw-article__header">
          <header class="aw-article-header">
            <div class="aw-article-header__image">
              <?php the_post_thumbnail(); ?>
              <div class="aw-article-header__cover"></div>
            </div>
            <div class="aw-article-header__content">
              <h1 itemprop="headline">
                <?php the_title(); ?>
              </h1>
              <p itemprop="description">
                <?php echo get_the_excerpt(); ?>
              </p>
              <div class="aw-article-header__action">
                <button class="aw-button aw-button-share" type="button">
                  Поделиться
                  <div class="aw-button__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13.97 6.47a.75.75 0 0 1 1.06 0l5 5a.75.75 0 0 1 0 1.06l-5 5a.75.75 0 1 1-1.06-1.06l3.72-3.72H9.5c-.713 0-1.8.22-2.687.859-.848.61-1.563 1.635-1.563 3.391a.75.75 0 1 1-1.5 0c0-2.244.952-3.72 2.187-4.609 1.196-.861 2.61-1.141 3.563-1.141h8.19l-3.72-3.72a.75.75 0 0 1 0-1.06Z"
                        fill="#000" />
                    </svg>
                  </div>
                </button>
                <span>
                  <time itemprop="datePublished" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                    <?php echo get_the_date('j F Y'); ?>
                  </time>
                  <span itemprop="author">
                    |
                    <?php the_author(); ?>
                  </span>
                </span>
              </div>
            </div>
          </header>
        </div>

        <div class="aw-article__body">
          <div class="aw-article__wrapper">
            <section class="aw-article__content" itemprop="articleBody">
              <?php the_content(); ?>
            </section>
            <footer>
              <span>
                Опубликовано:
                <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                  <?php echo get_the_date('j F Y'); ?>
                </time>
              </span>
            </footer>
          </div>
        </div>

        <?php
        $current_post_id = get_the_ID();
        $args = array(
          'posts_per_page' => 2,
          'post__not_in' => array($current_post_id)
        );
        $query = new WP_Query($args);

        if ($query->have_posts()) {
          ?>
          <div class="aw-article__recomendations">
            <section class="aw-article__recomendations">
              <?php
              while ($query->have_posts()) {
                $query->the_post();
                ?>

                <article class="aw-post-card aw-post-card_recomendation" itemscope itemtype="http://schema.org/BlogPosting">
                  <div class="aw-post-card__image">
                    <?php the_post_thumbnail(); ?>
                    <div class="aw-post-card__cover"></div>
                  </div>
                  <div class="aw-post-card__wrapper aw-post-card__wrapper_recomendation">
                    <div class="aw-post-card__content">
                      <div class="aw-post-card__heading">
                        <h2 class="aw-post-card__head aw-post-card__head_recomendation" itemprop="headline">
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
                    <div class="aw-post-card__icon aw-post-card__icon_recomendation">
                      <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path d="M6 18 18 6m0 0H9m9 0v9" stroke="#000" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round" />
                      </svg>
                    </div>
                  </div>
                  <a class="aw-post-card__link" aria-label="Отрыть рекомендованную статью" href="<?php the_permalink(); ?>"
                    title="<?php the_title_attribute(); ?>" itemprop="url"></a>
                </article>

                <?php
              }
              ?>
            </section>
          </div>
          <?php
        }
        wp_reset_postdata();
        ?>

      <?php endwhile; else: ?>
    <p>Не получилось найти запись...</p>
    <?php endif; ?>
  </article>
</section>

<?php get_footer(); ?>