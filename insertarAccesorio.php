<?php
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$costo = $_POST['costo'];

$db = mysql_connect("localhost", "root", "");
if (!$db){
	echo "error en base de datos: ".mysql_error($db);
}else 
{
	mysql_select_db("autito",$db);	
	$inserta = mysql_query("INSERT INTO accesorios (Nombre,Descripcion,Costo) VALUES ('$nombre','$descripcion','$costo')", $db);
			if($inserta != false)
			{
				mysql_close($db);			
				header("Location: administrador.php");//?errorusuario=si
			}
			else 
			{				
				echo "error en base de datos:".mysql_error($db);
				mysql_close($db);
			//	header("Location: index.php");//?errorusuario=si
			}
}
?>



