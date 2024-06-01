<?php

require ('conexao.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$imagem = $_POST['imagem'];

$sql = "UPDATE produtos SET nome='$nome', descricao='$descricao', preco='$preco', imagem='$imagem' WHERE id='$id' ";

if ($con->query($sql) === TRUE) {
    echo "Registro atualizado com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $con->error;
}

$con->close();
?>