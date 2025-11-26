<?php
$base_path = "../..";
$pagina_atual = "materiais"; // ou deixe vazio se não quiser destacar nada
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Papel e Papelão</title>
  <link rel="stylesheet" href="../../css/materials/papel.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="shortcut icon" href="../../images/favicon/raciclagem-favicon.png" type="image/x-icon">
</head>
<body>
  
  <?php include '../../includes/header.php'; ?>

  <section class="destaque">
    <img src="../../images/materials/papel/banner_papel.jpg" alt="Papéis sendo reciclados" class="destaque-img">
    <div class="sobreposicao"></div>
    <div class="container conteudo-destaque">
      <h1>Papel e Papelão</h1>
      <p>Saiba como reciclar corretamente e preserve nossas florestas</p>
    </div>
  </section>

  <main class="container">
    <section class="tipos-residuos">
      <h2><i class="fas fa-newspaper"></i> Reciclagem de Papel</h2>
      <p class="intro-texto">
        A reciclagem de papel ajuda a reduzir o desmatamento, economizar energia e diminuir a quantidade de lixo nos aterros.
      </p>
      
      <div class="grade-beneficios">
        <div class="cartao-beneficio">
          <div class="icon"><i class="fas fa-recycle" style="color: #3498DB"></i></div>
          <h3>Processo de Reciclagem</h3>
          <ol class="lista-processo">
            <li>Coleta do papel usado por cooperativas</li>
            <li>Triagem para separar os tipos</li>
            <li>Trituração e mistura com água</li>
          </ol>
        </div>
        </div>
    </section>

    <section class="dicas-section">
      <h2><i class="fas fa-lightbulb"></i> Dicas Práticas</h2>
      <div class="dicas-container">
        <div class="dica-item">
          <img src="../../images/materials/papel/dica1_papel.jpg" alt="Separando papéis">
          <h3>Preparação</h3>
          <p>Retire clipes e grampos antes de descartar.</p>
        </div>
        <div class="dica-item">
          <img src="../../images/materials/papel/dica2_papel.jpg" alt="Armazenamento">
          <h3>Armazenamento</h3>
          <p>Armazene em local seco e limpo.</p>
        </div>
        <div class="dica-item">
          <img src="../../images/materials/papel/dica3_papel.png" alt="Coleta">
          <h3>Descarte</h3>
          <p>Use a lixeira azul da coleta seletiva.</p>
        </div>
      </div>
    </section>

    <section class="curiosidades">
      <div class="card-curiosidade">
        <h2><i class="fas fa-tree"></i> Impacto Ambiental</h2>
        <p>A produção de papel consome milhares de árvores e litros de água.</p>
        <a href="../../index.php" class="btn btn-azul"><i class="fas fa-arrow-left"></i> Voltar à Página Inicial</a>
      </div>
    </section>
  </main>

  <?php include '../../includes/footer.php'; ?>
</body>
</html>