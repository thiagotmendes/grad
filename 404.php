<?php get_header() ?>

  <main>
    <div class="container">
      <center><img src="<?php echo get_template_directory_uri() ?>/images/404.jpg" alt="" /></center>
      <p align="center">
        A página que você esta tentando acessar não existe!
      </p>
      <p align="center">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary"> Voltar para a Home </a>
      </p>
    </div>
  </main>


<?php get_footer('interno'); ?>
