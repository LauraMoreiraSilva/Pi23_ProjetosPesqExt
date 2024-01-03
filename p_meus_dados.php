<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "Bases/head.php";?>
    <title>Dados do Usuário</title>
</head>
<body>
    <?php include "Bases/menu.php";

    ?>
    <div class="container">

<div class="row mt-5 mb-5">
<div class="col-lg-6">
 <h2>Meus Dados</h2>
 <form action="php/cadastro_bd.php" method="post">
<p>
   <label for="nome">Nome:</label>
   <input type="text" name="nome" id="nome" value="<?php echo $_SESSION['administrador'];?>" disabled>
</p>
<p>
   <label for="usuario">Matrícula:</label>
   <input type="text" name="usuario" id="usuario" value="<?php echo $_SESSION['matricula']?>" disabled>
</p>
<p>
   <label for="senha">Senha:</label>
   <input type="password" name="senha" id="senha" value="<?php echo $senha?>">
</p>

<p><input type="submit" value="Salvar"></p>
</form>
</div>
</div>
</div>

</div>
</body>
<?php include "Bases/rodape.php"?>
</html>