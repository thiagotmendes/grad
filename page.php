<?php get_header() ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post() ?>

  <main>
    <div class="container">
      <?php the_content() ?>
    </div>
  </main>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
