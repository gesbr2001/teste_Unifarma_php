<?php
include ("conexao.php");
?>


<h2>Novo Item</h2>
<form action="salvar_item.php" method="post">
    Nome: <input type="text" name="nome" required><br>
    Quantidade: <input type="number" name="quantidade" required><br>
    <button type="submit">Cadastrar</button>
</form>