<?php
include ("conexao.php");
?>

<div class="container_cadastrar">
<h2>Cadastro de novo Item</h2>
<form class="form_cadastrar" action="salvar_item.php" method="post">
    Nome: <input type="text" name="nome" required><br>
    Quantidade: <input type="number" name="quantidade" required><br>
    <button type="submit">Cadastrar</button>
</form>
</div>