<?php
include ("seguridad.php");

$ci = $_SESSION['carrr'];
$placa = $_SESSION['plaaa'];

//$ci = $_SESSION['ci'];
$db = mysql_connect("localhost", "root", "");
if (!$db)
{
	echo "error en base de datos: ".mysql_error($db);
}
else 
{

	mysql_select_db("autito",$db);	
	mysql_query("UPDATE prestamos SET Estado='cerrado' WHERE NumeroPlaca='$placa' && Carnet='$ci'"  );
	mysql_close($db);
	header("Location: administrador.php");
	
		
	
}
?>



