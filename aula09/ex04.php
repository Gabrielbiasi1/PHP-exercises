<?php
//mudando a cor da página
if(isset($_GET["cor"])){
    $cor = $_GET["cor"];
    echo "<body style='background-color: $cor'><h1>PHP</h1></body>";
} else {
    echo "Falta o parâmetro: Cor";
}