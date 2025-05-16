<?php

$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$celular = addcslashes($_POST['celular']);
$mensagem = addcslashes($_POST['mensagem']);

$para = "suporteascentgroup@gmail.com";
$assunto = "Contato do site";

$corpo = "Nome: " . $nome . "\n". "E-mail: " .$email."\n" ."celular: " .$celular."\n". "Mensagem: " .$mensagem;

$importante = "From: jg5900212@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Malier:PHP/".phpversion()

if(mail($para, $assunto, $corpo, $importante)){
    echo("Email enviado com sucesso!");
}else{
    echo("Falha ao enviar o email");
}

?>