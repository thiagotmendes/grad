<h1><?php the_title() ?></h1>
<?php the_content() ?>

<div class="row">
  <div class="col-md-9">
    <?php
    $id_post = get_the_id();
    $argSubcursos = array(
      'post_type'   => 'cursos',
      'post_parent'    => $id_post
    );
    $subCursos = new wp_query($argSubcursos);
    if($subCursos->have_posts()):
    ?>
    <div class="row form-pesquisa">
      <div class="col-md-12">
        <form class="form-inline" action="index.html" method="post">
          <div class="form-group">
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="form-group">
            <button type="button" class="btn btn-primary"> Pesquisar </button>
          </div>
        </form>
      </div>
    </div>
    <?php
      while($subCursos->have_posts()): $subCursos->the_post();
    ?>
    <div class="row">
      <div class="col-md-7">
        <a href="<?php the_permalink() ?>" class="btn-link-curso"><?php the_title(); ?></a>
      </div>
      <div class="col-md-2">
        <a href="#" class="btn btn-saibamais-curso"> Saiba Mais </a>
      </div>
      <div class="col-md-3">
        <a href="#" class="btn btn-matricule"> Matricule-se </a>
      </div>
    </div>
    <?php
      endwhile;
    endif;
    ?>
  </div>
  <div class="col-md-3">
    <?php get_sidebar('campanha') ?>
  </div>
</div>
