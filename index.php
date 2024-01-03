<!DOCTYPE html>
<html lang="en">

<head>

  <?php include 'bases/head.php'; ?>
  <title>Página Inicial</title>

</head>

<body>
  <?php include 'bases/menu.php'; ?>

  <div class="container">

    <h2>Últimos Projetos</h2>

    <div class="row">

    <?php
        include "banco/conexao.php";
        $conn = conectar();
        $sql = "SELECT * FROM projeto ORDER BY ID DESC LIMIT 06;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<div class='col-lg-4 col-sm-6 portfolio-item'>";
            echo "<div class='card h-100'>";
            echo "<a href='projeto_detalhes.php?id=".$row["id"]."'>";
            echo "<img class='card-img-top' src='src/img/".$row["imagem"]."' alt=''>";
            echo "</a>";
            echo "<div class='card-body'>";
            echo "<h4 class='card-title'>";
            echo "<a href='projeto_detalhes.php?id=".$row["id"]."'>".$row["titulo"]."</a>";
            echo "</h4>";
            echo "<p class='card-text text-uppercase'>".$row["descricao"]."</p>";
            echo "</h4></div></div></div>";
        
          }
        } else {
          echo "<td>Nenhum projeto cadastrado</td><td></td><td></td>";
        }

        desconectar($conn);

?>


    </div>

  </div>
   <?php include 'bases/rodape.php'; ?>

</body>

</html>