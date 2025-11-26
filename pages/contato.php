<?php
$base_path = "..";
$pagina_atual = "contato";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato</title>
  <link rel="stylesheet" href="../css/contato.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="shortcut icon" href="../images/favicon/raciclagem-favicon.png" type="image/x-icon">
</head>
<body>
  
  <?php include '../includes/header.php'; ?>

  <section class="contato-form">
    <div class="container">
      <h2>Contato</h2>
      
      <?php if (isset($_GET['status']) && $_GET['status'] == 'sucesso'): ?>
        <div style="background-color: #d4edda; color: #155724; padding: 15px; margin-bottom: 20px; border-radius: 4px; text-align: center;">
            Mensagem enviada com sucesso!
        </div>
      <?php endif; ?>

      <form class="formulario-contato" action="../processa_contato.php" method="POST">
        <div class="grupo-form">
            <label for="txtnome">Nome</label>
            <input type="text" id="txtnome" name="nome" placeholder="Seu nome completo" required>
        </div>
        <div class="grupo-form">
            <label for="txtemail">Endereço de email</label>
            <input type="email" id="txtemail" name="email" placeholder="Seu email" required>
        </div>
        <div class="grupo-form">
            <label for="txtassunto">Assunto</label>
            <select id="txtassunto" name="assunto" required>
            <option value="" disabled selected>Selecione uma das opções...</option>
            <option value="Dúvida">Dúvida</option>
            <option value="Sugestão">Sugestão</option>
            <option value="Reclamação">Reclamação</option>
            <option value="Elogio">Elogio</option>
            </select>
        </div>
        <div class="grupo-form">
            <label for="txtmensagem">Mensagem</label>
            <textarea id="txtmensagem" name="mensagem" rows="5" placeholder="Digite sua mensagem aqui..." required></textarea>
        </div>
        <button type="submit" class="botao-enviar">Enviar</button>
      </form>

      <div class="mapa">
        <h3>Nosso Endereço</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1835.1599448616762!2d-47.203156942609354!3d-23.085382897288405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8b4b183d3173b%3A0xe4e10e5dd84bd49e!2sFatec%20Indaiatuba%20-%20Faculdade%20de%20Tecnologia%20de%20Indaiatuba%20Dr.%20Archimedes%20Lammoglia!5e0!3m2!1spt-BR!2sbr!4v1748347581892!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </section>

  <?php include '../includes/footer.php'; ?>
</body>
</html>