<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Nome = $_POST['Nome'];
    $Nome = $_POST['Email'];
    $Nome = $_POST['Rua"'];
    $Nome = $_POST['Número'];
    $Nome = $_POST['Complemento'];
    $Nome = $_POST['Cidade']; 
    $Nome = $_POST['Estado'];
    $Nome = $_POST['Cep'];
}



$mensagem = "Nome: $Nome\n"
$mensagem = "E-mail: $Email\n"
$mensagem = "Número: $Rua\n"
$mensagem = "Número: $Número\n"
$mensagem = "Complemento: $Complemento\n"
$mensagem = "Cidade: $Cidade\n"
$mensagem = "Estado': $Estado'\n"
$mensagem = "Cep: $Cep\n"

$destinatario = "emaildestino@exemplo.com";
$assunto = " Novo Formúlario de cadastro de Receitas do Souza";
$remetente = "From: emaldereceitassouza@exemplo.com";


if (email($desitnatario,$assunto,$mensagem, $remetente)) {

} else {
    echo " Falhar ao  enviar o e-mail: Por Favor, tente novamente.";
} else {
    header("Location:casdatro.html");
}

exit;
?>