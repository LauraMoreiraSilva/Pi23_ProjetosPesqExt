<!DOCTYPE html>
<html lang="en">

<head>
    <title>Detalhes do Projeto</title>

    <?php include 'bases/head.php'; ?>



</head>

<body>
  <?php include 'bases/menu.php'; ?>


  <div class="container">

  <div class="row mt-5 mb-5">

  <?php
        $id = $_GET["id"];

        include "banco/conexao.php";
        $conn = conectar();
        $sql = "SELECT * FROM projeto WHERE id=$id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<div class='col-lg-6'>";
            echo "<h2>".$row["titulo"]."</h2>";
            echo "<p class='text-justify'>Descrição: ".$row["descricao"]."</p>";
            echo "<p class='text-justify'>Coordenador: ".$row["coordenador"]."</p>";            
            echo "<p class='text-justify'>Área: ";
            $sql2 = "SELECT * FROM area WHERE id=".$row["id_area"];
            $result2 = $conn->query($sql2);
            if ($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()) {
                    echo $row2["nome"];
                }
            }
            echo "<p class='text-justify'>Categoria: ";
            $sql2 = "SELECT * FROM categoria WHERE id=".$row["id_categoria"];
            $result2 = $conn->query($sql2);
            if ($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()) {
                    echo $row2["nome"];
                }
            }

            echo "</div>";
            
            echo "<div class='col-lg-6'>";
            echo "<img class='img-fluid' src='src/img/".$row["imagem"]."' alt=''>";
            echo "</div>";
          }
        } else {
          echo "<td>Nenhum projeto cadastrado</td><td></td><td></td>";
        }

        desconectar($conn);

?>


    

 


</div>
  </div>
  

   <!-- INCLUINDO CÓDIGO DE RODAPÉ COMUM A TODAS AS PÁGINAS -->
   <?php include 'bases/rodape.php'; ?>

</body>

</html>