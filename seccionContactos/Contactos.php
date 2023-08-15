<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://kit.fontawesome.com/6298bea347.js" crossorigin="anonymous"></script>
    <script src='contactos.js'></script>
    <title>Software Ganadero</title>
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
          <a id=""class="nav-link" href="..\seccionOperacion\Operaciones.php">Sección Operaciones <img rel="shortcut icon" src="..\imagenes_insertar\dinero.png"  style='height:27px; width:27px'></a>
        </li>
        <li class="nav-item">
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../calendario\index.php">citas Pendientes <img rel="shortcut icon" src="..\imagenes_insertar\calendario.png"  style='height:24px; width:24px'></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Contactos.php">Listado de contactos  <img rel="shortcut icon" src="..\imagenes_insertar\telefono.png"  style='height:26px; width:26px'></a>
        </li>
        <li class="nav-item">
        </li>
      </ul>
      </form>
    </div>
  </div>
</nav>
<br>
<a href="../index.php"><button type="button" class="btn btn-primary">Regresar</button></a><br><br>
<button type="button" id="active_Contenedor_categorias" class="btn btn-primary">Sección categorias</button>

        <div id="contenedorSelect" class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-2">

                </div>
                <div class="col-md-auto">
                    <select id="selectContactos" class="form-select" aria-label="Default select example">

                    </select>
                </div>
                <div class="col col-lg-2">

                </div>
            </div>
        </div>
<br>
        <div class="col-sm-12" id="contenedorTabla">
          <center>
        <div class="col-sm-8">
        <table id="tablaContactos" class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Empresa</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Dirección</th>
                    <th id="acc">botones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody id="datosTablaUsuarios">
            </table>
        </div>
        </center>
        </div>

<button data-bs-toggle="collapse" data-bs-target="#demo">Collapsible</button>

<div id="demo" class="collapse">
<div class="card" style="width:300px">
  <img class="card-img-top" src="..\imagenes_insertar\telefono.png" alt="Card image">
  <div class="card-body">
    <h4 id="nombre_raza"class="card-title"></h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>


</body>

</html>