<?php
$base_path = "../..";
$pagina_atual = "materiais";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Orgânico</title>
  <link rel="stylesheet" href="<?php echo $base_path; ?>/css/materials/organico.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="shortcut icon" href="<?php echo $base_path; ?>/images/favicon/raciclagem-favicon.png" type="image/x-icon">
</head>

<body>
  <?php include '../../includes/header.php'; ?>

  <section class="destaque">
    <img src="<?php echo $base_path; ?>/images/materials/organico/banner_organico.webp" alt="Reciclagem orgânica" class="destaque-img" />
    <div class="sobreposicao"></div>
    <div class="container conteudo-destaque">
      <h1>Orgânico</h1>
      <p>Aproveite os resíduos orgânicos para transformar em adubo e preservar o meio ambiente</p>
    </div>
  </section>

  <main class="container">
    <section class="tipos-residuos">
      <h2><i class="fas fa-seedling"></i> Resíduos Orgânicos</h2>
      <p class="intro-texto">
        Os resíduos orgânicos são materiais de origem vegetal ou animal, como restos de comida e folhas. Eles podem ser
        reutilizados como adubo através da compostagem.
      </p>

      <div class="grade-beneficios">
        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-recycle" style="color: #8B4513"></i>
          </div>
          <h3>Processo de Compostagem</h3>
          <ol class="lista-processo">
            <li>Separação dos resíduos orgânicos</li>
            <li>Colocação em composteira</li>
            <li>Controle de umidade e aeração</li>
            <li>Decomposição natural</li>
            <li>Transformação em adubo</li>
          </ol>
        </div>

        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-check-circle" style="color: #8B4513"></i>
          </div>
          <h3>Recicláveis</h3>
          <ul class="lista-itens">
            <li>Restos de frutas, legumes e verduras</li>
            <li>Folhas, galhos e grama</li>
            <li>Casca de ovos</li>
            <li>Borra de café e saquinhos de chá</li>
            <li>Restos de comida sem gordura ou tempero</li>
          </ul>
        </div>

        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-times-circle" style="color: #8B4513"></i>
          </div>
          <h3>Não Recicláveis</h3>
          <ul class="lista-itens">
            <li>Restos de carne ou peixe</li>
            <li>Óleo de cozinha</li>
            <li>Fezes de animais</li>
            <li>Produtos industrializados</li>
            <li>Comidas com muito tempero ou gordura</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="dicas-section">
      <h2><i class="fas fa-leaf"></i> Dicas Práticas</h2>
      <div class="dicas-container">
        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/organico/dica1_organico.jpg" alt="Separando lixo orgânico" />
          <h3>Separe o Lixo</h3>
          <p>
            Use um recipiente específico para os resíduos orgânicos, evitando a contaminação com materiais recicláveis.
          </p>
        </div>

        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/organico/dica2_organico.webp" alt="Composteira doméstica" />
          <h3>Faça Compostagem</h3>
          <p>
            Monte uma composteira doméstica para transformar os resíduos em adubo e utilizar em hortas e jardins.
          </p>
        </div>

        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/organico/dica3_organico.jpg" alt="Adubo orgânico" />
          <h3>Adubo Natural</h3>
          <p>
            Utilize o adubo gerado na compostagem para enriquecer o solo de forma natural e sem produtos químicos.
          </p>
        </div>
      </div>
    </section>

    <section class="curiosidades">
      <div class="card-curiosidade">
        <h2><i class="fas fa-apple-alt"></i> Impacto Ambiental</h2>
        <p>
          A gestão adequada dos resíduos orgânicos contribui para a conservação dos recursos naturais e a redução dos
          efeitos negativos no meio ambiente.
        </p>
        <ul class="lista-impacto">
          <li>Redução da poluição do solo e da água</li>
          <li>Diminuição da emissão de gases de efeito estufa</li>
          <li>Preservação da biodiversidade local</li>
          <li>Conservação dos recursos naturais e do solo fértil</li>
        </ul>
        <a href="<?php echo $base_path; ?>/index.php" class="btn btn-marrom"><i class="fas fa-arrow-left"></i> Voltar à Página Inicial</a>
      </div>
    </section>
  </main>

  <?php include '../../includes/footer.php'; ?>

  <script src="<?php echo $base_path; ?>/js/script.js"></script>
</body>

</html>