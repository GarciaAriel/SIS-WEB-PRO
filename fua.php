<?php
	$buscar = $_POST["buscar"];
		$db = mysql_connect("localhost", "root", "");
		mysql_select_db("autito",$db);
		$res=mysql_query("SELECT * FROM vehiculos WHERE NumeroPlaca like '%$buscar%'", $db);

		echo "<TABLE BORDER=1>";
								echo "<TR>";
										echo "<TD>#Placa</TD>";
										echo "<TD>Modelo</TD>";
										echo "<TD>Categoria</TD>";
										echo "<TD></TD>";
								echo "</TR>";
		echo "</TABLE>";

		while($row=mysql_fetch_row($res))
		{
			$id=$row[0];
			echo "<TR>";
			echo "<TD>".$row[0]."</TD>";	
			echo "<TD>".$row[2]."</TD>";	
			echo "<TD>".$row[9]."</TD>";	
			echo "<TD>"."<a href=\"editarProducto.php?aux=$id\">Modificar</a>"."</TD>";	
			echo "</TR>";
		}
								
?>