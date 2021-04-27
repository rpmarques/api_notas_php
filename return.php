<?php
//DEIXA TODO MUNDO ACESSAR
header("Access-Control-Allow-Origin: *"); 
// OS TIPOS DE REQUISIÇÕES PERMITIDAS
header("Access-Control-Allow-Method: GET, POST, PUT, DELETE, OPTIONS"); 
//RETORNO QUE VAI DAR
header("Content-Type: application/json");

// correção de acentuação JSON_UNESCAPED_UNICODE
echo json_encode($array,JSON_UNESCAPED_UNICODE);
exit;