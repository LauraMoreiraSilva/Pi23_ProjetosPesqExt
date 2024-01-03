<nav class="navbar navbar-expand-lg ">
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <div class="container-fluid" width="20%">
          <a class="navbar-brand " href="index.php"><img src="src/img/logo.png" class="img-fluid" alt=""></a>
        </div>
            <ul class="navbar-nav ">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="projetos.php">Projetos</a>
              </li>
              <?php
                if(session_id() == ''){
                  session_start();
                }
                
                if (!isset($SESSION["administrador"]) && !isset($_SESSION["matricula"])) {
              ?>
              <li class="nav-item">
                <a class="nav-link" href="cadastro.php"><i class="fa fa-floppy-o"></i>Cadastro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php"><i class="fa fa-sign-in"></i>Login</a>
              </li>
              <?php }else {
                ?>
              <li class="nav-item">
                <a class="nav-link" href="perfil.php"><i class="fa fa-sign-in"></i>Perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sessao/desconectar.php"><i class="fa fa-sign-out"></i> Logout</a>
              </li>
              <?php }?>
            </ul>
          </div>
      </nav>
    