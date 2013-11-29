
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
						<a href="#modificarvehiculo" class="fa fa-star"><span>Modificar Vehiculo</span></a>
					</nav>
				<!-- Main -->
					<div id="main">
						<article id="modificarvehiculo" class="panel">
							<?php 
							function cargarDatos(){
							$id=$_GET["aux"];
							$db = mysql_connect("localhost", "root", "");
							mysql_select_db("autito",$db);
							$res=mysql_query("SELECT * FROM vehiculos Where NumeroPlaca='$id'", $db);
							
								if($res != false)
								{
									
									if(mysql_num_rows($res)>0)
									{
										
										$valores = mysql_fetch_array($res);
										session_start();
										$_SESSION['numplaca'] = $valores['NumeroPlaca'];
										$_SESSION['modelo'] = $valores['Modelo'];
										$_SESSION['numpuerta'] = $valores['NumeroPuertas'];
										$_SESSION['numpasaj'] = $valores['NumeroPasajeros'];
										$_SESSION['airea'] = $valores['AireAcondicionado'];
										$_SESSION['tcomb'] = $valores['TipoCombustible'];
										$_SESSION['motor'] = $valores['Motor'];
										$_SESSION['musica'] = $valores['Musica'];
										$_SESSION['catego'] = $valores['Categoria'];
									}
								}
							}
							cargarDatos();
							?>	
							<header>
								<h1>
									Modificar datos de vehiculo
								</h1>
							</header>
							<form action="actualizar.php" method="POST">
								<div>
									<div class="row half">
										<div class="6u">
					  						# Placa:<br> <input type="text" name="placa" value="<?php echo $_SESSION['numplaca'];?>"/> </br>
					  						</div>
									</div>
									<div class="row half">
										<div class="6u">
					  						Modelo: <br><input type="text" name="modelo" value="<?php echo $_SESSION['modelo'];?>"/> </br>
					  					</div>
					  				</div>
					  				<div class="row half">
										<div class="6u">
					  						# Puertas: <br><input type="text" name="puertas" value="<?php echo $_SESSION['numpuerta'];?>"/> </br>
					  					</div>
					  				</div>
					  				<div class="row half">
										<div class="6u">
					  						# Pasajeros:<br> <input type="text" name="pasajero" value="<?php echo $_SESSION['numpasaj'];?>"/> </br>
					  					</div>
					  				</div>
					  				<div class="row half">
											<div class="6u">
												Aire acondicionado:<select name="aire">
													  <option value="SI" <?if($_SESSION['airea']=="SI"){echo 'selected';} ?>>SI</option>
													  <option value="NO" <?if($_SESSION['airea']=="NO"){echo 'selected';} ?>>NO</option>
												</select>
											</div>
										</div>
                                        <div class="row half">
											<div class="6u">
												Tipo de combustible:<select name="combustible">
												  <option value="etanol" <?if($_SESSION['tcomb']=="etanol"){echo 'selected';} ?>>Etanol</option>
												  <option value="gasnatural" <?if($_SESSION['tcomb']=="gasnatural"){echo 'selected';} ?>>Gas Natural</option>
												  <option value="electrico" <?if($_SESSION['tcomb']=="electrico"){echo 'selected';} ?>>Electrico</option>
												  <option value="hibirido" <?if($_SESSION['tcomb']=="hibirido"){echo 'selected';} ?>>Hibrido</option>
												  <option value="gasolina" <?if($_SESSION['tcomb']=="gasolina"){echo 'selected';} ?>>Gasolina</option>
												  <option value="diesel" <?if($_SESSION['tcomb']=="diesel"){echo 'selected';} ?>>Diesel</option>
												</select>
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												Motor:<input type="text" class="text" name="motor" value="<?php echo $_SESSION['motor'];?>"/>
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												Musica:<BR>
												<input type="checkbox" name="cd"/>CD<BR>
												<input type="checkbox" name="usb"/>USB<BR>
												<input type="checkbox" name="radio" checked>Radio<BR>
												<input type="checkbox" name="mp3">MP3<BR>
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												Categoria:<select name="categoria">
												<option value="economico" <?if($_SESSION['catego']=="economico"){echo 'selected';} ?>>Economico</option>
												<option value="compacto" <?if($_SESSION['catego']=="compacto"){echo 'selected';} ?>>Compacto</option>
												<option value="intermedio" <?if($_SESSION['catego']=="intermedio"){echo 'selected';} ?>>Intermedio</option>
												<option value="deportivo" <?if($_SESSION['catego']=="deportivo"){echo 'selected';} ?>>Deportivo</option>
												<option value="grande" <?if($_SESSION['catego']=="grande"){echo 'selected';} ?>>Todo terreno</option>
												<option value="minivan" <?if($_SESSION['catego']=="minivan"){echo 'selected';} ?>>Convertible</option>
											</select>
											</div>
										</div>
					  			<input type="Submit" name="Guardar" value="Guardar">
					  			</div>
							</form>
							<form action="administrador.php">
								<input type = "submit" name="Cancelar" value = "Cancelar">
							</form>
						</article>
					</div>
		
<!-------------------------------------- PIE DE PAGINA --------------------->
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