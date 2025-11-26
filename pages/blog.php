<?php
$base_path = "..";
$pagina_atual = "blog";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="../css/blog.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="../images/favicon/raciclagem-favicon.png" type="image/x-icon">
</head>
<body>
    
    <?php include '../includes/header.php'; ?>

    <main class="blog-page">
        <div class="container">
            <article class="artigo-destaque">
                <div class="imagem-destaque">
                    <img src="../images/blog/mulher-separando-residuos.webp" alt="Mulher separando resíduos">
                </div>
                <div class="conteudo-destaque">
                    <span class="categoria">Dicas Práticas</span>
                    <h1>Como organizar sua rotina de reciclagem em 5 passos simples</h1>
                    <p class="meta">Por <strong>Vitor Amorim</strong> | 16 de Maio de 2025</p>
                    <div class="texto-destaque">
                        <p>A reciclagem doméstica pode parecer complicada no início...</p>
                    </div>
                    <a href="#" class="btn">Continuar Lendo</a>
                </div>
            </article>

            <section class="recomendacoes">
                <h2>Mais Artigos para Você</h2>
                <div class="grid-recomendacoes">
                    <article class="card-recomendacao">
                        <div class="imagem-recomendacao">
                            <img src="../images/blog/reciclagem-lixo-eletronico.jpg" alt="Reciclagem de eletrônicos">
                        </div>
                        <div class="conteudo-recomendacao">
                            <span class="categoria">Tecnologia Verde</span>
                            <h3>O que fazer com seus eletrônicos antigos?</h3>
                            <p class="meta">Por Lucas Oliveira | 17/05/2025</p>
                        </div>
                    </article>
                    </div>
            </section>
        </div>
    </main>

    <?php include '../includes/footer.php'; ?>
</body>
</html>