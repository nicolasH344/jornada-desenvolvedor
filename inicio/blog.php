<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Jornada do Desenvolvedor</title>
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
            <h2 id="heroHeading">Nosso Blog</h2>
            <p id="heroText">Artigos, tutoriais e dicas sobre o universo da tecnologia e desenvolvimento.</p>
        </section>

        <section class="section" id="blog">
            <div class="section-header">
                <h3 id="blogHeading">Todos os Artigos</h3>
                <div class="filter-controls">
                    <input type="text" id="blogSearch" placeholder="Buscar Artigos">
                    <select id="blogCategory">
                        <option value="all">Todas as Categorias</option>
                        <option value="php">PHP</option>
                        <option value="web">Web</option>
                        <option value="produtividade">Produtividade</option>
                        <option value="carreira">Carreira</option>
                    </select>
                </div>
            </div>
            <div class="content blog-list">
                 <div class="card" data-category="php" data-title="Primeiros Passos em PHP">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Artigo+PHP" alt="Artigo 1">
                    <h4>Primeiros Passos em PHP</h4>
                    <p class="meta">2025-08-11</p>
                    <p>Um guia para iniciantes na linguagem PHP.</p>
                </div>
                <div class="card" data-category="web" data-title="O Futuro do Desenvolvimento Web">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Artigo+Web" alt="Artigo 2">
                    <h4>O Futuro do Desenvolvimento Web</h4>
                    <p class="meta">2025-08-08</p>
                    <p>Tendências e tecnologias emergentes no desenvolvimento web.</p>
                </div>
                <div class="card" data-category="produtividade" data-title="Dicas de Produtividade para Desenvolvedores">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Artigo+Produtividade" alt="Artigo 3">
                    <h4>Dicas de Produtividade para Desenvolvedores</h4>
                    <p class="meta">2025-08-05</p>
                    <p>Estratégias para otimizar seu fluxo de trabalho.</p>
                </div>
                <div class="card" data-category="php" data-title="APIs REST com PHP">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Artigo+APIs+PHP" alt="Artigo 4">
                    <h4>APIs REST com PHP</h4>
                    <p class="meta">2025-08-01</p>
                    <p>Construindo e consumindo APIs RESTful usando PHP.</p>
                </div>
                <div class="card" data-category="carreira" data-title="Como Montar um Portfólio de Sucesso">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Artigo+Carreira" alt="Artigo 5">
                    <h4>Como Montar um Portfólio de Sucesso</h4>
                    <p class="meta">2025-07-28</p>
                    <p>Dicas essenciais para destacar seus projetos e conquistar vagas.</p>
                </div>
                <div class="card" data-category="web" data-title="CSS Moderno: Grid e Flexbox">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Artigo+CSS" alt="Artigo 6">
                    <h4>CSS Moderno: Grid e Flexbox</h4>
                    <p class="meta">2025-07-22</p>
                    <p>Um guia definitivo para criar layouts complexos e responsivos.</p>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="script.js"></script>
</body>
</html>