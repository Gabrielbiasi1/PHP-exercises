<?php
//Utilizando links pra mudar o fundo da URL
echo "<h1>Escolha uma cor</h1>";
echo "<a href='?cor=rosa'>rosa</a></br>";
echo "<a href='?cor=roxo'>roxo</a></br>";

if(isset($_GET["cor"])){
    $cor = $_GET["cor"];
    if($cor == "rosa")
        echo "<body style='background-color: pink'></body>";
    else 
        echo "<body style='background-color: purple'></body>";

}