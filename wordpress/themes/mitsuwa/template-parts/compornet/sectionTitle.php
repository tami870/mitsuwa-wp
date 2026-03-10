<?php
/**
 * タイトルコンポーネント
 *
 * @param string $sub_title 日本語タイトル（必須）
 * @param string $main_title 英語タイトル（必須）
 * @param string $heading_level 見出しレベル（デフォルト: h2）
 */

$sub_title = $args["sub_title"] ?? "";
$main_title = $args["main_title"] ?? "";
$heading_level = $args["heading_level"] ?? "h2";
?>

<hgroup class="c-title">
  <div class="c-title__wrapper">
    <p class="c-title__sub u-trim-leading"><?php echo esc_html($sub_title); ?></p>
    <<?php echo $heading_level; ?> class="c-title__main u-trim-leading"><?php echo esc_html($main_title); ?></<?php echo $heading_level; ?>>
  </div>
</hgroup>