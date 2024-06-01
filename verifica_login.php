<?php
session_start();

// Verifica se o usuário e a senha correspondem aos valores esperados
if ($_POST['usuario'] === 'admin' && $_POST['senha'] === 'admin') {
    // Define a variável de sessão indicando que o usuário está autenticado
    $_SESSION['autenticado'] = true;
    // Redireciona para a página de produtos
    header('Location: admin.php');
    exit;
} else {
    // Se as credenciais estiverem incorretas, redireciona de volta para a página de login
    header('Location: login.php');
    exit;
}
?>
