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

function triangulo ($a,$b,$c,$d,$e,$f){
	tipo_lado1($a,$b,$c);
	tipo_lado2($d,$e,$f);
}

triangulo(1,1,1,90,60,90)
triangulo(1,1,2,80,60,50)



?>

