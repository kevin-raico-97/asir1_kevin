<?php
function calcula($a,$b){

echo("Suma, Resta, Producto y Cociente de $a y $b: ");
echo '<br/>';

echo("Suma= ");
echo ($a+$b);
echo '<br/>';

echo("Resta= ");
echo ($a-$b);
echo '<br/>';

echo("Producto= ");
echo ($a*$b);
echo '<br/>';

echo("Cociente= ");
echo ($a/$b);
echo '<br/>';
}
calcula(10,15);
calcula(20,10);
calcula(35,45);

?>