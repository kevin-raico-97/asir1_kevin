<?php

$meses = ['enero','febrero','marzo','abril','mayo','junio','julio',
               'agosto','septiembre','octubre','noviembre','diciembre'];

echo "<br>";			   
echo 'esto es un for:';
echo "<br>";
echo "<br/>";

for($a=0;$a<=11;$a++){
	echo $meses[$a];
	echo "<br>";
}

echo "<br>";			   
echo 'esto es un foreach:';
echo "<br>";
echo "<br/>";

foreach($meses as $mes){
	echo $mes;
	echo "<br>";
	
}
?>