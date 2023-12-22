<?php

$id = $_GET["id"];

include "../banco/conexao.php";

$conn = conectar();

$sql = "DELETE FROM categoria WHERE id=$id;";

$result = $conn->query($sql);
if($result){
    desconectar($conn);
    header("Location: ../p_categorias.php");
    die();
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}

?>