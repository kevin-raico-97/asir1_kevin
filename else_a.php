<?php
function nota($a){
	if ($a>5) { 
	$r='Apto';
	}
	else{
	$r='No Apto';
	}
	return $r;
}
echo '8'.'='.nota (8).'<br>';
echo '4'.'='.nota (4);
?>