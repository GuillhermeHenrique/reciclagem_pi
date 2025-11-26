<?php
$base_path = "../..";
$pagina_atual = "materiais";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Vidro</title>
  <link rel="stylesheet" href="<?php echo $base_path; ?>/css/materials/vidro.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="shortcut icon" href="<?php echo $base_path; ?>/images/favicon/raciclagem-favicon.png" type="image/x-icon">
</head>

<body>
  <?php include '../../includes/header.php'; ?>

  <section class="destaque">
    <img src="<?php echo $base_path; ?>/images/materials/vidro/banner_vidro.jpg" alt="Reciclagem de vidro" class="destaque-img" />
    <div class="sobreposicao"></div>
    <div class="container conteudo-destaque">
      <h1>Vidro</h1>
      <p>Aprenda a reciclar vidro e ajudar a preservar o meio ambiente</p>
    </div>
  </section>

  <main class="container">
    <section class="tipos-residuos">
      <h2><i class="fas fa-wine-bottle"></i> Reciclagem de Vidro</h2>
      <p class="intro-texto">
        O vidro é 100% reciclável e pode ser reutilizado várias vezes sem perder qualidade. Saber como separar e
        descartar corretamente faz toda a diferença.
      </p>

      <div class="grade-beneficios">
        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-recycle" style="color: #2ECC71"></i>
          </div>
          <h3>Processo de Reciclagem</h3>
          <ol class="lista-processo">
            <li>Coleta e triagem dos vidros</li>
            <li>Remoção de impurezas e tampas</li>
            <li>Quebra e trituração do vidro</li>
            <li>Fusão em fornos para fabricação de novos produtos</li>
            <li>Resfriamento e moldagem dos vidros reciclados</li>
          </ol>
        </div>

        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-check-circle" style="color: #2ECC71"></i>
          </div>
          <h3>Recicláveis</h3>
          <ul class="lista-itens">
            <li>Garrafa de vidro (cerveja, vinho, sucos)</li>
            <li>Potes e frascos de vidro limpos</li>
            <li>Vidro plano (janelas, espelhos - em alguns locais)</li>
            <li>Frascos de perfumes e cosméticos</li>
            <li>Lâmpadas de vidro (algumas são recicláveis)</li>
          </ul>
        </div>

        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-times-circle" style="color: #27AE60"></i>
          </div>
          <h3>Não Recicláveis</h3>
          <ul class="lista-itens">
            <li>Vidros temperados (como de carros e portas)</li>
            <li>Vidro laminado</li>
            <li>Espelhos com camada metálica</li>
            <li>Cristais e porcelanas</li>
            <li>Vidro sujo ou contaminado com resíduos químicos</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="dicas-section">
      <h2><i class="fas fa-lightbulb"></i> Dicas Práticas</h2>
      <div class="dicas-container">
        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/vidro/dica1_vidro.jpg" alt="Separando vidros" />
          <h3>Preparação</h3>
          <p>
            Lave os vidros para remover resíduos, retire tampas e rótulos quando possível para facilitar a reciclagem.
          </p>
        </div>

        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/vidro/dica2_vidro.jpg" alt="Armazenamento correto" />
          <h3>Armazenamento</h3>
          <p>
            Guarde os vidros em locais seguros para evitar acidentes e quebras antes da coleta.
          </p>
        </div>

        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/vidro/dica3_vidro.png" alt="Coleta seletiva" />
          <h3>Descarte</h3>
          <p>
            Utilize pontos de coleta seletiva e cooperativas para garantir o destino correto dos vidros recicláveis.
          </p>
        </div>
      </div>
    </section>

    <section class="curiosidades">
      <div class="card-curiosidade">
        <h2><i class="fas fa-wine-glass"></i> Impacto Ambiental</h2>
        <p>
          Reciclar vidro economiza energia e reduz a extração de matérias-primas, além de diminuir a quantidade de lixo
          nos aterros.
        </p>
        <ul class="lista-impacto">
          <li>Redução do consumo de areia, soda cáustica e calcário</li>
          <li>Menos emissão de gases poluentes</li>
          <li>Diminuição do volume de resíduos sólidos</li>
          <li>Preservação dos recursos naturais</li>
        </ul>
        <a href="<?php echo $base_path; ?>/index.php" class="btn btn-verde"><i class="fas fa-arrow-left"></i> Voltar à Página Inicial</a>
      </div>
    </section>
  </main>

  <?php include '../../includes/footer.php'; ?>

  <script src="<?php echo $base_path; ?>/js/script.js"></script>
</body>

</html>