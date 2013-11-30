<?php include ("seguridad.php");?>
$apaterno = $_GET['carr'];
$apaterno = $_GET['pla'];
<html>
	<head>
    <?php echo $_SESSION['nombre'];?>
    <?php echo $_SESSION['apaterno'];?>

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
						<a href="administrador.php" class="fa fa-home active"><span>Inicio</span></a>
						<a href="#prestamo" class="fa fa-star"><span>Registrar Auto</span></a>
						<a href="#salir" class="fa fa-heart"><span>Salir</span></a>
                        
						
					</nav>

				<!-- Main -->
					<div id="main">

		<!--&&&&&&&&&&&&&&&&&&     RESERVAR UN VEHICULO    &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&--> 
							<article id="prestamo" class="panel">
								<header>
									
								</header>
								<TABLE BORDER=1>
										<TR>
											<TD>Nombre</TD>
											<TD>Apellido</TD>
											<TD>#Placa</TD>
											<TD>Estado</TD>
											
											<TD></TD>
										</TR>
							<?php
								$ca = $_GET["carr"];
								$pl = $_GET["pla"];

								
								$db = mysql_connect("localhost", "root", "root");
								mysql_select_db("autito",$db);
								$res=mysql_query("SELECT  u.Nombre, u.APaterno, v.NumeroPlaca, v.Modelo, v.Costo, P.Estado, P.FechaInicio, P.FechaDevolucion,u.Carnet FROM prestamos P, usuarios u, vehiculos v WHERE P.Carnet = '$ca' and '$ca' = u.Carnet and '$pl' = v.NumeroPlaca and P.NumeroPlaca = '$pl'", $db);
								

								$_SESSION['carrr'] = $ca;
								$_SESSION['plaaa'] = $pl;

								while($row=mysql_fetch_row($res))
								{
									$estadoo = $row[5];

									if ($estadoo == "porConfirmar") {
                                    	echo "<form action='buscarPrestamoConfirm.php' method='post' >";
                                    }
                                    else
                                    {
                                 		if ($estadoo == "confirmado") 
                                 		{
                                    		echo "<form action='buscarPrestamoCerrar.php' method='post' >";
	                                    }
	                                }

                                    echo "<TR>";
                                    echo "<TD>".$row[0]."</TD>";        
                                    echo "<TD>".$row[1]."</TD>";
                                    echo "<TD>".$row[2]."</TD>";  
                                    $plaa = $row[2];
                                    echo "<TD>".$row[5]."</TD>";        
                                    $cii =  $row[8];
                                    echo "</TR>";
                                	echo "</TABLE>";    
                                 	if ($estadoo == "porConfirmar") {
                                    	echo "<input type='submit' class='button' value='Confirmar' />";
                                    }
                                    else
                                    {
                                 		if ($estadoo == "confirmado") 
                                 		{
                                    		echo "<input type='submit' class='button' value='Cerrar' />";
	                                    }
	                                }   
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