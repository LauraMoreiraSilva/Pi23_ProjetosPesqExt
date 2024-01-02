<?php include 'sessao/verificar_autenticado.php'; ?>

<?php

$id = $_GET["id"];

include "banco/conexao.php";

$conn = conectar();

$sql = "SELECT * FROM projeto where id=$id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $titulo = $row["titulo"];
    $descricao = $row["descricao"];
    $imagem = $row["imagem"];
    $coordenador = $row["coordenador"];
    $id_area = $row["id_area"];
    $id_categoria = $row["id_categoria"];
  }
} else {
  echo "<td>Nenhuma área cadastrada</td><td></td><td></td>";
}



?>


<!DOCTYPE html>
<html lang="en">

<head>

  <?php include 'bases/head.php'; ?>

</head>

<body>
  <?php include 'bases/menu.php'; ?>

  <div class="container">

<div class="row mt-5 mb-5">
 <div class="col-lg-6">
   <h2>Cadastro de Projeto</h2>
   <form action="php/p_projeto_editar_bd.php" method="post" enctype="multipart/form-data">
 
  <p>
     <label for="titulo">Título:</label>
     <input type="text" name="titulo" id="titulo" value="<?php echo $titulo; ?>">
 </p>

 <p>
     <label for="descricao">Descrição:</label>
     <textarea name="descricao" id="descricao" cols="30" rows="10"><?php echo $descricao; ?></textarea>
 </p>

 <p>
     <label for="coordenador">Coordenador:</label>
     <input type="text" name="coordenador" id="coordenador" value="<?php echo $coordenador; ?>">
 </p>
 <p>
    <label for="imagem">Imagem:</label>
    <input type="file" name="imagem" id="imagem" value="<?php echo $imagem; ?>">
 </p>

 <p>
    Selecione uma área:<br />
    <?php
        
        $sql = "SELECT * FROM area";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<input type='radio' name='area' value='".$row["id"]."'";
            if($row["id"] == $id_area){
                echo " checked ";
            }
            
            echo "/> ".$row["titulo"]."<br />";
        }
        } else {
        echo "Nenhuma área cadastrada";
        }
    ?>
 </p>
 <p>
    Selecione uma categoria:<br />
    <?php
        
        $sql = "SELECT * FROM categoria";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<input type='radio' name='area' value='".$row["id"]."'";
            if($row["id"] == $id_categoria){
                echo " checked ";
            }
            
            echo "/> ".$row["titulo"]."<br />";
        }
        } else {
        echo "Nenhuma categoria cadastrada";
        }
    ?>
 </p>
 

 
<input type="hidden" name="id" value="<?php echo $id; ?>">


 <p><input type="submit" value="Cadastrar"></p>
</form>
 </div>
</div>
</div>

   <?php include 'bases/rodape.php'; ?>

</body>

</html>