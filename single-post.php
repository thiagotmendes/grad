<?php get_header() ?>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post() ?>
              <h1><?php the_title() ?></h1>
              <?php the_content() ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="col-md-3">
          <?php get_sidebar() ?>
        </div>
      </div>
    </div>
  </main>
<?php get_footer() ?>
