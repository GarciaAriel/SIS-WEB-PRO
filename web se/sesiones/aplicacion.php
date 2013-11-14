<?php include ("seguridad.php");?>
<html>
<head>
	<title>Aplicacion</title>
</head>
<body>
	<h1>BIENVENIDO</h1>
	<br>
	<form action="buscar.php" method="GET">
		Buscar:<input type="Text" name="buscar" size="20" maxlength="50">
			   <input type="Submit" value="buscar">	
	</form>
Insertar un nuevo usuario: <a href="otra.php">Insertar</a>
<br>
<br>
<a href="salir.php">Salir</a>
</body>
</html>
