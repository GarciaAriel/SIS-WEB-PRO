<?php
include ("seguridad.php");

$placa = $_SESSION['palcaaas']; 
$ci = $_SESSION['carnettt'];

//$ci = $_SESSION['ci'];
$db = mysql_connect("localhost", "root", "root");
if (!$db)
{
	echo "error en base de datos: ".mysql_error($db);
}
else 
{

	mysql_select_db("autito",$db);
	mysql_query("UPDATE vehiculos SET Estado='Confirmado' WHERE NumeroPlaca='$placa'"  );	
	mysql_query("UPDATE prestamos SET Estado='Confirmado' WHERE NumeroPlaca='$placa' && Carnet='$ci'"  );
	mysql_close($db);
	header("Location: administrador.php");
	
		
	
}
?>



