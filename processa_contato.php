<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $assunto = htmlspecialchars($_POST['assunto']);
    $mensagem = htmlspecialchars($_POST['mensagem']);
    
    // Configurações de envio (configure isso no seu servidor real)
    $to = "contato@reciclagemsustentavel.com.br";
    $subject = "Novo contato: $assunto";
    $body = "Nome: $nome\nEmail: $email\nMensagem:\n$mensagem";
    $headers = "From: $email";

    // Tenta enviar o email (requer servidor de email configurado)
    // if(mail($to, $subject, $body, $headers)) { ... }

    // Como estamos em ambiente local ou de teste, apenas redirecionamos com mensagem
    // Redireciona de volta para contato com sucesso
    header("Location: pages/contato.php?status=sucesso");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>