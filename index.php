<?php
$base_path = ".";
$pagina_atual = "home";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reciclagem</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="shortcut icon" href="./images/favicon/raciclagem-favicon.png" type="image/x-icon">
</head>
<body>
  
  <?php include 'includes/header.php'; ?>

  <section class="destaque">
    <img src="images/lixeiras-de-reciclagem.webp" alt="Lixeiras de reciclagem" class="destaque-img">
    <div class="sobreposicao"></div>
    <div class="container conteudo-destaque">
      <h1>Cada atitude conta.</h1>
      <p>Recicle</p>
    </div>
  </section>

  <div class="anuncio-topo">
    <a href="https://fatecid.com.br/cursos/index.php" target="_blank" style="text-decoration: none; color: inherit;">
      <img src="./images/Anuncio/41.jpg" style="max-width: 100%;" alt="Vestibular Fatec">
    </a>
  </div>

  <section class="tipos-residuos">
    <div class="container">
      <div class="conteudo-principal-residuos">
        <h2>Tipos de Resíduos</h2>
        <div class="tabela">
          <table>
            <thead>
              <tr>
                <th>Cor</th>
                <th>Resíduos</th>
                <th>Exemplos</th>
                <th>Ação</th>
              </tr>
            </thead>
            <tbody>
              <tr class="azul">
                <td>Azul</td>
                <td>Papel/Papelão</td>
                <td>Jornais, revistas, caixas</td>
                <td><a href="pages/materials/papel.php" class="btn">Ver Mais</a></td>
              </tr>
              <tr class="vermelho">
                <td>Vermelho</td>
                <td>Plástico</td>
                <td>Garrafas, embalagens</td>
                <td><a href="pages/materials/plastico.php" class="btn">Ver Mais</a></td>
              </tr>
              <tr class="verde">
                <td>Verde</td>
                <td>Vidro</td>
                <td>Garrafas, potes</td>
                <td><a href="pages/materials/vidro.php" class="btn">Ver Mais</a></td>
              </tr>
              <tr class="amarelo">
                <td>Amarelo</td>
                <td>Metal</td>
                <td>Latas, tampas</td>
                <td><a href="pages/materials/metal.php" class="btn">Ver Mais</a></td>
              </tr>
              <tr class="marrom">
                <td>Marrom</td>
                <td>Orgânico</td>
                <td>Restos de alimentos</td>
                <td><a href="pages/materials/organico.php" class="btn">Ver Mais</a></td>
              </tr>
              <tr class="cinza">
                <td>Cinza</td>
                <td>Não reciclável</td>
                <td>Papel higiênico, adesivos</td>
                <td><a href="pages/materials/naoReciclavel.php" class="btn">Ver Mais</a></td>
              </tr>
              <tr class="laranja">
                <td>Laranja</td>
                <td>Perigosos</td>
                <td>Pilhas, baterias</td>
                <td><a href="pages/materials/perigosos.php" class="btn">Ver Mais</a></td>
              </tr>
              <tr class="preto">
                <td>Preto</td>
                <td>Madeira</td>
                <td>Móveis, paletes</td>
                <td><a href="pages/materials/madeira.php" class="btn">Ver Mais</a></td>
              </tr>
              <tr class="branco">
                <td>Branco</td>
                <td>Saúde</td>
                <td>Agulhas, luvas</td>
                <td><a href="pages/materials/ambulatorios.php" class="btn">Ver Mais</a></td>
              </tr>
              <tr class="roxo">
                <td>Roxo</td>
                <td>Radioativos</td>
                <td>Materiais contaminados</td>
                <td><a href="pages/materials/radioativos.php" class="btn">Ver Mais</a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <section class="beneficios">
    <div class="container">
      <h3>Por que reciclar?</h3>
      <div class="grade-beneficios">
        <div class="cartao-beneficio">
          <div class="icon"><i class="fas fa-trash-restore" style="color: #219653"></i></div>
          <h4>Redução do lixo nos aterros</h4>
          <p>Diminui o volume de lixo que vai para os aterros sanitários.</p>
        </div>
        <div class="cartao-beneficio">
          <div class="icon"><i class="fas fa-leaf" style="color: #219653"></i></div>
          <h4>Preservação dos recursos naturais</h4>
          <p>Reduz a extração de matéria-prima da natureza.</p>
        </div>
        <div class="cartao-beneficio">
          <div class="icon"><i class="fas fa-dollar-sign" style="color: #219653"></i></div>
          <h4>Gera economia e empregos</h4>
          <p>A reciclagem gera empregos e economia de recursos.</p>
        </div>
        <div class="cartao-beneficio">
          <div class="icon"><i class="fas fa-globe-americas" style="color: #219653"></i></div>
          <h4>Protege o meio ambiente</h4>
          <p>Diminui a poluição do solo, da água e do ar.</p>
        </div>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>
  <script src="js/script.js"></script>
</body>
</html>