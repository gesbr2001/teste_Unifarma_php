<?php
    include("conexao.php");

    $id = $_GET["id"];

    $conn->query("DELETE FROM itens WHERE id = $id");

    header("Location: index.php");
?>