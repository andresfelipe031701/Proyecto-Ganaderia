<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/6298bea347.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"  src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://kit.fontawesome.com/6298bea347.js" crossorigin="anonymous"></script>
<script src="perfil.js"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="javascript:void(0)">Logo</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="..\seccionOperacion\Operaciones.php"> <img rel="shortcut icon" src="../imagenes_insertar\dinero.png"  style='height:27px; width:27px'></a>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link" href="editsalas\salas.php">Sección 2<i class='far fa-id-card' style='font-size:19px'></i></a> -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../calendario\index.php"> <img rel="shortcut icon" src="../imagenes_insertar\calendario.png"  style='height:24px; width:24px'></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="..\seccionContactos\Contactos.php"><img rel="shortcut icon" src="../imagenes_insertar\telefono.png"  style='height:26px; width:26px'></a>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link" href="editsalas\salas.php">citas de veterinarios</a> -->
        </li>
      </ul>
      <ul>
      <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#demo">Opciones</button>

<div id="demo"  class="collapse">
<div class="card" style="width:300px">
  <!-- <img class="card-img-top" src="..\imagenes_insertar\telefono.png" alt="Card image"> -->
  <!-- <div class="card-body"> -->
    <h4 id="nombre_raza"class="card-title">Seleccione alguna opcion.</h4>
    <!-- <p class="card-text"></p> -->
    <a href="seccionPerfil/perfil.php" class="btn btn-primary">Configurar perfil</a>
    <hr>
    <a href="loginnn/indexl.php" class="btn btn-primary">Cerrar sesion</a>
  </div>
</div>
</div>
      </ul>
      </nav>
      

<br>
<form  id="form_gastos" class="col-sm-4">
    <h7>Datos de usuario <i class="fa fa-file-text-o" style="font-size:20px;"></i><h7> <br> <br>
          
          <div class="form-group">
          <label class="col control-label" >Nombres</label>
              <input disabled type="text" class="form-control" id="nombres" 
                   >
          </div>
          <div class="form-group">
          <label class="col control-label" >Apellidos</label>
              <input disabled type="text" class="form-control" id="apellidos" 
                  >
          </div>
          <div class="form-group">
          <label class="col control-label" >Edad</label>
              <input disabled type="text" class="form-control" id="edad" 
                   >
          </div>
          <div class="form-group">
          <label class="col control-label" >correo</label>
              <input disabled type="text" class="form-control" id="correo" 
                   >
          </div>
          <div class="form-group">
          <label class="col control-label" >celular</label>
              <input  disabled type="text" class="form-control" id="celular" 
                   >
          </div>
          <div class="form-group">
          <label class="col control-label" >contraseña</label>
              <input disabled type="password" class="form-control" id="contraseña" 
                   >
          </div>
          <div class="form-group">
          <label class="col control-label" >documento</label>
              <input disabled type="text" class="form-control" id="documento" 
                   >
          </div>
      

</body>
</html>