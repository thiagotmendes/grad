<?php /* template name: campanha */ ?>
<?php get_header() ?>

<?php if (have_posts()): ?>
<?php while (have_posts()): the_post() ?>

  <main>
    <div class="container">
      <h1><?php the_title() ?></h1>
      <?php the_content() ?>
      <form class="" action="#" id="cadastro_campanha" method="post" role="form">
        <div class="row">
          <div class="col-md-6">
            <h3>Seus dados</h3>
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" name="nome" class="form-control" id="nome" placeholder="" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" name="email" class="form-control" id="email" placeholder="" required>
            </div>
            <div class="form-group">
              <label for="telefone">Telefone</label>
              <input type="text" name="telefone" class="form-control" id="telefone" placeholder="" required>
            </div>
          </div>
          <div class="col-md-6">
            <h3>Os dados do seu amigo</h3>
            <div class="form-group">
              <label for="nome1">Nome</label>
              <input type="text" name="nome1" class="form-control" id="nome1" placeholder="" required>
            </div>
            <div class="form-group">
              <label for="email1">Email</label>
              <input type="text" name="email1" class="form-control" id="email1" placeholder="" required>
            </div>
            <div class="form-group">
              <label for="telefone1">Telefone</label>
              <input type="text" name="telefone1" class="form-control" id="telefone1" placeholder="" required>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <button type="submit" name="button" class="btn btn-primary btn-block"> Cadastrar </button>
          </div>
        </div>
      </form>
    </div>
  </main>

  <div class="modal fade" id="sucesso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            Muito obrigado por se cadastrar!
          </div>
        </div>
      </div>
    </div>
  </div>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer('interno'); ?>
