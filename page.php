<?php get_header() ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post() ?>

  <main>
    <div class="container">
<<<<<<< HEAD
=======
      <h1><?php the_title() ?></h1>
>>>>>>> cc70505338358502181738e458a67ae37cff1e42
      <?php the_content() ?>
    </div>
  </main>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
