
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
						<a href="#me" class="fa fa-home active"><span>Inicio</span></a>
						<a href="#funciones" class="fa fa-folder"><span>Funciones</span></a>
						<a href="#registrar" class="fa fa-star"><span>Registrar Auto</span></a>
						<a href="#modificarPerfil" class="fa fa-star"><span>Modificar Perfil</span></a>
						<a href="#buscarauto" class="fa fa-star"><span>Buscar</span></a>
						<a href="#registraracc" class="fa fa-star"><span>Registrar Accesorio</span></a>
						<a href="#salir" class="fa fa-heart"><span>Salir</span></a>
                        
						
					</nav>

				<!-- Main -->

<!--&&&&&&&&&&&&&&&&&&     BUSCAR VEHICULO    &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&--> 
					<div id="main"><article id="buscarauto" class="panel">
                                <header>
                                    <h2>buscador</h2>
                                </header>
                                                                <FORM METHOD=POST ACTION="administrador.php">
                                                                        <div class="row half">
                                                                                <div class="6u"> 
                                                                        Buscar: <INPUT TYPE="text" NAME="busqueda" placeholder="# de placa">
                                                                                <INPUT TYPE=Submit NAME="Buscar" VALUE="Buscar"><DD></DD>
                                                                                </div>
                                                                        </div> 
                                                                </FORM>
                                                                <TABLE BORDER=3>
                                                                        <TR>
                                                                                <TD>#Placa</TD>
                                                                                <TD>Modelo</TD>
                                                                                <TD>Categoria</TD>
                                                                                <TD>Estado</TD>
                                                                                <TD></TD>
                                                                                <TD></TD>
                                                                        </TR>
                                                                        <?php
                                                                               
                                                                                llenarTablaBusqueda();
                                                                        ?>
                                                                </TABLE>
                                                        </article>
                                                        <?php
                                                        function llenarTablaBusqueda(){
                                                                $buscar = $_POST["busqueda"];
                                                                $db = mysql_connect("localhost", "root", "");
                                                                mysql_select_db("autito",$db);
                                                                $res=mysql_query("SELECT * FROM vehiculos WHERE NumeroPlaca like '%$buscar%'", $db);
                                                                while($row=mysql_fetch_row($res)){
                                                                        $id=$row[0];
                                                                        echo "<TR>";
                                                                        echo "<TD>".$row[0]."</TD>";        
                                                                        echo "<TD>".$row[2]."</TD>";        
                                                                        echo "<TD>".$row[9]."</TD>";
                                                                        echo "<TD>".$row[1]."</TD>";        
                                                                        echo "<TD>"."<a href=\"editarVehiculo.php?aux=$id\">Modificar</a>"."</TD>";        
                                                                        echo "<TD>"."<a href=\"eliminarVehiculo.php?aux=$id\">Eliminar</a>"."</TD>";
                                                                        echo "</TR>";        
                                                                }
                                                        }
                                                        ?>
<!--Inicio-->
							<article id="me" class="panel">
								<header>
									<h1>
                                    	
                                                                        

                                    </h1>
									<span class="byline">Bienvenido <?php echo $_SESSION['nombre'];?> XD</span>
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

	
							
	<!--&&&&&&&&&&&&&&&&&&&&& 	MODIFICAR DATOS PERSONALES  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
							<article id="modificarPerfil" class="panel">
								<header>
									<h2>Ingrese sus datos</h2>
								</header>
								<form action="actualizarDatosUsuario.php" method="post">
									<div>
										<div class="row half">
											<div class="6u">
												<font color="red">*</font>
												Nombre:<input type="text" class="text" name="nombre" value=<?php echo $_SESSION['nombre'];?> />
											</div>
										</div>
                                        <div class="row half">
											<div class="6u">
												<font color="red">*</font>
												Apellido paterno:<input type="text" class="text" name="apellidop" value=<?php echo $_SESSION['apaterno'];?> />
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												Apellido materno:<input type="text" class="text" name="apellidom" value=<?php echo $_SESSION['amaterno'];?> />
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												Direccion:<input type="text" class="text" name="direccion" value=<?php echo $_SESSION['direccion'];?> />
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												<font color="red">*</font>
												Telefono:<input type="text" class="text" name="telefono" value=<?php echo $_SESSION['telefono'];?> />
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												# Carnet:<input type="text" class="text" name="ci" value=<?php echo $_SESSION['ci'];?> />
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
	<!--&&&&&&&&&&&&&&&&&&     REGISTRAR ACCESORIO    &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&--> 
							<article id="registraracc" class="panel">
								<header>
									<h2>Registro de accesorios</h2>
								</header>
								<form action="insertarAccesorio.php" method="post">
									<div>
										<div class="row half">
											<div class="6u">
												Nombre:<input type="text" class="text" name="nombre" placeholder="Nombre" />
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												Descripcion:<input type="text" class="text" name="descripcion" placeholder="Descripcion" />
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												Costo:<input type="text" class="text" name="costo" placeholder="Costo" />
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<input type="submit" class="button" value="Registrar accesorio" />
											</div>
										</div>
									</div>
								</form>
								
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
												# Placa:<input type="text" class="text" name="placa" placeholder="# de placa" />
											</div>
										</div>
                                        <div class="row half">
											<div class="6u">
												Modelo:<input type="text" class="text" name="modelo" placeholder="Modelo" />
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												# Puertas:<input type="text" class="text" name="puertas" placeholder="# Puertas" />
											</div>
                                        </div>
                                        <div class="row half">
											<div class="6u">
												# Pasajeros<input type="text" class="text" name="pasajeros" placeholder="# Pasajeros" />
											</div>
										</div>
                                        <div class="row half">
											<div class="6u">
												Aire acondicionado:<select name="aire">
													  <option value="SI">SI</option>
													  <option value="NO">NO</option>
												</select>
											</div>
										</div>
                                        <div class="row half">
											<div class="6u">
												Tipo de combustible:<select name="combustible">
												  <option value="etanol">Etanol</option>
												  <option value="gasnatural">Gas Natural</option>
												  <option value="electrico">Electrico</option>
												  <option value="hibirido">Hibrido</option>
												  <option value="gasolina">Gasolina</option>
												  <option value="diesel">Diesel</option>
												</select>
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												Motor:<input type="text" class="text" name="motor" placeholder="Motor" />
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												Musica:<BR>
												<input type="checkbox" name="cd"/>CD<BR>
												<input type="checkbox" name="usb"/>USB<BR>
												<input type="checkbox" name="radio">Radio<BR>
												<input type="checkbox" name="mp3">MP3<BR>
											</div>
										</div>
										<div class="row half">
											<div class="6u">
												Categoria:<select name="categoria">
												<option value="economico">Economico</option>
												<option value="compacto">Compacto</option>
												<option value="intermedio">Intermedio</option>
												<option value="deportivo">Deportivo</option>
												<option value="grande">Todo terreno</option>
												<option value="minivan">Convertible</option>
											</select>
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