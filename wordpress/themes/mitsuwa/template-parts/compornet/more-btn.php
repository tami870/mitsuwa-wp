<?php
$url = $args['url'] ?? '#';
$text = $args['text'] ?? '詳しく見る';
$modifier = $args['modifier'] ?? '';
?>
<a href="<?php echo esc_url($url); ?>" class="c-more-btn <?php echo esc_attr($modifier); ?>">
  <p class="c-more-btn__text"><?php echo esc_html($text); ?></p>
  <div class="c-more-btn__bg">
  <span class="c-more-btn__arrow"></span>
  </div>
</a>

