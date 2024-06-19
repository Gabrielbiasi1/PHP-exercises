<?php
$média = 10;
$r = "Reprovado"; //mostre resultado padrão
if ($média >= 6){
    $r = "Aprovado";
}
else if($média >= 4){
    $r = "Recuperação";
}
echo "Resultado: $r";