
<?php
	function pruebaaa()
	{
		$nombre = $_POST['nombre'];
		$apaterno = $_POST['apellidop'];
		$amaterno = $_POST['apellidom'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$ci = $_POST['ci'];
		$email = $_POST['email'];

		$db = mysql_connect("localhost", "root", "");
		mysql_select_db("autito",$db);
		mysql_query("UPDATE usuarios SET Nombre='$nombre', APaterno='$apaterno', AMaterno='$amaterno', Direccion='$direccion', Telefono='$telefono', Carnet='$ci', Email='$email' WHERE Email='$email'");

		
		header ("Location: usuario.php");	  	
	}
?>