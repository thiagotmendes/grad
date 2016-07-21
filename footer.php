<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <img src="<?php echo get_template_directory_uri() ?>/images/logo-baixo.png" alt=""  class="logo-footer img-responsive"/>
      </div>
      <div class="col-md-3">
        <span class="titulo-footer">Institucional</span>
        <div>
          <?php
          $args = array(
            'menu' => 'menu_footer',
            'menu_class' => 'lista-footer',
            'walker'	 => new BootstrapNavMenuWalker()
          );
          wp_nav_menu( $args ); ?>
        </div>
      </div>
      <div class="col-md-4">
        <span class="titulo-footer">Endereço</span>
        <div class="end-footer">
          <p><i class="fa fa-phone" aria-hidden="true"></i> <span class="fone-footer">0800 037 4212</span>
              <br>
              <span class="fone-fixo-footer"><small>037 3241-4212</small></span>
          </p>
          <p><i class="fa fa-whatsapp itens-end" aria-hidden="true"></i> <span>037 98826-7505</span></p>
          <p><i class="fa fa-envelope-o itens-end" aria-hidden="true"></i> <span>atendimento@grupoandrademartins.com.br</span></p>
          <p><i class="fa fa-map-marker itens-end" aria-hidden="true"></i> <span>Rua Osório Santos, 207 Nogueira Machado<br>
            <span class="comp-end">Itaúna MG, 35680-229<span></span></p>
        </div>
      </div>
      <div class="col-md-2">
        <div class="sociais-footer">
          <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/s1.png" alt="" class="sociais"/></a> <a href="#"> <img src="<?php echo get_template_directory_uri() ?>/images/s2.png" alt="" class="sociais-col-direita"/></a><br>
          <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/s3.png" alt="" class="sociais"/></a> <a href="#"> <img src="<?php echo get_template_directory_uri() ?>/images/s4.png" alt="" class="sociais-col-direita"/></a><br>
          <a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/s5.png" alt="" /></i></a>
        </div>
      </div>
    </div>
  </div>
<<<<<<< HEAD
</footer>
<section class="copy">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <div>
          <p class="texto-copy">Copyright (c) 2016 Instituto COTEMAR. Todos os direitos reservados. Termosde uso e privacidade.</p>
        </div>
      </div>
      <div class="col-md-2">
        <a href="http://4media.com.br/" target="_blank" class="ass"><strong>4media</strong></a></p>
      </div>
    </div>
  </div>
</section>
=======
  <section class="copy">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <div>
            <p class="texto-copy">Copyright (c) 2016 Instituto COTEMAR. Todos os direitos reservados. Termosde uso e privacidade.</p>
          </div>
        </div>
        <div class="col-md-2">
          <a href="http://4media.com.br/" target="_blank" class="ass"><strong>4media</strong></a></p>
        </div>
      </div>
    </div>
  </section>
</footer>
<?php wp_footer() ?>
>>>>>>> cc70505338358502181738e458a67ae37cff1e42
</body>
</html>
