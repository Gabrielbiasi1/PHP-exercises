<?php
$velocidade = 25;
$velocidade_minima = 50;
$velocidade_maxima = 100;
if($velocidade >= $velocidade_minima && $velocidade <= $velocidade_maxima){
    echo "<p>Você está no limite de velocidade</p>";
} else if($velocidade < $velocidade_minima) {
    echo "<p>Você está ABAIXO do limite de velocidade</p>";
} else if($velocidade > $velocidade_maxima){
    echo "<p>Você está ACIMA do limite de velocidade</p>";
}