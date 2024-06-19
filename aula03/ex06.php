<?php
$logado = FALSE;
$media = 7;
if ($logado){
        if($media >= 6){
            echo "Aprovado";
        }
        else{
            echo "Reprovado";
        }
} else {
    echo "Você não está logado no sistema";
}