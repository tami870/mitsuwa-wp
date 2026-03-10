<header class="p-header">
  <div class="p-header__inner">
    <div class="p-header__content">
      <div class="p-header__content-left">
        <div class="p-header__logo">
          <img width="206" height="33" decoding="async" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/img_logo.png'); ?>" alt="ミツワリフォームのロゴ">
        </div>
        <div class="p-header__content-left-pc-only">
          <p class="p-header__content-left-pc-only-text">
            一級建築士事務所 <span class="p-header__content-left-pc-only-orange">ミツワのリフォーム</span><br>
            京都・大阪エリアで年間4,800件の実績！
          </p>
        </div>
      </div>
      <div class="p-header__content-right">
        <div class="p-header__mail-bg">
          <div class="p-header__mail">
            <img width="24" height="16" decoding="async" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon_mail.png'); ?>" alt="メールアイコン">
          </div>
        </div>
        <button class="p-header__drawer" aria-label="メニューを開く" aria-expanded="false" aria-controls="p-header-drawer-menu">
          <span class="p-header__drawer-line"></span>
          <span class="p-header__drawer-line"></span>
          <span class="p-header__drawer-line"></span>
        </button>
        <nav class="p-header__nav-pc" aria-label="ヘッダーナビゲーション">
          <div class="p-header__nav-scroll-wrapper-pc">
            <?php
            $nav_items = [
              [
                'title' => 'ミツワについて',
                'submenu' => [
                  ['title' => '選ばれる理由', 'url' => '#'],
                  ['title' => '事業紹介', 'url' => '#'],
                  ['title' => '企業情報', 'url' => '#'],
                  ['title' => 'サービスエリア', 'url' => '#'],
                ]
              ],
              [
                'title' => 'リフォーム',
                'submenu' => [
                  ['title' => 'キッチンリフォーム', 'url' => '#'],
                  ['title' => '浴室リフォーム', 'url' => '#'],
                  ['title' => 'トイレ洗面リフォーム', 'url' => '#'],
                  ['title' => 'その他リフォーム', 'url' => '#'],
                ]
              ],
              [
                'title' => 'ガス機器',
                'submenu' => [
                  ['title' => 'ガス機器サービス', 'url' => '#'],
                  ['title' => '取扱い機器', 'url' => '#'],
                  ['title' => 'ガス機器健康診断サービス', 'url' => '#'],
                ]
              ],

            ];
            ?>
            <ul class="p-header__nav-list-pc">
              <?php foreach ($nav_items as $item): ?>
                <li class="p-header__nav-item-pc<?php echo !empty($item['submenu']) ? ' p-header__nav-item--has-submenu' : ''; ?>">
                  <?php if (!empty($item['submenu'])): ?>
                    <details class="p-header__nav-details-pc">
                      <summary class="p-header__nav-summary-pc">
                        <span class="p-header__nav-item-link-pc"><?php echo esc_html($item['title']); ?></span>
                        <span class="p-header__submenu-icon-pc"></span>
                      </summary>
                      <ul class="p-header__submenu-pc">
                        <?php foreach ($item['submenu'] as $submenu_item): ?>
                          <li class="p-header__submenu-item-pc">
                            <a href="<?php echo esc_url($submenu_item['url']); ?> " class="p-header__submenu-item-link-pc"><?php echo esc_html($submenu_item['title']); ?></a>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    </details>
                  <?php else: ?>
                    <a href="<?php echo esc_url($item['url']); ?>"><?php echo esc_html($item['title']); ?></a>
                  <?php endif; ?>
                </li>
              <?php endforeach; ?>
              <li class="p-header__nav-item-pc--news">
                <a href="<?php echo esc_url(home_url('')); ?>" class="p-header__nav-item-link-pc--news">お知らせ</a>
              </li>
            </ul>
            <div class="p-header__links-pc">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__links-item-pc">
                <p class="p-header__links-item-text-pc">採用情報</p>
                <div class="p-header__links-arrow-bg-pc">
                  <span class="p-header__links-item-arrow-pc"></span>
                </div>
              </a>
              <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__links-item-pc p-header__links-item--contact-pc">
                <p class="p-header__links-item-text-pc">お問い合わせ</p>
                <div class="p-header__links-arrow-bg-pc">
                  <span class="p-header__links-item-arrow-pc p-header__links-item-arrow--contact-pc"></span>
                </div>
              </a>
            </div>
          </div>
        </nav>
      </div>

    </div>
  </div>
  <nav class="p-header__nav" aria-label="ヘッダーナビゲーション">
    <div class="p-header__nav-scroll-wrapper">
      <?php
      $nav_items = [
        [
          'title' => 'ミツワについて',
          'submenu' => [
            ['title' => '選ばれる理由', 'url' => '#'],
            ['title' => '事業紹介', 'url' => '#'],
            ['title' => '企業情報', 'url' => '#'],
            ['title' => 'サービスエリア', 'url' => '#'],
          ]
        ],
        [
          'title' => 'リフォーム',
          'submenu' => [
            ['title' => 'キッチンリフォーム', 'url' => '#'],
            ['title' => '浴室リフォーム', 'url' => '#'],
            ['title' => 'トイレ洗面リフォーム', 'url' => '#'],
            ['title' => 'その他リフォーム', 'url' => '#'],
          ]
        ],
        [
          'title' => 'ガス機器',
          'submenu' => [
            ['title' => 'ガス機器サービス', 'url' => '#'],
            ['title' => '取扱い機器', 'url' => '#'],
            ['title' => 'ガス機器健康診断サービス', 'url' => '#'],
          ]
        ],

      ];
      ?>
      <ul class="p-header__nav-list">
        <?php foreach ($nav_items as $item): ?>
          <li class="p-header__nav-item<?php echo !empty($item['submenu']) ? ' p-header__nav-item--has-submenu' : ''; ?>">
            <?php if (!empty($item['submenu'])): ?>
              <details class="p-header__nav-details">
                <summary class="p-header__nav-summary">
                  <span class="p-header__nav-item-link"><?php echo esc_html($item['title']); ?></span>
                  <span class="p-header__submenu-icon"></span>
                </summary>
                <ul class="p-header__submenu">
                  <?php foreach ($item['submenu'] as $submenu_item): ?>
                    <li class="p-header__submenu-item">
                      <a href="<?php echo esc_url($submenu_item['url']); ?>"><?php echo esc_html($submenu_item['title']); ?></a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </details>
            <?php else: ?>
              <a href="<?php echo esc_url($item['url']); ?>"><?php echo esc_html($item['title']); ?></a>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
        <li class="p-header__nav-item">
          <a href="<?php echo esc_url(home_url('')); ?>">お知らせ</a>
        </li>
      </ul>
      <div class="p-header__links">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__links-item">
          <p class="p-header__links-item-text">採用情報</p>
          <div class="p-header__links-arrow-bg">
            <span class="p-header__links-item-arrow"></span>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__links-item p-header__links-item--contact">
          <p class="p-header__links-item-text">お問い合わせ</p>
          <div class="p-header__links-arrow-bg">
            <span class="p-header__links-item-arrow p-header__links-item-arrow--contact"></span>
          </div>
        </a>
      </div>
    </div>
  </nav>
</header>