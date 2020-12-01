<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIENDA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
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
            </li><li class="nav-item">
                <a class="nav-link" href="listadoProductos.php">listado Productos</a>
            </li><li class="nav-item">
                <a class="nav-link" href="formularioRegistro.php">formulario Registro</a>
            </li><li class="nav-item">
                <a class="nav-link" href="factura.php">Factura</a>
            </li>
        </ul>
    </div>
    </nav>
    </header>

    <main>
    
        <?php 
            $nombre="Juan";
        ?>

        <div class="container">

        <form class="mt-5" method="POST" action="registrarProductos.php">
        <h3 class="text-center mb-4">Registrar Productos</h3>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre del Producto" name="nombre">
                </div>
           
            </div> <div class="row mt-3">
            <div class="col">
                    <input type="text" class="form-control" placeholder="Marca del Producto" name="marca">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                        <input type="number" class="form-control" placeholder="precio del Producto " name="precio">
                </div>
            </div>
            <div class="row mt-3">
            <div class="col">
                    <input type="text" class="form-control" placeholder=" link de la foto del Producto" name="foto">
                </div>
            </div>
            <div class="row mt-3">
                    <div class="col">
                    <label for="exampleFormControlTextarea1">Descripcion del Producto</label>
                        <textarea class="form-control" rows="3" name="descripcion"></textarea>
                </div>
            </div>
            

            <button type="submit" class="btn btn-info btn-block mt-3" name="boton">registrar</button>
        </form>
        
        </div>
    
    </main>
    <footer style="background-color: gray; color:white;">
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