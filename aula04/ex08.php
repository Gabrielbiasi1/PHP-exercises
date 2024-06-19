<h1>Lista de Preços: Loja Ibirapuera</h1>
<style>
    table, td, th {border : 1px solid black}
</style>
<table>
    <tr><th>Produtos</th><th>Preco</tr>
    <?php
    $i =1;
    $p =1;
    while($i <= 10){
        echo "<tr><td>Produto $i</td><td> R$ $p</td></tr>";
        $i++;
        $p *=2;
    }
?>
    </table>