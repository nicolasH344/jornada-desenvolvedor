<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jornada do Desenvolvedor</title>
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
        <section class="hero" id="inicio">
            <h2 id="heroHeading">Bem-vindo à Jornada do Desenvolvedor</h2>
            <p id="heroText">Explorando o mundo da tecnologia e ajudando todos a acessá-la com mais facilidade.</p>
        </section>

        <section class="section" id="sobre">
             <div class="content" style="max-width: 1000px; display: flex; align-items: center; text-align: left; flex-wrap: wrap; gap: 40px;">
                <img src="https://via.placeholder.com/400x250/fff/000?text=Sobre+Nós" alt="Sobre nós" style="border-radius: 10px; flex-shrink: 0;">
                <div style="flex: 1; min-width: 300px;">
                    <h3 id="sobreHeading">Apaixonados por Código e Comunidade</h3>
                    <p id="sobreText">Nascemos do desejo de simplificar o aprendizado em tecnologia. Somos uma comunidade dedicada a criar conteúdo de qualidade, guiar novos talentos e construir soluções digitais que fazem a diferença. </p>
                    <a href="sobre.php" class="btn-cta">Conheça nossa história</a>
                </div>
            </div>
        </section>

        <section class="section alt-bg" id="servicos">
            <h3 id="servicosHeading">O Que Fazemos</h3>
            <div class="content">
                <div class="card">
                    <h4>Desenvolvimento Web</h4>
                    <p>Criamos sites e sistemas robustos, desde e-commerces a plataformas SaaS complexas.</p>
                </div>
                <div class="card">
                    <h4>Aplicativos Mobile</h4>
                    <p>Desenvolvemos aplicativos intuitivos para iOS e Android que encantam os usuários.</p>
                </div>
                <div class="card">
                    <h4>Consultoria Tech</h4>
                    <p>Guiamos sua empresa na tomada das melhores decisões tecnológicas para o seu negócio.</p>
                </div>
            </div>
            <a href="servicos.php" class="btn-cta" style="margin-top: 30px;">Ver todos os serviços</a>
        </section>

        <section class="section" id="projetos">
            <div class="section-header">
                <h3 id="projetosHeading">Projetos em Destaque</h3>
            </div>
            <div class="content project-list">
                <div class="card" data-category="ecommerce" data-title="Site de E-commerce">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Projeto+E-commerce" alt="Projeto 1">
                    <h4>Site de E-commerce</h4>
                    <p>Um projeto de e-commerce moderno com React e Node.js.</p>
                </div>
                <div class="card" data-category="mobile" data-title="Aplicativo de Tarefas">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=App+de+Tarefas" alt="Projeto 2">
                    <h4>Aplicativo de Tarefas</h4>
                    <p>Aplicativo mobile para gerenciamento de tarefas com Flutter.</p>
                </div>
                <div class="card" data-category="institucional" data-title="Portal de Notícias">
                     <img src="https://via.placeholder.com/300x200/fff/000?text=Portal+de+Notícias" alt="Portal de Notícias">
                    <h4>Portal de Notícias</h4>
                    <p>Plataforma de notícias com sistema de gerenciamento de conteúdo.</p>
                </div>
            </div>
            <a href="projetos.php" class="btn-cta" style="margin-top: 30px;">Ver portfólio completo</a>
        </section>

        <section class="section alt-bg" id="depoimentos">
            <h3 id="depoimentosHeading">O que nossos usuários dizem</h3>
            <div class="content">
                 <div class="card testimonial-card"><p>"O conteúdo do blog é incrível e me ajudou muito na minha jornada. Recomendo!"</p><div class="meta"><h4>- Ana P.</h4><span class="platform">Via LinkedIn</span></div></div>
                <div class="card testimonial-card"><p>"Os tutoriais são super claros. Finalmente entendi o que é back-end. Obrigado!"</p><div class="meta"><h4>- João L.</h4><span class="platform">Via GitHub</span></div></div>
            </div>
        </section>

        <section class="section" id="blog">
             <div class="section-header">
                <h3 id="blogHeading">Últimos Artigos do Blog</h3>
            </div>
            <div class="content blog-list">
                <div class="card" data-category="php" data-title="Primeiros Passos em PHP">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Artigo+PHP" alt="Artigo 1">
                    <h4>Primeiros Passos em PHP</h4>
                    <p class="meta">11 de Agosto de 2025</p>
                </div>
                <div class="card" data-category="web" data-title="O Futuro do Desenvolvimento Web">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Artigo+Web" alt="Artigo 2">
                    <h4>O Futuro do Desenvolvimento Web</h4>
                    <p class="meta">08 de Agosto de 2025</p>
                </div>
                <div class="card" data-category="produtividade" data-title="Dicas de Produtividade para Desenvolvedores">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Artigo+Produtividade" alt="Artigo 3">
                    <h4>Dicas de Produtividade</h4>
                    <p class="meta">05 de Agosto de 2025</p>
                </div>
                 <div class="card" data-category="carreira" data-title="Como Montar um Portfólio de Sucesso">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Artigo+Carreira" alt="Artigo 5">
                    <h4>Como Montar um Portfólio de Sucesso</h4>
                    <p class="meta">28 de Julho de 2025</p>
                </div>
            </div>
            <a href="blog.php" class="btn-cta" style="margin-top: 30px;">Ler todos os artigos</a>
        </section>

    </main>
    
    <footer id="contato">
        <div class="footer-content">
            <h4 id="newsletterHeading">Inscreva-se na Newsletter</h4>
            <div class="footer-newsletter-form">
                <p id="newsletterText">Receba as últimas novidades e artigos diretamente no seu email.</p>
                <form class="newsletter-form-inner">
                    <input type="email" id="newsletter-email" name="newsletter-email" placeholder="Seu email..." required>
                    <button type="submit" id="newsletterButton">Inscrever</button>
                </form>
            </div>
            
            <div class="footer-links-container">
                <a href="index.php" data-lang="inicio">Início</a>
                <a href="sobre.php" data-lang="sobre">Sobre</a>
                <a href="serviços.php" data-lang="servicos">Serviços</a>
                <a href="projetos.php" data-lang="projetos">Projetos</a>
                <a href="blog.php" data-lang="blog">Blog</a>
                <a href="contato.php" data-lang="contato">Contato</a>
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

    <script src="script.js"></script>
</body>
</html>