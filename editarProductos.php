<?php 
include("BaseDatos.php");
if(isset($_POST["botonEditar"])) {

    $ide = $_GET ["ide"];

    $nombre=$_POST["nombreEditar"];
    $descripcion=$_POST["descripcionEditar"];
    $marca=$_POST["marcaEditar"];
    $precio=$_POST["precioEditar"];

    $operacionBD =new BaseDatos();
    $consultaSQL="UPDATE productos SET nombre='$nombre',marca='$marca',precio='$precio',descripcion='$descripcion' WHERE ide='$ide'";

    $operacionBD->actualizarDatos($consultaSQL);
}
?>