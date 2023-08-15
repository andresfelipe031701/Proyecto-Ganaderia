<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/6298bea347.js" crossorigin="anonymous"></script>
  <script src='ventas.js'></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
<!-- ultimo  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"  src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
<script src="https://kit.fontawesome.com/6298bea347.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="ventas.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="..\seccionOperacion\Operaciones.php"> <img rel="shortcut icon" src="../imagenes_insertar\dinero.png"  style='height:27px; width:27px'></a>
        </li>
        <li class="nav-item">
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../calendario\index.php"> <img rel="shortcut icon" src="../imagenes_insertar\calendario.png"  style='height:24px; width:24px'></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="..\seccionContactos\Contactos.php"><img rel="shortcut icon" src="../imagenes_insertar\telefono.png"  style='height:26px; width:26px'></a>
        </li>
        <li class="nav-item">
        </li>
      </ul>

<div class="col-md-auto">
<div class="col-lg-12">

                    <select  class="form-select" aria-label="Default select example">
                      <option>vvvvvvvv</option>
                      <option>vvvvvvvv</option>
                      <option>vvvvvvvv</option>
                    </select>
                    </div>
                </div>
      </form>
      
    </div>
  </div>
</nav>
<br>
<button id="AgregarAnuncio" type="button" class="btn btn-primary">Ingrese nuevo anuncio </button>
<div id="Cont_Form_add_anuncio">
    <center>
<form method="post" id="formulario_addAnuncio" class="col-sm-4">
    <h6>Formulario Añadir anuncio <img rel="shortcut icon" src="../imagenes_insertar\vaca.png"  style='height:30px; width:30px'><h6> <br> <br>
    <div class="form-group">
          <label class="col control-label" >Ingrese el Titulo del anuncio</label>
              <input type="text" class="form-control" id="Guardar_titulo" 
                  placeholder="Titulo del anuncio" >
          </div> <br>
          <div class="form-group">
          <label class="col control-label" > Ingrese la raza</label>
              <input type="text" class="form-control" id="Guardar_raza" 
                  placeholder="Nombre de la raza" >
          </div> <br>
         
          <div class="form-group">
          <label class="col control-label" > Ingrese el departamento</label>
              <input type="text" class="form-control" id="Guardar_departamento" 
                  placeholder="Ingrese el Nombre del departamento" >
          </div> <br>
         
          <div class="form-group">
          <label class="col control-label" > Ingrese el Municipio</label>
              <input type="text" class="form-control" id="Guardar_municipio" 
                  placeholder="Ingrese el Nombre de la raza" >
          </div> <br>
         
          <div class="form-group">
          <label class="col control-label" > Ingrese el tipo de venta </label>
              <input type="text" class="form-control" id="Guardar_tipoVenta" 
                  placeholder="Individual,lote..." >
          </div> <br>
          <div class="form-group">
          <label class="col control-label" > Ingrese el nombre del ejemplar</label>
              <input type="text" class="form-control" id="Guardar_nombreEjem" 
                  placeholder="Nombre animal" >
          </div> <br>
          <div class="form-group">
          <label class="col control-label" > Ingrese la edad del ejemplar</label>
              <input type="text" class="form-control" id="Guardar_EdadEjem" 
                  placeholder="Edad animal" >
          </div> <br>
          <div class="form-group">
          <label class="col control-label" > Ingrese el peso del ejemplar</label>
              <input type="text" class="form-control" id="Guardar_PesoEjem" 
                  placeholder="Peso animal" >
          </div> <br>
          <div class="form-group">
          <label class="col control-label" > Ingrese el nombre del criadero</label>
              <input type="text" class="form-control" id="Guardar_NombreCriadero" 
                  placeholder="Ingrese el nombre del criadero" >
          </div> <br>
          <div class="form-group">
          <label class="col control-label" > Ingrese el nombre de la hacienda</label>
              <input type="text" class="form-control" id="Guardar_NombreHacienda" 
                  placeholder="Nombre finca o hacienda" >
          </div> <br>
          <div class="form-group">
          <label class="col control-label" > Ingrese la descripción del anuncio</label>
              <input type="text" class="form-control" id="Guardar_Descripcion" 
                  placeholder="Descripción" >
          </div> <br>
          <div class="form-group">
          <label class="col control-label" > Ingrese telefono o contacto</label>
              <input type="text" class="form-control" id="Guardar_Contacto" 
                  placeholder="Telefono para contactar" >
          </div> <br>
          <div class="form-group">
                <label class=" control-label" > Imagen</label><br>
                    <input type="file" class="form-control" id="img_anuncio" 
                        placeholder="Ingrese imagen" >
                     </div> <br>
nombre hacienda y si hay mas anuncios de esta hacienda
contactar y que le de el dato
         
         <button type="button" id="Guardar_anuncio" class="btn btn-primary">Guardar</button>
      <button type="submit" id="btn_cancelar" class="btn btn-danger">Cancelar</button>
      </center>
</div>

<?php
include("../conexion.php");
$query="select*from anuncios";
$resultado=$conexion->query($query);
while($row=$resultado->fetch_assoc()){
  ?>
<button data-bs-toggle="collapse" data-bs-target="#demo">Collapsible</button>

<div id="demo" class="collapse">
<div class="card" style="width:300px">
  <img class="card-img-top" id="imagen">
  <div class="card-body">
    <h4 id="nombre_titulo"class="card-title"></h4>
    <h4 id="nombre_raza"class="card-title"></h4>
    <h4 id="nombre_departamento"class="card-title"></h4>
    <h4 id="nombre_minucipio"class="card-title"></h4>
    <h4 id="nombre_tipo"class="card-title"></h4>
    
    <h4 id="nombre"class="card-title"></h4>
    <h4 id="edad"class="card-title"></h4>
    <h4 id="peso"class="card-title"></h4>
    <h4 id="criadero"class="card-title"></h4>
    <h4 id="hacienda"class="card-title"></h4>
    <h4 id="descripcion"class="card-title"></h4>
    <h4 id="contacto"class="card-title"></h4>
    
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>

<?php
}
?>





</body>
</html>