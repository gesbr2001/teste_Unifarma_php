<?php 
    include("conexao.php");

    $id = $_GET["id"];
    $item = $conn ->query("SELECT * FROM itens WHERE id = $id")-> fetch_assoc();
?>

<h2>Requisição de Produto</h2>
<p><strong>Nome:</strong> <?= $item['nome'] ?></p>

<form action="salvar_saida.php" method="POST">
    <input type="hidden" name="item_id" value="<?= $item['id'] ?>">
    
    <p>Quantidade: <input type="number" name="quantidade" max="<?= $item['quantidade'] ?>" required></p>
    
    <p>Centro de Custo: <input type="text" name="centro_custo" required></p>

    <button type="submit">Registrar Saída</button>
</form>