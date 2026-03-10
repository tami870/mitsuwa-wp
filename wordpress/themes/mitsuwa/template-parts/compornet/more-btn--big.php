<?php
$url = $args['url'] ?? home_url('/contact');
$text = $args['text'] ?? 'お問い合わせフォーム';
?>
<a href="<?php echo esc_url($url); ?>" class="c-more-btn c-more-btn--big">
  <p class="c-more-btn__text"><?php echo esc_html($text); ?></p>
  <div class="c-more-btn__bg">
    <span class="c-more-btn__arrow"></span>
  </div>
</a>