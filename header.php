<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/images/favicon.png"/>
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri() ?>/images/favicon.png"/>

    <?php wp_head() ?>
    <title>
      <?php
	      if ( is_single() ) {
	        bloginfo('name'); echo " | "; single_post_title();
	      }elseif ( is_home() || is_front_page() ) {
	        bloginfo('name'); echo ' | ';
	        bloginfo('description');
	      }elseif ( is_page() ) {
	        single_post_title('');
	      }elseif ( is_search() ) {
	        bloginfo('name');
	        echo ' | Search results for ' . wp_specialchars($s);
	      }elseif ( is_404() ) {
	        bloginfo('name');
	        print ' | Erro 404';
	      }else {
	        bloginfo('name');
	        wp_title('|');
	      }
      ?>
    </title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <div class="bar-top">
        <div class="container">
          <div class="whats-top">
            <span><i class="fa fa-whatsapp" aria-hidden="true"></i> <small>037 98826-7505</small></span>
            <span class="tel-top"><i class="fa fa-phone" aria-hidden="true"></i> 0800 037 4212</span>
            <!--<a href="" target="_blank"><span class="sociais-top"><i class="fa fa-youtube-play" aria-hidden="true" title="Youtube"></i></span></a>-->
            <a href="https://plus.google.com/109714730035419030606/posts" target="_blank"><span class="sociais-top"><i class="fa fa-google-plus" aria-hidden="true" title="Google Plus"></i></span></a>
            <a href="https://twitter.com/instcotemar" target="_blank"><span class="sociais-top"><i class="fa fa-twitter" aria-hidden="true" title="Twitter"></i></span></a>
            <a href="https://www.linkedin.com/company/instituto-cotemar" target="_blank"><span class="sociais-top"><i class="fa fa-linkedin" aria-hidden="true" title="Linkedin"></i></span></a>
            <a href="https://www.instagram.com/instituto_cotemar/" target="_blank"><span class="sociais-top"><i class="fa fa-instagram" aria-hidden="true" title="Instagram"></i></span></a>
            <a href="https://www.facebook.com/InstitutoCotemar" target="_blank"><span class="sociais-top"><i class="fa fa-facebook" aria-hidden="true" title="Facebook"></i></span></a>

            <a href="#"><span class="area-aluno"><i class="fa fa-user icon-user" aria-hidden="true"></i> Campus Virtual</span></a>
          </div>
        </div>
      </div>
      <div>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" class="img-responsive"/>
              </a>
            </div>
            <div class="col-md-6">
              <span>
                <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div class="input-group pesquisa-top">

                    <input type="text" name="s" id="s" class="form-control" placeholder="O que você procura...">
                    <span class="input-group-btn">
                      <button class="btn btn-warning" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </span>

                </div><!-- /input-group -->
                </form>
              </span>
              <span>
                <a class="btn btn-call-top" href="#" role="button" data-toggle="modal" data-target="#ligacao-cliente">Ligamos para você. Clique Aqui!</a>
              </span>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-graduamais yamm">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
  		    	$args = array(
  		    		'menu' => 'principal',
  		    		'menu_class' => 'nav navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'theme_location' => 'top-bar',
              'walker'            => new wp_bootstrap_navwalker()
  		    	);
  		    	wp_nav_menu( $args ); ?>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <?php
    if (!is_front_page()) {
      if ( function_exists('yoast_breadcrumb') ) {
        echo "<div class='trilha'>";
          echo "<div class='container'>";
            yoast_breadcrumb('<p id="breadcrumbs">','</p>');
          echo "</div>";
        echo "</div>";
      }
    }
    ?>


    <!-- Modal -->
    <div class="modal fade" id="ligacao-cliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header alert-info">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"> ATENDIMENTO POR TELEFONE </h4>
          </div>
          <div class="modal-body">
            1 - Preencha os dados. <br>
            2 - Digite o número do seu telefone. <br>
            3 - Clique no botão ligar. <br>
            4 - Seu telefone irá tocar em instantes.
            <?php echo do_shortcode('[contact-form-7 id="218" title="Ligamos para você"]') ?>
          </div>
        </div>
      </div>
    </div>
