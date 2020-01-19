<?php
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$telefone = $_REQUEST['telefone'];
$mensagem = $_REQUEST['mensagem'];
$email_for = 'vinisaurin@gmail.com';
$email_subject = 'Contato no site';

$body = " <strong>Mensagem de contato do site</strong><br><br> ";
$body .= "<strong>Nome:</strong> $nome";
$body .= "<br><strong>E-mail:</strong> $email";
$body .= "<br><strong>Telefone:</strong> $telefone";
$body .= "<br><strong>Mensagem:</strong> $mensagem";

$header = "Content-Type: text/html; charset = utf-8\n";
$header .= "From: $email Reply-to: $email \n";


mail($email_for, $email_subject, $body, $header);

header("location:contato.php?msg=enviado");

?>