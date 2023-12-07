<!doctype html>
<html lang="en">
  <head>
    <?php
      include "Bases/head.php";
    ?>
    <title>Perfil</title>
  </head>
  <body>
      <?php
      include "Bases/menu.php"
      ?>
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
                <strong>Curso:</strong> xxxxxxxxa
              </td>
              
            </tr>
          </table>
      </div>
    </div>

  </body>
  <div>
  <?php include "Bases/rodape.php" ?>
  </div>
  
</html>