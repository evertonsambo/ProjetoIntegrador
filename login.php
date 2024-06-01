<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Farmácia Pop</title>
  <link rel="stylesheet" href="asset/style.css">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
<header>
        <div class="container">
          <img src="img/LogoFarmacia.png" alt="Logo da Farmácia Pop" class="logo">
          <h1>Farmácia Pop</h1>
          <nav>
            <ul>
              <li><a href="index.php">Início</a></li>
              <li><a href="produtos.php">Produtos</a></li>
              <li><a href="contato.html">Contato</a></li> 
              <li><a href="admin.php">Admin</a></li>
            </ul>
            <a href="login.html" class="login-btn">Login</a>
          </nav>
        </div>
    </header>

    <section class="login">
        <div class="container">
            <h2>Login</h2>
            <form action="verifica_login.php" method="post">
                <label for="usuario">Usuário:</label>
                <input type="text" id="usuario" name="usuario" required><br>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required><br>

                <input type="submit" value="Login" class="login-btn">
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Farmácia Pop. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
