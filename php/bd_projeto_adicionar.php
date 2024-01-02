<?php

//Receber dados do formulário
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$coordenador = $_POST["coordenador"];
$area = $_POST["area"];
$categoria = $_POST["categoria"];
$nome_imagem = $_FILES['imagem']['name'];
move_uploaded_file($_FILES['imagem']['tmp_name'], ("../src/img/$nome_imagem"));

include "../banco/conexao.php";

$conn = conectar();

$sql = "INSERT INTO projeto (titulo, descricao, coordenador, imagem, id_area, id_categoria) 
VALUES ('$titulo', '$descricao', '$coordenador', '$nome_imagem', '$area', '$categoria');";

$result = $conn->query($sql);

if($result){
    $id_projeto = $conn->insert_id;

    desconectar($conn);
    header("Location: ../p_projetos.php");
    die();
}else{
    desconectar($conn);
    echo "<p>Problema</p>";
}

?>