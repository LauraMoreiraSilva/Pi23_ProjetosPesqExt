<?php include 'sessao/verificar_autenticado.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Projetos</title>

    <?php include 'bases/head.php'; ?>

</head>

<body>
  <?php include 'bases/menu.php'; ?>


  <div class="container">

  <div class="row mt-5 mb-5">
 <div class="col-lg-6">
   <h2>Projetos</h2>
  <p><a href="p_projeto_adicionar.php">Adicionar</a></p>

   <table class="table table-striped">
   <thead>
    <tr>
      <th scope="col">Logo</th>
      <th scope="col">Título</th>
      <th scope="col">descrição</th>
      <th scope="col">Editar</th>
      <th scope="col">Remover</th>
    </tr>
  </thead>
  <tbody>

<?php

include "banco/conexao.php";

$conn = conectar();

$sql = "SELECT * FROM projeto";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td><img class='img-fluid rounded' src='src/img/".$row["imagem"]."' width='50px' alt=''></td>";  

    echo "<td scope='row'>".$row["titulo"]."</td>";
    echo "<td><a href='p_projetos_editar.php?id=".$row["id"]."'>EDITAR</td>";
    echo "<td><a href='php/p_projeto_remover_bd.php?id=".$row["id"]."'>REMOVER</td>";
    echo "</tr>";
  }
} else {
  echo "<td>Nenhum projeto cadastrado</td><td></td><td></td>";
}

desconectar($conn);

?>
    
  </tbody>

</table>


 </div>
</div>
</div>

  </div>
  
   <?php include 'bases/rodape.php'; ?>

</body>

</html>