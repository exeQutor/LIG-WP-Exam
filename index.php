<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <div class="cards">
    <?php while (have_posts()) {
      the_post();
      get_template_part('parts/article');
    } ?>

    <a href="<?php echo site_url('/category/all/') ?>" class="more__button">More</a>
  </div>
<?php endif ?>

<?php get_footer(); ?>
