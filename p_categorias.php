<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "Bases/head";?>
</head>
<body>
    <?php include "Bases/menu";?>
    <div class="container">

<div class="row mt-5 mb-5">
<div class="col-lg-6">
 <h2>Áreas</h2>
<p><a href="p_areas_adicionar.php">Adicionar</a></p>

 <table class="table table-striped">
 <thead>
  <tr>
    <th scope="col">Nome</th>
    <th scope="col">Editar</th>
    <th scope="col">Remover</th>
  </tr>
</thead>
<tbody>

<?php

include "banco/conexao.php";

$conn = conectar();

$sql = "SELECT * FROM categoria";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
  echo "<tr>";
  echo "<td scope='row'>".$row["nome"]."</td>";
  echo "<td><a href='php/p_categoria_editar.php?id=".$row["id"]."'>EDITAR</td></a>";
  echo "<td><a href='php/p_categoria_remover_bd.php?id=".$row["id"]."'>REMOVER</td></a>";
  echo "</tr>";
}
} else {
echo "<td>Nenhuma categoria cadastrada</td><td></td><td></td>";
}

desconectar($conn);

?>
  
</tbody>

</table>

</body>
<?php include "Bases/rodape";?>
</html>