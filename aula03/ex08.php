<?php

$hora = 21;

if($hora >= 6 && $hora <= 12){
    echo "
        <body bgcolor = 'yellow'>
        <h1>Bom Dia!</h1>
         </body>";  
} else if ($hora >= 13 && $hora <= 19){
    echo "
        <body bgcolor = 'green'>
        <h1>Boa Tarde!</h1>
        </body>";
} else if ($hora >= 20 && $hora <= 23){
    echo "
        <body bgcolor = 'black'>
        <h1 style = 'color:white'> Boa Noite! </h1>
        </body>";

}