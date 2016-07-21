<?php get_header() ?>
  <main>
    <div class="container pag-interno">
      <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); $id_post = get_the_id(); ?>
          <?php if (get_field('categoria_superior')): ?>
            <?php get_template_part('parts/content','pai') ?>
          <?php else: ?>
            <?php get_template_part('parts/content','filho') ?>
          <?php endif; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </main>
<?php get_footer() ?>
