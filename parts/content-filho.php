<div class="row">
  <div class="col-md-9">
    <h1><?php the_title() ?></h1>
    <?php the_content() ?>
    <div>
      <?php if (get_field('titulo_aba1')): ?>
        <ul class="nav nav-tabs tabs-curso" role="tablist">
          <li role="presentation" class="active"><a href="#titulo_aba1" aria-controls="home" role="tab" data-toggle="tab"><?php echo get_field('titulo_aba1') ?></a></li>
          <?php if (get_field('titulo_aba2')): ?>
            <li role="presentation"><a href="#titulo_aba2" aria-controls="profile" role="tab" data-toggle="tab"><?php echo get_field('titulo_aba2') ?></a></li>
          <?php endif; ?>
          <?php if (get_field('titulo_aba3')): ?>
            <li role="presentation"><a href="#titulo_aba3" aria-controls="messages" role="tab" data-toggle="tab"><?php echo get_field('titulo_aba3') ?></a></li>
          <?php endif; ?>
          <?php if (get_field('titulo_aba4')): ?>
            <li role="presentation"><a href="#titulo_aba4" aria-controls="settings" role="tab" data-toggle="tab"><?php echo get_field('titulo_aba4') ?></a></li>
          <?php endif; ?>
        </ul>
        <div class="tab-content conteudo-tabs">
          <div role="tabpanel" class="tab-pane active" id="titulo_aba1"> <?php echo get_field('conteudo_aba1') ?> </div>
          <div role="tabpanel" class="tab-pane" id="titulo_aba2"><?php echo get_field('conteudo_aba2') ?></div>
          <div role="tabpanel" class="tab-pane" id="titulo_aba3"><?php echo get_field('conteudo_aba3') ?></div>
          <div role="tabpanel" class="tab-pane" id="titulo_aba4"><?php echo get_field('conteudo_aba4') ?></div>
        </div>
      <?php endif; ?>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <a href="<?php echo esc_url( home_url( 'matricule-se' ) ); ?>?curso=<?php echo str_replace(' ', '-', $titulo)  ?>&c=<?php echo get_the_id() ?>"
          class="btn btn-matricula btn-block">
          Matrícule-se
        </a>
      </div>
    </div>
    <!--  DEPOIMENTOS -->
    <?php $depoimentos = get_field('depoimentos'); ?>
    <?php if ($depoimentos): ?>
      <div class="depoimentos">
        <h4 class="titulo-depoimento-curso">DEPOIMENTOS</h4>
        <?php echo get_field('depoimentos') ?>
        <div class="clearfix"></div>
      </div>
    <?php endif; ?>


  </div>
  <div class="col-md-3">
    <div class="box-matricule">
      <?php if (get_field('carga_horaria')): ?>
        <h3>Carga Horária:</h3>
        <?php echo get_field('carga_horaria') ?>
      <?php endif; ?>

      <?php if (get_field('duração')): ?>
        <h3>Duração:</h3>
        <?php echo get_field('duração') ?>
      <?php endif; ?>

      <?php if (get_field('valor_pre-matricula')): ?>
        <h3>Valor Pré-Matrícula:</h3>
        <?php echo get_field('valor_pre-matricula') ?>
      <?php endif; ?>

      <?php if (get_field('valor_curso')): ?>
        <h3>Valor do curso:</h3>
        <?php echo get_field('valor_curso') ?>
        <small>Consulte parcelamento	</small>
      <?php endif; ?>
      <?php
      $titulo = get_the_title();
      ?>
      <a href="<?php echo esc_url( home_url( 'matricule-se' ) ); ?>?curso=<?php echo str_replace(' ', '-', $titulo)  ?>&c=<?php echo get_the_id() ?>"
        class="btn btn-matricula btn-block">
        Matrícule-se
      </a>
    </div>
    <?php get_sidebar('campanha') ?>
  </div>
</div>
