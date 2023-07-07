<?php
function getMyPhotos()
{
  global $post;

  $myposts = get_posts([
    'post_type' => 'my_photos',
    'posts_per_page' => 4,
    'order' => 'ASC',
  ]);

  if ($myposts) {
    foreach ($myposts as $post) {
      setup_postdata($post);
      $large = get_field('large');
      $large_retina = get_field('large_retina');
      $tablet = get_field('tablet');
      $tablet_retina = get_field('tablet_retina');
      $phone = get_field('phone');
      $phone_retina = get_field('phone_retina');
      $low = get_field('low');
      ?>
      <picture>
        <source srcset="<?= $low ?>" data-srcset="<?= $large ?>, <?= $large_retina ?> 2x" media="(min-width: 921px)"
          type="image/webp">
        <source srcset="<?= $low ?>" data-srcset="<?= $tablet ?>, <?= $tablet_retina ?> 2x"
          media="(min-width: 526px) and (max-width: 920px)" type="image/webp">
        <source srcset="<?= $low ?>" data-srcset="<?= $phone ?>, <?= $phone_retina ?> 2x" media="(max-width: 525px)"
          type="image/webp">
        <img class="aw-main-photo aw-block__rounded aw-lazy" src="<?= $low ?>" srcset="<?= $low ?>" data-src="<?= $large ?>"
          data-srcset="<?= $large_retina ?> 2x" alt="Анпилогов Артём Олегович фото анфас">
      </picture>
      <?php
    }
  } else {
    // Постов не найдено
  }

  wp_reset_postdata();
}
?>

<?php
function getMyTechs()
{
  global $post;

  $myposts = get_posts([
    'post_type' => 'my_texhs',
    'posts_per_page' => 24,
    'order' => 'ASC',
  ]);

  if ($myposts) {
    foreach ($myposts as $post) {
      setup_postdata($post);
      $icon_url = get_field('icon');
      $tooltip = get_field('tooltip');
      ?>
      <div class="aw-tech">
        <img class="aw-tech__icon" src="<?= $icon_url; ?>" alt="Технология <?= the_title(); ?>">
        <span class="aw-tech__tooltip">
          <?= $tooltip; ?>
        </span>
      </div>
      <?php
    }
  } else {
    // Постов не найдено
  }

  wp_reset_postdata();
}
?>