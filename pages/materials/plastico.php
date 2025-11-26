<?php
$base_path = "../..";
$pagina_atual = "materiais";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plástico</title>
  <link rel="stylesheet" href="<?php echo $base_path; ?>/css/materials/plastico.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="shortcut icon" href="<?php echo $base_path; ?>/images/favicon/raciclagem-favicon.png" type="image/x-icon">
</head>

<body>
  <?php include '../../includes/header.php'; ?>

  <section class="destaque">
    <img src="<?php echo $base_path; ?>/images/materials/plastico/banner_plastico.jpg" alt="Plásticos para reciclagem" class="destaque-img">
    <div class="sobreposicao"></div>
    <div class="container conteudo-destaque">
      <h1>Plástico</h1>
      <p>Descubra como reciclar plástico e contribuir com o planeta</p>
    </div>
  </section>

  <main class="container">
    <section class="tipos-residuos">
      <h2><i class="fas fa-bottle-water"></i> Reciclagem de Plástico</h2>
      <p class="intro-texto">
        O plástico é um dos materiais mais utilizados e descartados no mundo. Por isso, é essencial saber como reciclá-lo corretamente e reduzir a poluição ambiental.
      </p>
      
      <div class="grade-beneficios">
        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-recycle" style="color: #E73C3C"></i>
          </div>
          <h3>Processo de Reciclagem</h3>
          <ol class="lista-processo">
            <li>Coleta dos resíduos plásticos</li>
            <li>Triagem por tipo de plástico</li>
            <li>Trituração dos materiais</li>
            <li>Lavagem para remoção de impurezas</li>
            <li>Fusão e moldagem em novos produtos</li>
          </ol>
        </div>
        
        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-check-circle" style="color: #E73C3C"></i>
          </div>
          <h3>Recicláveis</h3>
          <ul class="lista-itens">
            <li>Garrafas PET</li>
            <li>Embalagens de shampoo e produtos de limpeza</li>
            <li>Copos e potes plásticos</li>
            <li>Sacolas plásticas (limpas)</li>
            <li>Tampas e canos de PVC</li>
            <li>Recipientes de margarina e iogurte</li>
          </ul>
        </div>
        
        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-times-circle" style="color: #E73C3C"></i>
          </div>
          <h3>Não Recicláveis</h3>
          <ul class="lista-itens">
            <li>Plásticos sujos com comida ou gordura</li>
            <li>Isopor (em algumas regiões)</li>
            <li>Adesivos e etiquetas plásticas</li>
            <li>Embalagens metalizadas (como salgadinhos)</li>
            <li>Produtos de uso único já contaminados</li>
            <li>Escovas de dente usadas</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="dicas-section">
      <h2><i class="fas fa-lightbulb"></i> Dicas Práticas</h2>
      <div class="dicas-container">
        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/plastico/dica1_plastico.png" alt="Separando plásticos">
          <h3>Preparação</h3>
          <p>
            Lave as embalagens plásticas para retirar restos de produtos. Isso evita contaminação e facilita a reciclagem.
          </p>
        </div>
        
        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/plastico/dica2_plastico.jpg" alt="Armazenamento correto">
          <h3>Armazenamento</h3>
          <p>
            Armazene os plásticos secos e limpos em caixas ou sacos transparentes. Evite misturar com lixo orgânico.
          </p>
        </div>
        
        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/plastico/dica3_plastico.png" alt="Coleta seletiva">
          <h3>Descarte</h3>
          <p>
            Descarte o plástico em locais corretos: coleta seletiva, ecopontos ou cooperativas de reciclagem do seu bairro.
          </p>
        </div>
      </div>
    </section>

    <section class="curiosidades">
      <div class="card-curiosidade">
        <h2><i class="fas fa-pump-soap"></i> Impacto Ambiental</h2>
        <p>
          O plástico pode levar centenas de anos para se decompor. Reciclar é fundamental para reduzir a poluição nos oceanos e preservar a vida marinha.
        </p>
        <ul class="lista-impacto">
          <li>Menor contaminação de rios e mares</li>
          <li>Redução do uso de petróleo</li>
          <li>Reaproveitamento de materiais para novos produtos</li>
          <li>Menos lixo em aterros sanitários</li>
        </ul>
        <a href="<?php echo $base_path; ?>/index.php" class="btn btn-vermelho"><i class="fas fa-arrow-left"></i> Voltar à Página Inicial</a>
      </div>
    </section>
  </main>

  <?php include '../../includes/footer.php'; ?>

  <script src="<?php echo $base_path; ?>/js/script.js"></script>
</body>
</html>