<?php

//incluir a conexão
include("conexao.php");

//obter dados
$obterDados = file_get_contents("php://input");

//extrair os dados do JSON
$extrair = json_decode($obterDados);

//Separar os dados do JSON
$idCurso = $extrair->curso->idCurso;

//SQL
$sql = "DELETE FROM cursos WHERE idCurso=$idCurso ";
mysqli_query($conexao, $sql);

?>
