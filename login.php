<!doctype html>
<html lang="en">
  <head>
    <?php
      include "Bases/head.php";
    ?>
  </head>
  <body>
      <?php
      include "Bases/menu.php"
      ?>
    <div id="login" >
          <h1>Login do Usuário</h1>
        <form method="post" action="" > 
           
            <div class="flutuacao" width="40%">
               
                <p> 
                    <label for="matricula_cad">Matrícula:</label>
                    <input id="matricula" name="matricula" required="required" type="number" />
                </p>
                
                <p> 
                    <label for="senha_cad">Senha:</label>
                    <input id="senha" name="senha" required="required" type="password"/>

                      <p class="button"> 
                <input type="submit" value="Entrar"/> 
            </p>
                </p>

              
            </div>
       
          </p>
        </form>
      </div>
    </div>
  </div>  

           </form>

  </body>
  <?php include "Bases/rodape.php" ?>
</html>