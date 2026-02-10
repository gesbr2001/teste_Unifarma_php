<?php 
    include("conexao.php");

    $id = $_GET["id"];
    $item = $conn ->query("SELECT * FROM itens WHERE id = $id")-> fetch_assoc();
?>

<div class="container_saida">
<h2>Requisição de Produto</h2>
<p><strong>Nome:</strong> <?= $item['nome'] ?></p>

<form class="form_saida" action="salvar_saida.php" method="POST">
    <input type="hidden" name="item_id" value="<?= $item['id'] ?>">
    
    <p>Quantidade: <input type="number" name="quantidade" max="<?= $item['quantidade'] ?>" required></p>

    <p>Centro de Custo:
    <select name="centro_custo" id="">
        <option value="centro1">Centro 1</option>
        <option value="centro2">Centro 2</option>
        <option value="centro3">Centro 3</option>
    </select>
    </p>
    <button type="submit">Registrar Saída</button>
</form>
</div>