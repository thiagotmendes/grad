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
       <div class="row box-cinza-form">
          <div class="col-md-4">
              <?php
                //$curso = $_GET['curso'];
                if(is_numeric($_GET['c'])):
                  $idCurso = $_GET['c'];
                else:
                  $urlSite = get_site_url();
                  echo $urlSite;
                  echo "<script>";
                    echo  "location.href='$urlSite/curso-nao-encontrado'";
                  echo "</script>";
                endif;
              ?>
             <h3 style="margin-top:0px;"> <?php echo get_post_field('post_title', $idCurso); ?> </h3>
             <input type="hidden" name="curso-escolhido" value="<?php echo get_post_field('post_title', $idCurso); ?>">
          </div>
          <div class="col-md-8">
            <div class="form-pagamento">
              Escolha abaixo a melhor forma de pagamento. Em seguida, você receberá os boletos referentes às mensalidades.
              <?php
              $val1 = get_post_field('valor_final_1', $idCurso);
              if ($val1):
                echo '<label class="radio-inline">';
                  $valini1 = get_post_field('valor_inicial_1', $idCurso);
                  if ($valini1) {
                    echo "<strike> R$" .get_post_field('valor_inicial_1', $idCurso) ."</strike> <br>";
                  }
                  echo '<input type="radio" name="parcela" id="inlineCheckbox1" value="R$ '.$val1.'">';
                  echo get_post_field('valor_final_1', $idCurso);
                echo '</label>';
              endif;

              $val2 = get_post_field('valor_final_2', $idCurso);
              if ($val2):
                echo '<label class="radio-inline">';
                  $valini2 = get_post_field('valor_inicial_2', $idCurso);
                  if ($valini2) {
                    echo "<strike> R$" .get_post_field('valor_inicial_2', $idCurso) ."</strike> <br>";
                  }
                  echo '<input type="radio" name="parcela" id="inlineCheckbox1" value="R$ '.$val2.'">';
                  echo get_post_field('valor_final_2', $idCurso);
                echo '</label>';
              endif;

              $val3 = get_post_field('valor_final_3', $idCurso);
              if ($val3):
                echo '<label class="radio-inline">';
                  $valini3 = get_post_field('valor_inicial_3', $idCurso);
                  if ($valini3) {
                    echo "<strike> R$" .get_post_field('valor_inicial_3', $idCurso) ."</strike> <br>";
                  }
                  echo '<input type="radio" name="parcela" id="inlineCheckbox1" value="R$ '.$val3.'">';
                  echo get_post_field('valor_final_3', $idCurso);
                echo '</label>';
              endif;

              $val4 = get_post_field('valor_final_4', $idCurso);
              if ($val4):
                echo '<label class="radio-inline">';
                  $valini4 = get_post_field('valor_inicial_4', $idCurso);
                  if ($valini4) {
                    echo "<strike> R$" .get_post_field('valor_inicial_4', $idCurso) ."</strike> <br>";
                  }
                  echo '<input type="radio" name="parcela" id="inlineCheckbox1" value="R$ '.$val4.'">';
                  echo get_post_field('valor_final_4', $idCurso);
                echo '</label>';
              endif;
              ?>
            </div>
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
                 <input type="text" name="nome" id="nomeCompleto" class="form-control" placeholder="">
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
                 <input type="text" name="email" class="form-control" id="emailInscrito" placeholder="">
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

<!-- Modal -->
<div class="modal fade" id="modalConfirm" tabindex="-1" role="dialog" aria-labelledby="Confirmação de matricula">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header alert-success">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Inscrição realizada com sucesso!</h4>
      </div>
      <div class="modal-body">
        <p class="paragrafo box-100 margin-30-pagamento" style="text-align: center;">
           <strong><span style="text-decoration: underline;">Atenção!</span></strong>
           Clique no botão abaixo para escolher a forma de pagamento da sua <strong>Taxa de Inscrição - R$120,00</strong>.<br>
           Você será direcionado à prestadora de serviços <strong>PagSeguro</strong>.
         </p>

         <div class="row">
           <div class="col-md-6">
             <button type="button" name="button"> Imprimir </button>
           </div>
           <div class="col-md-6">
             <form method="post" target="pagseguro" action="https://pagseguro.uol.com.br/v2/checkout/payment.html">
                <!-- Campos obrigatórios -->
                <input name="receiverEmail" type="hidden" value="suporte@lojamodelo.com.br">
                <input name="currency" type="hidden" value="BRL">
                <!-- Itens do pagamento (ao menos um item é obrigatório) -->
                <input name="itemId1" type="hidden" value="0001">
                <input name="itemDescription1" type="hidden" value="<?php echo str_replace('-', ' ', $curso) ?>">
                <input name="itemAmount1" type="hidden" value="150.00">
                <input name="itemQuantity1" type="hidden" value="1">
                <!-- Código de referência do pagamento no seu sistema (opcional) -->
                <input name="reference" type="hidden" value="REF1234">
                <!-- Dados do comprador (opcionais) -->
                <input name="senderName" type="hidden" id="nomeInscrito" value="" >
                <input name="senderAreaCode" type="hidden" id="envio" value="">
                <input name="senderPhone" type="hidden" id="celForm" value="">
                <input name="senderEmail" type="hidden" id="emailCompra" value="" >

                <button type="submit" name="button" class="btn btn-success"> Pagar com PagSeguro </button>
             </form>
           </div>
         </div>

      </div>
    </div>
  </div>
</div>
