<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro - Curso de Programação</title>
  <link rel="stylesheet" href="registro.css">
</head>
<body>
  <div class="register-container">
    <h2>Cadastro de Usuário</h2>
    <form action="autenticar.php" method="post">
      <label for="nome">Nome</label>
      <input type="text" id="nome" name="nome" required>

      <label for="email">E-mail</label>
      <input type="email" id="email" name="email" required>

      <label for="usuario">Usuário</label>
      <input type="text" id="usuario" name="usuario" required>

      <label for="senha">Senha</label>
      <input type="password" id="senha" name="senha" required>

      <button type="submit">Cadastrar</button>
    </form>
    <p class="login-link">
      Já tem uma conta? <a href="login2.php">Faça login</a>
    </p>
  </div>
</body>
</html>