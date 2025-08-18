<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós | Jornada do Desenvolvedor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="body">

    <header>
        <h1 id="siteTitle">Jornada do Desenvolvedor</h1>
        <nav>
            <ul id="mainNav">
                <li><a href="index.php" data-lang="inicio">Início</a></li>
                <li><a href="sobre.php" data-lang="sobre">Sobre</a></li>
                <li><a href="index.php#servicos" data-lang="servicos">Serviços</a></li>
                <li><a href="index.php#projetos" data-lang="projetos">Projetos</a></li>
                <li><a href="index.php#blog" data-lang="blog">Blog</a></li>
                <li><a href="index.php#contato" data-lang="contato">Contato</a></li>
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
            <h2 id="heroHeading">Sobre a Jornada do Desenvolvedor</h2>
            <p id="heroText">Nossa história, nossa missão e a paixão por trás do código.</p>
        </section>

        <section class="section" id="nossa-historia">
            <div class="content" style="max-width: 1000px; display: flex; align-items: center; text-align: left; flex-wrap: wrap; gap: 40px;">
                <img src="https://via.placeholder.com/400x300/fff/000?text=Nossa+Jornada" alt="Nossa História" style="border-radius: 10px; flex-shrink: 0;">
                <div style="flex: 1; min-width: 300px;">
                    <h3 id="sobreHeading">Nossa História</h3>
                    <p id="sobreText">
                        A "Jornada do Desenvolvedor" nasceu da paixão compartilhada por um grupo de amigos por tecnologia e educação. Percebemos que muitos aspirantes a desenvolvedores se sentiam perdidos em meio a um mar de informações desconexas. Nosso objetivo sempre foi criar um farol: um lugar com conteúdo claro, prático e inspirador, que guiasse tanto iniciantes quanto veteranos em suas carreiras.
                    </p>
                    <p>
                        Começamos como um pequeno blog em 2023 e, graças ao apoio da nossa incrível comunidade, crescemos para nos tornar uma plataforma completa de aprendizado e colaboração.
                    </p>
                </div>
            </div>
        </section>

        <section class="section alt-bg" id="missao-valores">
            <h3 style="margin-bottom: 20px;">Nossa Base</h3>
            <div class="content">
                <div class="card">
                    <h4>Missão</h4>
                    <p>Democratizar o acesso ao conhecimento de desenvolvimento de software, capacitando pessoas a construir o futuro digital com confiança e criatividade.</p>
                </div>
                <div class="card">
                    <h4>Visão</h4>
                    <p>Ser a comunidade de referência para desenvolvedores de língua portuguesa, reconhecida pela qualidade do conteúdo e pelo espírito de colaboração.</p>
                </div>
                <div class="card">
                    <h4>Valores</h4>
                    <p>Comunidade, aprendizado contínuo, qualidade, acessibilidade e paixão por tecnologia. Acreditamos que juntos, podemos ir muito mais longe.</p>
                </div>
            </div>
        </section>

        <section class="section" id="equipe">
            <h3 style="margin-bottom: 20px;">Conheça a Equipe</h3>
            <div class="content">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Foto+Ana" alt="Foto de Ana Silva">
                    <h4>Ana Silva</h4>
                    <p class="meta">Fundadora & Desenvolvedora Full-Stack</p>
                    <p>Especialista em arquitetura de sistemas e apaixonada por ensinar as melhores práticas de codificação.</p>
                </div>
                <div class="card">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Foto+Bruno" alt="Foto de Bruno Costa">
                    <h4>Bruno Costa</h4>
                    <p class="meta">Co-Fundador & Especialista em Front-End</p>
                    <p>Focado em criar experiências de usuário incríveis e acessíveis, transformando layouts em realidade.</p>
                </div>
                 <div class="card">
                    <img src="https://via.placeholder.com/300x200/fff/000?text=Foto+Carla" alt="Foto de Carla Matos">
                    <h4>Carla Matos</h4>
                    <p class="meta">Gerente de Conteúdo & Comunidade</p>
                    <p>A voz por trás de nossas redes sociais e blog, garantindo que o conteúdo seja sempre relevante e engajador.</p>
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
                <a href="index.php" data-lang="inicio">Início</a>
                <a href="sobre.php" data-lang="sobre">Sobre</a>
                <a href="index.php#projetos" data-lang="projetos">Projetos</a>
                <a href="index.php#blog" data-lang="blog">Blog</a>
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