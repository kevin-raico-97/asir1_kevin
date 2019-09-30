<a>kevin</a>
</br>
<a href="http://192.168.0.82/asir1_saioa/asir1.php">saioa</a>
<a href="http://192.168.0.92/asir176/asir1.php">alejandro</a>
<?php

$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']);
fwrite($f,date(' Y-m-d H:i'));
fwrite($f,"\r\n");
fclose($f);
?>