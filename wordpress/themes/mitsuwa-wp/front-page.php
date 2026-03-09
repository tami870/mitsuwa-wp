<?php get_header(); ?>

<!-- <?php
      get_template_part("template-parts/compornet/c-title", null, [
        "sub_title" => "サービス",
        "main_title" => "Service",
        "heading_level" => "h2"
      ]);
      ?> -->

<?php
get_template_part('template-parts/compornet/c-more-btn', null, [
  'url' => '/about/'
]);
?>

<?php get_template_part("template-parts/compornet/c-more-btn--big"); ?>

<?php get_footer(); ?>