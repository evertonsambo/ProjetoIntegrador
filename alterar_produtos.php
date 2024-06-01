<?php

require ("./data/conexao.php");

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edição de Produto - Farmácia Pop</title>
  <link rel="stylesheet" href="asset/style.css">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <style>
    label {
        display: inline-block;
        width: 100px; /* Ajuste conforme necessário */
        text-align: right;
        margin-right: 10px;
        margin-bottom: 5px; /* Espaçamento inferior entre os labels */
    }
    input[type="text"],
    input[type="number"],
    input[type="file"],
    textarea {
        width: 300px; /* Ajuste conforme necessário */
        padding: 5px;
        margin-bottom: 10px;
        display: block; /* Para cada elemento ocupar a largura total disponível */
        box-sizing: border-box; /* Para que padding e border não afetem a largura total */
    }
  </style>
</head>
<body>
    <header>
        <div class="container">
            <img src="./img/LogoFarmacia.png" alt="Logo da Farmácia Pop" class="logo">
            <h1>Farmácia Pop</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Início</a></li>
                    <li><a href="produtos.php">Produtos</a></li>
                    <li><a href="contato.html">Contato</a></li> 
                    <li><a href="admin.php">Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="conteudo">
        <h2>Editar Produto</h2>
        <form action="./data/update.php" method="post" enctype="multipart/form-data">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br>

            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" rows="4" cols="50" required></textarea><br>

            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" min="0.01" step="0.01" required><br>

            <label for="imagem">URL da imagem:</label>
            <input  type="text" id="imagem" name="imagem"><br>

            <input class="adicionar-produto-btn" type="submit" value="Confirmar">
        </form action="./data/update.php" method="post">
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Farmácia Pop. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
