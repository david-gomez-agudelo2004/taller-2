<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTADO</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<header> <nav class="navbar navbar-expand-lg navbar-dark ">
        <a class="navbar-brand" href="#">
         <img src="img/sol.png" width="30" height="30" alt="" loading="lazy">
            PASTELERIA EL SOL
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Principal <span class="sr-only">(current)</span></a>
            </li><li class="nav-item active">
                <a class="nav-link" href="listadoProductos.php">listado Productos</a>
            </li><li class="nav-item active">
                <a class="nav-link" href="formularioRegistro.php">formulario Registro</a>
            </li><li class="nav-item active">
                <a class="nav-link" href="factura.php">Factura</a>
            </li>
        </ul>
    </div>
    </nav></header>
<main>
<div class="container cod1">
    <?php 
        include("BaseDatos.php");
        $operacionBD=new BaseDatos();
        $consultaSQL="SELECT * FROM productos WHERE 1";
        $productos=$operacionBD->consultarDatos($consultaSQL);
        
    ?>
<hr>

        
        
    
    <div class="row row-cols-1 row-cols-md-3">

        <?php foreach($productos as $producto):?>

                <div class="col mb-4">
                    
                    <div class="card h-100 border-primary text-center ">
                    
                        <div class="card-header cod3" height="200"><img src="<?php echo($producto["foto"]) ?>" class="img-thumbnail"  alt="img"></div>
                        <div class="card-body cod2">
                        
                            <h3 class="card-title text-center"><?php echo($producto["nombre"])?></h3>
                            <p class="card-text text-center"><?php echo($producto["marca"])?></p>
                            <p class="card-text text-center"> = <?php echo($producto["precio"])?> $ </p>
                            <p class="card-text text-center"><?php echo($producto["descripcion"])?></p>
                            <hr>
    <a href="eliminarProductos.php?ide=<?php echo($producto["ide"])?>" class="btn btn-outline-danger">Eliminar</a>
                            
  
                            <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#editar<?php echo($producto["ide"])?>">
                               Editar
                            </button>
                        </div>
                    </div>

                    <div class="modal fade" id="editar<?php echo($producto["ide"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h3 class="modal-title " id="exampleModalLabel">Editar Producto</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                            <div class="modal-body">
                            <form method="POST" action="editarProductos.php?ide=<?php echo($producto["ide"])?>" >
    <div class="row mt-6">
        <div class="col">
            <p class="text-left">Nombre Producto</p>
            <input type="text" name="nombreEditar" class="form-control" value="<?php echo($producto["nombre"])?>"  >
        </div>
        
    </div> <div class="row mt-6">
    <div class="col">
    <p class="text-left">marca</p>
            <input type="text" name="marcaEditar" class="form-control" value="<?php echo($producto["marca"])?>" >
        </div>
    </div>
    <div class="row mt-6">
        <div class="col">
                <p class="text-left">Precio</p>
                <input type="number" name="precioEditar" class="form-control" value="<?php echo($producto["precio"])?>" >
        </div>
    </div>
    <div class="row mt-6">
            <div class="col">
            <p class="text-left">Descripcion del Producto</label>
                <textarea class="form-control" name="descripcionEditar" rows="3" ><?php echo($producto["descripcion"])?></textarea>
        </div>
    </div>
    <button type="submit"  class="btn btn-primary" name="botonEditar">Guardar</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
</form>
                            </div>
                            </div>
                            </div>
                        
                    </div>

                
                </div>

        <?php endforeach?>

    </div>

    


</div>
    </main>
    <footer >
        <hr>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4">
        <ul>
          <li>desarrollo de software</li>
          <li>10º2</li>
          <li>carmelitano</li>
        </ul>
  
      </div>
      <div class="col-12 col-md-4">
        <ul>
          <li>David Gomez Agudelo </li>
          <li>16 años</li>
          <li>Bello-Antioquia</li>
        </ul>
      </div>
      <div class="col-12 col-md-4">
        <ul>
          <li> david.gomez.agudelo9@gmail.com </li>
          <li> impresiones.gomez.dga@gmail.com </li>
          <li> davidgomezao123@hotmail.com </li>
        </ul>
      </div>
    </div>
  </div>
      </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>   
</body>
</html>