
<!DOCTYPE HTML>

<!--
	Astral 2.5 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php include ("seguridad.php");?> 

<html>
	<head>
    <?php echo $_SESSION['nombre'];?>
    <?php echo $_SESSION['apaterno'];?>

		<title>Rent a car Autito</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/noscript.css" />
		</noscript>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">



		<!-- Wrapper-->
			<div id="wrapper">
				
				<!-- Nav -->
					<nav id="nav">
						<a href="administrador.php" class="fa fa-home active"><span>Inicio</span></a>
						<a href="#reserva" class="fa fa-star"><span>Reservar Vehiculo</span></a>
						<a href="usuario.php" class="fa fa-heart"><span>Inicio</span></a>
						<a href="#salir" class="fa fa-heart"><span>Salir</span></a>

                        
						
					</nav>

				<!-- Main -->
					<div id="main">
	
	<!--&&&&&&&&&&&&&&&&&&     RESERVAR UN VEHICULO    &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&--> 
							<article id="reserva" class="panel">
								<header>
									
								</header>
								
							<?php
								$bus = $_GET["aux"];

								$db = mysql_connect("localhost", "root", "root");
								mysql_select_db("autito",$db);
								$res=mysql_query("SELECT * FROM vehiculos WHERE NumeroPlaca='$bus'", $db); //numero de placa

								$acc=mysql_query("SELECT * FROM accesorios", $db);

								
								$estadovehiculo = "";
								while($row=mysql_fetch_row($res))
								{ 
									$estadovehiculo = $row[1];
									$_SESSION['palcaaas'] = $row[0];
									if ($row[1] == "disponible") {
										echo "<form action='registrarReservaAdmin.php' method='post' >";
										echo "<h2>Ingrese los datos del solicitante</h2>";
										echo "Nombre: <input type='text' name='namee' ><br>";
										echo "Carnet: <input type='text' name='carnett' ><br>";

									}
									else{
										if ($row[1] == "reservado") {
											echo "<form action='registrarReservaAdminConfirm.php' method='post' >";
											echo "<h2>Datos del solicitante </h2>";

											$res2=mysql_query("SELECT Carnet FROM prestamos WHERE NumeroPlaca='$bus'", $db);
											$row2=mysql_fetch_row($res2);
											$usuarioQueSolicito = $row2[0];
											$res3=mysql_query("SELECT * FROM usuarios WHERE Carnet='$usuarioQueSolicito'", $db);
											$row3=mysql_fetch_row($res3);
											$_SESSION['carnettt'] = $usuarioQueSolicito;
											echo "<label for='male'>Nombre: ".$row3[1]."</label>";
											echo "<br>";
											echo "<label for='male'>Apellido paterno: ".$row3[2]."</label>";
											echo "<br>";
											

										}
										else{	echo "oto";
											echo "<form action='registrarReserva.php' method='post' >";
										}
									}
									echo "<h2>El vehiculo cuenta con las siguiente caracteristicas</h2>";
									echo "<label for='male'>Numero de placa: ".$row[0]."</label>";
									echo "<br>";
									echo "<label for='male'>Modelo: ".$row[2]."</label>";
									echo "<br>";
									echo "<label for='male'>Numero de puertas: ".$row[3]."</label>";
									echo "<br>";
									echo "<label for='male'>Numero de pasajeros: ".$row[4]."</label>";
									echo "<br>";
									echo "<label for='male'>Aire acondicionado: ".$row[5]."</label>";
									echo "<br>";
									echo "<label for='male'>Tipo de combustible: ".$row[6]."</label>";
									echo "<br>";
									echo "<label for='male'>Musica: ".$row[8]."</label>";
									echo "<br>";
									echo "<label for='male'>Categoria: ".$row[9]."</label>";
									echo "<br>";
									echo "Fecha inicio: <input type='date' name='inicioF'>";
									echo "<br>";
									echo "Fecha final: <input type='date' name='finalF'>";
									echo "<br>";echo "<br>";

								}

								echo "<h2>Accesorios adicionales que puede solicitar</h2>";
								$acc=mysql_query("SELECT * FROM accesorios", $db);

								while($roww=mysql_fetch_row($acc))
								{
									echo "<input type='checkbox' name='accc' value='Bike'>".$roww[1]."<br>";
							
								}
								echo "<br>";echo "<br>";
	
									if ($estadovehiculo == "disponible") {
										echo "<input type='submit' class='button' value='Reservar' />";
									}						
									else		
										if ($estadovehiculo == "reservado") {
											echo "<input type='submit' class='button' value='Confirmar la Reserva' />";
										}
										else{
											echo "<input type='submit' class='button' value='Liberar vehiculo' />";
										}
										

									echo "</form>";

							
							?> 
			
					</article>    
    
	
        <!--&&&&&&&&&&&&&&&&&&&&&&&&&&  SALIRRRR   &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
							<article id="salir" class="panel">
								<header>
									<h1>Esta seguro de abandonar la aplicacion</h1>
								</header>
								<form action="salir.php" method="post">
                                	<div>
                                    	<div class="row">
											<div class="12u">
												<input type="submit" class="button" value="Salir" />
											</div>
										</div>
                                    </div>
                                </form>
							</article>    
		
	
		
<!--9999999999999999999999999999999999 PIE DE PAGINA 00000000000000000000000000000000-->
					<div id="footer">
						<ul class="links">
							<li>&copy; Jane Doe</li>
							<li>Images : <a href="http://fotogrph.com/">fotogrph</a></li>
							<li>Design : <a href="http://html5up.net/">HTML5 UP</a></li>
						</ul>
					</div>
                  
		
			</div>

	</body>
</html>