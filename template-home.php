<?php /*Template Name: Home*/ ?>

<?php get_header() ?>

    <section class="banner">
      <img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt="" class="img-responsive"/>
    </section>

    <section class="cursos">
      <div class="container">
        <div class="back-titulo">
          <h1><span class="titulo-section">Nossos Cursos </span></h1>
        </div>
        <?php
        $term_tilte = get_terms('categoria', array(
          'orderby'    => 'order',
          'order'      => 'ASC',
          'exclude' => '5,6,7'
        ));
        foreach ( $term_tilte as $curso ) {
        ?>
          <?php

          ?>
          <h3 class="titulo-pos"><?php echo $curso->name ?></h3>
          <?php
            $argCursos = array(
              'post_type'       => 'cursos',
              'posts_per_page'  => 4,
              'tax_query' => array(
                array(
                'taxonomy' => 'categoria',
                'field' => 'id',
                'terms' => $curso->term_id,
                 )
              )
            );
            $cusosHome = new wp_query($argCursos);
            if ($cusosHome->have_posts()):
              echo '<div class="row">';
                while($cusosHome->have_posts()): $cusosHome->the_post();
                $image = get_field('icones');
                ?>
                <div class="col-md-3">
                  <div class="box-curso" onclick="location.href='<?php the_permalink() ?>'">
                    <span class="nome-curso"> <?php the_title() ?> </span>
                    <?php if( !empty($image) ): ?>
                      <span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="icon-curso" /></span>
                    <?php endif; ?>
                  </div>
                </div>
                <?php
                endwhile;
              echo '</div>';
            endif;
          ?>
        <?php
        }
        ?>

        <div class="row">
          <div class="col-md-6">
            <h3 class="titulo-nova-gradu">2&ordf; Graduação</h3>
            <div class="row">
              <?php
                $argCursos = array(
                  'post_type'       => 'cursos',
                  'posts_per_page'  => 2,
                  'tax_query'       => array(
                    array(
                    'taxonomy' => 'categoria',
                    'field' => 'id',
                    'terms' => 5,
                     )
                  )
                );
                $cusosHome = new wp_query($argCursos);
                if ($cusosHome->have_posts()):
                  while($cusosHome->have_posts()): $cusosHome->the_post();
                  $image = get_field('icones');
                  ?>
                  <div class="col-md-6">
                    <div class="box-curso" onclick="location.href='<?php the_permalink() ?>'">
                      <span class="nome-curso"> <?php the_title() ?> </span>
                      <?php if( !empty($image) ): ?>
                        <span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="icon-curso" /></span>
                      <?php endif; ?>
                    </div>
                  </div>
                  <?php
                  endwhile;
                endif;
              ?>
            </div>

          </div>
          <div class="col-md-3">
            <h3 class="titulo-novo-titulo">Obtenção de novo título</h3>
            <div class="row">
              <?php
                $argCursos = array(
                  'post_type'       => 'cursos',
                  'posts_per_page'  => 1,
                  'tax_query'       => array(
                    array(
                    'taxonomy' => 'categoria',
                    'field' => 'id',
                    'terms' => 6,
                     )
                  )
                );
                $cusosHome = new wp_query($argCursos);
                if ($cusosHome->have_posts()):
                  while($cusosHome->have_posts()): $cusosHome->the_post();
                  $image = get_field('icones');
                  ?>
                  <div class="col-md-12">
                    <div class="box-curso" onclick="location.href='<?php the_permalink() ?>'">
                      <span class="nome-curso"> <?php the_title() ?> </span>
                      <?php if( !empty($image) ): ?>
                        <span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="icon-curso" /></span>
                      <?php endif; ?>
                    </div>
                  </div>
                  <?php
                  endwhile;
                endif;
              ?>
            </div>
          </div>
          <div class="col-md-3">
            <h3 class="titulo-promo">Promoção</h3>
            <div class="row">
              <?php
                $argCursos = array(
                  'post_type'       => 'cursos',
                  'posts_per_page'  => 1,
                  'tax_query'       => array(
                    array(
                    'taxonomy' => 'categoria',
                    'field' => 'id',
                    'terms' => 7,
                     )
                  )
                );
                $cusosHome = new wp_query($argCursos);
                if ($cusosHome->have_posts()):
                  while($cusosHome->have_posts()): $cusosHome->the_post();
                  $image = get_field('icones');
                  ?>
                  <div class="col-md-12">
                    <div class="box-curso" onclick="location.href='<?php the_permalink() ?>'">
                      <span class="nome-curso"> <?php the_title() ?> </span>
                      <?php if( !empty($image) ): ?>
                        <span><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="icon-curso" /></span>
                      <?php endif; ?>
                    </div>
                  </div>
                  <?php
                  endwhile;
                endif;
              ?>
            </div>
          </div>
        </div>

        <p align="center">
          <a class="btn btn-pre-matricula" href="#" role="button">Faça sua Pré-Matrícula</a>
        </p>
      </div>
    </section>

    <section class="depoimento">
      <div class="container">
        <h3 class="titulo-depoimento">Depoimentos</h3>
        <div class="row">
          <?php
          $argumentoDepoimento = array(
            'post_type'       => 'depoimento',
            'posts_per_page'  => 2
          );
          $depoimento = new wp_query($argumentoDepoimento);
          if ($depoimento->have_posts()):
            while($depoimento->have_posts()): $depoimento->the_post();
          ?>
              <div class="col-md-6 conteudo-depo">
                <div class="">
                  <div class="row">
                    <div class="col-md-3">
                      <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
                    </div>
                    <div class="col-md-9">
                      <?php the_content() ?>
                      <span class="nome-depo"><?php echo get_field('nome') ?></span>
                      <div class="clearfix"></div>
                      <span class="nome-curso"><?php echo get_field('profissão_curso') ?></span>
                    </div>
                  </div>
                </div>
              </div>
          <?php
            endwhile;
          endif;
          ?>
        </div>

        <p align="center">
          <a class="faca-parte" href="#" role="button">Faça parte você também. Clique Aqui!</a>
        </p>
      </div>
    </section>

    <section class="gestor">
      <div class="container">
        <div class="back-titulo">
          <h1><span class="titulo-section">Seja um Gestor</span></h1>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="box-oque-gestor">
              <h3 class="titulo-box-oque-gestor">O que é ser um gestor?</h3>
              <p class="oque-gestor">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box-gestor">
              <div class="row">
                <div class="col-md-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/daniel.jpg" alt="" />
                </div>
                <div class="col-md-9">
                  <span class="nome-gestor">Daniel Barbosa</span>
                  <div class="clearfix"></div>
                  <span class="subtitulo-gestor">Gestor desde 2013</span>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <p class="texto-gestor">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <img src="<?php echo get_template_directory_uri(); ?>/images/call-gestor.jpg" alt=""  class="img-responsive img-call-gestor"/>
          </div>
        </div>
      </div>
    </section>

    <section class="blog">
      <div class="container">
        <div class="back-titulo">
          <h1><span class="titulo-section">Blog</span></h1>
        </div>
        <div class="row">
          <?php
          $argPost = array(
            'post_type'       => 'post',
            'posts_per_page'  => 3
          );
          $postBlog = new wp_query($argPost);
          if($postBlog->have_posts()):
            while ($postBlog->have_posts()): $postBlog->the_post();
          ?>
              <div class="col-md-4">
                <div class="box-noticia-home">
                  <div class="imgpost">
                    <?php if (has_post_thumbnail()): ?>
                      <?php the_post_thumbnail( 'high', array( 'class' => 'img-responsive' ) ); ?>
                    <?php endif; ?>
                  </div>
                  <h4 class="titulo-noticia-home"><?php the_title() ?></h4>
                  <p class="previa-noticia-home">
                    <?php the_excerpt_limit(30) ?>
                  </p>
                  <p align="center">
                    <a class="btn btn-saiba-home" href="<?php the_permalink() ?>" role="button">Saiba Mais</a>
                  </p>
                </div>
              </div>
          <?php
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </section>

    <section class="call-news">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ebook-banner-280.jpg" alt="" class="img-responsive" />
          </div>
          <div class="col-md-4">
            <div class="news-home">
              <h4 class="titulo-news">Cadastre-se</h4>
              <h5 class="sub-news">Receba dicas e novidades</h5>
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nome</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                </div>

                <button type="submit" class="btn btn-news-home">Cadastrar</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>
