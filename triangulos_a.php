<?php

function tipo_lados($a,$b,$c){

	$r="Escaleno";
	if($a==$b or $b==$c or $c==$a)
		$r="Isosceles";
	if($a==$b and $b==$c)
		$r="equilatero";

	echo "El triangulo es: ";
	echo $r;
	echo '<br>';
}

echo 'Pruebas sobre triángulos<br>';
tipo_lados(1,1,1);	

tipo_lados(1,1,2);
?>