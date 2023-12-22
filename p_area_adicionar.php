<?php include 'sessao/verificar_autenticado.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <?php include 'Bases/head.php'; ?>

</head>

<body>
  <?php include 'Bases/menu.php'; ?>

  <div class="container">

<div class="row mt-5 mb-5">
 <div class="col-lg-6">
   <h2>Cadastro de Área</h2>
   <form action="php/p_area_adicionar_bd.php" method="post">
 <p>
     <label for="nome">Nome:</label>
     <input type="text" name="nome" id="nome">
 </p>
 <p><input type="submit" value="Cadastrar"></p>
</form>
 </div>

</div>
</div>

   <?php include 'Bases/rodape.php'; ?>

</body>

</html>