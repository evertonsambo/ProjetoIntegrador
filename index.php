<?php
// Inclui o arquivo de conexão com o banco de dados
require_once("./data/conexao.php");

// Query para selecionar os produtos em destaque
$sql_destaque = "SELECT * FROM produtos WHERE TipoProduto = 'DEST' ORDER BY id DESC LIMIT 6";
$result_destaque = $con->query($sql_destaque);

// Verifica se há produtos em destaque retornados
if ($result_destaque->num_rows > 0) {
    // Inicializa um array para armazenar os produtos em destaque
    $produtos_destaque = array();

    // Loop através dos resultados da consulta e armazena os produtos em destaque no array
    while ($row = $result_destaque->fetch_assoc()) {
        $produtos_destaque[] = $row;
    }
} else {
    echo "Nenhum produto em destaque encontrado.";
}

// Query para selecionar os produtos em promoção
$sql_promocao = "SELECT * FROM produtos WHERE TipoProduto = 'PROMO' ORDER BY id DESC LIMIT 6";
$result_promocao = $con->query($sql_promocao);

// Verifica se há produtos em promoção retornados
if ($result_promocao->num_rows > 0) {
    // Inicializa um array para armazenar os produtos em promoção
    $produtos_promocao = array();

    // Loop através dos resultados da consulta e armazena os produtos em promoção no array
    while ($row = $result_promocao->fetch_assoc()) {
        $produtos_promocao[] = $row;
    }
} else {
    echo "Nenhum produto em promoção encontrado.";
}

// Query para selecionar os produtos da categoria "Outros"
$sql_outros = "SELECT * FROM produtos WHERE TipoProduto = 'DEST' ORDER BY id DESC LIMIT 6";
$result_outros = $con->query($sql_outros);

// Verifica se há produtos da categoria "Outros" retornados
if ($result_outros->num_rows > 0) {
    // Inicializa um array para armazenar os produtos da categoria "Outros"
    $produtos_outros = array();

    // Loop através dos resultados da consulta e armazena os produtos da categoria "Outros" no array
    while ($row = $result_outros->fetch_assoc()) {
        $produtos_outros[] = $row;
    }
} else {
    echo "Nenhum produto da categoria 'Outros' encontrado.";
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
      width: 30%; 
      margin-bottom: 20px; 
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

    <section class="bem-vindo">
        <div class="container">
            <h2>Bem-vindo à Farmácia Pop</h2>
            <p>Na Farmácia Pop, você encontra uma ampla variedade de produtos farmacêuticos, desde medicamentos até produtos de higiene pessoal, tudo disponível com apenas alguns cliques. Facilite sua vida e compre com comodidade e segurança.</p>
        </div>
    </section>

    <!-- Destaques -->
    <section class="produtos">
        <div class="container">
            <h2>Destaques</h2>
            <?php 
            // Loop através dos produtos em destaque
            for ($i = 0; $i < count($produtos_destaque); $i += 3) { 
                ?>
                <div class="produtos-row">
                    <?php 
                    // Loop para cada linha de produtos em destaque
                    for ($j = $i; $j < min($i + 3, count($produtos_destaque)); $j++) { 
                        ?>
                        <div class="produto">
                            <img src="<?=$produtos_destaque[$j]["imagem"]?>" alt="<?=$produtos_destaque[$j]["nome"]?>">
                            <h3><?=$produtos_destaque[$j]["nome"]?></h3>
                            <p><?=$produtos_destaque[$j]["descricao"]?></p>
                            <p>R$ <?=$produtos_destaque[$j]["preco"]?></p>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>

    <!-- Promoções -->
    <section class="produtos">
        <div class="container">
            <h2>Promoções</h2>
            <?php 
            // Loop através dos produtos em promoção
            for ($i = 0; $i < count($produtos_promocao); $i += 3) { 
                ?>
                <div class="produtos-row">
                    <?php 
                    // Loop para cada linha de produtos em promoção
                    for ($j = $i; $j < min($i + 3, count($produtos_promocao)); $j++) { 
                        ?>
                        <div class="produto">
                            <img src="<?=$produtos_promocao[$j]["imagem"]?>" alt="<?=$produtos_promocao[$j]["nome"]?>">
                            <h3><?=$produtos_promocao[$j]["nome"]?></h3>
                            <p><?=$produtos_promocao[$j]["descricao"]?></p>
                            <p>R$ <?=$produtos_promocao[$j]["preco"]?></p>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>

    <!-- Outros -->
    <section class="produtos">
        <div class="container">
            <h2>Outros Produtos</h2>
            <?php 
            // Loop através dos produtos da categoria "Outros"
            for ($i = 0; $i < count($produtos_outros); $i += 3) { 
                ?>
                <div class="produtos-row">
                    <?php 
                    // Loop para cada linha de produtos da categoria "Outros"
                    for ($j = $i; $j < min($i + 3, count($produtos_outros)); $j++) { 
                        ?>
                        <div class="produto">
                            <img src="<?=$produtos_outros[$j]["imagem"]?>" alt="<?=$produtos_outros[$j]["nome"]?>">
                            <h3><?=$produtos_outros[$j]["nome"]?></h3>
                            <p><?=$produtos_outros[$j]["descricao"]?></p>
                            <p>R$ <?=$produtos_outros[$j]["preco"]?></p>
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
