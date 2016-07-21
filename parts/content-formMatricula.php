<form class="" action="" id="form_matricula" method="post" enctype="multipart/form-data">
  <div class="container">
    <div class="box-form">
       <div class="row">
           <div class="col-md-2 num-form">
              <p>01</p>
           </div>
           <div class="col-md-4 col-azul-form">
              <p>Curso Escolhido</p>
           </div>
       </div>
       <div class="row">
          <div class="col-md-12 box-cinza-form">
              <?php
                $curso = $_GET['curso'];
              ?>
             <h3 style="margin-top:0px;"> <?php echo str_replace('-', ' ', $curso) ?> </h3>
             <input type="hidden" name="curso-escolhido" value="<?php echo str_replace('-', ' ', $curso) ?>">
          </div>
       </div>
    </div>

    <div class="box-form">
        <div class="row">
           <div class="col-md-2 num-form">
               <p>02</p>
           </div>
         <div class="col-md-4 col-azul-form">
            <p>Identificação</p>
         </div>
        </div>

        <div class="row box-cinza-form">
           <div class="col-md-6">
              <div class="form-group">
                 <label for="exampleInputName2">CPF </label>
                 <input type="text" name="cpf" class="form-control" id="cpf" placeholder="">
                 <small>Somente Números</small>
              </div>
           </div>
           <div class="col-md-4">
              <div class="form-group">
                 <label for="exampleInputName2">Identidade(RG)</label>
                 <input type="text" name="identidade" class="form-control" id="" placeholder="">
              </div>
           </div>
           <div class="col-md-2">
             <div class="form-group">
                <label for="exampleInputName2"> Orgão Emissor </label>
                <input type="text" name="orgaoemissor" class="form-control" id="" placeholder="">
             </div>
           </div>
        </div>
        <div class="row box-cinza-form">
           <div class="col-md-4">
              <div class="form-group">
                 <label for="exampleInputName2">Nome Completo</label>
                 <input type="text" name="nome" class="form-control" placeholder="">
              </div>
           </div>
           <div class="col-md-2">
             <div class="form-group">
                <label for="exampleInputName2">Sexo</label>
                <select class="form-control" name="sexo">
                  <option></option>
                  <option>Masculino</option>
                  <option>Feminino</option>
                </select>
             </div>
           </div>
           <div class="col-md-3">
              <div class="form-group">
                 <label for="exampleInputName2">Data Nascimento</label>
                 <input type="text" name="data_nascimento" class="form-control data" id="" placeholder="">
              </div>
           </div>
           <div class="col-md-3">
             <div class="form-group">
                <label for="exampleInputName2"> Naturalidade </label>
                <input type="text" name="naturalidade" class="form-control" id="" placeholder="">
             </div>
           </div>
        </div>
        <div class="row box-cinza-form">
          <div class="col-md-3">
            <div class="form-group">
               <label for="exampleInputName2">Telefone Fixo</label>
               <input type="text" name="telefone" class="form-control" id="telefone-fix" placeholder="">
            </div>
          </div>
           <div class="col-md-3">
              <div class="form-group">
                 <label for="exampleInputName2">Telefone Celular</label>
                 <input type="text" name="cel" class="form-control" id="cel" placeholder="">
              </div>
           </div>
           <div class="col-md-6">
              <div class="form-group">
                 <label for="exampleInputName2">Email</label>
                 <input type="text" name="email" class="form-control" id="exampleInputName2" placeholder="">
              </div>
           </div>
        </div>

        <div class="row box-cinza-form">
          <div class="col-md-2">
            <div class="form-group">
               <label for="exampleInputName2"> CEP </label>
               <input type="text" name="cep" class="form-control" id="cep" placeholder="">
            </div>
          </div>
           <div class="col-md-6">
              <div class="form-group">
                 <label for="exampleInputName2">Endereço</label>
                 <input type="text" name="endereco" class="form-control" id="" placeholder="">
              </div>
           </div>
           <div class="col-md-2">
             <div class="form-group">
                <label for="exampleInputName2">Nº</label>
                <input type="text" name="num" class="form-control" id="" placeholder="">
             </div>
           </div>
           <div class="col-md-2">
              <div class="form-group">
                 <label for="exampleInputName2">Complemento</label>
                 <input type="text" name="complemento" class="form-control" id="exampleInputName2" placeholder="">
              </div>
           </div>
        </div>

        <div class="row box-cinza-form">
          <div class="col-md-4">
            <div class="form-group">
               <label for="exampleInputName2"> Bairro </label>
               <input type="text" name="bairro" class="form-control" id="tel" placeholder="">
            </div>
          </div>
           <div class="col-md-6">
              <div class="form-group">
                 <label for="exampleInputName2">Cidade</label>
                 <input type="text" name="cidade" class="form-control" id="" placeholder="">
              </div>
           </div>
           <div class="col-md-2">
             <div class="form-group">
                <label for="exampleInputName2">Estado</label>
                <input type="text" name="estado" class="form-control" id="" placeholder="">
             </div>
           </div>
        </div>

    </div>

    <div class="box-form">
        <div class="row">
           <div class="col-md-2 num-form">
               <p>03</p>
           </div>
         <div class="col-md-4 col-azul-form">
            <p>Filiação</p>
         </div>
        </div>

        <div class="row box-cinza-form">
           <div class="col-md-6">
              <div class="form-group">
                 <label for="exampleInputName2">Nome da Mãe</label>
                 <input type="text" name="nome-mae" class="form-control" id="exampleInputName2" placeholder="">
              </div>
           </div>
           <div class="col-md-6">
              <div class="form-group">
                 <label for="exampleInputName2">Nome do Pai</label>
                 <input type="text" name='nome-pai' class="form-control" id="exampleInputName2" placeholder="">
              </div>
           </div>
        </div>
    </div>


    <div class="box-form">
        <div class="row">
           <div class="col-md-2 num-form">
               <p>04</p>
           </div>
         <div class="col-md-4 col-azul-form">
            <p>Conclusão de Curso</p>
         </div>
        </div>

        <div class="row box-cinza-form">
           <div class="col-md-6">
              <div class="form-group">
                 <label for="exampleInputName2">Curso de Graduação</label>
                 <input type="text" name="curso_anterior" class="form-control" id="exampleInputName2" placeholder="">
              </div>
           </div>
           <div class="col-md-3">
              <div class="form-group">
                 <label for="exampleInputName2">Data de Conclusão</label>
                 <input type="text" name="data_conclusao" class="form-control data" id="exampleInputName2" placeholder="">
              </div>
           </div>
           <div class="col-md-3">
             <label for="">Como nos conheceu?</label>
             <select class="form-control" name="como_conheceu" required="">
              <option value="">Selecione uma opção</option>
              <option value="Anúncio em sites">Anúncio em sites</option>
              <option value="Busca na internet">Busca na internet</option>
              <option value="Cartaz">Cartaz</option>
              <option value="E-mail Marketing">E-mail Marketing</option>
              <option value="Vendedor Externo">Vendedor Externo</option>
              <option value="Indicação">Indicação</option>
              <option value="Outdoor">Outdoor</option>
              <option value="Palestra/Visita">Palestra/Visita</option>
              <option value="Panfleto">Panfleto</option>
              <option value="Rádio">Rádio</option>
              <option value="Redes Sociais">Redes Sociais</option>
              <option value="Telemarketing Ativo">Telemarketing Ativo</option>
            </select>
           </div>
        </div>

    </div>

    <div class="box-form">
        <div class="row">
           <div class="col-md-2 num-form">
               <p>05</p>
           </div>
         <div class="col-md-4 col-azul-form">
            <p>Regulamento</p>
         </div>
        </div>

        <div class="row box-cinza-form">
           <div class="col-md-3">
             <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#regulamento-matricula">
               Regulamento
              </button>
           </div>
           <div class="col-md-7">
             <div class="checkbox">
               <label>
                 <input type="checkbox" name="aceito" value="Li e aceito o regulamento e concordo com todas as informações do curso.">
                 Li e aceito o regulamento e concordo com todas as informações do curso.
               </label>
             </div>
           </div>
           <div class="col-md-2">
             <label for=""> Data matrícula </label>
             <?php echo date("d/m/Y") ?>
             <input type="hidden" name="data" value="<?php echo date("d/m/Y") ?>">
           </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <button type="submit" class="btn btn-block btn-matricula" name="button"> Matricular </button>
        </div>
    </div>

  </div>
</form>

<script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery('#form_matricula').submit(function(){
      var dados = jQuery( this ).serialize();

      jQuery.ajax({
        type: "POST",
        url: "<?php echo get_template_directory_uri() ?>/functions/matricula.php",
        data: dados,
        success: function( data )
        {
          alert( data );
        }
      });

      return false;
    });
  });
</script>
