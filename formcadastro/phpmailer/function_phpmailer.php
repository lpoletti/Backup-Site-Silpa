<?php
	// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("class.phpmailer.php");
 
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "webmail.silpa.com.br";// Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
$mail->Port = 587;
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
$mail->Username = 'silpa@silpa.com.br'; // Usuário do servidor SMTP (endereço de email)
$mail->Password = 'silpa01'; // Senha do servidor SMTP (senha do email usado)
 
// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "silpa@silpa.com.br"; // Seu e-mail
$mail->Sender = "silpa@silpa.com.br"; // Seu e-mail
$mail->FromName = utf8_decode("Silpa Peças e Equipamentos LTDA"); // Seu nome
 
// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('silpa@silpa.com.br');
//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
 
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
 
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = utf8_decode("Cadastro/Atualização"); // Assunto da mensagem

// ENVIO DO EMAIL PESSOA JURIDICA
if(isset($_POST['envia_juridica'])&& $_POST['envia_juridica'] == 'juridica'){
ob_start();
include'../email_juridica.php';
$message = ob_get_clean();
$mail->Body = $message;
$mail->AltBody = 'Cadastro Silpa';

chdir('..');
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAttachment('uploads/'.$name1);  // Insere um anexo
$mail->AddAttachment('uploads/'.$name2);  // Insere um anexo
$mail->AddAttachment('uploads/'.$name3);  // Insere um anexo
$mail->AddAttachment('uploads/'.$name4);  // Insere um anexo
}

// ENVIO DO EMAIL PESSOA FISICA
elseif(isset($_POST['envia_fisica'])&& $_POST['envia_fisica'] == 'fisica'){
	ob_start();
	include'../email_fisica.php';
$message = ob_get_clean();
$mail->Body = $message;
$mail->AltBody = 'Cadastro Silpa';

chdir('..');
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAttachment('uploads/'.$name1);  // Insere um anexo
$mail->AddAttachment('uploads/'.$name2);  // Insere um anexo
$mail->AddAttachment('uploads/'.$name3);  // Insere um anexo
$mail->AddAttachment('uploads/'.$name4);  // Insere um anexo
}


// Envia o e-mail
$enviado = $mail->Send();
 
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
 
// Exibe uma mensagem de resultado
if ($enviado) {
	$msg = "<div id=\"ok\">E-mail foi enviado com sucesso<br>Obrigado<br></div>";
	echo $msg;
	$del = @unlink('uploads/'.$name1);
	$del = @unlink('uploads/'.$name2);
	$del = @unlink('uploads/'.$name3);
	$del = @unlink('uploads/'.$name4);
} else {
echo "<div id=\"no\">Não foi possível enviar o e-mail.
 
";
echo "Informações do erro: 
" . $mail->ErrorInfo."</div>";
}
?>