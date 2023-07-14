<?php
/*
Template Name: Posts
Template Post Type: post, page, product
*/

http_response_code(200);

get_header();
?>

<div class="aw-blog aw-block">
  <div class="aw-blog__search">
    <form role="search" method="get" action="<?php echo esc_url(home_url('/')) . "posty/"; ?>">
      <label class="aw-search" for="search">
        <input class="aw-search__input" type="search" placeholder="Что ищем сегодня?"
          value="<?php echo get_search_query(); ?>" name="search" id="search">
        <button class="aw-search__submit" type="submit">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M8.625 2.063a6.562 6.562 0 1 0 0 13.124 6.562 6.562 0 0 0 0-13.124ZM.937 8.625a7.688 7.688 0 1 1 13.507 5.024l2.454 2.454a.561.561 0 1 1-.796.794l-2.454-2.453a7.688 7.688 0 0 1-12.71-5.82Z"
              fill="#fff" />
          </svg>
        </button>
      </label>
    </form>
  </div>
  <div class="aw-grid">
    <?php
    global $post;
    $query = new WP_Query([
      'post_type' => 'post',
      'posts_per_page' => 2,
      'orderby' => 'ASC',
      's' => get_query_var("search") ? sanitize_text_field(get_query_var("search")) : '',
      'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
    ]);

    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
        ?>

        <div class="aw-post-card">
          <div class="aw-post-card__image">
            <?php the_post_thumbnail(); ?>
            <div class="aw-post-card__cover"></div>
          </div>
          <div class="aw-post-card__wrapper">
            <div class="aw-post-card__content">
              <div class="aw-post-card__heading">
                <h2 class="aw-post-card__head">
                  <?php the_title(); ?>
                </h2>
                <p class="aw-post-card__excerpt">
                  <?php echo get_the_excerpt(); ?>
                </p>
              </div>
              <div class="aw-post-card__meta">
                <span class="aw-post-card__time">
                  Опубликовано
                  <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
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
          <a class="aw-post-card__link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"></a>
        </div>

        <?php
      }
    }
    wp_reset_postdata();
    ?>
  </div>
  <?php
  global $wp_query;

  $pagination = paginate_links(
    array(
      'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
      'format' => '?paged=%#%',
      'current' => max(1, get_query_var('paged')),
      'total' => $wp_query->max_num_pages,
      'prev_text' => __('&laquo; Previous', 'your-theme-textdomain'),
      'next_text' => __('Next &raquo;', 'your-theme-textdomain'),
    )
  );

  if ($pagination) {
    echo '<div class="pagination">' . $pagination . '</div>';
  }
  ?>
</div>

<?php
get_footer();
?>