<?php
include ("seguridad.php");
$placa = $_SESSION['palcaa'];
$fei = $_POST['inicioF'];
$fef = $_POST['finalF'];
$ci = $_SESSION['ci'];
$db = mysql_connect("localhost", "root", "root");
if (!$db)
{
	echo "error en base de datos: ".mysql_error($db);
}
else 
{
	mysql_select_db("autito",$db);	

	mysql_query("UPDATE vehiculos SET Estado='reservado' WHERE NumeroPlaca='$placa'");
	
	$inserta = mysql_query("INSERT INTO prestamos (Carnet,NumeroPlaca,FechaInicio,FechaDevolucion) VALUES ('$ci','$placa','$fei','$fef')", $db);
			if($inserta != false)
			{
				mysql_close($db);
				echo "siii";
				header("Location: usuario.php");
			}
			else 
			{				
				echo "error en base de datos:".mysql_error($db);
				mysql_close($db);
				echo "nooo";
				header("Location: usuario.php");
			}
		
	
}
?>



