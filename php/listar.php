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
    
    $cursos[$indice]['idCurso'] = $linhas['idCurso'];
    $cursos[$indice]['nomeCurso'] = $linhas['nomeCurso'];
    $cursos[$indice]['valorCurso'] = $linhas['valorCurso'];
    $indice++;
}

// JSON
$response = json_encode(['cursos' => $cursos]);

// Definir o cabeçalho como JSON
header('Content-Type: application/json');

// Enviar a resposta JSON
echo $response;
?>