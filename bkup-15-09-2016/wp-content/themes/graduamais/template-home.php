<?php /*Template Name: Home*/ ?>

<?php get_header() ?>

    <section class="banner">
      <div class="container">
        <div class="form-banner">
          <div class="titulo-formbanner">
            <h1> Dúvidas? Podemos te ajudar <img src="<?php echo get_template_directory_uri() ?>/images/icon-question.png" alt="" /> </h1>
          </div>
          <div class="content-form">
            <?php echo do_shortcode('[contact-form-7 id="208" title="Form banner"]') ?>
          </div>
        </div>
      </div>
      <?php echo do_shortcode('[rev_slider alias="slider-home"]') ?>
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
          'exclude' => '4,5,6,7'
        ));
        foreach ( $term_tilte as $curso ) {
        ?>
          <h3 class="titulo-pos"><?php echo $curso->name ?></h3>
          <?php
            $argCursos = array(
              'post_type'       => 'cursos',
              'posts_per_page'  => 8,
              'orderby' => 'menu_order',
              'order' => 'ASC',
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

        <?php
        $term_tilte = get_terms('categoria', array(
          'orderby'    => 'order',
          'order'      => 'ASC',
          'exclude' => '3,5,6,7'
        ));
        foreach ( $term_tilte as $curso ) {
        ?>
          <h3 class="titulo-extensao"><?php echo $curso->name ?></h3>
          <?php
            $argCursos = array(
              'post_type'       => 'cursos',
              'posts_per_page'  => 8,
              'orderby' => 'menu_order',
              'order' => 'ASC',
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

        <!--<p align="center">
          <a class="btn btn-pre-matricula" href="#" role="button">Faça sua Pré-Matrícula</a>
        </p>
      </div>-->
    </section>

    <section class="depoimento">
      <div class="container">
        <div class="back-titulo">
          <h1><span class="titulo-depoimento">Depoimentos</span></h1>
        </div>
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

        <!--<p align="center">
          <a class="faca-parte" href="#" role="button">Faça parte você também. <strong>Clique Aqui!</strong></a>
        </p>-->
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
                O gestor é um braço do Instituto Graduamais na região onde mora ou atua.
                Ele tem a responsabilidade de divulgar os cursos do instituto e ampliar nosso mercado de atuação.
                Por meio de ferramentas, informações, suporte comercial e pedagógico e atualização constante, o gestor se torna um especialista comercial na área educacional.
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
            <a href="<?php echo esc_url( home_url( 'fature-alto' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/call-gestor.jpg" alt=""  class="img-responsive img-call-gestor"/></a>
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
  				$rss = 'http://blog.faculdadeasa.com.br/feed';
  				$xml = simplexml_load_file( $rss, 'SimpleXMLElement', LIBXML_NOCDATA );
  				$countsite = 0;
  				foreach ($xml->channel->item as $feed) {
  					if($countsite <= 2):
  				?>
  					<div class='col-md-4'>
  						<?php
  						$imgDes = $feed->enclosure->attributes();
  						?>
              <div class="imgpost">
                <a href="<?php echo $feed->link ?>" rel="bookmark" title="echo $feed->title">
    							<img src="<?php echo $imgDes['url'] ?>" alt="<?php echo $feed->title ?>" class="img-responsive" />
    						</a>
              </div>
  						<h4 class="titulo-noticia-home"><a href="<?php echo $feed->link ?>" rel="bookmark" title="<?php echo $feed->title ?>" > <?php echo $feed->title ?> </a></h4>
              <p class="previa-noticia-home">
                <?php //the_excerpt_limit(30) ?>
                <?php //echo $feed->description; ?>
              </p>
              <p align="center">
                <a class="btn btn-saiba-home" href="<?php echo $feed->link ?>" role="button">Saiba Mais</a>
              </p>
  							<?php //echo $feed->description; ?>
  					</div>
  				<?php
  					endif;
  				$countsite++;
  				}      
  				?>
        </div>
      </div>
    </section>

    <section class="call-news">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <a href="http://materiais.institutocotemar.com.br/top-5-licoes-para-alcancar-uma-carreira-de-sucesso" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/ebook-banner-280.jpg" alt="" class="img-responsive" /></a>
          </div>
          <div class="col-md-4">
            <div class="news-home">
              <h4 class="titulo-news">Cadastre-se</h4>
              <h5 class="sub-news">Receba dicas e novidades</h5>
              <?php echo do_shortcode('[contact-form-7 id="215" title="form-news-home"]') ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>
