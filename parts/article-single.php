<?php if (has_post_thumbnail()) {
  the_post_thumbnail();
} ?>
<div class="card__content">
  <h2 class="card__title"><?php the_title() ?></h2>
  <p class="card__date"><?php echo get_the_date('j M, Y') ?></p>
  <?php the_content() ?>

  <a href="<?php bloginfo('url') ?>" class="top__button">Top</a>
</div>
