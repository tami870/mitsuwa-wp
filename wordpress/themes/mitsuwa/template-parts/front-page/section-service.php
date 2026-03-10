<?php
/**
 * フロントページ: サービスセクション
 */
?>
<div class="p-front-service">
  <section id="service" class="p-front-service__inner l-inner">
    <div class="p-front-service__title">
      <?php get_template_part('template-parts/compornet/sectionTitle', null, [
        'main_title' => 'Service',
        'sub_title' => 'サービス'
      ]); ?>
    </div>

    <div class="p-front-service__content">
      <div class="p-front-service__lead-wrap">
        <h3 class="p-front-service__lead">
          くらしにプラスになる<br class="u-show-sp">ご提案をこれからもずっと
        </h3>
        <p class="p-front-service__desc u-trim-leading">
          地域の皆さまの多様なご要望にスピーディーで的確にお応えできるよう日々の業務を遂行しております。くらしにプラスになるご提案をこれからもずっとお届けしてまいります。
        </p>
      </div>

      <div class="p-front-service__cards">
        <?php
        $services = [
          [
            'title' => 'リフォーム',
            'img'   => 'service_01.webp',
            'desc'  => '大阪ガスブランドの安心感を大切に、商品特性や使い勝手を丁寧にご説明し、ご納得いただいた上で施工しています。ご自宅に伺う仕事だからこそ、地域に根ざした身近な存在として、住まいのことを安心してご相談いただけるサポーターであり続けます。'
          ],
          [
            'title' => 'ガス機器',
            'img'   => 'service_02.webp',
            'desc'  => '大阪ガスのサービスショップ「くらしプラス」として、大阪ガスブランドの安心感を持ってくださっている皆さまに対して丁寧な接客、サービス、メンテナンス、リフォーム工事を実施しております。'
          ],
        ];
        foreach ($services as $service) :
        ?>
          <div class="p-service-card">
            <div class="p-service-card__head">
              <span class="p-service-card__label"><?php echo esc_html($service['title']); ?></span>
            </div>
            <div class="p-service-card__body">
              <div class="p-service-card__img">
                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/' . $service['img'])); ?>" alt="<?php echo esc_attr($service['title']); ?>" width="550" height="300" loading="lazy">
              </div>
              <p class="p-service-card__text u-trim-leading">
                <?php echo nl2br(esc_html($service['desc'])); ?>
              </p>
              <div class="p-service-card__btn">
                <?php get_template_part('template-parts/compornet/more-btn', null, [
                  'url' => '#'
                ]); ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
</div>
