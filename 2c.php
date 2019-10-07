<?php
function calcula($a,$b){
	$r=null;
	$r=$r.("Suma, Resta, Producto y Cociente de $a y $b: ");
	$r=$r. '<br/>';

	$r=$r.("Suma= ");
	$r=$r. ($a+$b);
	$r=$r. '<br/>';

	$r=$r.("Resta= ");
	$r=$r. ($a-$b);
	$r=$r. '<br/>';

	$r=$r.("Producto= ");
	$r=$r. ($a*$b);
	$r=$r. '<br/>';

	$r=$r.("Cociente= ");
	$r=$r. ($a/$b);
	$r=$r. '<br/>';
	return $r;
}
echo calcula(10,15);
echo calcula(20,10);
/*
lo siguiente es lo mismo que poner echo, pero lo almacena en $s "hoja en blanco"
*/
$s=calcula(35,45);
echo $s;
?>