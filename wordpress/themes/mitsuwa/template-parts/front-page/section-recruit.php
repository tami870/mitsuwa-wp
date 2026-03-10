<?php

/**
 * フロントページ: 採用情報セクション
 */
?>
<div class="p-front-recruit">
  <section id="recruit" class="p-front-recruit__inner">
    <div class="p-front-recruit__card">
      <div class="p-front-recruit__card-inner">
        <div class="p-front-recruit__info">
          <div class="p-front-recruit__title">
            <?php get_template_part('template-parts/compornet/sectionTitle', null, [
              'main_title' => 'Recruit',
              'sub_title'  => '採用情報'
            ]); ?>
          </div>
          <div class="p-front-recruit__lead-block">
            <h3 class="p-front-recruit__lead">
              挑戦と飛躍、<br>今あなたの<br>未来が動き出す。
            </h3>
            <div class="p-front-recruit__btn">
              <?php get_template_part('template-parts/compornet/more-btn', null, [
                'url' => '/recruit/',
                'text' => '',
                'modifier' => 'c-more-btn--small'
              ]); ?>
            </div>
          </div>
        </div>
        <div class="p-front-recruit__img-wrap">
          <div class="p-front-recruit__img">
            <picture>
              <source
                srcset="<?php echo esc_url(get_theme_file_uri('/assets/images/common/front-recruit-pc.webp')); ?>"
                type="image/webp"
                media="(min-width: 768px)">
              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/front-recruit-sp.webp')); ?>" alt="採用情報イメージ" width="351" height="275" loading="lazy">
            </picture>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>