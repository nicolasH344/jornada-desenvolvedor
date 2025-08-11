<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>O que é Back-End?</title>
  <link rel="stylesheet" href="back.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
</head>
<body>

  <header>
    <h1>O que é Back-End?</h1>
  </header>

  <main>
    <!-- RESUMO -->
    <section class="resumo">
      <p>
        O <strong>Back-End</strong> é o cérebro por trás de tudo o que acontece em um site ou aplicativo. Ele é responsável por **processar dados**, **lidar com regras de negócio**, **interagir com bancos de dados**, e garantir que tudo o que o usuário faz no Front-End seja executado corretamente no servidor.
      </p>
      <p>
        Pense no Back-End como a parte do iceberg que fica submersa. Você não vê, mas é o que mantém toda a estrutura de pé. Desde quando você faz login em uma conta, até quando envia uma mensagem ou realiza uma compra online — tudo isso passa por ele.
      </p>
    </section>

    <!-- IMAGEM ILUSTRATIVA -->
    <section class="imagem-backend">
      <!-- Substitua o src por sua imagem -->
      <img src="imagens/backend-ilustracao.png" alt="Ilustração Back-End" />
    </section>

    <!-- EXPLICAÇÃO COM ANALOGIA -->
    <section class="explicacao">
      <h2>Entendendo com um Exemplo Real</h2>
      <p>
        Imagine que você está usando um app de delivery. A tela onde você escolhe seu lanche, vê preços e faz o pedido é o <strong>Front-End</strong>. Agora, tudo o que acontece depois — como verificar se o lanche está disponível, calcular o tempo de entrega e enviar o pedido para o restaurante — é responsabilidade do <strong>Back-End</strong>.
      </p>
      <p>
        É ele que faz a mágica acontecer, mesmo sem ser visto. Curioso, né? E isso é só o começo...
      </p>
    </section>

    <!-- CARROSSEL DE LINGUAGENS -->
    <section class="cards">
      <h2>Linguagens Populares no Back-End</h2>
      <div class="carousel">
        <div class="carousel-track">
          <img src="php.jpg" alt="PHP" />
          <img src="Python.jpg" alt="Python" />
          <img src="imagens/node.png" alt="Node.js" />
          <img src="Java.jpg" alt="Java" />
          <img src="imagens/ruby.png" alt="Ruby" />
         <img src="MySQL.jpg" alt="MySQL" />
        </div>
      </div>
      <p class="quero-mais">
        Essas são apenas algumas das principais linguagens... Mas o universo Back-End é muito mais vasto. Quer saber qual combina mais com seu estilo de programação?
      </p>
    </section>

    <!-- BOTÃO -->
    <section class="superlink">
      <a href="https://www.alura.com.br/artigos/o-que-e-back-end" target="_blank">
        🔗 Descubra mais sobre o mundo Back-End
      </a>
    </section>
  </main>

  <footer>
    <p>&copy; <span id="ano"></span> - Página sobre Back-End</p>
  </footer>

  <script>
    document.getElementById("ano").textContent = new Date().getFullYear();
  </script>

</body>
</html>
