<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validar</title>
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

    <script src="main.js"></script>

</head>
<body>
<br>

<a href="principal.php"><button type="button" class="btn btn-primary">Regresar</button></a>
    <center>
    <br>
        <br>

        <h4><i class="fa fa-film" style="font-size:36px"> CINE FILMS</i></h4><br><br>
    
        <h6>Bienvenido Administrador <i class='fas fa-user-cog' style='font-size:20px'></i><h6> <br>

<form method="post" class="was-validated col-sm-4">
  <div class="mb-3 mt-3">
    <label class="form-label">Ingrese su documento:</label>
    <input type="number" class="form-control" id="validdocumento_admin" placeholder="Ingrese su documento" name="documento" required>
    <div class="valid-feedback">dato Valido.</div>
    <div class="invalid-feedback">Por favor ingrese un dato.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">Ingrese la contraseña:</label>
    <input type="number" class="form-control" id="validcontrasena_admin" placeholder="Ingrese su password" name="contrasena" required>
    <div class="valid-feedback"> dato Valido.</div>
    <div class="invalid-feedback">Por favor ingrese un dato.</div>
  </div>

  <button  id="validar_admin" type="button" class="btn btn-primary">Ingresar</button>
</form>
</center>

<br>

</body>
</html>