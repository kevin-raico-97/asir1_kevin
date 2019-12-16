<?php // Vamos a realizar las consultas del entrenador en php
$conn = new mysqli('localhost','root','','provincias');
$conn->query("SET NAMES utf8;");
$provincias=$conn->query("
	SELECT * FROM provincias;
")->fetch_all(MYSQLI_ASSOC);
if(0){
	echo '<pre>';
	print_r($provincias);
	echo '</pre>';
}



echo 'PROVINCIAS DE GALICIA:<br/>';
if(1){ // provincias de Galicia
	foreach($provincias as $p){
		if($p['autonomia']=='Galicia'){
			echo $p['provincia'];
			echo '<br/>';
		}
	}
}
echo '<br/>';



echo 'PROVINCIAS DE CANARIAS:<br/>';
if(2){ // provincias de Canarias
	foreach($provincias as $p){
		if($p['autonomia']=='Canarias'){
			echo $p['provincia'];
			echo '<br/>';
		}
	}
}
echo '<br/>';


echo 'PROVINCIAS DE PAIS VASCO:<br/>';
if(3){ // provincias de País Vasco
	foreach($provincias as $p){
		if($p['autonomia']=='País Vasco'){
			echo $p['provincia'];
			echo '<br/>';
		}
	}
}
echo '<br/>';



echo 'PROVINCIAS DE ARAGÓN:<br/>';

if(4){ // provincias de Aragón
	foreach($provincias as $p){
		if($p['autonomia']=='Aragón'){
			echo $p['provincia'];
			echo '<br/>';
		}
	}
}
echo '<br/>';



//Primera consulta del entrenador. 
echo 'LISTADO DE PROVINCIAS:<br/>';

if(5){//Listado de provincias.
	foreach($provincias as $p){
		echo $p['autonomia'];
		echo '<br/>';
		}
	}
echo '<br/>';
	
	
	
//Tercera consulta del entrenador.
echo 'DENSIDADES DE POBLACION DE LAS PROVINCIAS:<br/>';

if(6){//Densidades de la poblacion de las provincias
	foreach($provincias as $p){
		echo $p['provincia'].' = '; //punto para concatenar con ingual y espacio
		echo round($p['poblacion']/$p['superficie'],4); //round sirve para redondear el numero. Y para saber la densidad, divido poblacion entre superficie. ,4 sirve para los decimales que quiero añadir después del entero.
		echo '<br/>';
	}
}
echo '<br/>';



//Cuarta consulta del entrenador.
echo 'OBTEN EL LISTADO DEL NOMBRE DE LAS PROVINCIAS QUE TIENE CADA AUTONOMIA';
if(7){
	foreach($provincias as $p){
		echo $p['autonomia'].' = ';
		echo $p['provincia'];
		echo '<br/>';
	}
}
		


	








?>