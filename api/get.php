<?php
require('../config.php');

//VERIFICAR SE O MÉTODO ESTA CORRETO

if (strtolower($_SERVER['REQUEST_METHOD']) ==='get'){

    $id = filter_input(INPUT_GET,'id');
    if ($id){
        $sql = $pdo->prepare("SELECT * FROM notas WHERE id=:id");
        $sql->bindValue(':id',intval($id));
        $sql->execute();

        if ($sql->ROWcOUNT() > 0 ){
            $dados = $sql->fetch(PDO::FETCH_ASSOC);            
                $array['result']=[
                    'id' =>$dados['id'],
                    'titulo' =>$dados['titulo']
                ];            
        }else{
            $array['error']='ID não EXISTE';    
        } //fim if ($sql->ROWcOUNT() > 0 ){
    }else{
        $array['error']='ID não enviado';
    } //fim if ($id){

}else{
    $array['error']='Método não permitido, SÓ GET';
} //fim if (strtolower($_SERVER['REQUEST_METHOD']) ==='get'){

require('../return.php');