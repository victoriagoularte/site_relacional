<?php

require_once("phpmailer/class.phpmailer.php");

$nome		= $_POST["nome"];	// Pega o valor do campo Nome
$email		= $_POST["email"];	// Pega o valor do campo Email
$mensagem	= $_POST["mensagem"];	// Pega os valores do campo Mensagem

// Variável que junta os valores acima e monta o corpo do email

$Vai 		= "Nome: $nome\n\nE-mail: $email\n\n \n\nMensagem: $mensagem\n";

require_once("phpmailer/class.phpmailer.php");

define('GUSER', 'vickgoularte@gmail.com');	// <-- Insira aqui o seu GMail
define('GPWD', '02046010111213');		// <-- Insira aqui a senha do seu GMail

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
	$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
	$mail->Port = 587;  		// A porta 587 deverá estar aberta em seu servidor
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom($de, $de_nome);
	$mail->Subject = $assunto;
	$mail->Body = $corpo;
	$mail->AddAddress($para);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Mensagem enviada!';
		return true;
	}
}


 if (smtpmailer('vickgoularte@gmail.com', 'vickgoularte@gmail.com', 'Nome do Enviador', 'Assunto do Email', $Vai)) {

	echo('foooi')

}
if (!empty($error)) echo $error;
?>