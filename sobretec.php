<?php
// sobre.php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Jornada do Desenvolvedor</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: #fff;
        }

        header {
            background: rgba(0, 0, 0, 0.6);
            padding: 15px;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2rem;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        nav a:hover {
            color: #ffcc00;
        }

        main {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            text-align: center;
        }

        main h2 {
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        main p {
            font-size: 1.1rem;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <header>
        <h1>Jornada do Desenvolvedor</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="sobre.php">Sobre</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>

    <main>
        <h2>Sobre Nós</h2>
        <p>
            A <strong>Jornada do Desenvolvedor</strong> nasceu com o objetivo de ajudar
            programadores iniciantes e experientes a crescerem no mundo da tecnologia.
        </p>
        <p>
            Aqui você encontra conteúdos sobre <em>programação, design, boas práticas,
            frameworks</em> e muito mais. Nosso compromisso é entregar conhecimento de
            forma clara, objetiva e moderna.
        </p>
        <p>
            Estamos em constante evolução, assim como a tecnologia. Venha fazer parte
            dessa jornada com a gente 🚀.
        </p>
    </main>
</body>
</html>
