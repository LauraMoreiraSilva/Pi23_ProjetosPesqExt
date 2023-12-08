<?php

$nome = $_POST["nome_cad"];
$matricula = $_POST["matricula_cad"];
$senha = $_POST["senha"];

$senha = md5($senha);

include "../banco/conexao.php";

$conn = conectar();

$sql = "INSERT INTO administrador
(nome, matricula, senha)
VALUES ('$nome', '$matricula', '$senha');";

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