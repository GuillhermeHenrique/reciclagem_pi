<?php
$base_path = "..";
$pagina_atual = "equipe";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Equipe do Projeto</title>
  <link rel="stylesheet" href="../css/equipe.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="shortcut icon" href="../images/favicon/raciclagem-favicon.png" type="image/x-icon" />
</head>
<body>
  
  <?php include '../includes/header.php'; ?>

  <main class="conteudo-principal">
    <section class="sobre-projeto">
      <h2>Projeto Integrador - Curso DSM</h2>
      <h3>Site de Reciclagem de Materiais</h3>
      <p><strong>Objetivo do Projeto:</strong> Um site proposto para divulgar informações focando no educativo e conscientização ambiental.</p>
    </section>

    <section class="alunos">
      <h3>Equipe de Desenvolvimento</h3>
      <ul class="lista-alunos">
        <li><strong>Bruno Juni Giacomini</strong></li>
        <li><strong>Guilherme Henrique Onorino Pires</strong></li>
        <li><strong>Júlia Aguiar de Moura Moisés</strong></li>
        <li><strong>Lucas Pereira de Oliveira</strong></li>
        <li><strong>Mateus Prince Antunes</strong></li>
        <li><strong>Vitor Gabriel de Amorim</strong></li>
      </ul>
    </section>
  </main>

  <?php include '../includes/footer.php'; ?>
</body>
</html>