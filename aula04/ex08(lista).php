<h1>Tabela de Preço</h1>

<?php
$i =1;
$p =1;
    while($i <= 10){
        echo "<li>Produto $i| Preço: R$ $p,00</li>";
        $i++;
        $p*=2;
    }