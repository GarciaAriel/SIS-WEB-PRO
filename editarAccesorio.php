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
						<a href="#modificaraccesorio" class="fa fa-star"><span>Modificar Accesorio</span></a>
					</nav>
				<!-- Main -->
					<div id="main">
						<article>
						</article>
						<article id="modificaraccesorio" class="panel">
							<?php 
							function cargarDatos(){
							$id=$_GET["aux"];
							$db = mysql_connect("localhost", "root", "");
							mysql_select_db("autito",$db);
							$res=mysql_query("SELECT * FROM accesorios Where Id='$id'", $db);
							
								if($res != false)
								{
									
									if(mysql_num_rows($res)>0)
									{
										
										$valores = mysql_fetch_array($res);
										session_start();
										$_SESSION['idAcc']=$valores['Id'];
										$_SESSION['nombreAcc'] = $valores['Nombre'];
										$_SESSION['desc'] = $valores['Descripcion'];
										$_SESSION['costoAcc'] = $valores['Costo'];
									}
								}
							}
							cargarDatos();
							?>	
							<header>
								<h1>
									Modificar datos de accesorio
								</h1>
							</header>
							<form action="actualizarAccesorio.php" method="POST">
								<div>
										<div class="row half">
											<div class="6u">
												Id:<input type="text" class="text" name="id" placeholder="Nombre" required value="<?php echo $_SESSION['idAcc'];?>"/>
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												Nombre:<input type="text" class="text" name="nombre" placeholder="Nombre" required value="<?php echo $_SESSION['nombreAcc'];?>"/>
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												Descripcion:<input type="text" class="text" name="descripcion" placeholder="Descripcion" value="<?php echo $_SESSION['desc'];?>" />
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												Costo:<input type="text" class="text" name="costo" required value="<?php echo $_SESSION['costoAcc'];?>"/>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="submit" class="button" value="Guardar" />
											</div>
										</div>
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