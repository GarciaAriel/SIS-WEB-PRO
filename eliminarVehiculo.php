<?php
	$id = $_GET["aux"];
	$db = mysql_connect("localhost", "root", "root");
	mysql_select_db("autito",$db);
	$inserta=mysql_query("SELECT * FROM vehiculos WHERE NumeroPlaca='$id'");
	$row=mysql_fetch_array($inserta);
	if($row[1]=="disponible")
	{
		$row=mysql_query("DELETE FROM vehiculos WHERE NumeroPlaca='$id'");
		if($row != false)
		{
			mysql_close($db);	
			header("Location: administrador.php");//?errorusuario=si
		}
		else 
		{				
			echo "error en base de datos:".mysql_error($db);
			mysql_close($db);
		}
	}
?>