<?php include("conexao.php"); ?>

<h2>Estoque Unifarma</h2>
<a href="cadastrar.php">Cadastrar Produtos</a> 
<a href="relatorio.php">Relatório de Produtos</a>
<hr>

<table class="tabela">
    <tr>
        <th>ID</th>
        <th>Produto</th>
        <th>Quantidade</th>
        <th>Requisição</th>
    </tr>

<?php 

    $result = $conn-> query("SELECT * FROM itens");
    while ($itens = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$itens['id']."</td>
                <td>".$itens['nome']."</td>
                <td>".$itens['quantidade']."</td>

                <td>
                <a href='saida.php?id=".$itens['id']."'>Requisição</a>
                <a href='excluir_item.php?id=".$itens['id']."'>Excluir</a>
                </td>
                </tr>";
    }
?>
</table>
