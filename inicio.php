<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jornada do Desenvolvedor</title>
    <style>
        /* CSS Variables for Light Mode */
        :root {
            --primary-bg-start: #1e3c72;
            --primary-bg-mid: #2a5298;
            --primary-bg-end: #00c6ff;
            --secondary-bg-color: rgba(0, 0, 0, 0.6);
            --text-color: white;
            --link-hover-color: yellow;
            --gradient-animation-duration: 20s;
            --card-bg: rgba(255, 255, 255, 0.1);
            --card-shadow: rgba(0, 0, 0, 0.2);
            --alt-bg: rgba(0,0,0,0.2);
            --input-bg: rgba(255, 255, 255, 0.1);
            --input-border: #ccc;
        }

        /* CSS Variables for Dark Mode */
        body.dark-mode {
            --primary-bg-start: #0f1c37;
            --primary-bg-mid: #15294a;
            --primary-bg-end: #005a7d;
            --secondary-bg-color: rgba(0, 0, 0, 0.8);
            --text-color: #eee;
            --link-hover-color: #aaff80;
            --card-bg: rgba(0, 0, 0, 0.8);
            --card-shadow: rgba(0, 0, 0, 0.5);
            --alt-bg: rgba(0, 0, 0, 0.5);
            --input-bg: rgba(0, 0, 0, 0.6);
            --input-border: #555;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, var(--primary-bg-start), var(--primary-bg-mid), #6a11cb, #2575fc, var(--primary-bg-end));
            background-size: 400% 400%;
            animation: gradientBG var(--gradient-animation-duration) ease-in-out infinite;
            color: var(--text-color);
            transition: background 0.5s ease, color 0.5s ease;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: var(--secondary-bg-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 40px;
            z-index: 1000;
            box-sizing: border-box;
            transition: background 0.5s ease;
        }

        .header-controls {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .header-controls button {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 24px;
            color: var(--text-color);
            transition: color 0.3s ease;
        }

        .header-controls .lang-switcher img {
            width: 24px;
            height: 16px;
            border-radius: 3px;
            cursor: pointer;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav li {
            margin-left: 40px;
        }

        nav a {
            color: var(--text-color);
            text-decoration: none;
            font-size: 16px;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: var(--link-hover-color);
        }

        .hero {
            height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding-top: 60px;
        }

        .hero h2 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 20px;
            max-width: 600px;
        }

        .section {
            padding: 80px 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            gap: 40px;
        }

        .section.alt-bg {
            background-color: var(--alt-bg);
            transition: background-color 0.5s ease;
        }

        .section .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 1200px;
            margin-bottom: 20px;
        }

        .section .section-header h3 {
            flex-grow: 1;
            text-align: left;
        }

        .section .section-header .filter-controls {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .section .section-header input {
            padding: 8px;
            border: 1px solid var(--input-border);
            border-radius: 5px;
            color: var(--text-color);
            background-color: var(--input-bg);
        }

        .section .section-header select {
            padding: 8px;
            border: 1px solid var(--input-border);
            border-radius: 5px;
            color: var(--text-color);
            background-color: var(--input-bg);
        }
        
        .section .section-header input::placeholder {
            color: var(--text-color);
            opacity: 0.7;
        }

        .section .content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            max-width: 1200px;
        }

        .card {
            background: var(--card-bg);
            border-radius: 10px;
            padding: 20px;
            max-width: 300px;
            box-shadow: 0 4px 8px var(--card-shadow);
            transition: transform 0.3s ease, background 0.5s ease, box-shadow 0.5s ease;
            display: flex;
            flex-direction: column;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card h4 {
            font-size: 20px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .card .meta {
            font-size: 0.9em;
            color: #bbb;
            margin-bottom: 10px;
        }

        .card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 10px;
            object-fit: cover;
        }

        .card p {
            flex-grow: 1;
            margin-bottom: 10px;
        }

        .card a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #2575fc;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .testimonial-card {
            max-width: 600px;
        }

        /* Estilos específicos para depoimentos */
        .testimonial-card .platform {
            font-size: 0.8em;
            color: #999;
            margin-top: -10px;
            margin-bottom: 10px;
        }
        
        /* Estilos para o novo Rodapé */
        footer {
            background-color: var(--alt-bg);
            color: var(--text-color);
            padding: 60px 20px;
            margin-top: 40px;
            position: relative;
            text-align: center;
        }
        
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--primary-bg-end), #6a11cb, #2575fc, var(--primary-bg-start));
            opacity: 0.2;
            z-index: -1;
            transform: skewY(-2deg);
            transform-origin: top left;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer-content h4 {
            font-size: 2em;
            margin-bottom: 20px;
            text-transform: uppercase;
        }

        .footer-newsletter-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 500px;
            width: 100%;
            margin-bottom: 30px;
        }

        .footer-newsletter-form p {
            margin-bottom: 15px;
        }

        .footer-newsletter-form input {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--input-border);
            border-radius: 5px;
            background-color: var(--input-bg);
            color: var(--text-color);
            margin-bottom: 15px;
        }

        .footer-newsletter-form button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #00c6ff;
            color: white;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        .footer-newsletter-form button:hover {
            background-color: #00a3d1;
        }

        .footer-links-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }
        
        .footer-links-container a {
            color: var(--text-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links-container a:hover {
            color: var(--link-hover-color);
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }

        .social-links img {
            width: 30px;
            height: 30px;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .social-links img:hover {
            opacity: 1;
        }
        
        .footer-bottom {
            background: rgba(0,0,0,0.9);
            color: var(--text-color);
            text-align: center;
            padding: 50px 20px;
        }

        /* Responsive design for smaller screens */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                padding: 10px 20px;
            }
            .header-controls {
                margin-top: 10px;
            }
            nav ul {
                flex-direction: column;
            }
            nav li {
                margin: 5px 0;
            }
            .hero {
                height: 400px;
            }
            .hero h2 {
                font-size: 36px;
            }
            .section {
                padding: 40px 20px;
            }
            .section .section-header {
                flex-direction: column;
                align-items: flex-start;
            }
            .section .section-header .filter-controls {
                margin-top: 10px;
            }
        }
    </style>
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
            <div class="content">
                <img src="https://via.placeholder.com/400x250/fff/000?text=Sobre+Nós" alt="Sobre nós">
                <div class="text">
                    <h3 id="sobreHeading">Sobre Nós</h3>
                    <p id="sobreText">Somos apaixonados por tecnologia e buscamos tornar o conhecimento acessível a todos.</p>
                </div>
            </div>
        </section>

        <section class="section alt-bg" id="depoimentos">
            <h3 id="depoimentosHeading">O que nossos usuários dizem</h3>
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
                <h3 id="projetosHeading">Projetos em Destaque</h3>
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
            <h3 id="servicosHeading">Nossa Jornada: Conhecimento e Crescimento</h3>
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
                <h3 id="blogHeading">Últimos Artigos do Blog</h3>
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
            <h4 id="newsletterHeading">Inscreva-se na Newsletter</h4>
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

    <script>
        // Lógica para o Modo Escuro
        const darkModeToggle = document.getElementById('darkModeToggle');
        const body = document.getElementById('body');

        darkModeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
        });

        // Lógica para o Seletor de Idiomas (básico)
        const translations = {
            'pt-BR': {
                siteTitle: 'Jornada do Desenvolvedor',
                inicio: 'Início',
                sobre: 'Sobre',
                servicos: 'Serviços',
                projetos: 'Projetos',
                blog: 'Blog',
                contato: 'Contato',
                heroHeading: 'Bem-vindo à Jornada do Desenvolvedor',
                heroText: 'Explorando o mundo da tecnologia e ajudando todos a acessá-la com mais facilidade.',
                sobreHeading: 'Sobre Nós',
                sobreText: 'Somos apaixonados por tecnologia e buscamos tornar o conhecimento acessível a todos.',
                depoimentosHeading: 'O que nossos usuários dizem',
                projetosHeading: 'Projetos em Destaque',
                servicosHeading: 'Nossa Jornada: Conhecimento e Crescimento',
                blogHeading: 'Últimos Artigos do Blog',
                projectSearch: 'Buscar Projetos',
                projectCategory: 'Todas as Categorias',
                blogSearch: 'Buscar Artigos',
                blogCategory: 'Todas as Categorias',
                newsletterHeading: 'Inscreva-se na Newsletter',
                newsletterText: 'Receba as últimas novidades e artigos diretamente no seu email.',
                newsletterButton: 'Inscrever'
            },
            'en-US': {
                siteTitle: 'Developer\'s Journey',
                inicio: 'Home',
                sobre: 'About',
                servicos: 'Services',
                projetos: 'Projects',
                blog: 'Blog',
                contato: 'Contact',
                heroHeading: 'Welcome to the Developer\'s Journey',
                heroText: 'Exploring the world of technology and helping everyone access it more easily.',
                sobreHeading: 'About Us',
                sobreText: 'We are passionate about technology and aim to make knowledge accessible to all.',
                depoimentosHeading: 'What our users say',
                projetosHeading: 'Featured Projects',
                servicosHeading: 'Our Journey: Knowledge and Growth',
                blogHeading: 'Latest Blog Posts',
                projectSearch: 'Search Projects',
                projectCategory: 'All Categories',
                blogSearch: 'Search Articles',
                blogCategory: 'All Categories',
                newsletterHeading: 'Subscribe to Newsletter',
                newsletterText: 'Get the latest news and articles directly in your inbox.',
                newsletterButton: 'Subscribe'
            }
        };

        function changeLanguage(lang) {
            // Update navigation links
            document.querySelectorAll('#mainNav a').forEach(a => {
                const key = a.dataset.lang;
                if (translations[lang][key]) a.textContent = translations[lang][key];
            });

            // Update footer links
            document.querySelectorAll('.footer-links-container a').forEach(a => {
                const key = a.dataset.lang;
                if (translations[lang][key]) a.textContent = translations[lang][key];
            });

            // Update main content
            document.getElementById('siteTitle').textContent = translations[lang].siteTitle;
            document.getElementById('heroHeading').textContent = translations[lang].heroHeading;
            document.getElementById('heroText').textContent = translations[lang].heroText;
            document.getElementById('sobreHeading').textContent = translations[lang].sobreHeading;
            document.getElementById('sobreText').textContent = translations[lang].sobreText;
            document.getElementById('depoimentosHeading').textContent = translations[lang].depoimentosHeading;
            document.getElementById('projetosHeading').textContent = translations[lang].projetosHeading;
            document.getElementById('servicosHeading').textContent = translations[lang].servicosHeading;
            document.getElementById('blogHeading').textContent = translations[lang].blogHeading;
            document.getElementById('projectSearch').placeholder = translations[lang].projectSearch;
            document.getElementById('projectCategory').options[0].textContent = translations[lang].projectCategory;
            document.getElementById('blogSearch').placeholder = translations[lang].blogSearch;
            document.getElementById('blogCategory').options[0].textContent = translations[lang].blogCategory;
            document.getElementById('newsletterHeading').textContent = translations[lang].newsletterHeading;
            document.getElementById('newsletterText').textContent = translations[lang].newsletterText;
            document.getElementById('newsletterButton').textContent = translations[lang].newsletterButton;
        }

        // Lógica de Filtros e Busca (Projetos)
        const projectSearch = document.getElementById('projectSearch');
        const projectCategory = document.getElementById('projectCategory');
        const projectList = document.querySelector('.project-list');
        const projectCards = projectList.querySelectorAll('.card');

        function filterProjects() {
            const searchTerm = projectSearch.value.toLowerCase();
            const category = projectCategory.value;

            projectCards.forEach(card => {
                const title = card.dataset.title.toLowerCase();
                const cardCategory = card.dataset.category;
                
                const matchesSearch = title.includes(searchTerm);
                const matchesCategory = category === 'all' || category === cardCategory;
                
                if (matchesSearch && matchesCategory) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        projectSearch.addEventListener('input', filterProjects);
        projectCategory.addEventListener('change', filterProjects);

        // Lógica de Filtros e Busca (Blog)
        const blogSearch = document.getElementById('blogSearch');
        const blogCategory = document.getElementById('blogCategory');
        const blogList = document.querySelector('.blog-list');
        const blogCards = blogList.querySelectorAll('.card');

        function filterBlog() {
            const searchTerm = blogSearch.value.toLowerCase();
            const category = blogCategory.value;

            blogCards.forEach(card => {
                const title = card.dataset.title.toLowerCase();
                const cardCategory = card.dataset.category;
                
                const matchesSearch = title.includes(searchTerm);
                const matchesCategory = category === 'all' || category === cardCategory;
                
                if (matchesSearch && matchesCategory) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        blogSearch.addEventListener('input', filterBlog);
        blogCategory.addEventListener('change', filterBlog);
    </script>
</body>
</html>