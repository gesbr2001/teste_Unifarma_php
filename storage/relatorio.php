<?php
    include("conexao.php");
?>

<h2>Rastreabilidade</h2>
<button onclick="window.print()">Imprimir Relatório</button>

<table class="tabela">
    <tr>
        <th>Item</th>
        <th>Quantidade</th>
        <th>Local (C. Custo)</th>
        <th>Data</th>
    </tr>

    <?php
      
      $sql = "SELECT s.*, i.nome FROM saidas s JOIN itens i ON i.id = s.id_itens";
      
      
      $res = $conn->query($sql) or die("Erro no banco: " . $conn->error);

      while ($row = $res->fetch_assoc()) {
        echo "<tr>
                <td>".$row['nome']."</td>
                <td>".$row['quantidade']."</td>
                <td>".$row['centro_custo']."</td> <td>".$row['data_saida']."</td>
              </tr>";
        }
    ?>
</table>