<section class="aw-contacts aw-block" id="kontakty">
  <div class="aw-contacts__wrapper aw-block__rounded">
    <div class="aw-contacts__cover">
      <picture>
        <source
          srcset="<?= get_template_directory_uri() ?>/assets/img/feedback-tablet@x1.webp 1x, <?= get_template_directory_uri() ?>/assets/img/feedback-tablet@x2.webp 2x"
          type="image/webp" media="(max-width: 921px)">
        <img src="<?= get_template_directory_uri() ?>/assets/img/feedback@x2.webp"
          srcset="<?= get_template_directory_uri() ?>/assets/img/feedback@x1.webp 1x, <?= get_template_directory_uri() ?>/assets/img/feedback@x2.webp 2x"
          alt="">
      </picture>
    </div>
    <div class="aw-contacts__heading">
      <h2 class="aw-contacts__head">У вас остались вопросы?</h2>
      <p class="aw-contacts__text">
        Я всегда рад ответить на любой ваш вопрос.
        <br />
        Заполните форму, и в ближайшее время я вам отвечу.
      </p>
    </div>
    <form class="aw-feedback" action="/wp-json/aw-api/feedback/" method="post" id="feedbackForm">
      <label class="aw-input" for="name">
        <input type="text" placeholder="Ваше имя" name="name" id="name" required>
      </label>
      <label class="aw-input" for="email">
        <input type="email" placeholder="Ваша почта" name="email" id="email" required>
      </label>
      <label class="aw-input" for="message">
        <textarea name="message" placeholder="Ваше сообщение" id="message" cols="32" rows="6" required></textarea>
      </label>
      <label class="aw-input" for="message">
        <input type="submit" value="Отправить">
      </label>
    </form>
  </div>
</section>