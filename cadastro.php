<!doctype html>
<html lang="en">
  <head>
  <?php
    include "Bases/head.php";
    ?>
    <title>Cadastro</title>
  <body>
    <?php 
    include "Bases/menu.php";  
    ?>
    <div id="cadastro">
          <h1>Cadastro de Usúario</h1>
        <form method="post" action="bd_registro.php" width="100%"> 
           
            <div class="flutuacao" width="300px">
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

                <div id="cadastro" >

                <p> 
                    <label for="senha_cad">Confirme sua senha:</label>
                    <input id="senha_cad" name="senha_cad" required="required" type="password"/>
                </p>
            </div>

            <div class="flutuacao" width="300px">
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
            </div>
            <div>
              <p> 
                  <input type="submit" value="Cadastrar"/> 
              </p>
            </div> 

            
            </p>
        </form>
      </div>
    </div>
  </div>  
  </body>
  <?php include "Bases/rodape.php" ?>
</html>
