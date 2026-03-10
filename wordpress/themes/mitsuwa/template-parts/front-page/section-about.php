<?php
/**
 * フロントページ: アバウトセクション（選ばれる理由）
 */
?>
<div class="p-front-about">
  <section id="about" class="p-front-about__inner l-inner">
    <div class="p-front-about__title">
      <?php get_template_part('template-parts/compornet/sectionTitle', null, [
        'main_title' => 'About us',
        'sub_title'  => 'ミツワが選ばれる理由'
      ]); ?>
    </div>

    <div class="p-front-about__content">
      <div class="p-front-about__lead-wrap">
        <h3 class="p-front-about__lead">
          住まいの<br class="u-sp-only">プロが勢揃い！
        </h3>
        <p class="p-front-about__desc u-trim-leading">
          リフォームや増改築に必要な、ガス・建築・給排水・電気施工の各種資格を保有する正社員が多数在籍。大阪ガスショップのミツワなら、プロフェッショナルが安心安全な施工で大満足をお約束します。
        </p>
      </div>

      <div class="p-front-about__features">
        <div class="p-about-feature">
          <div class="p-about-feature__circle">
            <p class="p-about-feature__text">一級建築士<br>多数在籍</p>
          </div>
        </div>
        <div class="p-about-feature">
          <div class="p-about-feature__circle">
            <p class="p-about-feature__text">平均年間実績<br>4,800件</p>
          </div>
        </div>
        <div class="p-about-feature">
          <div class="p-about-feature__circle">
            <p class="p-about-feature__text">安心の<br>充実サポート</p>
          </div>
        </div>
      </div>

      <div class="p-front-about__btn">
        <?php get_template_part('template-parts/compornet/more-btn', null, [
          'url' => '/about/',
          'text' => '詳しく見る'
        ]); ?>
      </div>
    </div>
  </section>
</div>
