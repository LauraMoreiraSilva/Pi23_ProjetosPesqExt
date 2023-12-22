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
<<<<<<< HEAD
    </nav>
=======
        <?php 
          session_start();
          if (!isset($_SESSION['usuario'])) {
          ?>
            <div class="collapse navbar-collapse navegar" id="navbarScroll" >
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="perfil.php">Meu Prefil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Meus Projetos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Todos os Projetos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Pesquisa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Extensão</a>
              </li>
            </ul>
            <button class="btn btn-outline-success b" type="submit"><a href="login.php">Login</a></button>
              </div>
              
            </div>
            <?php 
          }else{
          ?>
              <div class="collapse navbar-collapse navegar" id="navbarScroll" >
            <ul class="nav justify-content-center">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="perfil.php">Meu Prefil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Meus Projetos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Todos os Projetos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Pesquisa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Extensão</a>
              </li>
            </ul>
              <button class="btn btn-outline-success b" type="submit" name="logout">Logout</button>
            </div>
            <?php 
          }

          // Função para verificar se o usuário está autenticado
        function estaAutenticado() {
          return isset($_SESSION['usuario']) && !empty($_SESSION['usuario']);
}
          if ($usuarioAutenticado) {
            echo '<button class="btn btn-outline-success b" type="submit" name="logout">Logout</button>';
    } else {
            echo '<button class="btn btn-outline-success b" type="submit"><a href="login.php">Login</a></button>';
    }

    // ... Outro código ...

        if (isset($_POST["logout"])) {
          include "sessao/desconectar.php";
    }

?>
            
    </nav>
>>>>>>> ad600f9cf20c86d1d009bc6bf2ffd12041ceb669
