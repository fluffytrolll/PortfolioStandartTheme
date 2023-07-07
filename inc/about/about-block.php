<section class="aw-about aw-block" id="obo-mne" itemscope itemtype="http://schema.org/Person">
  <div class="aw-about__wrapper">
    <div class="aw-about__video aw-block__rounded">
      <div class="aw-player">
        <video class="aw-player__cover" width="476" autoplay muted preload="auto" loop>
          <source src="<?= get_field('poster'); ?>" type="video/webm">
        </video>
        <video class="aw-video aw-video_hidden" width="476" preload="auto" loop>
          <source src="<?= get_field('video'); ?>" type="video/webm">
        </video>
        <div class="aw-video-controls aw-video-controls_dark aw-video-controls_show">
          <button class="aw-video-controls__button" type="button" aria-label="play pause toggle">
            <svg class="aw-video-controls__play" xmlns="http://www.w3.org/2000/svg" width="48" height="56"
              viewBox="0 0 48 56" fill="none">
              <path
                d="M42 24.249c2.667 1.54 2.667 5.388 0 6.928L6 51.962c-2.667 1.54-6-.385-6-3.465V6.928C0 3.85 3.333 1.925 6 3.464L42 24.25Z"
                fill="#fff" />
            </svg>
            <svg class="aw-video-controls__stop aw-video-controls__stop_hidden" xmlns="http://www.w3.org/2000/svg"
              width="45" height="50" viewBox="0 0 45 50" fill="none">
              <path
                d="M0 8a8 8 0 0 1 8-8h2a8 8 0 0 1 8 8v34a8 8 0 0 1-8 8H8a8 8 0 0 1-8-8V8Zm27 0a8 8 0 0 1 8-8h2a8 8 0 0 1 8 8v34a8 8 0 0 1-8 8h-2a8 8 0 0 1-8-8V8Z"
                fill="#fff" />
            </svg>
          </button>
        </div>
        <div class="aw-video-time">
          <div class="aw-video-time__dot"></div>
          <span class="aw-video-time__text"></span>
        </div>
      </div>
    </div>
    <div class="aw-about__content aw-about__content_background aw-block__rounded">
      <div class="aw-about__container">
        <div class="aw-about__block">
          <h2 class="aw-about__title">Обо мне</h2>
          <p class="aw-about__text">Я Frontend-разработчик, специализирующийся на создании современных, отзывчивых,
            доступных веб-приложений и сайтов.</p>
          <p class="aw-about__text">Мой опыт включает разработку интерфейсов, адаптивную вёрстку, оптимизацию загрузки
            сайтов и улучшения пользовательского опыта.</p>
        </div>
        <div class="aw-about__block">
          <h3 class="aw-about__title">С чем я работаю</h3>
          <div class="aw-about__techs">
            <?php getMyTechs(); ?>
          </div>
          <p class="aw-about__text">Я не ограничиваю свой стек и всегда готов работать с чем-то новым, ведь технологии
            не стоят на месте.</p>
        </div>
      </div>
      <div class="aw-about__action">
        <div class="aw-button-icon-link">
          <span class="aw-button-icon-link__title">Открыть резюме</span>
          <div class="aw-button-icon-link__icon">
            <svg class="aw-button-icon-link__svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
              viewBox="0 0 24 24" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M4.43 10.512a.75.75 0 0 1 1.058-.081L12 16.012l6.512-5.581a.75.75 0 1 1 .976 1.138l-7 6a.75.75 0 0 1-.976 0l-7-6a.75.75 0 0 1-.081-1.057H4.43Z"
                fill="#000" />
              <path d="M5 6.25a.75.75 0 0 0-.488 1.32l7 6c.28.24.695.24.976 0l7-6A.75.75 0 0 0 19 6.25H5Z"
                fill="#000" />
            </svg>
          </div>
          <a class="aw-button-icon-link__link" href="<?= get_field('resume'); ?>" target="_blank"
            rel="noopener noreferrer" title="Открыть резюме"></a>
        </div>
        <span class="aw-about__action-sub">в формате .pdf</span>
      </div>
    </div>
  </div>

  <!-- Schema.org markup -->
  <meta itemprop="name" content="Анпилогов Артём">
  <meta itemprop="jobTitle" content="Frontend Developer">
  <meta itemprop="description"
    content="Я Frontend-разработчик, специализирующийся на создании современных, отзывчивых, доступных веб-приложений и сайтов. Мой опыт включает разработку интерфейсов, адаптивную вёрстку, оптимизацию загрузки сайтов и улучшения пользовательского опыта.">

</section>