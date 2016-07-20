<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

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
            <a href="#"><span class="sociais-top"><i class="fa fa-youtube-play" aria-hidden="true" title="Youtube"></i></span></a>
            <a href="#"><span class="sociais-top"><i class="fa fa-twitter" aria-hidden="true" title="Twitter"></i></span></a>
            <a href="#"><span class="sociais-top"><i class="fa fa-linkedin" aria-hidden="true" title="Linkedin"></i></span></a>
            <a href="#"><span class="sociais-top"><i class="fa fa-instagram" aria-hidden="true" title="Instagram"></i></span></a>
            <a href="#"><span class="sociais-top"><i class="fa fa-facebook" aria-hidden="true" title="Facebook"></i></span></a>

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
                <div class="input-group pesquisa-top">
                  <input type="text" class="form-control" placeholder="O que você procura...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </span>
                </div><!-- /input-group -->
              </span>
              <span><a class="btn btn-call-top" href="#" role="button">Ligamos para você. Clique Aqui!</a></span>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-graduamais">
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
  		    		'menu_class' => 'nav navbar-nav navbar-right',
  		    		'walker'	 => new BootstrapNavMenuWalker()
  		    	);
  		    	wp_nav_menu( $args ); ?>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
