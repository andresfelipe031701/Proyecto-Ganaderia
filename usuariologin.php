<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
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
    <h4><i class="fa fa-film" style="font-size:36px"> CINE FILMS</i></h4><br>
    <h6>Bienvenido a la sección de usuarios <i class='fas fa-users' style='font-size:23px'></i><h6> <br>


<form id="login_user" method="post" class="was-validated col-sm-4">
  <div class="mb-3 mt-3">
    <label class="form-label">Ingrese su documento:</label>
    <input type="number" class="form-control" id="validdocumento_user" placeholder="Ingrese su documento" name="documento" required>
    <div class="valid-feedback">dato Valido.</div>
    <div class="invalid-feedback">Por favor ingrese un dato.</div>
  <div class="mb-3">
    <label class="form-label">Ingrese la contraseña:</label>
    <input type="number" class="form-control" id="validcontrasena_user" placeholder="Ingrese su password" name="contrasena" required>
    <div class="valid-feedback"> dato Valido.</div>
    <div class="invalid-feedback">Por favor ingrese un dato.</div>
    <br>

  <button  id="validar_user" type="button" class="btn btn-primary">Ingresar</button>
  </form>
</div>
<br>
<h7>o</h7><br><br>
<button type="button" id="registrar_user" class="btn btn-primary">Registrarse</button> 

</form>
</center>


<center> 


      <form method="post" id="formulario_registro_Users" class="col-sm-4">
    <h7>Registre el siguiente formulario <i class="fa fa-file-text-o" style="font-size:20px;"></i><h7> <br> <br>

      <div class="form-group">
          <label class="col control-label" >Ingrese su documento</label>
              <input type="text" class="form-control" id="Guardar_documento_user" 
                  placeholder="ingrese documento" >
              <!-- </div> -->
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese sus nombres</label>
              <input type="text" class="form-control" id="Guardar_name_user" 
                  placeholder="ingrese nombres" >
              <!-- </div> -->
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese sus Apellidos</label>
              <input type="text" class="form-control" id="Guardar_apellido_user" 
                  placeholder="ingrese apellidos" >
              <!-- </div> -->
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese su edad</label>
              <input type="number" class="form-control" id="Guardar_edad_user" 
                  placeholder="ingrese edad" >
              <!-- </div> -->
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el correo</label>
              <input type="text" class="form-control" id="Guardar_correo_user" 
                  placeholder="ingrese el correo" >
              <!-- </div> -->
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el celular</label>
              <input type="number" class="form-control" id="Guardar_celular_user" 
                  placeholder="ingrese celular" >
              <!-- </div> -->

          <div class="form-group">
          <label class="col control-label" >Ingrese su contraseña</label>
              <input type="number" class="form-control" id="Guardar_contraseña_user" 
                  placeholder="ingrese contraseña" >
             
      <button type="button" id="btnGuardarUsuario" class="btn btn-primary">Guardar</button>
      <button type="submit" id="btn_cancelar" class="btn btn-danger">Cancelar</button>
      </div>

    </div>
  </div>
</div>

<center> 


</body>
</html>