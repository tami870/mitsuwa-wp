<?php
/**
 * フロントページ: ビジョンセクション（私たちの使命）
 */
?>
<section id="vision" class="p-front-vision l-inner">
  <div class="p-front-vision__title">
    <?php get_template_part('template-parts/compornet/sectionTitle', null, [
      'main_title' => 'Vision',
      'sub_title'  => '私たちの使命'
    ]); ?>
  </div>

  <div class="p-front-vision__content">
    <div class="p-front-vision__lead-wrap">
      <h3 class="p-front-vision__lead">
        より良いくらしの<br class="u-sp-only">ご提案でこの街を<br class="u-sp-only">支え続けています
      </h3>
    </div>

    <div class="p-front-vision__img-wrap">
       <div class="p-front-vision__img">
         <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/vision_01.webp')); ?>" alt="ミツワのビジョン" width="1000" height="600" loading="lazy">
       </div>
    </div>
    
    <div class="p-front-vision__btn">
      <?php get_template_part('template-parts/compornet/more-btn--big', null, [
        'url' => '/vision/',
        'text' => '私たちの使命'
      ]); ?>
    </div>
  </div>
</section>
