<?php

require ('conexao.php');

$nome = $_POST ['nome'];
$descricao = $_POST ['descricao'];
$preco = $_POST ['preco'];
$imagem = $_POST ['imagem'];

$sql = "INSERT INTO produtos (nome, descricao, preco, imagem) VALUES ('$nome', '$descricao', '$preco', '$imagem')";

if ($con->query($sql) === TRUE) {
   echo "Registro criado com sucesso";
} else {
   echo "Erro: " . $sql . "<br>" . $con->error;
 }

$con->close();
?>
