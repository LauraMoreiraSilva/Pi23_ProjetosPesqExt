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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>