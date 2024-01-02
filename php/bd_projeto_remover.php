<?php

$id = $_GET["id"];

include "../banco/conexao.php";

$conn = conectar();

$sql2 = "DELETE FROM projeto WHERE id=$id;";
$result2 = $conn->query($sql2);

if($result){
    desconectar($conn);
    header("Location: ../p_projetos.php");
    die();
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}

?>