<?php
$id=$_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$costo = $_POST['costo'];
	$db = mysql_connect("localhost", "root", "");
	mysql_select_db("autito",$db);
	$inserta=mysql_query("UPDATE accesorios SET Nombre='$nombre',Descripcion='$descripcion',Costo='$costo' WHERE Id='$id'");
	if($inserta != false)
	{
		mysql_close($db);	
		header("Location: administrador.php");//?errorusuario=si
	}
	else 
	{				
		echo "error en base de datos:".mysql_error($db);
		mysql_close($db);
	}
?>