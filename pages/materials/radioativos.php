<?php
$base_path = "../..";
$pagina_atual = "materiais";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resíduos Radioativos</title>
    <link rel="stylesheet" href="<?php echo $base_path; ?>/css/materials/radioativos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="<?php echo $base_path; ?>/images/favicon/raciclagem-favicon.png" type="image/x-icon">
</head>

<body>
    <?php include '../../includes/header.php'; ?>

    <section class="destaque">
        <img src="<?php echo $base_path; ?>/images/materials/radioativos/residuos-radioativos-banner.webp" alt="Resíduos Radioativos" class="destaque-img">
        <div class="sobreposicao"></div>
        <div class="container conteudo-destaque">
            <h1>Resíduos Radioativos</h1>
            <p>Descubra como manejar materiais radioativos com segurança</p>
        </div>
    </section>

    <main class="container">
        <section class="tipos-residuos">
            <h2><i class="fas fa-radiation"></i> Manejo de Resíduos Radioativos</h2>
            <p class="intro-texto">
                Materiais radioativos exigem procedimentos especiais de manipulação e descarte devido aos riscos à saúde
                e ao meio ambiente.
            </p>

            <div class="grade-beneficios">
                <div class="cartao-beneficio">
                    <div class="icon">
                        <i class="fas fa-recycle" style="color: #800080"></i>
                    </div>
                    <h3>Processo de Descarte</h3>
                    <ol class="lista-processo">
                        <li>Identificação e classificação do material</li>
                        <li>Isolamento em recipientes blindados</li>
                        <li>Armazenamento temporário seguro</li>
                        <li>Transporte por equipes especializadas</li>
                        <li>Disposição final em locais autorizados</li>
                    </ol>
                </div>

                <div class="cartao-beneficio">
                    <div class="icon">
                        <i class="fas fa-check-circle" style="color: #800080"></i>
                    </div>
                    <h3>Materiais Radioativos</h3>
                    <ul class="lista-itens">
                        <li>Rejeitos de usinas nucleares</li>
                        <li>Equipamentos médicos de radioterapia</li>
                        <li>Fontes radioindustriais</li>
                        <li>Detectores de fumaça com amerício</li>
                        <li>Lâmpadas fluorescentes</li>
                        <li>Resíduos de pesquisa nuclear</li>
                    </ul>
                </div>

                <div class="cartao-beneficio">
                    <div class="icon">
                        <i class="fas fa-times-circle" style="color: #800080"></i>
                    </div>
                    <h3>Precauções</h3>
                    <ul class="lista-itens">
                        <li>Nunca manipule sem proteção</li>
                        <li>Não descarte no lixo comum</li>
                        <li>Evite contato direto</li>
                        <li>Mantenha distância de alimentos</li>
                        <li>Não tente reutilizar recipientes</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="dicas-section">
            <h2><i class="fas fa-lightbulb"></i> Dicas de Segurança</h2>
            <div class="dicas-container">
                <div class="dica-item">
                    <img src="<?php echo $base_path; ?>/images/materials/radioativos/trifolio.jpg" alt="Identificação">
                    <h3>Identificação</h3>
                    <p>
                        Reconheça os símbolos de radiação (trifólio amarelo/preto) e nunca remova etiquetas de materiais
                        suspeitos.
                    </p>
                </div>

                <div class="dica-item">
                    <img src="<?php echo $base_path; ?>/images/materials/radioativos/lavando-mao.jpg" alt="Proteção">
                    <h3>Proteção</h3>
                    <p>
                        Em caso de contato acidental, lave a área com água corrente e procure atendimento médico
                        imediato.
                    </p>
                </div>

                <div class="dica-item">
                    <img src="<?php echo $base_path; ?>/images/materials/radioativos/descarte.jpg" alt="Descarte">
                    <h3>Descarte</h3>
                    <p>
                        Entre em contato com órgãos ambientais ou empresas especializadas para descarte adequado.
                    </p>
                </div>
            </div>
        </section>

        <section class="curiosidades">
            <div class="card-curiosidade">
                <h2><i class="fas fa-biohazard"></i> Impacto Ambiental</h2>
                <p>
                    Resíduos radioativos podem permanecer perigosos por milhares de anos, exigindo manejo especializado.
                </p>
                <ul class="lista-impacto">
                    <li>Contaminação ambiental de longo prazo</li>
                    <li>Riscos à saúde humana</li>
                    <li>Necessidade de monitoramento contínuo</li>
                    <li>Altos custos de tratamento</li>
                </ul>
                <a href="<?php echo $base_path; ?>/index.php" class="btn btn-roxo"><i class="fas fa-arrow-left"></i> Voltar à Página Inicial</a>
            </div>
        </section>
    </main>

    <?php include '../../includes/footer.php'; ?>

    <script src="<?php echo $base_path; ?>/js/script.js"></script>
</body>

</html>