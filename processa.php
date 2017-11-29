<?php
// require 'vendor/autoload.php';
// use Parse\ParseClient;
// use Parse\ParseObject;
require_once("phpmailer/class.phpmailer.php");
if (isset($_GET["acao"])) {
  $acao = $_GET["acao"];
  switch ($acao) {
    case 'teste':
      echo "teste bem sucedido.";
      break;
    case 'enviaEmail':
      if ( empty($_POST['nome']) ) {
        echo "<script type='text/javascript'>alert('Nome não foi inserido!!')</script>";
      } else if ( empty($_POST['email']) ) {
        echo "<script type='text/javascript'>alert('Email não foi inserido!!')</script>";
      } else if ( !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) ){
        echo "<script type='text/javascript'>alert('Email inválido!!')</script>";
      }else{
        $Nome = strip_tags(htmlspecialchars($_POST['nome']));
        $Email = strip_tags(htmlspecialchars($_POST['email']));
        $app_id = 'ToxBQsZsFDIPYS7cKgx7XSJsUTsNEd4WUCjIuFhq';
        $master_key = 'pl6eZnIA8IeYWXL1yRaqivIxN9d0SZiDNgkSoNEl';
        $rest_key = 'opwqcLDNBfxGWlj863a6RZKGT5nzEmQPdtG6cE0b';
        // Tentando fazer via curl
        $url = 'https://parseapi.back4app.com/classes/email';
        $data = "{\"nome\": \"".$Nome."\",\"email\":\"".$Email."\"}";
        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'header'  => "Content-Type: application/json\r\nX-Parse-Application-Id: ToxBQsZsFDIPYS7cKgx7XSJsUTsNEd4WUCjIuFhq\r\nX-Parse-REST-API-Key: opwqcLDNBfxGWlj863a6RZKGT5nzEmQPdtG6cE0b\r\n",
                'method'  => 'POST',
                'content' => $data
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result == FALSE) { echo "<script type='text/javascript'>alert('Erro ao conectar com o servidor! Tente novamente')</script>"; }
        else{ 
          //echo "<script type='text/javascript'>alert('Seu email está na lista de espera, fique atento para novidades!!')</script>"; 
        }
        // Até aqui está correto!!!!!!
        //$to = $email; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
        //$email_subject = "Website Contact Form:  $nome";
        //$email_body = "You have received a new message from your website contact form.\n\n"."EITA CARAI MALUKO!";
        //$headers = "From: jaeingressos@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
        //if(mail($to,$email_subject,$email_body,$headers)){
        //}
            // Variável que junta os valores acima e monta o corpo do email
          
          $Mensagem = "You have received a new message from your website contact form.\n\n"."EITA CARAI MALUKO!";
          $Vai = file_get_contents('php/index.html');
          $Vai = str_replace('$Nome', "$Nome", $Vai);
            define('GUSER', 'jaeingressos@gmail.com');  // <-- Insira aqui o seu GMail
            define('GPWD', 'jaejaejae123');    // <-- Insira aqui a senha do seu GMail
            function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
              global $error;
              $mail = new PHPMailer();
              $mail->IsSMTP();    // Ativar SMTP
              $mail->SMTPDebug = 0;   // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
              $mail->SMTPAuth = true;   // Autenticação ativada
              $mail->SMTPSecure = 'ssl';  // SSL REQUERIDO pelo GMail
              $mail->Host = 'smtp.gmail.com'; // SMTP utilizado
              $mail->Port = 465;      // A porta 587 deverá estar aberta em seu servidor
              $mail->Username = GUSER;
              $mail->Password = GPWD;
              $mail->SetFrom($de, $de_nome);
              $mail->Subject = $assunto;
              $mail->Body = $corpo;
              $mail->IsHTML(true);  
              $mail->AddEmbeddedImage('img/logotipo.png', 'img-logo');
              $mail->AddEmbeddedImage('icons/ingressos.png', 'img-ingressos');
              $mail->AddEmbeddedImage('icons/users.png', 'img-users');
              $mail->AddEmbeddedImage('icons/transfer-money.png', 'img-transfer-money');
              $mail->AddEmbeddedImage('icons/fireworks.png', 'img-fireworks');
              $mail->AddEmbeddedImage('img/Shape.png', 'img-back');
              $mail->AddAddress($para);
              if(!$mail->Send()) {
                $error = 'Mail error: '.$mail->ErrorInfo; 
                return false;
              } else {
                $error = 'Mensagem enviada!';
                return true;
              }
            }
            
            // Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER), 
            //o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.
            if (smtpmailer($Email, 'jaeingressos@gmail.com', 'jaeingressos', 'Bem vindo ao JaE', $Vai)) {
              //Header("www.jaeingressos.com.br"); // Redireciona para uma página de obrigado.
              echo "<script type='text/javascript'>alert('Seu email está na lista de espera, fique atento para novidades!!  $error ')</script>"; 
            }
     break;
    }
  }
}
?>