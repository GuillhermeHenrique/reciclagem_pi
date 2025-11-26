<?php
$base_path = "../..";
$pagina_atual = "materiais";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Metal</title>
  <link rel="stylesheet" href="<?php echo $base_path; ?>/css/materials/metal.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="shortcut icon" href="<?php echo $base_path; ?>/images/favicon/raciclagem-favicon.png" type="image/x-icon">
</head>

<body>
  <?php include '../../includes/header.php'; ?>

  <section class="destaque">
    <img src="<?php echo $base_path; ?>/images/materials/metal/banner_metal.jpg" alt="Reciclagem de metal" class="destaque-img" />
    <div class="sobreposicao"></div>
    <div class="container conteudo-destaque">
      <h1>Metal</h1>
      <p>Descubra como a reciclagem de metais ajuda a preservar o planeta</p>
    </div>
  </section>

  <main class="container">
    <section class="tipos-residuos">
      <h2><i class="fas fa-industry"></i> Reciclagem de Metais</h2>
      <p class="intro-texto">
        A reciclagem de metais é essencial para economizar recursos naturais e reduzir a poluição. É possível reciclar
        diversos tipos de metais, como alumínio e aço.
      </p>

      <div class="grade-beneficios">
        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-recycle" style="color: #F1C40F"></i>
          </div>
          <h3>Processo de Reciclagem</h3>
          <ol class="lista-processo">
            <li>Coleta e separação dos metais</li>
            <li>Limpeza e retirada de impurezas</li>
            <li>Trituração e compactação</li>
            <li>Fusão em altas temperaturas</li>
            <li>Criação de novas peças metálicas</li>
          </ol>
        </div>

        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-check-circle" style="color: #F1C40F"></i>
          </div>
          <h3>Recicláveis</h3>
          <ul class="lista-itens">
            <li>Latinhas de alumínio (refrigerantes, cervejas)</li>
            <li>Latas de aço (alimentos enlatados)</li>
            <li>Arames e ferragens</li>
            <li>Panelas sem cabo de plástico</li>
            <li>Pedaços de ferro, cobre, alumínio e zinco</li>
          </ul>
        </div>

        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-times-circle" style="color: #F1C40F"></i>
          </div>
          <h3>Não Recicláveis</h3>
          <ul class="lista-itens">
            <li>Panelas com revestimento antiaderente</li>
            <li>Latas de aerossol com restos de produto</li>
            <li>Objetos metálicos contaminados (óleo, tinta)</li>
            <li>Cabos de metal com componentes eletrônicos</li>
            <li>Metais misturados com plástico</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="dicas-section">
      <h2><i class="fas fa-lightbulb"></i> Dicas Práticas</h2>
      <div class="dicas-container">
        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/metal/dica1_metal.jpg" alt="Separando metais" />
          <h3>Limpeza</h3>
          <p>
            Lave as latas e utensílios para remover restos de alimentos ou bebidas antes de descartar.
          </p>
        </div>

        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/metal/dica2_metal.webp" alt="Armazenamento correto" />
          <h3>Armazenamento</h3>
          <p>
            Armazene os metais em locais secos e organizados até o dia da coleta seletiva.
          </p>
        </div>

        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/metal/dica3_metal.png" alt="Coleta seletiva" />
          <h3>Descarte Correto</h3>
          <p>
            Utilize postos de reciclagem ou cooperativas que aceitem metais, garantindo a destinação correta.
          </p>
        </div>
      </div>
    </section>

    <section class="curiosidades">
      <div class="card-curiosidade">
        <h2><i class="fas fa-wrench"></i> Impacto Ambiental</h2>
        <p>
          A reciclagem de metais influencia diretamente o meio ambiente, ajudando a reduzir danos ambientais causados
          pela extração e descarte incorreto de resíduos metálicos.
        </p>
        <ul class="lista-impacto">
          <li>Evita a extração excessiva de minérios, preservando ecossistemas</li>
          <li>Reduz emissões de gases poluentes no processo industrial</li>
          <li>Diminui o volume de resíduos metálicos em aterros sanitários</li>
          <li>Ajuda a conter a contaminação do solo e da água por metais pesados</li>
        </ul>
        <a href="<?php echo $base_path; ?>/index.php" class="btn btn-amarelo"><i class="fas fa-arrow-left"></i> Voltar à Página Inicial</a>
      </div>
    </section>

  </main>

  <?php include '../../includes/footer.php'; ?>

  <script src="<?php echo $base_path; ?>/js/script.js"></script>
</body>

</html>