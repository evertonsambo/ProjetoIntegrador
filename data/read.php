<?php

require ('conexao.php');

$sql = "SELECT * FROM produtos";
$result = $con->query($sql);
$produtos = $result->fetch_All(MYSQLI_ASSOC);
$con->close();
?>
