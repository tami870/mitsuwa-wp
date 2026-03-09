<div class="p-contactArea">
  <div class="l-inner">
    <div class="p-contactArea__header">
      <?php
      get_template_part("template-parts/compornet/sectionTitle", null, [
        "sub_title" => "サービス",
        "main_title" => "Contact",
        "heading_level" => "h2"
      ]);
      ?>
      <strong class="p-contactArea__header-text u-sp-only">リフォームやガス機器に
        関するご相談などお気軽
        にお問合せください。</strong>
      <p class="p-contactArea__header-reception-time-text u-sp-only">
        受付 9:00〜18:00(土・日・祝17:00まで)<br>
        携帯電話からでも<br>
        フリーダイヤルへつながります
      </p>
      <p class="p-contactArea__header-reception-time-text u-pc-only">受付 9:00〜18:00(土・日・祝17:00まで)
        携帯電話からでもフリーダイヤルへつながります。</p>
      <?php get_template_part("template-parts/compornet/more-btn--big"); ?>
    </div>
    <strong class="p-contactArea__header-text u-pc-only">リフォームやガス機器に関するご相談などお気軽にお問合せください。</strong>
    <div class="p-contactArea__cards">
      <div class="p-contactArea__card">
        <p class="p-contactArea__card-header">京都市にお住まいの方</p>
        <a href="tel:075-761-4343" class="p-contactArea__card-tel">075-761-4343</a>
        <div class="p-contactArea__card-free-call">
          <div class="p-contactArea__card-free-call-icon">
          <img width="82" height="62" decoding="async" loading="lazy" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/icon_free_call.svg' ); ?>" alt="">
          </div>
          <p class="p-contactArea__card-free-call-text">＊携帯・自動車電話からでもご利用になれます。</p>
        </div>
      </div>
    </div>
  </div>
</div>