<?php
// Receber dados do formulário de login
$matricula = $_POST['matricula'];
$senha = $_POST['senha_cad'];

// Importar o arquivo de conexão com o banco de dados
require_once('../banco/conexao.php');

// Verificar se o usuário existe no banco de dados
// (Nota: A lógica de verificação pode variar dependendo da estrutura do seu banco de dados)
$query = "SELECT * FROM administrador WHERE matricula = '$matricula' AND senha = '$senha'";
$result = mysqli_query($conexao, $query);

if (mysqli_num_rows($result) > 0) {
    // Usuário existe, redirecionar para a página perfil.php
    header("Location: perfil.php");
    exit();
} else {
    // Usuário não existe, redirecionar para a página de login.php novamente
    header("Location: ../login.php");
    exit();
}
?>
