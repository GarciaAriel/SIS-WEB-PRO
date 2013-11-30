<?php
$placa = $_POST['placa'];
$modelo = $_POST['modelo'];
$puertas = $_POST['puertas'];
$pasajeros = $_POST['pasajeros'];
$aire = $_POST['aire'];
$combustible = $_POST['combustible'];
$motor = $_POST['motor'];
$categoria = $_POST['categoria'];
if(isset($_POST['cd'])) $cd = 1; else $cd = 0;
if(isset($_POST['radio'])) $radio = 1; else $radio = 0;
if(isset($_POST['mp3'])) $mp3 = 1; else $mp3 = 0;
if(isset($_POST['usb'])) $usb = 1; else $usb = 0;
$costo=$_POST['costo'];
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
			$inserta = mysql_query("INSERT INTO vehiculos (NumeroPlaca,Estado,Modelo,NumeroPuertas,NumeroPasajeros,AireAcondicionado,TipoCombustible,Motor,Categoria,Costo,CD,MP3,RADIO,USB) VALUES ('$placa','$estado','$modelo','$puertas','$pasajeros','$aire','$combustible','$motor','$categoria','$costo','".$cd."','".$mp3."','".$radio."','".$usb."')", $db);
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



