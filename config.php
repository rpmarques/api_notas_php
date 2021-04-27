<?php
$db_host="localhost";
$db_name='notas';
$db_user='root';
$db_pass='';

$pdo = new PDO("mysql:dbname=$db_name;host=$db_host;charset=utf8",$db_user,$db_pass);

$array=[
    'error'=>'',
    'result' =>[]
];
