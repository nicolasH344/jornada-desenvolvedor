<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossos Serviços | Jornada do Desenvolvedor</title>
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
            <h2 id="heroHeading">Nossos Serviços</h2>
            <p id="heroText">Soluções completas para transformar suas ideias em realidade digital.</p>
        </section>

        <section class="section">
            <div class="content" style="max-width: 1000px; display: flex; align-items: center; text-align: left; flex-wrap: wrap; gap: 40px;">
                <img src="https://via.placeholder.com/400x300/fff/000?text=Desenvolvimento+Web" alt="Desenvolvimento Web" style="border-radius: 10px; flex-shrink: 0;">
                <div style="flex: 1; min-width: 300px;">
                    <h3>Desenvolvimento Web Sob Medida</h3>
                    <p>Criamos sites e sistemas web robustos, escaláveis e com design responsivo. Desde páginas institucionais elegantes a plataformas complexas de e-commerce e SaaS, utilizamos as tecnologias mais modernas (React, Node.js, PHP) para entregar um produto final de alta performance e alinhado aos seus objetivos de negócio.</p>
                </div>
            </div>
        </section>

        <section class="section alt-bg">
            <div class="content" style="max-width: 1000px; display: flex; align-items: center; text-align: left; flex-wrap: wrap; gap: 40px; flex-direction: row-reverse;">
                <img src="https://via.placeholder.com/400x300/fff/000?text=Aplicativos+Mobile" alt="Aplicativos Mobile" style="border-radius: 10px; flex-shrink: 0;">
                <div style="flex: 1; min-width: 300px;">
                    <h3>Criação de Aplicativos Mobile</h3>
                    <p>Levamos sua ideia para a palma da mão dos seus clientes. Desenvolvemos aplicativos nativos e híbridos para iOS e Android utilizando tecnologias como Flutter e React Native. Focamos em performance, usabilidade e uma interface intuitiva para garantir a melhor experiência para o usuário final.</p>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="content" style="max-width: 1000px; display: flex; align-items: center; text-align: left; flex-wrap: wrap; gap: 40px;">
                <img src="https://via.placeholder.com/400x300/fff/000?text=Consultoria+Tech" alt="Consultoria em Tecnologia" style="border-radius: 10px; flex-shrink: 0;">
                <div style="flex: 1; min-width: 300px;">
                    <h3>Consultoria em Tecnologia</h3>
                    <p>Ajudamos sua empresa a tomar as melhores decisões tecnológicas. Oferecemos consultoria para otimização de arquitetura de software, escolha de frameworks, melhoria de processos de desenvolvimento (DevOps) e estratégias de segurança digital, garantindo que seu investimento em tecnologia traga o máximo de retorno.</p>
                </div>
            </div>
        </section>

        <section class="section alt-bg">
            <h3>Vamos construir algo incrível juntos?</h3>
            <p>Entre em contato para um orçamento sem compromisso.</p>
            <a href="contato.php" style="background-color: #00c6ff; color: white; padding: 15px 30px; border-radius: 5px; text-decoration: none; font-size: 1.1em;">Fale Conosco</a>
        </section>
    </main>
    
    <?php include 'footer.php'; ?>

    <script src="script.js"></script>
</body>
</html>