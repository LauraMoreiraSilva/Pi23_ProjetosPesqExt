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

$sql = "SELECT * FROM area";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td scope='row'>".$row["nome"]."</td>";
    echo "<td><a href='p_areas_editar.php?id=".$row["id"]."'>EDITAR</td>";
    echo "<td><a href='php/p_area_remover_bd.php?id=".$row["id"]."'>REMOVER</td>";
    echo "</tr>";
  }
} else {
  echo "<td>Nenhuma área cadastrada</td><td></td><td></td>";
}

desconectar($conn);

?>
    
  </tbody>

</table>