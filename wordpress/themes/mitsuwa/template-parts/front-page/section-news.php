<?php
/**
 * フロントページ: ニュースセクション
 */
?>
<section id="news" class="p-front-news l-inner">
  <div class="p-front-news__title">
    <?php get_template_part('template-parts/compornet/sectionTitle', null, [
      'main_title' => 'News',
      'sub_title'  => 'お知らせ'
    ]); ?>
  </div>

  <div class="p-front-news__content">
    <ul class="p-front-news__list">
      <?php
      // 実際には WP_Query 等で取得しますが、現在はダミー
      for ($i = 0; $i < 3; $i++) :
      ?>
        <li class="p-news-item">
          <a href="#" class="p-news-item__link">
            <div class="p-news-item__meta">
              <time class="p-news-item__date" datetime="2026-02-24">2026.02.24</time>
              <span class="p-news-item__label">お知らせ</span>
            </div>
            <p class="p-news-item__title">池田ガスセンター新社屋へ移転しました</p>
          </a>
        </li>
      <?php endfor; ?>
    </ul>

    <div class="p-front-news__btn">
      <?php get_template_part('template-parts/compornet/more-btn', null, [
        'url' => '/news/',
        'text' => '一覧を見る'
      ]); ?>
    </div>
  </div>
</section>
