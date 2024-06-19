<?php
//mostrando a varável "nome" obtida pela URL
//Com validação

if(!empty($_GET["nome"])){ //Se não está vazio
    $nome = $_GET["nome"];
    echo "Seja Bem-Vinda(o) $nome";

}
