<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosso Portfólio | Jornada do Desenvolvedor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="body">

    <header>
        <h1 id="siteTitle">Jornada do Desenvolvedor</h1>
        <nav>
            <ul id="mainNav">
                <li><a href="index.php" data-lang="inicio">Início</a></li>
                <li><a href="sobre.php" data-lang="sobre">Sobre</a></li>
                <li><a href="servicos.php" data-lang="servicos">Serviços</a></li>
                <li><a href="projetos.php" data-lang="projetos">Projetos</a></li>
                <li><a href="blog.php" data-lang="blog">Blog</a></li>
                <li><a href="contato.php" data-lang="contato">Contato</a></li>
            </ul>
        </nav>
        <div class="header-controls">
            <button id="darkModeToggle">🌙</button>
            <div class="lang-switcher">
                <img src="https://flagcdn.com/br.svg" alt="Bandeira do Brasil" onclick="changeLanguage('pt-BR')">
                <img src="https://flagcdn.com/us.svg" alt="Bandeira dos EUA" onclick="changeLanguage('en-US')">
            </div>
        </div>
    </header>

    <main>
        <section class="hero" style="height: 300px; padding-top: 80px;">
            <h2 id="heroHeading">Nosso Portfólio de Projetos</h2>
            <p id="heroText">Veja o resultado prático da nossa paixão por código e design.</p>
        </section>

        <section class="section" id="projetos">
            <div class="section-header">
                <h3 id="projetosHeading">Todos os Projetos</h3>
                <div class="filter-controls">
                    <input type="text" id="projectSearch" placeholder="Buscar Projetos">
                    <select id="projectCategory">
                        <option value="all">Todas as Categorias</option>
                        <option value="ecommerce">E-commerce</option>
                        <option value="mobile">Mobile</option>
                        <option value="institucional">Institucional</option>
                    </select>
                </div>
            </div>
            <div class="content project-list">
                <div class="card" data-category="ecommerce" data-title="Site de E-commerce">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Projeto+E-commerce" alt="Projeto E-commerce">
                    <h4>Site de E-commerce</h4>
                    <p>Um projeto de e-commerce moderno com React e Node.js.</p>
                    <a href="#">Ver Projeto</a>
                </div>
                <div class="card" data-category="mobile" data-title="Aplicativo de Tarefas">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=App+de+Tarefas" alt="Aplicativo de Tarefas">
                    <h4>Aplicativo de Tarefas</h4>
                    <p>Aplicativo mobile para gerenciamento de tarefas com Flutter.</p>
                    <a href="#">Ver Projeto</a>
                </div>
                <div class="card" data-category="ecommerce" data-title="Marketplace de Artesanato">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Marketplace" alt="Marketplace de Artesanato">
                    <h4>Marketplace de Artesanato</h4>
                    <p>Plataforma online para compra e venda de produtos artesanais.</p>
                    <a href="#">Ver Projeto</a>
                </div>
                <div class="card" data-category="institucional" data-title="Site Institucional Advocacia">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Site+Advocacia" alt="Site Institucional">
                    <h4>Site Institucional Advocacia</h4>
                    <p>Website moderno e sóbrio para um escritório de advocacia.</p>
                    <a href="#">Ver Projeto</a>
                </div>
                <div class="card" data-category="mobile" data-title="App de Delivery">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=App+Delivery" alt="App de Delivery">
                    <h4>App de Delivery</h4>
                    <p>Aplicativo completo de delivery com geolocalização e pagamentos.</p>
                    <a href="#">Ver Projeto</a>
                </div>
                <div class="card" data-category="institucional" data-title="Portal de Notícias">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Portal+de+Notícias" alt="Portal de Notícias">
                    <h4>Portal de Notícias</h4>
                    <p>Plataforma de notícias com sistema de gerenciamento de conteúdo.</p>
                    <a href="#">Ver Projeto</a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="script.js"></script>
</body>
</html>