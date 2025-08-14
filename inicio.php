<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jornada do Desenvolvedor</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="inicio.css">
</head>
<body id="body">

    <header>
        <h1 id="siteTitle">Jornada do Desenvolvedor</h1>
        <nav>
            <ul id="mainNav">
                <li><a href="#inicio" data-lang="inicio">Início</a></li>
                <li><a href="#sobre" data-lang="sobre">Sobre</a></li>
                <li><a href="#servicos" data-lang="servicos">Serviços</a></li>
                <li><a href="#projetos" data-lang="projetos">Projetos</a></li>
                <li><a href="#blog" data-lang="blog">Blog</a></li>
                <li><a href="#contato" data-lang="contato">Contato</a></li>
            </ul>
        </nav>
        <div class="header-controls">
            <button id="darkModeToggle" title="Alternar Modo Escuro">🌙</button>
            <div class="lang-switcher">
                <img src="https://flagcdn.com/br.svg" alt="Bandeira do Brasil" onclick="changeLanguage('pt-BR')" title="Mudar para Português">
                <img src="https://flagcdn.com/us.svg" alt="Bandeira dos EUA" onclick="changeLanguage('en-US')" title="Change to English">
            </div>
        </div>
    </header>

    <main>
        <section class="hero" id="inicio">
            <h2 id="heroHeading">Bem-vindo à Jornada do Desenvolvedor</h2>
            <p id="heroText">Explorando o mundo da tecnologia e ajudando todos a acessá-la com mais facilidade.</p>
        </section>

        <section class="section" id="sobre">
            <h2 id="sobreHeading">Sobre Nós</h2>
            <div class="content">
                <img src="https://via.placeholder.com/400x250/fff/000?text=Sobre+Nós" alt="Sobre nós">
                <div class="text">
                    <p id="sobreText">Somos apaixonados por tecnologia e buscamos tornar o conhecimento acessível a todos.</p>
                </div>
            </div>
        </section>

        <section class="section alt-bg" id="depoimentos">
            <h2 id="depoimentosHeading">O que nossos usuários dizem</h2>
            <div class="content">
                <div class="card testimonial-card">
                    <p>"O conteúdo do blog é incrível e me ajudou muito na minha jornada. Recomendo!"</p>
                    <div class="meta">
                        <h4>- Ana P.</h4>
                        <span class="platform">Via LinkedIn</span>
                    </div>
                </div>
                <div class="card testimonial-card">
                    <p>"Os tutoriais são super claros. Finalmente entendi o que é back-end. Obrigado!"</p>
                    <div class="meta">
                        <h4>- João L.</h4>
                        <span class="platform">Via GitHub</span>
                    </div>
                </div>
                <div class="card testimonial-card">
                    <p>"O novo modo escuro é perfeito! As cores são agradáveis e a busca funciona muito bem."</p>
                    <div class="meta">
                        <h4>- Carlos R.</h4>
                        <span class="platform">Via Twitter/X</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" id="projetos">
            <div class="section-header">
                <h2 id="projetosHeading">Projetos em Destaque</h2>
                <div class="filter-controls">
                    <input type="text" id="projectSearch" placeholder="Buscar Projetos">
                    <select id="projectCategory">
                        <option value="all">Todas as Categorias</option>
                        <option value="ecommerce">E-commerce</option>
                        <option value="mobile">Mobile</option>
                    </select>
                </div>
            </div>
            <div class="content project-list">
                <div class="card" data-category="ecommerce" data-title="Site de E-commerce">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Projeto+1" alt="Projeto 1">
                    <h4>Site de E-commerce</h4>
                    <p>Um projeto de e-commerce moderno com React e Node.js.</p>
                    <a href="#">Ver Projeto</a>
                </div>
                <div class="card" data-category="mobile" data-title="Aplicativo de Tarefas">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Projeto+2" alt="Projeto 2">
                    <h4>Aplicativo de Tarefas</h4>
                    <p>Aplicativo mobile para gerenciamento de tarefas com Flutter.</p>
                    <a href="#">Ver Projeto</a>
                </div>
                <div class="card" data-category="ecommerce" data-title="Marketplace de Artesanato">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Projeto+3" alt="Projeto 3">
                    <h4>Marketplace de Artesanato</h4>
                    <p>Plataforma online para compra e venda de produtos artesanais.</p>
                    <a href="#">Ver Projeto</a>
                </div>
            </div>
        </section>

        <section class="section alt-bg" id="servicos">
            <h2 id="servicosHeading">Nossa Jornada: Conhecimento e Crescimento</h2>
            <div class="content">
                <div class="card">
                    <h4>Fundamentos</h4>
                    <p>O ponto de partida essencial para todo desenvolvedor.</p>
                </div>
                <div class="card">
                    <h4>Tecnologias Avançadas</h4>
                    <p>Domine frameworks e linguagens de back-end.</p>
                </div>
                <div class="card">
                    <h4>Carreira</h4>
                    <p>Dicas para montar seu portfólio e conseguir sua vaga.</p>
                </div>
            </div>
        </section>

        <section class="section" id="blog">
            <div class="section-header">
                <h2 id="blogHeading">Últimos Artigos do Blog</h2>
                <div class="filter-controls">
                    <input type="text" id="blogSearch" placeholder="Buscar Artigos">
                    <select id="blogCategory">
                        <option value="all">Todas as Categorias</option>
                        <option value="php">PHP</option>
                        <option value="web">Web</option>
                        <option value="produtividade">Produtividade</option>
                    </select>
                </div>
            </div>
            <div class="content blog-list">
                <div class="card" data-category="php" data-title="Primeiros Passos em PHP">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Artigo+1" alt="Artigo 1">
                    <h4>Primeiros Passos em PHP</h4>
                    <p class="meta">2025-08-11</p>
                    <p>Um guia para iniciantes na linguagem PHP.</p>
                </div>
                <div class="card" data-category="web" data-title="O Futuro do Desenvolvimento Web">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Artigo+2" alt="Artigo 2">
                    <h4>O Futuro do Desenvolvimento Web</h4>
                    <p class="meta">2025-08-08</p>
                    <p>Tendências e tecnologias emergentes no desenvolvimento web.</p>
                </div>
                <div class="card" data-category="produtividade" data-title="Dicas de Produtividade para Desenvolvedores">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Artigo+3" alt="Artigo 3">
                    <h4>Dicas de Produtividade para Desenvolvedores</h4>
                    <p class="meta">2025-08-05</p>
                    <p>Estratégias para otimizar seu fluxo de trabalho como desenvolvedor.</p>
                </div>
                <div class="card" data-category="php" data-title="APIs REST com PHP">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Artigo+4" alt="Artigo 4">
                    <h4>APIs REST com PHP</h4>
                    <p class="meta">2025-08-01</p>
                    <p>Construindo e consumindo APIs RESTful usando PHP.</p>
                </div>
            </div>
        </section>
    </main>
    
    <footer id="contato">
        <div class="footer-content">
            <h2 id="newsletterHeading">Inscreva-se na Newsletter</h2>
            <div class="footer-newsletter-form">
                <p id="newsletterText">Receba as últimas novidades e artigos diretamente no seu email.</p>
                <form class="newsletter-form-inner">
                    <input type="email" id="newsletter-email" name="newsletter-email" placeholder="Seu email..." required>
                    <button type="submit" id="newsletterButton">Inscrever</button>
                </form>
            </div>

            <div class="footer-links-container">
                <a href="#inicio" data-lang="inicio">Início</a>
                <a href="#sobre" data-lang="sobre">Sobre</a>
                <a href="#projetos" data-lang="projetos">Projetos</a>
                <a href="#blog" data-lang="blog">Blog</a>
            </div>

            <div class="social-links">
                <a href="#" target="_blank" title="Facebook"><img src="https://cdn3.iconfinder.com/data/icons/social-media-2069/64/_facebook_circle-64.png" alt="Facebook"></a>
                <a href="#" target="_blank" title="Twitter"><img src="https://cdn3.iconfinder.com/data/icons/social-media-2069/64/_twitter_circle-64.png" alt="Twitter"></a>
                <a href="#" target="_blank" title="LinkedIn"><img src="https://cdn3.iconfinder.com/data/icons/social-media-2069/64/_linkedin_circle-64.png" alt="LinkedIn"></a>
                <a href="#" target="_blank" title="GitHub"><img src="https://cdn3.iconfinder.com/data/icons/social-media-2069/64/_github_circle-64.png" alt="GitHub"></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Jornada do Desenvolvedor. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="inicio.js"></script>
</body>
</html>