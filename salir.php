<?php
session_start();
unset($_SESSION["pedro"]); 
session_destroy();
header("Location: proyecto.php");//?errorusuario=si
exit();
?>

