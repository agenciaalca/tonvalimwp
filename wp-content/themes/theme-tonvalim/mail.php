<?php

$msg = "";
if (isset($_POST['submit']) && $_POST['submit'] == 'ENVIAR') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $formcontent = "FORMULÁRIO DE CONTATO\n"
            . "\nDe: " . $nome
            . "\nEmail: " . $email
            . "\nTelefone: " . $telefone
            . "\nMensagem: " . $mensagem;

    $recipient = "cristiane@agenciaalca.com";
    $subject = "Formulário de Contato - Ton Valim";
    $mailheader = "From: $email \r\n";

    if (mail($recipient, $subject, $formcontent, $mailheader)) {
        $msg = '<div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Mensagem enviada com sucesso!</strong> 
            </div>';
    } else {
        $msg = '<div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Erro ao enviar a mensagem, tente novamente mais tarde! </strong> 
            </div>';
    }
}
?>

