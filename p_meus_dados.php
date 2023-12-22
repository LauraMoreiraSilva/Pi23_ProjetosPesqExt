<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "Bases/head.php"?>
</head>
<body>
    <?php include "Bases/menu.php"?>
    <div class="container">

<div class="row mt-5 mb-5">
<div class="col-lg-6">
 <h2>Cadastro de Usuário</h2>
 <form action="php/cadastro_bd.php" method="post">
<p>
   <label for="nome">Nome:</label>
   <input type="text" name="nome" id="nome" value="<?php echo $nome?>" disabled>
</p>
<p>
   <label for="usuario">Matrícula:</label>
   <input type="text" name="usuario" id="usuario" value="<?php echo $matricula?>" disabled>
</p>
<p> 
    <label for="cpf_cad">CPF:</label>
    <input id="cpf_cad" name="cpf_cad" required="required" type="number" value="<?php echo $cpf?>" disabled/>
</p>

<p> 
    <label for="telefone_cad">Telefone:</label>
    <input id="telefone_cad" name="telefone_cad" required="required" type="number" value="<?php echo $telefone?>"/>
</p>

<p> 
<label for="email_cad">E-mail:</label>
<input id="email_cad" name="email_cad" required="required" type="text" value="<?php echo $email?>">
</p>
<p>
   <label for="senha">Senha:</label>
   <input type="password" name="senha" id="senha" value="<?php echo $senha?>">
</p>

<p><input type="submit" value="Cadastrar"></p>
</form>
</div>
</div>
</div>

</div>
</body>
<?php include "Bases/rodape"?>
</html>