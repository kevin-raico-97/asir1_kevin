<?php

function tipo_lados($a,$b,$c){

	$r="Escaleno";
	if($a==$b or $b==$c or $c==$a){
		$r="Isosceles";
	if($a==$b and $b==$c)
		$r="equilatero";
	}

		return $r;
}

echo 'Pruebas sobre triángulos<br>';

echo "¿Equilatero? ";
echo tipo_lados(1,1,1)."<br>";	

echo "¿Isosceles? ";
echo tipo_lados(1,1,2)."<br>";

echo "¿Escaleno? ";
echo tipo_lados(1,2,3)
?>