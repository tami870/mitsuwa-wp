<section class="p-contact-area">
  <div class="l-inner">
    <div class="p-contact-area__header">
      <?php
      get_template_part("template-parts/compornet/sectionTitle", null, [
        "sub_title" => "お問い合わせ",
        "main_title" => "Contact",
        "heading_level" => "h2"
      ]);
      ?>
      <div class="p-contact-area__header-text u-sp-only">リフォームやガス機器に<br>関するご相談などお気軽<br>にお問合せください。</div>
      <p class="p-contact-area__header-reception-time-text u-sp-only">
        受付 9:00〜18:00<br>(土・日・祝17:00まで)<br>
        携帯電話からでも<br>
        フリーダイヤルへつながります
      </p>
      <p class="p-contact-area__header-reception-time-text u-pc-only">受付 9:00〜18:00(土・日・祝17:00まで)<br>
        携帯電話からでもフリーダイヤルへつながります。</p>
      <div class="p-contact-area__header-btn">
        <?php get_template_part("template-parts/compornet/more-btn--big"); ?>

      </div>
    </div>
    <strong class="p-contact-area__header-text u-pc-only">リフォームやガス機器に関するご相談などお気軽にお問合せください。</strong>
    <div class="p-contact-area__cards">
      <div class="p-contact-area__card">
        <p class="p-contact-area__card-header">京都市にお住まいの方</p>
        <a href="tel:075-761-4343" class="p-contact-area__card-tel">075-761-4343</a>
        <div class="p-contact-area__card-free-call">
          <div class="p-contact-area__card-free-call-icon">
            <img width="82" height="62" decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon_free_call.svg'); ?>" alt="">
          </div>
          <div class="p-contact-area__card-free-call-wrapper">
            <a href="tel:0120-328-049" class="p-contact-area__card-free-call-link u-trim-leading">0120-328-049</a>
          </div>
        </div>
      </div>
      <div class="p-contact-area__card">
        <p class="p-contact-area__card-header">八幡市にお住まいの方</p>
        <a href="tel:075-981-8401" class="p-contact-area__card-tel">075-981-8401</a>
        <div class="p-contact-area__card-free-call">
          <div class="p-contact-area__card-free-call-icon">
            <img width="82" height="62" decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon_free_call.svg'); ?>" alt="">
          </div>
          <div class="p-contact-area__card-free-call-wrapper">
            <a href="tel:0120-01-8401" class="p-contact-area__card-free-call-link u-trim-leading">0120-01-8401</a>
          </div>
        </div>
      </div>
      <div class="p-contact-area__card">
        <p class="p-contact-area__card-header">池田市にお住まいの方</p>
        <a href="tel:072-751-1100" class="p-contact-area__card-tel">072-751-1100</a>
        <div class="p-contact-area__card-free-call">
          <div class="p-contact-area__card-free-call-icon">
            <img width="82" height="62" decoding="async" loading="lazy" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon_free_call.svg'); ?>" alt="">
          </div>
          <div class="p-contact-area__card-free-call-wrapper">
            <a href="tel:0120-099-328" class="p-contact-area__card-free-call-link u-trim-leading">0120-099-328</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>