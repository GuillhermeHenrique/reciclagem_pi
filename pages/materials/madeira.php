<?php
$base_path = "../..";
$pagina_atual = "materiais";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Madeira</title>
  <link rel="stylesheet" href="<?php echo $base_path; ?>/css/materials/madeira.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="shortcut icon" href="<?php echo $base_path; ?>/images/favicon/raciclagem-favicon.png" type="image/x-icon">
</head>

<body>
  <?php include '../../includes/header.php'; ?>

  <section class="destaque">
    <img src="<?php echo $base_path; ?>/images/materials/madeira/banner_madeira.jpg" alt="Resíduos de madeira" class="destaque-img" />
    <div class="sobreposicao"></div>
    <div class="container conteudo-destaque">
      <h1>Madeira</h1>
      <p>Material reciclável que pode ser reaproveitado em diversos usos sustentáveis</p>
    </div>
  </section>

  <main class="container">
    <section class="tipos-residuos">
      <h2><i class="fas fa-tree"></i> Madeira Reciclável</h2>
      <p class="intro-texto">
        A madeira pode ser reaproveitada para criação de móveis, artesanato e até como fonte de energia. Reciclar
        madeira ajuda a reduzir o desmatamento e o descarte irregular.
      </p>

      <div class="grade-beneficios">
        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-chair" style="color: #212121"></i>
          </div>
          <h3>Exemplos Comuns</h3>
          <ul class="lista-itens">
            <li>Móveis antigos</li>
            <li>Caixotes e paletes</li>
            <li>Restos de construção</li>
            <li>Pedaços de madeira tratada</li>
            <li>Compensado e MDF (com restrições)</li>
          </ul>
        </div>

        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-recycle" style="color: #212121"></i>
          </div>
          <h3>Vantagens da Reciclagem</h3>
          <ul class="lista-itens">
            <li>Reduz o desperdício de madeira</li>
            <li>Diminui o desmatamento</li>
            <li>Gera renda com móveis reciclados</li>
            <li>Ajuda na compostagem de resíduos orgânicos</li>
          </ul>
        </div>

        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-warehouse" style="color: #212121"></i>
          </div>
          <h3>Descarte Correto</h3>
          <ul class="lista-itens">
            <li>Doe móveis ou paletes reaproveitáveis</li>
            <li>Leve restos de madeira a ecopontos</li>
            <li>Evite queimar, pois polui o ar</li>
            <li>Verifique se há tratamento químico</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="dicas-section">
      <h2><i class="fas fa-lightbulb"></i> Dicas de Reutilização</h2>
      <div class="dicas-container">
        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/madeira/dica1_madeira.webp" alt="Móvel de madeira reciclada" />
          <h3>Crie Novos Móveis</h3>
          <p>
            Transforme peças antigas em bancos, mesas ou prateleiras. Um pouco de criatividade pode dar nova vida à
            madeira.
          </p>
        </div>

        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/madeira/dica2_madeira.jpg" alt="Paletes reaproveitados" />
          <h3>Use Paletes</h3>
          <p>
            Paletes de madeira são muito versáteis e podem virar sofás, camas ou cercas decorativas.
          </p>
        </div>

        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/madeira/dica3_madeira.jpg" alt="Oficina de marcenaria" />
          <h3>Doe para Oficinas</h3>
          <p>
            Muitas oficinas e escolas técnicas aceitam doações de madeira para treinar alunos e construir produtos
            úteis.
          </p>
        </div>
      </div>
    </section>

    <section class="curiosidades">
      <div class="card-curiosidade">
        <h2><i class="fas fa-tree"></i> Impacto Ambiental</h2>
        <p>
          A reciclagem da madeira ajuda a proteger florestas e reduz o acúmulo de resíduos que podem prejudicar o meio
          ambiente.
        </p>
        <ul class="lista-impacto">
          <li>Preservação das árvores e redução do desmatamento</li>
          <li>Diminuição do volume de resíduos em aterros sanitários</li>
          <li>Redução da poluição do solo e da água</li>
          <li>Conservação da biodiversidade local</li>
        </ul>
        <a href="<?php echo $base_path; ?>/index.php" class="btn btn-preto"><i class="fas fa-arrow-left"></i> Voltar à Página Inicial</a>
      </div>
    </section>

  </main>

  <?php include '../../includes/footer.php'; ?>

  <script src="<?php echo $base_path; ?>/js/script.js"></script>
</body>

</html>