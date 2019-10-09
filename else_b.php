<?php
function nota($a){
	$r="pendiente";
	
	
	if ($a>=5)
	$r="aprobado";

	if ($a>=7)
	$r="notable";

	if($a>=8.5)
	$r="sobresaliente";
	
	return $r;
}
echo '9 '.'= '.nota (9).'<br>';
echo '5 '.'= '.nota (5).'<br>';
echo '3 '.'= '.nota (3).'<br>';
echo '8 '.'= '.nota (8).'<br>';	
	