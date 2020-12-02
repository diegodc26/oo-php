<?php

function divisao($valor1, $valor2){
    if($valor1==0 || $valor2 == 0){
        throw new Exception("Divisão por zero");
    }
    
     return  $valor1/$valor2;
}

$valor1 = 10;
$valor2 = 0;

$status = false;
try {
    $status = divisao($valor1,$valor2);
}catch(Exception $e){
    echo $e->getMessage();
}finally{
    echo "\nStatus da operação: " . (int)$status;
    die();
}


?>