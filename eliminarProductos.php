  
<?php

include("BaseDatos.php");

$ide = $_GET [ "ide" ];

$operacionBD = new  BaseDatos ();

$consultaSQL = "DELETE FROM productos WHERE ide='$ide'" ;

$operacionBD -> eliminarDatos ( $consultaSQL );
?>
