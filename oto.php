<?php
$enlace =  mysql_connect('localhost', 'root', 'garjoa');
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
mysql_close($enlace);
?>