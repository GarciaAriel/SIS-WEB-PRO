<?php
include ("seguridad.php");

$placa = $_POST['placa'];
$feiw = $_POST['inicioF'];
$fefw = $_POST['finalF'];
$fei = $feiw.value;
$fef = $fefw.value;
$ci = $_SESSION['ci'];
$db = mysql_connect("localhost", "root", "");
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
				header("Location: index.php");
			}
			else 
			{				
				echo "error en base de datos:".mysql_error($db);
				mysql_close($db);
				header("Location: index.php");
			}
		
	
}
?>



