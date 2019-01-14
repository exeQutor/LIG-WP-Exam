<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <div class="single-card">
    <?php while ( have_posts() ) {
      the_post();
      get_template_part( 'parts/article', 'single' );
    } ?>
  </div>
<?php endif ?>

<?php get_footer(); ?>
