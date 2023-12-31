<?php include 'sessao/verificar_autenticado.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cadastar Projetos</title>

  <?php include 'bases/head.php'; ?>

</head>

<body>
  <?php include 'bases/menu.php'; ?>

  <div class="container">

<div class="row mt-5 mb-5">
 <div class="col-lg-6">
   <h2>Cadastro de Projeto</h2>
   <form action="php/bd_projeto_adicionar.php" method="post" enctype="multipart/form-data">
 
  <p>
     <label for="titulo">Título:</label>
     <input type="text" name="titulo" id="titulo">
 </p>

 <p>
     <label for="descricao">Descrição:</label>
     <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
</p>

 <p>
     <label for="coordenador">Coordenador:</label>
     <input type="text" name="coordenador" id="coordenador">
 </p>

 <p>
     <label for="imagem">Imagem:</label>
     <input type="file" name="imagem" id="imagem">
 </p>

 <p>
    Selecione uma área:<br />
    <?php
        include "banco/conexao.php";
        $conn = conectar();
        $sql = "SELECT * FROM area";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<input type='radio' name='area' value='".$row["id"]."' /> ".$row["nome"]."<br />";
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
            echo "<input type='radio' name='categoria' value='".$row["id"]."' /> ".$row["nome"]."<br />";
        }
        } else {
        echo "Nenhuma categoria cadastrada";
        }
    ?>
 </p>


 <p><input type="submit" value="Cadastrar"></p>
</form>
 </div>
</div>
</div>

   <?php include 'bases/rodape.php'; ?>

</body>

</html>