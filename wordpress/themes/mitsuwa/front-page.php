<?php get_header(); ?>

<main class="l-main">
  <?php get_template_part("template-parts/front-page/section", "mv"); ?>

  <div class="p-front-sections">
    <?php get_template_part("template-parts/front-page/section", "news"); ?>
    <?php get_template_part("template-parts/front-page/section", "service"); ?>
    <?php get_template_part("template-parts/front-page/section", "about"); ?>
    <?php get_template_part("template-parts/front-page/section", "vision"); ?>
    <?php get_template_part("template-parts/front-page/section", "recruit"); ?>
  </div>

  <?php get_template_part("template-parts/projects/contactArea"); ?>
</main>

<?php get_footer(); ?>