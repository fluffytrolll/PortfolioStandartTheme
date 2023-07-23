<?php
/*
Template Name: Works
Template Post Type: post, page, product, raboty
*/

http_response_code(200);

get_header();
?>

<section class="aw-blog aw-block" id="top" itemscope itemtype="http://schema.org/Blog">
  <div class="aw-grid">
    <?php
    global $post;
    $query = new WP_Query([
      'post_type' => 'raboty',
      'posts_per_page' => -1,
      'orderby' => 'ASC',
      's' => get_query_var("s") ? sanitize_text_field(get_query_var("s")) : '',
      'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
    ]);

    if ($query->have_posts()) {
      while ($query->have_posts()) {
        $query->the_post();
        ?>
        <div class="aw-post-card" itemscope itemtype="http://schema.org/BlogPosting">
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
          <a class="aw-post-card__link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"
            itemprop="url"></a>
        </div>
        <?php
      }
    }
    wp_reset_postdata();
    ?>
  </div>
</section>

<?php
get_footer();
?>