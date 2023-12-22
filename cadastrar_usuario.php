<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "Bases/head"?>
</head>
<body>
    <?php include "Bases/menu"?>
    <form method="post" action="bd_registro.php" width="100%"> 
           
            <div class="row mt-5 mb-5">
                <div class="col-lg-6">
                    <p> 
                        <label for="nome_cad">Nome completo:</label>
                        <input id="nome_cad" name="nome_cad" required="required" type="text" />
                    </p>

                    <p> 
                        <label for="matricula_cad">Matrícula:</label>
                        <input id="matricula_cad" name="matricula_cad" required="required" type="number" />
                    </p>
                    
                    
                    <p> 
                        <label for="senha_cad">Sua senha:</label>
                        <input id="senha_cad" name="senha_cad" required="required" type="password"/>
                    </p>
                    <p> 
                    <label for="cpf_cad">CPF:</label>
                    <input id="cpf_cad" name="cpf_cad" required="required" type="number"/>
                    </p>

                    <p> 
                        <label for="telefone_cad">Telefone:</label>
                        <input id="telefone_cad" name="telefone_cad" required="required" type="number"/>
                    </p>

                    <p> 
                        <label for="email_cad">E-mail:</label>
                        <input id="email_cad" name="email_cad" required="required" type="text">
                    </p>
                    <p> 
                        <input type="submit" value="Cadastrar"/> 
                    </p>
                </div>
            </div>
        </form>
</body>
<?php include "Bases/rodape"?>
</html>