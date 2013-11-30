<!DOCTYPE HTML>
<!--
	Astral 2.5 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
    
    <?php  
echo "Hoy es ", date("d/n/Y");  
?>

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
						<a href="#me" class="fa fa-home active"><span>Inicio</span></a>
						<a href="#work" class="fa fa-folder"><span>Buscar</span></a>
						<a href="#ingresar" class="fa fa-user"><span>Ingresar</span></a>
                        <a href="#email" class="fa fa-star"><span>Registrarse</span></a>
						
					</nav>

				<!-- Main -->
					<div id="main">
						
	<!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&  inicioooo &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
							<article id="me" class="panel">
								<header>
									<h1>
                                    
                                    

                                    </h1>
									<span class="byline">Bienvenido a AUTITO</span>
									
								</header>
								<a href="#work" class="jumplink pic">
									<span class="jumplink arrow fa fa-chevron-right"><span>See my work</span></span>
									<img src="images/me.jpg" alt="" />
								</a>
							</article>
                            
        <!--&&&&&&&&&&&&&&&&&&&&&&&&&&    INGRESAR   &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
							<article id="ingresar" class="panel">
								<header>
									<h1>Inicia sesi&oacute;n para acceder a AUTITO</h1>
								</header>
								<form action="control.php" method="post">

                                	<div>
                                    	<div class="row half">
                                        	<div class="6u">
                                            	<input type="text" class="text" name="email" placeholder="Email"/>
                                            </div>
                                        </div>
                                        <div class="row half">
                                        	<div class="6u">
                                            	<input type="password" class="text" name="contra" placeholder="Contrase&ntilde;a"/>
                                            </div>
                                        </div>
                                        <div class="row">
											<div class="12u">
												<input type="submit" class="button" value="Ingresar" />
											</div>
										</div>
                                    </div>
                                </form>
							</article>    
		<!--&&&&&&&&&&&&&&&&&&&&& REGISTRARSE  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
							<article id="email" class="panel">
								<header>
									<h2>Ingrese sus datos</h2>
								</header>
								<form action="insertarUser.php" method="post">
									<div>
										<div class="row half">
											<div class="6u">
												<font color="red">*</font>
												Nombre:<input type="text" class="text" name="nombre" placeholder="Nombre" required />
											</div>
										</div>
                                        <div class="row half">
											<div class="6u">
												<font color="red">*</font>
												Apellido paterno:<input type="text" class="text" name="apellidop" placeholder="Apellido Paterno" required/>
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												Apellido materno:<input type="text" class="text" name="apellidom" placeholder="Apellido materno" />
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												Direccion:<input type="text" class="text" name="direccion" placeholder="Direccion" />
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												<font color="red">*</font>
												Telefono:<input type="text" class="text" name="telefono" placeholder="Telefono" required/>
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												# Carnet:<input type="text" class="text" name="ci" placeholder="# Carnet" />
											</div>
                                        </div>
                                        <div class="row half">
											<div class="6u">
												<font color="red">*</font>
												Email:<input type="email" class="text" name="email" placeholder="your@email.com" autofocus required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" />
											</div>
										</div>
                                        <div class="row half">
											<div class="6u">
												<font color="red">*</font>
												Contrase&ntilde;a:<input type="password" class="text" name="con1" placeholder="Contrase&ntilde;a" required />
											</div>
										</div>
                                        <div class="row half">
											<div class="6u">
												<font color="red">*</font>
												Repetir contrase&ntilde;a:<input type="password" class="text" name="con2" placeholder="Contrase&ntilde;a" required/>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="submit" class="button" value="Registrarse" />
											</div>
										</div>
									</div>
								</form>
							</article>

	<!--&&&&&&&&&&&&&&&&&&     Work    &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&--> 
							<article id="work" class="panel">
								<header>
									<h2>buscador</h2>
								</header>
								<p>
									en construccion
								</p>
								
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