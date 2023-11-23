<!doctype html>
<html lang="en">
  <head>
  <?php
    include "Bases/head.php";
    ?>
  <body>
    <?php 
    include "Bases/menu.php";  
    ?>
    <div id="cadastro">
          <h1>Cadastro de Usúario</h1>
        <form method="post" action="" width="100%"> 
           
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
                    <label for="curso_cad">Curso:</label>
                    <input id="curso_cad" name="curso_cad" required="required" type="text"/> 
                </p>
                
                <p> 
                    <label for="senha_cad">Sua senha:</label>
                    <input id="senha_cad" name="senha_cad" required="required" type="password"/>
                </p>

                <div id="cadastro" >
                <form method="post" action="">

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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>
