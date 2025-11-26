<?php
//configuração local para envias de email.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $assunto = htmlspecialchars($_POST['assunto']);
    $mensagem = htmlspecialchars($_POST['mensagem']);
    
    // Configurações de envio (configurar para o servidor real)
    $to = "contato@reciclagemsustentavel.com.br";
    $subject = "Novo contato: $assunto";
    $body = "Nome: $nome\nEmail: $email\nMensagem:\n$mensagem";
    $headers = "From: $email";

    // Tenta enviar o email (requer servidor de email configurado)

    header("Location: pages/contato.php?status=sucesso");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>