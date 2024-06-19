<?php
function miar($muito = false){
    if($muito)
       echo "<br />miau, miau, miau";
    else
       echo "<br />maiau";
}
miar();
miar(false);
miar(true);