<?php

$id = $_POST["id"];
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$coordenador = $_POST["coordenador"];
$area = $_POST["area"];
$categoria = $_POST["categoria"];

include "../banco/conexao.php";

$conn = conectar();

$sql = "UPDATE projeto SET titulo='$titulo', descricao='$descricao', 
coordenador='$coordenador', id_area=$area, id_categoria=$categoria 
WHERE id=$id;";

$result = $conn->query($sql);
if($result){
    desconectar($conn);
    header("Location: ../p_projetos.php");
    die();
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}

?>