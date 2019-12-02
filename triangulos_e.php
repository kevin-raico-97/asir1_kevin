<?php
function angulo($a,$b,$c){
		$r="Triángulo Acutangulo";
			if($a==90 or $b==90 or $c==90)
			$r="Triágulo rectangulo";
			if($a>90 or $b>90 or $c>90)
			$r="Triángulo obtusangulo";
		return $r;
}

function triangulos($l){
	list($a,$b,$c)=$l;
	$x=($a**2-$b**2+$c**2)/(2*$c);
	$h=sqrt($a**2-$x**2);
	$A=atan($h/($c-$x))*360/(2*pi());
	$B=atan($h/($c-$x))*360/(2*pi());
	$C=180-$A-$B;
		
		$r=[
		"angulos"=>[$A,$B,$C],
		"tipo_lados"=>longitud($a,$b,$c),
		"tipo_angulo"=>angulo($a,$b,$c),
		];
		return $r;
}
function longitud($d,$e,$f){
		$r="escaleno";
		if($d==$e || $e==$f)
			$r="Isósceles";
		
		if($e==$f and $d==$f)
			$r="Equilatero";
		return$r;
}

$r=triangulos([4,4,sqrt(8)]);
echo '<pre>';
print_r($r);
echo '</pre>';