<?php

//Incluir a conexão
include("conexao.php");

//sql
$sql = "SELECT * FROM cursos";

// Executar
$executar = mysqli_query($conexao, $sql);

header('Access-Control-Allow-Origin: *');
//vetor 
$cursos = [];

//Índice
$indice = 0;

//Laço
while($linhas = mysqli_fetch_assoc($executar)){
    $cursos[$indice]['idCurso'] = $linha['idCurso'];
    $cursos[$indice]['nomeCurso'] = $linha['nomeCurso'];
    $cursos[$indice]['valorCurso'] = $linha['valorCurso'];

    $indice++;
}

//JSON
json_encode(['cursos'=>$cursos]);

var_dump($cursos);
?>