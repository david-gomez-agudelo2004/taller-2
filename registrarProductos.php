<?php

include("BaseDatos.php");

if(isset($_POST["boton"])){

    $descripcion=$_POST["descripcion"];
    $foto=$_POST["foto"];
    $nombre=$_POST["nombre"];
    $marca=$_POST["marca"];
    $precio=$_POST["precio"];

    $operacionBD= new BaseDatos();
    $consultaSQL="INSERT INTO productos(nombre,marca,precio,foto,descripcion) VALUES ('$nombre','$marca','$precio','$foto','$descripcion')";
    $operacionBD->agregarDatos($consultaSQL);



    

}




?>