<?php

$nome = $_POST["nome_cad"];
$matricula = $_POST["matricula_cad"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf_cad"];
$email = $_POST["email_cad"];
$telefone = $_POST["telofone_cad"];

$senha = md5($senha);

include "../banco/conexao.php";

$conn = conectar();

$sql = "INSERT INTO docente
(matricula, nome, cpf, email, telefone, senha)
VALUES ('$matricula','$nome', '$cpf', '$email', '$telefone', '$senha');";

$result = $conn->query($sql);
if($result){
    desconectar($conn);
    header("Location: ../login.php");
    die();
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}

?>
