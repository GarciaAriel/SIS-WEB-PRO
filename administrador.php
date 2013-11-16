
<!DOCTYPE HTML>

<!--
	Astral 2.5 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<?php include ("seguridad.php");?>

<html>
	<head>
    

		<title>Astral by HTML5 UP</title>
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
						<a href="#me" class="fa fa-home active"><span>Inicio</span></a>
						<a href="#funciones" class="fa fa-folder"><span>Funciones</span></a>
						<a href="#registrar" class="fa fa-star"><span>Registrar Auto</span></a>
						<a href="#buscarauto" class="fa fa-star"><span>Buscar</span></a>
						<a href="#registraracc" class="fa fa-star"><span>Registrar Accesorio</span></a>
						<a href="#salir" class="fa fa-heart"><span>Salir</span></a>
                        
						
					</nav>

				<!-- Main -->
					<div id="main">

	<!--&&&&&&&&&&&&&&&&&&     BUSCAR VEHICULO    &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&--> 
							<article id="buscarauto" class="panel">
								<header>
									<h2>buscador</h2>
								</header>
								<p>
									en construccion
								</p>
								
							</article>
	<!--&&&&&&&&&&&&&&&&&&     BUSCAR VEHICULO    &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&--> 
							<article id="registraracc" class="panel">
								<header>
									<h2>Registro accesorios</h2>
								</header>
								<p>
									en construccion
								</p>
								
							</article>
						
	<!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&inicioooo &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
							<article id="me" class="panel">
								<header>
									<h1>
                                    	
                                                                        

                                    </h1>
									<span class="byline">Bienvenido <?php echo $_SESSION['pedro'];?> XD</span>
								</header>
								<a href="#work" class="jumplink pic">
									<span class="jumplink arrow fa fa-chevron-right"><span>See my work</span></span>
									<img src="images/me.jpg" alt="" />
								</a>
								<a href="#funciones" class="jumplink pic">
									<span class="jumplink arrow fa fa-chevron-right"><span>See my work</span></span>
									<img src="images/me.jpg" alt="" />
								</a>

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
		<!--&&&&&&&&&&&&&&&&&&&&&&&& REGISTRARSE UN VEHICULO   &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
							<article id="registrar" class="panel">
								<header>
									<h2>Ingrese los datos del vehiculo</h2>
								</header>
								<form action="insertarVehiculo.php" method="post">
									<div>
										<div class="row half">
											<div class="6u">
												<input type="text" class="text" name="placa" placeholder="Numero de placa" />
											</div>
										</div>
                                        <div class="row half">
											<div class="6u">
												<input type="text" class="text" name="modelo" placeholder="Modelo" />
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												<input type="text" class="text" name="puertas" placeholder="# Puertas" />
											</div>
                                        </div>
                                        <div class="row half">
											<div class="6u">
												<input type="text" class="text" name="pasajeros" placeholder="# Pasajeros" />
											</div>
										</div>
                                        <div class="row half">
											<div class="6u">
												<input type="text" class="text" name="aire" placeholder="Aire acondicionado" />
											</div>
										</div>
                                        <div class="row half">
											<div class="6u">
												<input type="text" class="text" name="combustible" placeholder="Tipo combustible" />
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												<input type="text" class="text" name="motor" placeholder="Motor" />
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												<input type="text" class="text" name="musica" placeholder="Musica" />
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												<input type="text" class="text" name="categoria" placeholder="Categoria" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="submit" class="button" value="Registrar Vehiculo" />
											</div>
										</div>
									</div>
								</form>
							</article>

	<!--&&&&&&&&&&&&&&&&&&&&&&&&&& FUNCIONES ADMIN &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&--> 
							<article id="funciones" class="panel">
								<header>
									<h2>Tareas que puede ralizar</h2>
								</header>
								<p>
									Usted tiene una cuenta de Aministrador.

									Con los permisos de admistrador puede realizar las 
									siguiente operaciones.
								</p>
								<section class="is-gallery">
									
									
									<div class="row half">


										<div class="4u">
											<a href="#registrar" class="jumplink pic"><img src="images/13.jpg" alt="">
											</a>
										</div>
										<div class="4u">
											<a href="#buscarauto" class="jumplink pic"><img src="images/14.jpg" alt=""></a>
										</div>
										<div class="4u">
											<a href="#registraracc" class="jumplink pic"><img src="images/15.jpg" alt=""></a>
										</div>
									</div>
								</section>
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