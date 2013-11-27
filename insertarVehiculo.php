<?php
$placa = $_POST['placa'];
$modelo = $_POST['modelo'];
$puertas = $_POST['puertas'];
$pasajeros = $_POST['pasajeros'];
$aire = $_POST['aire'];
$combustible = $_POST['combustible'];
$motor = $_POST['motor'];
$musica = $_POST['musica'];
$categoria = $_POST['categoria'];

$estado = "disponible";

$db = mysql_connect("localhost", "root", "root");
if (!$db){
	echo "error en base de datos: ".mysql_error($db);
}else 
{
	mysql_select_db("autito",$db);	
	$res = mysql_query("SELECT NumeroPlaca FROM vehiculos WHERE NumeroPlaca = '$placa'", $db);	
	
	if($res != false)
	{
		if(mysql_num_rows($res)>0)
		{
			echo("ya existe ");
			//header("Location: index.php");//?errorusuario=si
		}
		else
		{
			//$encrip=MD5('$password');
$inserta = mysql_query("INSERT INTO vehiculos (NumeroPlaca,Estado,Modelo,NumeroPuertas,NumeroPasajeros,AireAcondicionado,TipoCombustible,Motor,Musica,categoria) VALUES ('$placa','$estado','$modelo','$puertas','$pasajeros','$aire','$combustible','$motor','$musica','$categoria')", $db);
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
	}
}
?>



