<!doctype html>
<html lang="en">
  <head>
    <?php
      include "Bases/head.php";
    ?>
  </head>
  <body>
    <nav class="navbar bg-body-tertiary container-fluid">
        <div class="container flutuacao">
          <a class="navbar-brand" href="#">
            <img src="data:image/png;base64,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" alt="IFRN" width="300px" height="100px">
          </a>
        </div>
        <div class="container flutuacao u">
            <a class="navbar-brand" href="#">
                <img src="https://portal.ifrn.edu.br/media/images/42739_Divulgado_resultado_de_selecao_de_projet.width-500.png" alt="IFRN" width="300px" height="150px">
            </a>
        </div>
        <div class="container-fluid flutuacao">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
        
            <div class="collapse navbar-collapse navegar" id="navbarScroll" >
              <div class="nav-item links">
                <a class="nav-link active link" aria-current="page" href="#">Início</a>
              </div>
              <div class="nav-item links">
                <a class="nav-link active link" aria-current="page" href="#">Meu Perfil</a>
              </div>
              <div class="nav-item links">
                <a class="nav-link active link" aria-current="page" href="#">Meus Projetos</a>
              </div>
              <div class="nav-item links">
                <a class="nav-link active link" aria-current="page" href="#">Todos os Projetos</a>
              </div>
              <div class="nav-item links">
                <a class="nav-link active link" aria-current="page" href="#" >Pesquisa</a>
              </div>
              <div class="nav-item links">
                <a class="nav-link active link" aria-current="page" href="#">Extensão</a>
              </div>
              <div class="container-fluid flutuacao d">
                <button class="btn btn-outline-success b" type="submit">Login</button>
                <button class="btn btn-outline-success b l" type="submit">Logout</button>
              </div>
            </div>      
    </nav>
    <div class="p">
          <ul class="nav flex-column ">
            <div class="c">
              <li class="nav-item ">
                <a class="nav-link active link" aria-current="page" href="#">Dados Pessoais</a>
              </li>
            </div>
            <div class="c">
              <li class="nav-item ">
                <a class="nav-link  link" href="#">Meus Projetos</a>
              </li>
            </div>
            <div class="c">
            <li class="nav-item ">
              <a class="nav-link  link" href="#">Editar Perfil</a>
            </li>
            </div>
            <div class="c">
              <li class="nav-item">
                <a class="nav-link link" herf="#">Meus Certificados</a>
              </li>
            </div>
            
          </ul>
    
    </div>
    
    <div class="i">
      <div class="imagem">
        <img src="data:image/png;base64,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" alt="Foto do perfil" class="imagem" rounded>

      </div>
      <div class="i nome">
          <p class="titulo">Nome</p>
          <p>Xxxxxxxx Xxxxxxx Xxxxxxxx Xxxxxx</p>

      </div>
      <div class="i">
          <p class="titulo">Informações de contato</p>
          <p><strong>Telefone:</strong> (xx) xxxxx-xxxx</p>
          <p><strong>E-mail:</strong> xxxxx@xxxx.xxx</p>  
      </div class="i">
      <div class="i">
          <p class="titulo">Dados</p> 
          <table>
            <tr>
              <td>
                <strong>CPF:</strong> xxx.xxx.xxx-xx
              </td>
              <td>
                <strong>RG:</strong> xxx.xxx.xxx
              </td>
              
            </tr>
            <tr>
              <td>
                <strong>Matrícula:</strong> xxxxxxxxx
              </td>
              <td>
                <strong>Curso:</strong> xxxxxxxxx
              </td>
              
            </tr>
          </table>
      </div>
    </div>

  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>