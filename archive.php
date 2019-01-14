<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <div class="cards">
    <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1 ?>
    <h3 class="archive-headline" data-paged="<?php echo $paged ?>" data-num-pages="<?php echo $wp_query->max_num_pages ?>">Page <?php echo $paged ?>/<?php echo $wp_query->max_num_pages ?></h3>

    <?php while (have_posts()) {
      the_post();
      get_template_part('parts/article');
    } ?>

    <?php wp_pagenavi() ?>
  </div>
<?php endif ?>

<?php get_footer(); ?>
