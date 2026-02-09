<?php
include("conexao.php");

$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];


$conn->query("INSERT INTO itens (nome, quantidade) VALUES ('$nome', '$quantidade')");

header("Location: index.php");
?>