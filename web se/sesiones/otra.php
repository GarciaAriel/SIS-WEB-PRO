<?php include ("seguridad.php");?>
<html>
<head>
	<title>INSERTAR UN USUARIO</title>
</head>
<body>
	<form action="insertar.php" method="POST">
		<table align="center" width="225" cellspacing="2" cellpadding="2" border="0">
			<tr>
			    <td colspan="2" align="center" 
					bgcolor=red><span style="color:ffffff"></span>INSERTAR UN USUARI0
			</tr>
			<tr>
			    <td align="right">Login:</td>
			    <td><input type="Text" name="login" size="10" maxlength="50"></td>
			</tr>
			<tr>
			    <td align="right">Nombre:</td>
			    <td><input type="Text" name="nombre" size="20" maxlength="50"></td>
			</tr>
			<tr>
			    <td align="right">Telefono:</td>
			    <td><input type="Text" name="telefono" size="10" maxlength="50"></td>
			</tr>
			<tr>
			    <td align="right">Direccion:</td>
			    <td><input type="Text" name="direccion" size="20" maxlength="50"></td>
			</tr>
			<tr>
			    <td align="right">Sexo:</td>
			    <td><input type="Text" name="sexo" size="10" maxlength="50"></td>
			</tr>
			<tr>
			    <td align="right">Password:</td>
			    <td><input type="password" name="contrasenia" size="10" maxlength="50"></td>
			</tr>
			<tr>
			    <td colspan="2" align="center"><input type="Submit" value="insertar"></td>
			</tr>
		</table>
	</form>	
<a href="salir.php">Salir</a>
</body>
</html>

