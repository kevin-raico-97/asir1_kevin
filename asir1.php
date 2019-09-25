<a>kevin</a>
</br>
<a href="http://192.168.0.82/asir1_saioa/asir1.php">saioa</a>
<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f);
?>