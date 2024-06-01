<?php
// Inclui o arquivo de conexão com o banco de dados
require_once("./data/conexao.php");

// Query para selecionar todos os produtos
$sql = "SELECT * FROM produtos";
$result = $con->query($sql);

// Verifica se há produtos retornados
if ($result->num_rows > 0) {
    // Inicializa um array para armazenar os produtos
    $produtos = array();

    // Loop através dos resultados da consulta e armazena os produtos no array
    while ($row = $result->fetch_assoc()) {
        $produtos[] = $row;
    }
} else {
    echo "Nenhum produto encontrado.";
}

// Fecha a conexão com o banco de dados
$con->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farmácia Pop - Sua Farmácia Online</title>
  <link rel="stylesheet" href="asset/style.css">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <style>
    .produtos-row {
      display: flex;
      justify-content: space-between;
    }

    .produto {
      width: 30%; /* Ajuste conforme necessário */
      margin-bottom: 20px; /* Espaçamento entre os produtos */
    }
  </style>
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
  

    <!-- Adicione os produtos do banco de dados aqui -->
    <section class="produtos">
        <div class="container">
            <h2>Produtos</h2>
            <?php 
            // Loop através dos produtos
            for ($i = 0; $i < count($produtos); $i += 3) { 
                ?>
                <div class="produtos-row">
                    <?php 
                    // Loop para cada linha de produtos
                    for ($j = $i; $j < min($i + 3, count($produtos)); $j++) { 
                        ?>
                        <div class="produto">
                            <img src="<?=$produtos[$j]["imagem"]?>" alt="<?=$produtos[$j]["nome"]?>">
                            <h3><?=$produtos[$j]["nome"]?></h3>
                            <p><?=$produtos[$j]["descricao"]?></p>
                            <p>R$ <?=$produtos[$j]["preco"]?></p>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Farmácia Pop. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
