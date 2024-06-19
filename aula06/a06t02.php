<head>
    <style> 
        p {background: yellow}

    </style>

</head>
<body>
 <ol>   
<?php
 $mercado = [
     "Maçã"=>5.50,
     "Pera"=>4.30,
     "Banana"=>5.20,
 ];

    foreach($mercado as $produtos => $valor){
        echo "<li>Produto: $produtos ||  Preço: R$$valor</li>\n";
    }
    ?>
    </ol>
</body>    