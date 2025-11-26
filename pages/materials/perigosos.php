<?php
$base_path = "../..";
$pagina_atual = "materiais";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Perigosos</title>
  <link rel="stylesheet" href="<?php echo $base_path; ?>/css/materials/perigosos.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="shortcut icon" href="<?php echo $base_path; ?>/images/favicon/raciclagem-favicon.png" type="image/x-icon">
</head>

<body>
  <?php include '../../includes/header.php'; ?>

  <section class="destaque">
    <img src="<?php echo $base_path; ?>/images/materials/perigosos/banner_perigosos.jpg" alt="Resíduos perigosos" class="destaque-img" />
    <div class="sobreposicao"></div>
    <div class="container conteudo-destaque">
      <h1>Perigosos</h1>
      <p>Resíduos que exigem atenção especial para não causar danos à saúde ou ao meio ambiente</p>
    </div>
  </section>

  <main class="container">
    <section class="tipos-residuos">
      <h2><i class="fas fa-skull-crossbones"></i> Resíduos Perigosos</h2>
      <p class="intro-texto">
        Materiais perigosos podem contaminar solo, água e até mesmo causar riscos à saúde humana. É fundamental
        tratá-los com cuidado e dar o destino correto.
      </p>

      <div class="grade-beneficios">
        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-biohazard" style="color: #e67e22"></i>
          </div>
          <h3>Exemplos Comuns</h3>
          <ul class="lista-itens">
            <li>Pilhas e baterias</li>
            <li>Óleo de cozinha usado</li>
            <li>Medicamentos vencidos</li>
            <li>Produtos de limpeza químicos</li>
            <li>Equipamentos eletrônicos com metais pesados</li>
          </ul>
        </div>

        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-radiation-alt" style="color: #e67e22"></i>
          </div>
          <h3>Riscos à Saúde</h3>
          <ul class="lista-itens">
            <li>Contaminação de lençóis freáticos</li>
            <li>Problemas respiratórios e neurológicos</li>
            <li>Risco de queimaduras e intoxicação</li>
            <li>Danos irreversíveis ao meio ambiente</li>
          </ul>
        </div>

        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-exclamation-triangle" style="color: #e67e22"></i>
          </div>
          <h3>Descarte Correto</h3>
          <ul class="lista-itens">
            <li>Entregue em pontos de coleta autorizados</li>
            <li>Nunca jogue no lixo comum ou esgoto</li>
            <li>Use embalagens seguras para transporte</li>
            <li>Procure campanhas de coleta especial</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="dicas-section">
      <h2><i class="fas fa-lightbulb"></i> Dicas de Segurança</h2>
      <div class="dicas-container">
        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/perigosos/dica1_perigosos.png" alt="Ponto de coleta" />
          <h3>Use Locais Certificados</h3>
          <p>
            Muitos supermercados e farmácias possuem pontos de coleta de pilhas, baterias e medicamentos.
          </p>
        </div>

        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/perigosos/dica2_perigosos.png" alt="Embalagem adequada" />
          <h3>Proteja os Resíduos</h3>
          <p>
            Evite vazamentos usando embalagens lacradas para transportar materiais perigosos.
          </p>
        </div>

        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/perigosos/dica3_perigosos.png" alt="Informação correta" />
          <h3>Informe-se</h3>
          <p>
            Consulte o site da prefeitura ou órgãos ambientais para saber onde descartar corretamente cada tipo de
            resíduo.
          </p>
        </div>
      </div>
    </section>

    <section class="curiosidades">
      <div class="card-curiosidade">
        <h2><i class="fas fa-triangle-exclamation"></i> Impacto Ambiental</h2>
        <p>
          Os resíduos perigosos causam danos graves ao meio ambiente, contaminando água, solo e prejudicando a vida de
          animais e pessoas.
        </p>
        <ul class="lista-impacto">
          <li>Contaminação dos rios e lençóis freáticos</li>
          <li>Danos à fauna e flora local</li>
          <li>Risco de explosões e incêndios em aterros</li>
          <li>Acúmulo de substâncias tóxicas no solo</li>
        </ul>
        <a href="<?php echo $base_path; ?>/index.php" class="btn btn-laranja"><i class="fas fa-arrow-left"></i> Voltar à Página Inicial</a>
      </div>
    </section>
  </main>

  <?php include '../../includes/footer.php'; ?>

  <script src="<?php echo $base_path; ?>/js/script.js"></script>
</body>

</html>