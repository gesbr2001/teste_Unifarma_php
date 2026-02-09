<?php
include("conexao.php");

$item_id = $_POST['item_id'];
$qtd = $_POST['quantidade'];
$centro = $_POST['centro_custo'];


$conn->query("INSERT INTO saidas (id_itens, quantidade, centro_custo) VALUES ('$item_id', '$qtd', '$centro')");

$conn->query("UPDATE itens SET quantidade = quantidade - $qtd WHERE id = $item_id");

header("Location: index.php");
?>