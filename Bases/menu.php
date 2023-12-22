<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid" width="100%">
        <a class="navbar-brand" href="#"><img src="src/img/logo.png" alt=""></a>
        </div>
        <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Página Inicial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="projetos.php">Projetos</a>
              </li>
              <?php
              session_start();
                if (!isset($SESSION["usuario"])) {
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
                <a class="nav-link" href="desconectar.php"><i class="fa fa-sign-out"></i> Logout</a>
              </li>
              <?php }?>
            </ul>
          </div>
        </div>
    </nav>