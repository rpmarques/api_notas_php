<?php
require('../config.php');

//VERIFICAR SE O MÉTODO ESTA CORRETO

if (strtolower($_SERVER['REQUEST_METHOD']) === 'post'){  
    $titulo=filter_input(INPUT_POST,'titulo');
    $mensagem=filter_input(INPUT_POST,'mensagem');

    if ($titulo && $mensagem){
        $sql = $pdo->prepare("INSERT INTO notas (titulo,mensagem) VALUES (:titulo,:mensagem)");
        $sql->bindValue(':titulo',$titulo);
        $sql->bindValue(':mensagem',$mensagem);
        $sql->execute();
        
        $id=$pdo->lastInsertId();
        $array['result']=[
            'id' => $id,
            'titulo' =>$titulo,
            'mensagem' =>$mensagem
        ];
    }else{
        $array['error']='NÃO ENVIOU CAMPOS';
    } //fim if ($titulo && $mensagem){
}else{
    $array['error']='Método não permitido, SÓ POST';
} //fim if (strtolower($_SERVER['REQUEST_METHOD']) ==='post'){

require('../return.php');