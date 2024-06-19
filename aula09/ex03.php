<?php
//somando duas variáveis recebidas na página
$a = $_GET["a"];
$b = $_GET["b"];
$c = $a+$b;
echo "<h1>Soma dos Parâmetros: $c </h1>";