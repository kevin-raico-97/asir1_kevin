<?php

function tipo_lados ($a,$b,$c){

	$r="rectangulo";
	if($a<90 and $b<90 and $c<90)
		$r="acutangulo";
	if($a>90 or $b>90 or $c>90)
		$r="obstusangulo";
	
	echo "El triangulo es ";
	echo $r;
	echo '<br>';
}

echo "Pruebas sobre triangulos:<br><br>";
tipo_lados (90,60,90);
tipo_lados (80,60,50);
tipo_lados (90,60,100);
?>