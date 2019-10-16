<?php

function tipo_lados1($a,$b,$c){

	$r="Escaleno";
	if($a==$b or $b==$c or $c==$a)
		$r="Isosceles";
	if($a==$b and $b==$c)
		$r="equilatero";

	echo "El triangulo es: ";
	echo $r;
	echo '<br>';
}

function tipo_lados2 ($a,$b,$c){

	$r="rectangulo";
	if($a<90 and $b<90 and $c<90)
		$r="acutangulo";
	if($a>90 or $b>90 or $c>90)
		$r="obstusangulo";
	
	echo "El triangulo es ";
	echo $r;
	echo '<br>';
}

echo 'Pruebas sobre triángulos<br><br>';
tipo_lados1(1,1,1);	
tipo_lados1(1,1,2);
echo '<br>';
echo '<br>';

echo "Pruebas sobre triangulos:<br><br>";
tipo_lados2 (90,60,90);
tipo_lados2 (80,60,50);
tipo_lados2 (90,60,100);
?>

