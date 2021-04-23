<?php
//DEIXA TODO MUNDO ACESSAR
header("Access-Control-Allow-Origin: *"); 
// OS TIPOS DE REQUISIÇÕES PERMITIDAS
header("Acess-Control-Allow-Method: GET, POST, PUT, DELETE, OPTIONS"); 
//RETORNO QUE VAI DAR
header("Content-Type: application/json");

echo json_encode($array);
exit;