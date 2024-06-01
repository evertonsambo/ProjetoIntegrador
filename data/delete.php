<?php

require ('conexao.php');

$id = $_POST['id'];

$sql = "DELETE FROM produtos WHERE id=$id";

if ($con->query($sql) === TRUE) {
    echo "Registro excluído com sucesso";
} else {
    echo "Erro ao excluir registro: " . $con->error;
}

$con->close();
?>


