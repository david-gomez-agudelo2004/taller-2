<?php 

class BaseDatos {

    public $usuarioBD="root";
    public $passwordBD="";

    public function __construct(){}

    public function conectarBD(){

        try{

            $datosBD="mysql:host=localhost;dbname=tienda";
            $conexion= new PDO($datosBD, $this->usuarioBD, $this->passwordBD);
            echo("conectado con exito");
            ?> <img src="https://images.emojiterra.com/twitter/v13.0/512px/2705.png" width="30" height="30" alt=""> <?php
            echo("<br>");
            return ($conexion);

        }catch(PDOException $error ){

            echo($error->getMessage());
        }
    }

    public function agregarDatos($consultaSQL){

        $conexionBD=$this->conectarBD();
        $insercionRegistro=$conexionBD->prepare($consultaSQL);

        $resultado=$insercionRegistro->execute();

        if($resultado){

            echo("exito agregando el registro");
            ?> <img src="https://images.emojiterra.com/twitter/v13.0/512px/2705.png" width="30" height="30" alt=""> <?php
            echo("<br>");
            echo("regresar a registar productos");
            ?><a href="formularioRegistro.php"><img src="https://cdn.pixabay.com/photo/2012/04/02/16/01/arrow-24835_640.png" width="30" height="30" alt=""></a>  <?php

        }else{

            echo("error agregando el registro");
            ?> <img src="https://img2.freepng.es/20180219/ddw/kisspng-error-http-404-icon-cent-sign-cliparts-5a8b089c89d296.8666809315190611485645.jpg" width="30" height="30" alt=""> <?php
            echo("<br>");
            echo("regresar a registar productos");
            ?><a href="formularioRegistros.php"><img src="https://cdn.pixabay.com/photo/2012/04/02/16/01/arrow-24835_640.png" width="30" height="30" alt=""></a>  <?php

        }

    }

    public function consultarDatos($consultaSQL){

        $conexionBD=$this->conectarBD();
        $buscarRegistros=$conexionBD->prepare($consultaSQL);

        $buscarRegistros->setFetchMode(PDO::FETCH_ASSOC);

        $resultado=$buscarRegistros->execute();

        if($resultado){
           return($buscarRegistros->fetchAll());
        }else{
            echo("error");
            ?> <img src="https://img2.freepng.es/20180219/ddw/kisspng-error-http-404-icon-cent-sign-cliparts-5a8b089c89d296.8666809315190611485645.jpg" width="30" height="30" alt=""> <?php
            
        }

    }

    public function eliminarDatos($consultaSQL){

        $conexionBD=$this->conectarBD();
        
        $eliminarRegistro=$conexionBD->prepare($consultaSQL);

        $resultado=$eliminarRegistro->execute();

        if($resultado){

            echo("exito eliminando el registro");
            ?> <img src="https://images.emojiterra.com/twitter/v13.0/512px/2705.png" width="30" height="30" alt=""> <?php
            echo("<br>");
            echo("regresar a listado productos");
            ?><a href="listadoProductos.php"><img src="https://cdn.pixabay.com/photo/2012/04/02/16/01/arrow-24835_640.png" width="30" height="30" alt=""></a>  <?php

        }else{

            echo("error eliminando el registro");
            ?> <img src="https://img2.freepng.es/20180219/ddw/kisspng-error-http-404-icon-cent-sign-cliparts-5a8b089c89d296.8666809315190611485645.jpg" width="30" height="30" alt=""> <?php
            echo("<br>");
            echo("regresar a listado productos");
            ?><a href="listadoProductos.php"><img src="https://cdn.pixabay.com/photo/2012/04/02/16/01/arrow-24835_640.png" width="30" height="30" alt=""></a>  <?php

        }

    }

    public function actualizarDatos($consultaSQL){

        $conexionBD=$this->conectarBD();
        
        
        $editarRegistro=$conexionBD->prepare($consultaSQL);

        $resultado=$editarRegistro->execute();

        if($resultado){

            echo("exito editando el registro");
            ?> <img src="https://images.emojiterra.com/twitter/v13.0/512px/2705.png" width="30" height="30" alt=""> <?php
            echo("<br>");
            echo("regresar a listado productos");
            ?><a href="listadoProductos.php"><img src="https://cdn.pixabay.com/photo/2012/04/02/16/01/arrow-24835_640.png" width="30" height="30" alt=""></a>  <?php


        }else{

            echo("error editando el registro");
            ?> <img src="https://img2.freepng.es/20180219/ddw/kisspng-error-http-404-icon-cent-sign-cliparts-5a8b089c89d296.8666809315190611485645.jpg" width="30" height="30" alt=""> <?php
            echo("<br>");
            echo("regresar a listado productos");
            ?><a href="listadoProductos.php"><img src="https://cdn.pixabay.com/photo/2012/04/02/16/01/arrow-24835_640.png" width="30" height="30" alt=""></a>  <?php

        }


    }




    
}






?>