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
						<a href="#buscarprestamo" class="fa fa-star"><span>Registrar Auto</span></a>
						<a href="#salir" class="fa fa-heart"><span>Salir</span></a>
                        
						
					</nav>

				<!-- Main -->
					<div id="main">
	<!--&&&&&&&&&&&&&&&&&&     BUSCAR VEHICULO    &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&--> 
							<article id="buscarprestamo" class="panel">
								<header> 
									<h2>buscador</h2>
								</header>
								<FORM METHOD=post ACTION="#buscarprestamo" name="kik" id="kik">
									<div class="row half">
										<div class="6u"> 
											Buscar: <INPUT TYPE="text" NAME="buscar" id="buscar">
											<input type="submit" class="button"  value="Buscar" />
											
										</div>
									</div> 
								<div class="CSSTableGenerator" >
									<TABLE border="1">
										<TR>
											<TD>Nombre</TD>
											<TD>Apellido</TD>
											<TD>#Placa</TD>
											<TD>Estado</TD>
											
											<TD></TD>
										</TR>
										<?php
											llenarTablaBusqueda();
										?>
									</TABLE>
								</div>	
								</FORM>
							</article>

							
							<?php
							function llenarTablaBusqueda()
							{
								$bus = $_POST["buscar"];
								
								$db = mysql_connect("localhost", "root", "root");
								mysql_select_db("autito",$db);
								if($bus == "")
								{
									$res=mysql_query("SELECT  u.Nombre, u.APaterno, v.NumeroPlaca, v.Modelo, v.Costo, P.Estado, P.FechaInicio, P.FechaDevolucion,u.Carnet FROM prestamos P, usuarios u, vehiculos v WHERE P.Carnet = u.Carnet and P.NumeroPlaca = v.NumeroPlaca", $db);
									
								}
								else
								{
									$res=mysql_query("SELECT u.Nombre, u.APaterno, v.NumeroPlaca, v.Modelo, v.Costo, P.Estado, P.FechaInicio, P.FechaDevolucion,u.Carnet FROM prestamos P, usuarios u, vehiculos v WHERE P.Carnet = u.Carnet and P.NumeroPlaca = v.NumeroPlaca and P.NumeroPlaca like $bus", $db);
									
								}
							
								while($row=mysql_fetch_row($res))
								{
                                    echo "<TR>";
                                    echo "<TD>".$row[0]."</TD>";        
                                    echo "<TD>".$row[1]."</TD>";
                                    echo "<TD>".$row[2]."</TD>";  
                                    $plaa = $row[2];
                                    echo "<TD>".$row[5]."</TD>";        
                                    
                                    $cii =  $row[8];
                                    echo "<TD>"."<a href=\"buscarPrestamoVer.php?carr=$cii&pla=$plaa\">Ver</a>"."</TD>";
                                    echo "</TR>";
								}
								
							}

							?>    
    
	
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