<?php
  require_once ('../../../../wp-includes/class-phpmailer.php');
  require_once ('../../../../wp-includes/class-smtp.php');

  $curso_escolhido  = $_POST['curso-escolhido'];
  $cpf              = $_POST['cpf'];
  $identidade       = $_POST['identidade'];
  $orgaoemissor     = $_POST['orgaoemissor'];
  $nome             = $_POST['nome'];
  $sexo             = $_POST['sexo'];
  $data_nascimento  = $_POST['data_nascimento'];
  $naturalidade     = $_POST['naturalidade'];
  $telefone         = $_POST['telefone'];
  $cel              = $_POST['cel'];
  $email            = $_POST['email'];
  $cep              = $_POST['cep'];
  $endereco         = $_POST['endereco'];
  $num              = $_POST['num'];
  $complemento      = $_POST['complemento'];
  $bairro           = $_POST['bairro'];
  $endereco         = $_POST['endereco'];
  $estado           = $_POST['estado'];
  $nome_mae         = $_POST['nome-mae'];
  $nome_pai         = $_POST['nome-pai'];
  $curso_anterior   = $_POST['curso_anterior'];
  $data_conclusao   = $_POST['data_conclusao'];
  $como_conheceu    = $_POST['como_conheceu'];

  $mail_body  = "<h3>Inscrição via site Graduamais";
  $mail_body .= "<table border='1' cellspacing='0' cellpadding='5'>";
    $mail_body .= "<tr>";
      $mail_body .= "<td> Curso: $curso_escolhido </td>";
    $mail_body .= "</tr>";
  $mail_body .= "<table>";

  // Inicia a classe PHPMailer
  $mail = new PHPMailer();

  // Define os dados do servidor e tipo de conex�o
  // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
  $mail->IsSMTP(); // Define que a mensagem ser� SMTP
  $mail->Host = "localhost"; // Endere�o do servidor SMTP
  $mail->SMTPAuth = true; // Usa autentica��o SMTP? (opcional)
  $mail->Username = 'smtp@homeofficemoveis.com'; // Usu�rio do servidor SMTP
  $mail->Password = 'amor2000'; // Senha do servidor SMTP

  // Define o remetente
  // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
  $mail->From = "contato@graduamais.fourmedia.com.br"; // Seu e-mail
  $mail->FromName = 'Gradua Mais'; // Seu nome

  // Define os destinat�rio(s)
  // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
  //$mail->AddAddress('pierreairam@gmail.com', 'Home Ofiice');
  //$mail->AddAddress('norma@homeofficemoveis.com', 'Home Ofiice');
  $mail->AddAddress('thiago@4media.com.br', 'Gradua Mais');
  //$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
  //$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // C�pia Oculta

  // Define os dados técnicos da Mensagem
  // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
  $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
  $mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)

  // Define a mensagem (Texto e Assunto)
  // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
  $mail->Subject  = "Envio de Matricula"; // Assunto da mensagem
  $mail->Body = $mail_body;
  //$mail->AltBody = "Este � o corpo da mensagem de teste, em Texto Plano! \r\n";

  // Define os anexos (opcional)
  // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=

  //Obtendo info. dos arquivos
  $f_name = $_FILES['arquivo']['name'];
  $f_tmp = $_FILES['arquivo']['tmp_name'];
  $f_type = $_FILES['arquivo']['type'];

  $mail->AddAttachment($f_tmp, $f_name);  // Insere um anexo

  // Envia o e-mail
  $enviado = $mail->Send();

  // Limpa os destinat�rios e os anexos
  $mail->ClearAllRecipients();
  $mail->ClearAttachments();

  // Exibe uma mensagem de resultado
  if ($enviado) {
    echo $mail_body;
  } else {
  	echo "Não foi possível enviar o e-mail.<br /><br />";
  	echo "<b>Informações do erro:</b> <br />" . $mail->ErrorInfo;
  }

?>
