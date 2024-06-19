<pre>
    <?php
    //funções para vetores
    $x = [1,2,3];
    $y = array(1,2,3); // função para criar vetor
    print_r($x);
    print_r($y);
    $x[] = 10; // adiciona um item no vetor
    array_push($y, 10); //idem
    print_r($x);
    print_r($y);
    unset($x[1]);//remove o item de índice 1
    array_splice($y, 1, 1); // idem
    print_r($x);
    print_r($y);
    array_shift($x); //remove o primeiro item 
    array_pop($y); //remvoe o último item
    print_r($x);
    print_r($y);