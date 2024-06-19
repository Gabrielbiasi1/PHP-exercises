<head>
    <style>

        p {background: grey}
        
    </style>
</head>

<body>

<?php
//foreach
$cores = ["verde"=>"0f0", "amarelo"=>"ff0", "azul"=>"00f", "branco"=>"fff"];
foreach($cores as $cor => $i){
        echo "<p style='color: #$i;'>Cor: $cor (RGB: $i)<br></p>";
}
?>
</body> 
