<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['autenticado']) || !$_SESSION['autenticado']) {
    // Se não estiver autenticado, redireciona para a página de login
    header('Location: login.php');
    exit;
}
require ("./data/conexao.php");
require ("./data/read.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produtos - Farmácia Pop</title>
  <link rel="stylesheet" href="./asset/style.css">
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
            </nav>
        </div>
    </header>

    <!-- Botão para adicionar produtos -->
    
    <div class="container">
        <a href="./cadastro_produtos.php" class="adicionar-produto-btn">Adicionar Produto</a>
    </div>
    

    <section class="produtos">
        <?php foreach ($produtos as $produto) : ?>
        <div class="container">
            <div  class="produto">
                <img src="<?=$produto ["imagem"]?>">
                <h3><?=$produto["nome"]?></h3>
                <p><?=$produto["descricao"]?></p>
                <p><?=$produto["preco"]?></p>
                
                
                <form action="./data/delete.php" method="post">
                   <input type="hidden" name="id" value="<?=$produto["id"]?>" >
                    <button>
                       <a class="adicionar-produto-btn">Excluir</a>
                    </button>
               </form>

               <form>
                   <input type="hidden" name="id" value="<?=$produto["id"]?>" >
                    <button>
                       <a href="./alterar_produtos.php?id=<?=$produto["id"]?>" class="adicionar-produto-btn">Editar</a>
                    </button>
               </form>
          
            </div>
        </div>

        <?php endforeach; ?>


    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Farmácia Pop. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>
