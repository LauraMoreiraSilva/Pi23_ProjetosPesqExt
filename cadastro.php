<!doctype html>
<html lang="en">
  <head>
  <?php
    include "Bases/head.php";
    ?>
    <title>Cadastro</title>
  <body>
    <div>
    <?php 
    include "Bases/menu.php";  
    ?>
    </div>
    <div id="cadastro">
          <h1>Cadastro</h1>
          <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="cadastrar_usuario.php">
            <div class="card-body">
              <h4 class="card-title">
                Cadastrar Usuário
            </div>
          </a>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
      <a href="p_areas.php">
        <div class="card-body">
          <h4 class="card-title">
            Cadastrar Áreas
        </div>
      </a>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
      <a href="p_categorias.php">
        <div class="card-body">
          <h4 class="card-title">
            Cadastrar Categorias
        </div>
      </a>
    </div>
  </div>
  <div class="col-lg-4 col-sm-6 portfolio-item">
    <div class="card h-100">
      <a href="p_projetos.php">

        <div class="card-body">
          <h4 class="card-title">
            Cadastrar Projetos
        </div>
      </a>
    </div>
  </div>

  </body>
  <?php include "Bases/rodape.php" ?>
</html>
