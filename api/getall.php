<?php
require('../config.php');

//VERIFICAR SE O MÉTODO ESTA CORRETO

if (strtolower($_SERVER['REQUEST_METHOD']) ==='get'){
    $sql = $pdo->query("SELECT * FROM notas");
    if($sql){
        $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
        foreach ($dados as $item){
            $array['result'][]=[
                'id' =>$item['id'],
                'titulo' =>$item['titulo']
            ];
        }
    }

}else{
    $array['error']='Método não permitido, SÓ GET';
}

require('../return.php');