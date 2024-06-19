<?php
    $i = 11;
    $p = 10;
    while($i-- >= 1){
        echo "<li style= 'font-size: $p 'px'>$i</li>";
        $p = $p + 5;
    }
?>