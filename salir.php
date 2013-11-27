<?php
session_start();
unset($_SESSION["pedro"]); 
session_destroy();
header("Location: index.php");//?errorusuario=si
exit();
?>

