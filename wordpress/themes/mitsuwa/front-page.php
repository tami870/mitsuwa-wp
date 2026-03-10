<?php get_header(); ?>
<?php get_template_part("template-parts/projects/contactArea"); ?>
<!-- <?php
      get_template_part("template-parts/compornet/sectionTitle", null, [
        "sub_title" => "サービス",
        "main_title" => "Service",
        "heading_level" => "h2"
      ]);
      ?> -->

<?php
get_template_part('template-parts/compornet/more-btn', null, [
  'url' => '/about/'
]);
?>

<?php get_template_part("template-parts/compornet/more-btn--big"); ?>

<?php get_footer(); ?>