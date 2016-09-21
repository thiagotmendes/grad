<?php
  require_once ('class.phpmailer.php');
  require_once ('class.smtp.php');
  // dados principal
  $nome     = $_POST['nome'];
  $email    = $_POST['email'];
  $telefone = $_POST['telefone'];
  // dados do amigo
  $nome1     = $_POST['nome1'];
  $email1    = $_POST['email1'];
  $telefone1 = $_POST['telefone1'];

  $mail_body = "Campanha Amigo de verdade racha a conta";
  $mail_body .= "<table border='1' cellspacing='0' cellpadding='15' width='100%'>";
    $mail_body .= "<tr>";
      $mail_body .= "<th colspan='3'> <h3>Inscrição via site Instituto Cotemar</h3> </th>";
    $mail_body .= "</tr>";
    $mail_body .= "<tr>";
      $mail_body .= "<td> Nome: $nome </td>";
      $mail_body .= "<td> Email: $email </td>";
      $mail_body .= "<td> Telefone: $telefone </td>";
    $mail_body .= "</tr>";
    $mail_body .= "<tr>";
      $mail_body .= "<td> Indicado: $nome1 </td>";
      $mail_body .= "<td> Email Indicado: $email1 </td>";
      $mail_body .= "<td> Telefone Indicado: $telefone1 </td>";
    $mail_body .= "</tr>";
  $mail_body .= "</table>";


  $mail_body1 = "<table border='0' cellspacing='0' cellpadding='10' width='612' align='center'>";
    $mail_body1 .= "<tr>";
      $mail_body1 .= "<th colspan='3'> <img src='http://institutocotemar.com.br/email/raxaconta/cabecalho.jpg' width='612' > </th>";
    $mail_body1 .= "</tr>";
    $mail_body1 .= "<tr>";
      $mail_body1 .= "<td colspan='3'>
                        Olá, $nome! <br>
                        Tudo bem? <br>
                        Obrigado por se cadastrar na promoção <strong>“Amigo de verdade racha a conta”</strong> do Instituto Cotemar.
                        O desconto de 50% no valor do seu curso e do seu amigo foi reservado. Mas, fique atento!
                        Para que o desconto tenha validade, é preciso que <strong>ambos realizem a matrícula em nosso <a href='http://institutocotemar.com.br/' target='_blank'> site </a></strong>,
                        no dia 22 de setembro.
                        Vocês terão somente 12h para efetivar a matrícula. <br>
                        Salve essa data e não perca esse super desconto!
                      </td>";
    $mail_body1 .= "</tr>";
    $mail_body1 .= "<tr>";
      $mail_body1 .= "<td> Nome: $nome </td>";
      $mail_body1 .= "<td> Email: $email </td>";
      $mail_body1 .= "<td> Telefone: $telefone </td>";
    $mail_body1 .= "</tr>";
    $mail_body1 .= "<tr>";
      $mail_body1 .= "<td> Amigo Indicado: $nome1 </td>";
      $mail_body1 .= "<td> Email: $email1 </td>";
      $mail_body1 .= "<td> Telefone: $telefone1 </td>";
    $mail_body1 .= "</tr>";
    $mail_body1 .= "<tr>";
      $mail_body1 .= "<td colspan='3'>
                        <strong>Regras:</strong>  <br>
                        - A promoção não é válida para os cursos de R$79,90. <br>
                        - Matrículas de gestores não têm esse benefício.  <br>
                        - O desconto só será válido enquanto os dois alunos estiverem matriculados e com pagamento em dia.
                        Caso um deles tranque ou não pague, o outro aluno pagará o valor integral da mensalidade. <br>
                      </td>";
    $mail_body1 .= "</tr>";
    $mail_body1 .= "<tr>";
      $mail_body1 .= "<td colspan='3' align='center'> <img src='http://institutocotemar.com.br/email/raxaconta/Logo-Instituto-Cotemar.png' width='226' > </td>";
    $mail_body1 .= "</tr>";
  $mail_body1 .= "</table>";

  $mail_body2 = "<table border='0' cellspacing='0' cellpadding='10' width='612' align='center'>";
    $mail_body2 .= "<tr>";
      $mail_body2 .= "<th colspan='3'> <img src='http://institutocotemar.com.br/email/raxaconta/cabecalho.jpg' width='612' > </th>";
    $mail_body2 .= "</tr>";
    $mail_body2 .= "<tr>";
      $mail_body2 .= "<td colspan='3'>
                          Olá, $nome1! <br>
                          Tudo bem? <br>
                          Você foi indicado por $nome para se cadastrar na promoção <strong>“Amigo de verdade racha a conta”</strong> do Instituto Cotemar.
                          O desconto de 50% no valor do seu curso e do seu amigo foi reservado. Mas, fique atento! Para que o desconto tenha validade,
                          é preciso que <strong>ambos realizem a matrícula em nosso <a href='http://institutocotemar.com.br/' target='_blank'> site </a>, no dia 22 de setembro.</strong>
                          Vocês terão somente 12h para efetivar a matrícula. <br>
                          Salve essa data e não perca esse super desconto!
                      </td>";
    $mail_body2 .= "</tr>";
    $mail_body2 .= "<tr>";
      $mail_body2 .= "<th colspan='3'> <h4>Dados dos participantes<h4> </th>";
    $mail_body2 .= "</tr>";
    $mail_body2 .= "<tr>";
      $mail_body2 .= "<td> Nome: $nome </td>";
      $mail_body2 .= "<td> Email: $email </td>";
      $mail_body2 .= "<td> Telefone: $telefone </td>";
    $mail_body2 .= "</tr>";
    $mail_body2 .= "<tr>";
      $mail_body2 .= "<td> Amigo Indicado: $nome1 </td>";
      $mail_body2 .= "<td> Email: $email1 </td>";
      $mail_body2 .= "<td> Telefone: $telefone1 </td>";
    $mail_body2 .= "</tr>";
    $mail_body2 .= "<tr>";
      $mail_body2 .= "<td colspan='3'>
                        <strong>Regras:</strong>  <br>
                        - A promoção não é válida para os cursos de R$79,90. <br>
                        - Matrículas de gestores não têm esse benefício.  <br>
                        - O desconto só será válido enquanto os dois alunos estiverem matriculados e com pagamento em dia.
                        Caso um deles tranque ou não pague, o outro aluno pagará o valor integral da mensalidade.
                      </td>";
    $mail_body2 .= "</tr>";
    $mail_body2 .= "<tr>";
      $mail_body2 .= "<td colspan='3' align='center'> <img src='http://institutocotemar.com.br/email/raxaconta/Logo-Instituto-Cotemar.png' width='226' > </td>";
    $mail_body2 .= "</tr>";
  $mail_body2 .= "</table>";

  dispara_cotemar($mail_body);
  dispara_principal($mail_body1,$email);
  dispara_indicado($mail_body2, $email1);

  function dispara_cotemar($mail_body)
  {
    // Inicia a classe PHPMailer
    $mail = new PHPMailer();
    // Define os dados do servidor e tipo de conexção
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->IsSMTP(); // Define que a mensagem será SMTP
    $mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP
    $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
    $mail->Username = 'atendimento@grupoandrademartins.com.br'; // Usuario do servidor SMTP
    $mail->Password = 'ZqmnH0AVKp'; // Senha do servidor SMTP
    $mail->Port = 587;

    $mail->From = "atendimento@grupoandrademartins.com.br";
    $mail->FromName = 'Instituto Cotemar';

    //$mail->AddAddress('thiago@4media.com.br', 'Instituto Cotemar');
    $mail->AddAddress('corporativo@grupoandrademartins.com.br', 'Instituto Cotemar');
    $mail->AddAddress('diti@grupoandrademartins.com.br', 'Instituto Cotemar');
    $mail->AddAddress('mktdigital@grupoandrademartins.com.br', 'Instituto Cotemar');
    $mail->IsHTML(true);
    $mail->CharSet = 'utf-8';
    $mail->Subject  = "Campanha Amigo de verdade racha a conta";
    $mail->Body = $mail_body;
    $enviado = $mail->Send();
    $mail->ClearAllRecipients();

    return $enviado;

  }

  function dispara_principal($mail_body1, $email)
  {
    // Inicia a classe PHPMailer
    $mail = new PHPMailer();
    // Define os dados do servidor e tipo de conexção
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->IsSMTP(); // Define que a mensagem será SMTP
    $mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP
    $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
    $mail->Username = 'atendimento@grupoandrademartins.com.br'; // Usuario do servidor SMTP
    $mail->Password = 'ZqmnH0AVKp'; // Senha do servidor SMTP
    $mail->Port = 587;

    $mail->From = "atendimento@grupoandrademartins.com.br";
    $mail->FromName = 'Instituto Cotemar';

    $mail->AddAddress($email, 'Instituto Cotemar');
    /*$mail->AddAddress('matricula@grupoandrademartins.com.br', 'Instituto Cotemar');
    $mail->AddAddress('diti@grupoandrademartins.com.br', 'Instituto Cotemar');
    $mail->AddAddress('mktdigital@grupoandrademartins.com.br', 'Instituto Cotemar');*/
    $mail->IsHTML(true);
    $mail->CharSet = 'utf-8';
    $mail->Subject  = "Campanha Amigo de verdade racha a conta";
    $mail->Body = $mail_body1;
    $enviado = $mail->Send();
    $mail->ClearAllRecipients();

    return $enviado;
  }

  function dispara_indicado($mail_body2, $email1)
  {
    // Inicia a classe PHPMailer
    $mail = new PHPMailer();
    // Define os dados do servidor e tipo de conexção
    // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
    $mail->IsSMTP(); // Define que a mensagem será SMTP
    $mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP
    $mail->SMTPAuth = true; // Usa autenticação SMTP? (opcional)
    $mail->Username = 'atendimento@grupoandrademartins.com.br'; // Usuario do servidor SMTP
    $mail->Password = 'ZqmnH0AVKp'; // Senha do servidor SMTP
    $mail->Port = 587;

    $mail->From = "atendimento@grupoandrademartins.com.br";
    $mail->FromName = 'Instituto Cotemar';

    $mail->AddAddress($email1, 'Instituto Cotemar');
    /*$mail->AddAddress('matricula@grupoandrademartins.com.br', 'Instituto Cotemar');
    $mail->AddAddress('diti@grupoandrademartins.com.br', 'Instituto Cotemar');
    $mail->AddAddress('mktdigital@grupoandrademartins.com.br', 'Instituto Cotemar');*/
    $mail->IsHTML(true);
    $mail->CharSet = 'utf-8';
    $mail->Subject  = "Campanha Amigo de verdade racha a conta";
    $mail->Body = $mail_body2;
    $enviado = $mail->Send();
    $mail->ClearAllRecipients();

    return $enviado;
  }
