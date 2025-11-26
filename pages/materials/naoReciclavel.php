<?php
$base_path = "../..";
$pagina_atual = "materiais";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Não Reciclável</title>
  <link rel="stylesheet" href="<?php echo $base_path; ?>/css/materials/naoReciclavel.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="shortcut icon" href="<?php echo $base_path; ?>/images/favicon/raciclagem-favicon.png" type="image/x-icon">
</head>

<body>
  <?php include '../../includes/header.php'; ?>

  <section class="destaque">
    <img src="<?php echo $base_path; ?>/images/materials/naoReciclaveis/banner_naoReciclaveis.jpg" alt="Lixo não reciclável" class="destaque-img" />
    <div class="sobreposicao"></div>
    <div class="container conteudo-destaque">
      <h1>Não Reciclável</h1>
      <p>Entenda o que não pode ser reciclado e como descartar corretamente</p>
    </div>
  </section>

  <main class="container">
    <section class="tipos-residuos">
      <h2><i class="fas fa-trash-alt"></i> Resíduos Não Recicláveis</h2>
      <p class="intro-texto">
        Alguns materiais não são recicláveis por causa de sua composição, contaminação ou falta de viabilidade
        econômica. Saber identificá-los ajuda a evitar a mistura com recicláveis.
      </p>

      <div class="grade-beneficios">
        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-ban" style="color: #95A5A6"></i>
          </div>
          <h3>Exemplos Comuns</h3>
          <ul class="lista-itens">
            <li>Papel higiênico e guardanapos usados</li>
            <li>Fraldas descartáveis</li>
            <li>Espelhos e vidros temperados</li>
            <li>Isopor sujo</li>
            <li>Embalagens metalizadas (como salgadinhos)</li>
          </ul>
        </div>

        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-exclamation-circle" style="color: #95A5A6"></i>
          </div>
          <h3>Por que não reciclar?</h3>
          <ul class="lista-itens">
            <li>Contaminação dificulta o reaproveitamento</li>
            <li>Materiais mistos são difíceis de separar</li>
            <li>Falta de tecnologia para reaproveitamento</li>
            <li>Baixo custo-benefício para reciclagem</li>
          </ul>
        </div>

        <div class="cartao-beneficio">
          <div class="icon">
            <i class="fas fa-dumpster" style="color: #95A5A6"></i>
          </div>
          <h3>Descarte Correto</h3>
          <ul class="lista-itens">
            <li>Use sacos bem fechados para evitar vazamentos</li>
            <li>Evite misturar com recicláveis</li>
            <li>Procure locais de descarte específico</li>
            <li>Informe-se com a prefeitura da sua cidade</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="dicas-section">
      <h2><i class="fas fa-info-circle"></i> Dicas Importantes</h2>
      <div class="dicas-container">
        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/naoReciclaveis/dica1_naoReciclaveis.jpg" alt="Separando lixo" />
          <h3>Separe o Lixo</h3>
          <p>
            Nunca misture resíduos recicláveis com materiais contaminados ou que não podem ser reciclados.
          </p>
        </div>

        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/naoReciclaveis/dica2_naoReciclaveis.webp" alt="Aviso de não reciclável" />
          <h3>Identifique os Materiais</h3>
          <p>
            Sempre verifique as embalagens e sinalize o que não é reciclável para facilitar o trabalho de coleta.
          </p>
        </div>

        <div class="dica-item">
          <img src="<?php echo $base_path; ?>/images/materials/naoReciclaveis/dica3_naoReciclaveis.webp" alt="Lixeira adequada" />
          <h3>Use Lixeiras Corretas</h3>
          <p>
            Os resíduos não recicláveis devem ir em lixeiras cinza ou preto, de acordo com a separação da sua cidade.
          </p>
        </div>
      </div>
    </section>

    <section class="curiosidades">
      <div class="card-curiosidade">
        <h2><i class="fas fa-trash"></i> Impacto Ambiental</h2>
        <p>
          Os resíduos não recicláveis, quando descartados incorretamente, podem causar sérios danos ao meio ambiente e à
          saúde pública.
        </p>
        <ul class="lista-impacto">
          <li>Aumento da poluição do solo e da água</li>
          <li>Emissão de gases tóxicos em aterros sanitários</li>
          <li>Risco de contaminação para animais e humanos</li>
          <li>Contribuição para o entupimento de redes de esgoto e enchentes</li>
        </ul>
        <a href="<?php echo $base_path; ?>/index.php" class="btn btn-cinza"><i class="fas fa-arrow-left"></i> Voltar à Página Inicial</a>
      </div>
    </section>
  </main>

  <?php include '../../includes/footer.php'; ?>

  <script src="<?php echo $base_path; ?>/js/script.js"></script>
</body>

</html>