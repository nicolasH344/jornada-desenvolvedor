<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato | Jornada do Desenvolvedor</title>
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
            <h2 id="heroHeading">Entre em Contato</h2>
            <p id="heroText">Tem uma pergunta ou um projeto em mente? Adoraríamos ouvir você.</p>
        </section>

        <section class="section">
            <div class="content" style="max-width: 1000px; display: flex; align-items: flex-start; text-align: left; flex-wrap: wrap; gap: 40px;">
                
                <div style="flex: 2; min-width: 300px;">
                    <h3>Envie uma Mensagem</h3>
                    <form action="#" method="POST" class="contact-form">
                        <div style="margin-bottom: 15px;">
                            <label for="name" style="display: block; margin-bottom: 5px;">Nome</label>
                            <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; background-color: var(--input-bg); border: 1px solid var(--input-border); border-radius: 5px; color: var(--text-color);">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="email" style="display: block; margin-bottom: 5px;">Email</label>
                            <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; background-color: var(--input-bg); border: 1px solid var(--input-border); border-radius: 5px; color: var(--text-color);">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <label for="subject" style="display: block; margin-bottom: 5px;">Assunto</label>
                            <input type="text" id="subject" name="subject" required style="width: 100%; padding: 10px; background-color: var(--input-bg); border: 1px solid var(--input-border); border-radius: 5px; color: var(--text-color);">
                        </div>
                        <div style="margin-bottom: 20px;">
                            <label for="message" style="display: block; margin-bottom: 5px;">Mensagem</label>
                            <textarea id="message" name="message" rows="6" required style="width: 100%; padding: 10px; background-color: var(--input-bg); border: 1px solid var(--input-border); border-radius: 5px; color: var(--text-color);"></textarea>
                        </div>
                        <button type="submit" style="background-color: #00c6ff; color: white; padding: 15px 30px; border-radius: 5px; text-decoration: none; font-size: 1.1em; border: none; cursor: pointer;">Enviar Mensagem</button>
                    </form>
                </div>

                <div style="flex: 1; min-width: 250px; background-color: var(--alt-bg); padding: 20px; border-radius: 10px;">
                    <h3>Informações</h3>
                    <p><strong>Email:</strong><br> contato@jornadadodev.com</p>
                    <p><strong>Telefone:</strong><br> +55 (12) 91234-5678</p>
                    <p><strong>Localização:</strong><br> Jacareí, SP - Brasil</p>
                    <p><strong>Horário:</strong><br> Seg - Sex, 9:00 às 18:00</p>
                    <div class="social-links" style="justify-content: flex-start; margin-top: 20px;">
                         <a href="#" target="_blank" title="LinkedIn"><img src="https://cdn3.iconfinder.com/data/icons/social-media-2069/64/_linkedin_circle-64.png" alt="LinkedIn"></a>
                         <a href="#" target="_blank" title="GitHub"><img src="https://cdn3.iconfinder.com/data/icons/social-media-2069/64/_github_circle-64.png" alt="GitHub"></a>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="script.js"></script>
</body>
</html>