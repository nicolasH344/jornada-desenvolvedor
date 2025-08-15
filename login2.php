
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Curso de Programação</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="autenticar.php" method="post">
      <label for="usuario">Usuário</label>
      <input type="text" id="usuario" name="usuario" required>

      <label for="senha">Senha</label>
      <input type="password" id="senha" name="senha" required>

      <button type="submit">Entrar</button>
    </form>
    <p class="register-link">
      Não tem uma conta? <a href="registro.php">Cadastre-se</a>
    </p>
  </div>
</body>
</html>