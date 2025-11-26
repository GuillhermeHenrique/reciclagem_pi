<?php
$base_path = "../..";
$pagina_atual = "materiais";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resíduos de Saúde</title>
    <link rel="stylesheet" href="<?php echo $base_path; ?>/css/materials/saude.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="<?php echo $base_path; ?>/images/favicon/raciclagem-favicon.png" type="image/x-icon">
</head>

<body>
    <?php include '../../includes/header.php'; ?>

    <section class="destaque">
        <img src="<?php echo $base_path; ?>/images/materials/ambulatorios/residuos-ambulatoriais-saude.jpg" alt="Resíduos de Saúde" class="destaque-img">
        <div class="sobreposicao"></div>
        <div class="container conteudo-destaque">
            <h1>Resíduos Ambulatoriais e de Saúde</h1>
            <p>Descubra como descartar materiais de saúde com segurança</p>
        </div>
    </section>

    <main class="container">
        <section class="tipos-residuos">
            <h2><i class="fas fa-syringe"></i> Manejo de Resíduos de Saúde</h2>
            <p class="intro-texto">
                Resíduos de serviços de saúde exigem cuidados especiais para evitar contaminações e proteger
                profissionais e o meio ambiente.
            </p>

            <div class="grade-beneficios">
                <div class="cartao-beneficio">
                    <div class="icon">
                        <i class="fas fa-recycle" style="color: #a0a0a0"></i>
                    </div>
                    <h3>Processo de Descarte</h3>
                    <ol class="lista-processo">
                        <li>Segregação imediata em recipientes específicos</li>
                        <li>Acondicionamento em sacos brancos leitosos</li>
                        <li>Armazenamento temporário em área isolada</li>
                        <li>Coleta por empresas especializadas</li>
                        <li>Tratamento térmico (autoclavagem ou incineração)</li>
                    </ol>
                </div>

                <div class="cartao-beneficio">
                    <div class="icon">
                        <i class="fas fa-check-circle" style="color: #a0a0a0"></i>
                    </div>
                    <h3>Materiais Incluídos</h3>
                    <ul class="lista-itens">
                        <li>Agulhas e seringas usadas</li>
                        <li>Gazes e curativos contaminados</li>
                        <li>Luvas e máscaras descartáveis</li>
                        <li>Tubos de coleta sanguínea</li>
                        <li>Medicamentos vencidos</li>
                        <li>Peças anatômicas pequenas</li>
                    </ul>
                </div>

                <div class="cartao-beneficio">
                    <div class="icon">
                        <i class="fas fa-times-circle" style="color: #a0a0a0"></i>
                    </div>
                    <h3>Precauções</h3>
                    <ul class="lista-itens">
                        <li>Nunca reutilize materiais perfurocortantes</li>
                        <li>Não misture com lixo comum</li>
                        <li>Use EPIs ao manipular</li>
                        <li>Descarte imediato após uso</li>
                        <li>Não encha recipientes além da capacidade</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="dicas-section">
            <h2><i class="fas fa-shield-alt"></i> Dicas de Segurança</h2>
            <div class="dicas-container">
                <div class="dica-item">
                    <img src="<?php echo $base_path; ?>/images/materials/ambulatorios/segregacao.jpg" alt="Segregação">
                    <h3>Segregação</h3>
                    <p>
                        Separe imediatamente os resíduos conforme sua classificação (perfurocortantes, químicos,
                        infectantes).
                    </p>
                </div>

                <div class="dica-item">
                    <img src="<?php echo $base_path; ?>/images/materials/ambulatorios/recipientes.jpg" alt="Acondicionamento">
                    <h3>Acondicionamento</h3>
                    <p>
                        Use recipientes rígidos para perfurocortantes e sacos brancos resistentes para outros materiais.
                    </p>
                </div>

                <div class="dica-item">
                    <img src="<?php echo $base_path; ?>/images/materials/ambulatorios/coleta-de-residuos-hospitalares.jpg" alt="Transporte">
                    <h3>Transporte</h3>
                    <p>
                        Armazene temporariamente em local ventilado e sinalizado até a coleta por empresa autorizada.
                    </p>
                </div>
            </div>
        </section>

        <section class="curiosidades">
            <div class="card-curiosidade">
                <h2><i class="fas fa-hospital"></i> Impacto e Normas</h2>
                <p>
                    Os resíduos de saúde são regulados pela RDC ANVISA nº 222/2018 e exigem tratamento específico para
                    evitar riscos biológicos.
                </p>
                <ul class="lista-impacto">
                    <li>Risco de transmissão de doenças</li>
                    <li>Contaminação de solos e água</li>
                    <li>Multas por descarte irregular</li>
                    <li>Necessidade de plano de gerenciamento</li>
                </ul>
                <a href="<?php echo $base_path; ?>/index.php" class="btn btn-branco"><i class="fas fa-arrow-left"></i> Voltar à Página
                    Inicial</a>
            </div>
        </section>
    </main>

    <?php include '../../includes/footer.php'; ?>

    <script src="<?php echo $base_path; ?>/js/script.js"></script>
</body>

</html>