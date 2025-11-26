<header>
    <div class="container cabecalho">
        <div class="logo">
            <img src="<?php echo $base_path; ?>/images/plant-logo.png" alt="Logo Reciclagem" class="logo-img">
        </div>
        <nav>
            <ul>
                <li><a href="<?php echo $base_path; ?>/index.php" class="<?php echo ($pagina_atual == 'home') ? 'active' : ''; ?>">Início</a></li>
                <li><a href="<?php echo $base_path; ?>/pages/blog.php" class="<?php echo ($pagina_atual == 'blog') ? 'active' : ''; ?>">Blog</a></li>
                <li><a href="<?php echo $base_path; ?>/pages/contato.php" class="<?php echo ($pagina_atual == 'contato') ? 'active' : ''; ?>">Contato</a></li>
                <li><a href="<?php echo $base_path; ?>/pages/equipe.php" class="<?php echo ($pagina_atual == 'equipe') ? 'active' : ''; ?>">Equipe</a></li>
            </ul>
        </nav>
    </div>
</header>