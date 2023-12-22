<?php
// Receber dados do formulário de login
$matricula = $_POST['matricula'];
$senha = $_POST['senha'];
$senha = md5($senha);

// Importar o arquivo de conexão com o banco de dados
    include "../Banco/conexao.php";
    $conn = conectar();

// Verificar se o usuário existe no banco de dados
// (Nota: A lógica de verificação pode variar dependendo da estrutura do seu banco de dados)
$sql = "SELECT * FROM administrador WHERE matricula = '$matricula' AND senha = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        session_start();
        $_SESSION['administrador'] = $row['nome'];
        $_SESSION['matricula'] = $row['matricula'];
    }
    desconectar($conn);
    header("Location: ../perfil.php");
    die();
}else{
    desconectar($conn);
    header("Location: ../login.php?erro=administrador+e/ou+senha+incorretos");
    die();
}
?>
