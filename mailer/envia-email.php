<?php
$nome = ($_POST['nome']);
$sobrenome= ($_POST['sobrenome']);
$email=($_POST['email']);
$destinatario = ($_POST['destinatario']);
$mensagem=htmlspecialchars($_POST['mensagem']);


require 'phpMailer/Exception.php';
require 'phpMailer/PHPMailer.php';
require 'phpMailer/SMTP.php';
// require 'config.php';

$mail = new \PHPMailer\PHPMailer\PHPMailer(true);
$mail->isSMTP();

$mail->Host = "smtp.gmail.com";
$mail->Port = "587";
$mail->SMTPAuth = "true";
$mail->SMTPSecure = "tls";
$mail->Username = "gabriel.akt1914@gmail.com";
$mail->Password = "";

$mail->setFrom($mail->Username, $nome);
$mail->addAddress($destinatario);
$mail->Subject = ("Fale conosco");

$assunto_email = "Voce recebeu um email de $nome $sobrenome ($email)
<br><br>
Mensagem:<br>
$mensagem
";

$mail->isHTML(true);
$mail->Body = $assunto_email;

if($mail->send()){
    echo "email enviado no sucesso😎";
    
}else{
    echo "muito erro😭" . $mail->ErrorInfo;
}



// $mail_resposta = new \PHPMailer\PHPMailer\PHPMailer(true);
// $mail_resposta->isSMTP();

// $mail_resposta->Host = "smtp.gmail.com";
// $mail_resposta->Port = "587";
// $mail_resposta->SMTPAuth = "true";
// $mail_resposta->SMTPSecure = "tls";
// $mail_resposta->Username = "gabriel.akt1914@gmail.com";
// $mail_resposta->Password = "ussk gepc hgzv ioxx";

// $mail_resposta->setFrom($mail_resposta->Username, $nome);
// $mail_resposta->addAddress($email);
// $mail_resposta->Subject = ("Fale conosco");

// $assunto_email = "Voce recebeu um email de $nome $sobrenome ($email_resposta)
// <br><br>
// Mensagem:<br>
// $mensagem
// ";

// $mail_resposta->isHTML(true);
// $mail_resposta->Body = $assunto_email;

// if($mail->send()){
//     echo "email enviado no sucesso😎";
// }else{
//     echo "muito erro😭" . $mail_resposta->ErrorInfo;
// }