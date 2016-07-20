<?php /* template name: Matricule-se */ ?>
<?php get_header() ?>
<main>
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post() ?>
        <div class="container">
          <h1><?php the_title() ?></h1>
          <?php the_content() ?>
        </div>
    <?php endwhile; ?>
  <?php endif; ?>
  <?php get_template_part('parts/content','formMatricula') ?>
</main>

<div class="modal fade" id="regulamento-matricula" tabindex="-1" role="dialog" aria-labelledby="Regulamento">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Regulamento</h4>
      </div>
      <div class="modal-body">
        <?php get_template_part('parts/content','regulamento') ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer() ?>
