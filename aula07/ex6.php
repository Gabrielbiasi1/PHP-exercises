<?php
function acumular($v){
    $r = 0;
    foreach ($v as $i)
       $r += $i;
    return $r;
}

echo acumular([1,2,3]);
