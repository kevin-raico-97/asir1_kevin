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

echo "El triángulo (1,1,1) es: ";
echo tipo_lados(1,1,1)."<br>";	

echo "El triángulo (1,1,2) es: ";
echo tipo_lados(1,1,2)."<br>";

echo "El triángulo (1,2,3) es: ";
echo tipo_lados(1,2,3)
?>