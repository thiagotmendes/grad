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
            <input type="text" class="form-control input-pesquisa" alt="lista-cursos" id="" placeholder="Pesquisar Por...">
          </div>
        </form>
      </div>
    </div>
    <?php
      while($subCursos->have_posts()): $subCursos->the_post();
    ?>
    <div class="row lista-cursos">
      <div class="filtra">
        <div class="col-md-7">
          <a href="<?php the_permalink() ?>" class="btn-link-curso"><?php the_title(); ?></a>
        </div>
        <div class="col-md-2">
          <a href="<?php the_permalink() ?>" class="btn btn-saibamais-curso"> Saiba Mais </a>
        </div>
        <div class="col-md-3">
          <?php $titulo = get_the_title(); ?>
          <a href="<?php echo esc_url( home_url( 'matricule-se' ) ); ?>?curso=<?php echo str_replace(' ', '-', $titulo)  ?>&c=<?php echo get_the_id() ?>" class="btn btn-matricule">
            Matricule-se
          </a>
        </div>
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
