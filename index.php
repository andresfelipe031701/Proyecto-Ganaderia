
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
    <script src='main.js'></script>
    <link rel="stylesheet" href="estilos.css">
    <title>Software Ganadero</title>
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="seccionOperacion\Operaciones.php">Sección Operaciones <img rel="shortcut icon" src="imagenes_insertar\dinero.png"  style='height:27px; width:27px'></a>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link" href="editsalas\salas.php">Sección 2<i class='far fa-id-card' style='font-size:19px'></i></a> -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calendario\index.php">citas Pendientes <img rel="shortcut icon" src="imagenes_insertar\calendario.png"  style='height:24px; width:24px'></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="seccionContactos\Contactos.php">Listado de contactos  <img rel="shortcut icon" src="imagenes_insertar\telefono.png"  style='height:26px; width:26px'></a>
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
      
      </form>

</nav>


<br>

<a href="seccionVentas/ventas.php"><button type="button" class="btn btn-primary">Ir a ventas</button></a>

<a href="loginnn/indexl.php"><button type="button" class="btn btn-primary">Ir a Login</button></a>


<!-- <i class="fa-sharp fa-solid fa-cow"></i>
<i class="fa-solid fa-cow"></i>
<i class="fa-duotone fa-cow"></i> -->
<!-- <link rel="shortcut icon" href="imagenes_insertar\Hembra.jpg"> -->
<!-- <i class="fa-sharp fa-solid fa-cow" style='font-size:23px'></i> -->
<!-- <br> -->

<button id="AgregarRazas" type="button" class="btn btn-primary">Ingrese raza </button>

<div id="Cont_Form_add_raza">
    <center>
<form method="post" id="formulario_addRaza" class="col-sm-4">
    <h6>Añadir raza <img rel="shortcut icon" src="imagenes_insertar\vaca.png"  style='height:30px; width:30px'><h6> <br> <br>
          <div class="form-group">
          <label class="col control-label" > Ingrese el Nombre</label>
              <input type="text" class="form-control" id="Guardar_nombre_raza" 
                  placeholder="Ingrese el Nombre de la raza" >
          </div> <br>
         
         <button type="button" id="Guardar_raza" class="btn btn-primary">Guardar</button>
      <button type="submit" id="btn_cancelar_form_raza" class="btn btn-danger">Cancelar</button>
      </center>
</div>
<!-- div formulario añadir razas -->
<center>
<div id="seleccionbotones">

<h5>Registro de animales<img rel="shortcut icon" src="imagenes_insertar\grupoAnimale.jpg"  style='height:50px; width:50px'></h5>


<button id="Sección_Machos" type="button" class="btn btn-primary">Sección Machos</button><img rel="shortcut icon" src="imagenes_insertar\toroIcon.jpg"  style='height:60px; width:60px'>
<button id="Sección_Hembras" type="button" class="btn btn-primary">Sección Hembras </button><img rel="shortcut icon" src="imagenes_insertar\Hembra.jpg"  style='height:60px; width:60px'>
<button id="Sección_Terneros" type="button" class="btn btn-primary">Sección Terneros</button><img rel="shortcut icon" src="imagenes_insertar\terneros.jpg"  style='height:60px; width:60px'>
</div>
<br>
</center>

<div id="seccionMachos" class="container">
<img rel="shortcut icon" src="imagenes_insertar\torete.jpg"  style='height:35px; width:35px'><button id="agregarAnimal" type="button" class="btn btn-primary">Agregar animal </button>
<br>
<div id="contenedorSelect" class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-2">

                </div>
                <div class="col-md-auto">
                    <select id="selectRazasMachosIni" class="form-select" aria-label="Default select example">

                    </select>
                </div>
                <div class="col col-lg-2">

                </div>
            </div>
        </div>
<!-- <button type="button" id="agregar" class="btn btn-primary">Agregar</button> <br> <br> -->

<div class="col-sm-12" id="contenedorTabla">
        <div class="col-sm-12">
        <table id="tablaMachos" class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Raza</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Genotipo</th>
                    <th scope="col">Grupo</th>
                    <th scope="col">Padre</th>
                    <th scope="col">Abuelo materno</th>
                    <th scope="col">Fecha nacimiento</th>
                    <th scope="col">Nombre ultima vacuna</th>
                    <th scope="col">Fecha ultima vacuna</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Tratamientos</th>
                    <th scope="col">Pajilla</th>
                    <th scope="col">Observaciones</th>
                    <th id="acc">botones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                </tbody id="datosTablaUsuarios">
            </table>
        </div>
        </div>
        <!-- </center> -->

</div> 
<!-- div seccion machos -->

    <div id="contenedor_form_machos" class="container">
<center>
<form method="post" id="form_machos" class="col-sm-4">
    <h7>formulario de machos <i class="fa fa-file-text-o" style="font-size:20px;"></i><h7> <br> <br>
          
          <div class="form-group">
          <label class="col control-label" > Ingrese el codigo</label>
              <input type="number" class="form-control" id="Guardar_codigo" 
                  placeholder="Ingrese el codigo" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el Nombre</label>
              <input type="text" class="form-control" id="Guardar_nombre" 
                  placeholder="Ingrese el Nombre" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese la edad</label>
              <input type="number" class="form-control" id="Guardar_edad" 
                  placeholder="Ingrese la edad" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el peso</label>
              <input type="text" class="form-control" id="Guardar_peso" 
                  placeholder="Ingrese el peso" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingreso al genotipo</label>
              <input type="text" class="form-control" id="Guardar_genotipo" 
                  placeholder=" Ingreso al genotipo" >

          <div class="form-group">
          <label class="col control-label" >Ingrese el grupo</label>
              <input type="number" class="form-control" id="Guardar_grupo" 
                  placeholder="Ingrese el grupo" >

                  <div class="form-group">
          <label class="col control-label" > Ingrese la fecha de nacimiento</label>
              <input type="text" class="form-control" id="Guardar_fechaNaci" 
                  placeholder="Ingrese la fecha de nacimiento" >
                  <div class="form-group">
          <label class="col control-label" > Ingrese nombre del padre</label>
              <input type="text" class="form-control" id="Guardar_nomPadre" 
                  placeholder="ngrese nombre del padre" >
                  <div class="form-group">
          <label class="col control-label" > Ingrese nombre del abuelo paterno</label>
              <input type="text" class="form-control" id="Guardar_nomAbu" 
                  placeholder="Ingrese nombre del abuelo paterno" >
                  <div class="form-group">
          <label class="col control-label" > Ingrese nombre de ultima vacuna</label>
              <input type="text" class="form-control" id="Guardar_nomVac" 
                  placeholder="Ingrese nombre de ultima vacuna" >
                  <div class="form-group">
          <label class="col control-label" > Ingrese fecha de ultima vacuna</label>
              <input type="text" class="form-control" id="Guardar_fechaVac" 
                  placeholder="Ingrese fecha de ultima vacuna" >
                  <div class="form-group">
                  <div class="form-group">
          <label class="col control-label" > Ingrese la categoria</label>
              <input type="text" class="form-control" id="Guardar_Categoria" 
                  placeholder="Ingrese la categoria" >
          <label class="col control-label" > Ingrese los tratamientos</label>
              <input type="text" class="form-control" id="Guardar_tratamientos" 
                  placeholder="Ingrese los tratamientos" >
                  <div class="form-group">
          <label class="col control-label" > Ingrese la fecha de la ultima pajilla</label>
              <input type="text" class="form-control" id="Guardar_fechaPajilla" 
                  placeholder="Ingrese la fecha de la ultima pajilla" >
                  <div class="form-group">
          <label class="col control-label" > Ingrese las observaciones</label>
              <input type="text" class="form-control" id="Guardar_oberva" 
                  placeholder="Ingrese las observaciones" >

                  <div id="contenedorSelect" class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-2">

                </div>
                <div class="col-md-auto">
                    <select id="selectRazasMachos_gua" class="form-select" aria-label="Default select example">

                    </select>
                </div>
                <div class="col col-lg-2">

                </div>
            </div>
        </div>
                  <button type="button" id="guardarMacho" class="btn btn-primary">Guardar</button>
      <button type="submit" id="btn_cancelar" class="btn btn-danger">Cancelar</button>
      </center>
      </div>



      <div id="contenedor_Editar_machos" class="container">
<center>
      <form method="post" id="contenedor_form_machosEdit" class="col-sm-4">
          <h7>Edición de machos formulario <i class="fa fa-file-text-o" style="font-size:20px;"></i><h7> <br> <br>
          <div class="form-group">
          <label class="col control-label" > Ingrese el Nombre</label>
              <input type="text" class="form-control" id="Guardar_nombre_edit" 
                  placeholder="Ingrese el Nombre" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese la edad</label>
              <input type="number" class="form-control" id="Guardar_edad_edit" 
                  placeholder="Ingrese la edad" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el peso</label>
              <input type="text" class="form-control" id="Guardar_peso_edit" 
                  placeholder="Ingrese el peso" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingreso al genotipo</label>
              <input type="text" class="form-control" id="Guardar_genotipo_edit" 
                  placeholder=" Ingreso al genotipo" >
                  </div>

          <div class="form-group">
          <label class="col control-label" >Ingrese el grupo</label>
              <input type="number" class="form-control" id="Guardar_grupo_edit" 
                  placeholder="Ingrese el grupo" >
                  </div>

                  <div class="form-group">
          <label class="col control-label" > Ingrese la fecha de nacimiento</label>
              <input type="text" class="form-control" id="Guardar_fechaNaci_edit" 
                  placeholder="Ingrese la fecha de nacimiento" >
          </div>

                  <div class="form-group">
          <label class="col control-label" > Ingrese nombre del padre</label>
              <input type="text" class="form-control" id="Guardar_nomPadre_edit" 
                  placeholder="Ingrese nombre del padre" >
          </div>

                  <div class="form-group">
          <label class="col control-label" > Ingrese nombre del abuelo paterno</label>
              <input type="text" class="form-control" id="Guardar_nomAbu_edit" 
                  placeholder="Ingrese nombre del abuelo paterno" >
          </div>

                  <div class="form-group">
          <label class="col control-label" > Ingrese nombre de ultima vacuna</label>
              <input type="text" class="form-control" id="Guardar_nomVac_edit" 
                  placeholder="Ingrese nombre de ultima vacuna" >
          </div>

                  <div class="form-group">
          <label class="col control-label" > Ingrese fecha de ultima vacuna</label>
              <input type="text" class="form-control" id="Guardar_fechaVac_edit" 
                  placeholder="Ingrese fecha de ultima vacuna" >
          </div>

                  <div class="form-group">
          <label class="col control-label" > Ingrese la categoria</label>
              <input type="text" class="form-control" id="Guardar_Categoria_edit" 
                  placeholder="Ingrese la categoria" >
                  <div class="form-group">
          <label class="col control-label" > Ingrese los tratamientos</label>
              <input type="text" class="form-control" id="Guardar_tratamientos_edit" 
                  placeholder="Ingrese los tratamientos" >
          </div>

                  <div class="form-group">
          <label class="col control-label" > Ingrese la fecha de la ultima pajilla</label>
              <input type="text" class="form-control" id="Guardar_fechaPajilla_edit" 
                  placeholder="Ingrese la fecha de la ultima pajilla" >
          </div>

                  <div class="form-group">
          <label class="col control-label" > Ingrese las observaciones</label>
              <input type="text" class="form-control" id="Guardar_oberva_edit" 
                  placeholder="Ingrese las observaciones" >
          </div>
          <div id="contenedorSelect" class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-2">

                </div>
                <div class="col-md-auto">
                    <select id="selectRazasMachos_edit" class="form-select" aria-label="Default select example">

                    </select>
                </div>
                <div class="col col-lg-2">

                </div>
            </div>
        </div>
                  <button type="button" id="EditarMachos" class="btn btn-primary">Editar</button>
      <button type="submit" id="btn_cancelar" class="btn btn-danger">Cancelar</button>
      </center>
      </div>


<div id="seccion_hembras_datos" class="container">
    <!-- <center> -->
<img rel="shortcut icon" src="imagenes_insertar\cabeza.jpg"  style='height:35px; width:35px'><button id="agregarHembra" type="button" class="btn btn-primary">Agregar Hembra</button>

<div class="col-sm-12" id="contenedorTabla">
        <div class="col-sm-8">
        <table id="tablaHembras" class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Genotipo</th>
                    <th scope="col">Produccion_leche</th>
                    <th scope="col">Grupo</th>
                    <th scope="col">Fecha_nacimiento</th>
                    <th scope="col">Padre</th>
                    <th scope="col">Abuelo_materno</th>
                    <th scope="col">Nombre_vacuna</th>
                    <th scope="col">Fecha_vacuna</th>
                    <th scope="col">vacunas_faltantes</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Tratamientos</th>
                    <th scope="col">Num_partos</th>
                    <th scope="col">Observaciones</th>
                    <th scope="col">Raza</th>
                    <th id="acc">botones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody id="datosTablaUsuarios">
            </table>
        </div>
        </div>
            <!-- </center> -->
      </div>
      <!-- div seccion de hembras -->



      <!-- formulario hembras -->
      <div id="contenedorFormularioHembras">
      <center>
<form method="post" id="formulario-Hembras" class="col-sm-4">
    <h7>Registro de hembras <i class="fa fa-file-text-o" style="font-size:20px;"></i><h7> <br> <br>

      
          <div class="form-group">
          <label class="col control-label" > Ingrese el codigo</label>
              <input type="number" class="form-control" id="Guardar_CodigoHem" 
                  placeholder="Ingrese el codigo" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el Nombre</label>
              <input type="text" class="form-control" id="Guardar_NombreHem" 
                  placeholder="Ingrese el Nombre" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese la edad</label>
              <input type="number" class="form-control" id="Guardar_EdadHem" 
                  placeholder="Ingrese la edad" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el peso</label>
              <input type="number" class="form-control" id="Guardar_PesoHem" 
                  placeholder="Ingrese el peso" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingreso al genotipo</label>
              <input type="text" class="form-control" id="Guardar_GenotipoHem" 
                  placeholder=" Ingreso al genotipo" >
          </div>

                  <div class="form-group">
          <label class="col control-label" >Ingrese la produccion de leche</label>
              <input type="number" class="form-control" id="Guardar_ProduccionHem" 
                  placeholder="Ingrese la produccion de leche" >
          </div>

          <div class="form-group">
          <label class="col control-label" >Ingrese el grupo</label>
              <input type="number" class="form-control" id="Guardar_GrupoHem" 
                  placeholder="Ingrese el grupo" >
                  </div>

                  <div class="form-group">
          <label class="col control-label" > Ingrese la fecha de nacimiento</label>
              <input type="text" class="form-control" id="Guardar_FechaNacHem" 
                  placeholder="Ingrese la fecha de nacimiento" >
          </div>

                  <div class="form-group">
          <label class="col control-label" > Ingrese nombre del padre</label>
              <input type="text" class="form-control" id="Guardar_NombrepaHem" 
                  placeholder="ngrese nombre del padre" >
          </div>

                  <div class="form-group">
          <label class="col control-label" > Ingrese nombre del abuelo paterno</label>
              <input type="text" class="form-control" id="Guardar_NombreabHem" 
                  placeholder="Ingrese nombre del abuelo paterno" >
          </div>

                  <div class="form-group">
          <label class="col control-label" > Ingrese nombre de ultima vacuna</label>
              <input type="text" class="form-control" id="Guardar_vacunaHem" 
                  placeholder="Ingrese nombre de ultima vacuna" >
          </div>

                  <div class="form-group">
          <label class="col control-label" > Ingrese fecha de ultima vacuna</label>
              <input type="text" class="form-control" id="Guardar_FechavacHem" 
                  placeholder="Ingrese fecha de ultima vacuna" >
          </div>
                  <div class="form-group">
          <label class="col control-label" > Ingrese vacunas faltantes</label>
              <input type="text" class="form-control" id="Guardar_VacunFaltHem" 
                  placeholder="Ingrese vacunas faltantes" >
          </div>
                  
                  <div class="form-group">
          <label class="col control-label" > Ingrese la categoria</label>
              <input type="text" class="form-control" id="Guardar_CategoriaHem" 
                  placeholder="Ingrese la categoria" >
          </div>

                  <div class="form-group">

          <label class="col control-label" > Ingrese los tratamientos</label>
              <input type="text" class="form-control" id="Guardar_TratamientoHem" 
                  placeholder="Ingrese los tratamientos" >
          </div>

                  <div class="form-group">
          <label class="col control-label" > Ingrese el número de partos</label>
              <input type="number" class="form-control" id="Guardar_NumpartosHem" 
                  placeholder="Ingrese el número de partos" >
          </div>

                  <div class="form-group">
          <label class="col control-label" > Ingrese las observaciones</label>
              <input type="text" class="form-control" id="Guardar_ObservacionHem" 
                  placeholder="Ingrese las observaciones" >
                  </div>

                <div class="col-md-auto">
                    <select id="selectRazasHembras_gua" class="form-select" aria-label="Default select example">

                    </select>
                </div>
                <div class="col col-lg-2">

                </div>
        <!-- </div> -->
        <button type="button" id="guardarHembra" class="btn btn-primary">Guardar hem</button>
      <button type="submit" id="btn_cancelar" class="btn btn-danger">Cancelar</button>
        </center>
      </div>
      <!-- div cierre formulario hembras -->
      

      <!-- formulario editar hembras -->
      <div id="contenedorFormularioHembrasEdit" class="container">
      <center>
      <form method="post" id="formulario-Hembras_registro" class="col-sm-4">
    <h7>Edicion registro de hembras <i class="fa fa-file-text-o" style="font-size:20px;"></i><h7> <br> <br>

          <div class="form-group">
          <label class="col control-label" > Ingrese el nuevo  Nombre</label>
              <input type="text" class="form-control" id="Guardar_NombreHem_edit" 
                  placeholder="Ingrese el Nombre" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese la nuevo edad</label>
              <input type="number" class="form-control" id="Guardar_EdadHem_edit" 
                  placeholder="Ingrese la edad" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el nuevo peso</label>
              <input type="text" class="form-control" id="Guardar_PesoHem_edit" 
                  placeholder="Ingrese el peso" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingreso el nuevo genotipo</label>
              <input type="text" class="form-control" id="Guardar_GenotipoHem_edit" 
                  placeholder=" Ingreso al genotipo" >

                  <div class="form-group">
          <label class="col control-label" >Ingrese la nuevo produccion de leche</label>
              <input type="number" class="form-control" id="Guardar_ProduccionHem_edit" 
                  placeholder="Ingrese la produccion de leche" >
          <div class="form-group">
          <label class="col control-label" >Ingrese el nuevo grupo</label>
              <input type="number" class="form-control" id="Guardar_GrupoHem_edit" 
                  placeholder="Ingrese el grupo" >

                  <div class="form-group">
          <label class="col control-label" > Ingrese la nuevo fecha de nacimiento</label>
              <input type="text" class="form-control" id="Guardar_FechaNacHem_edit" 
                  placeholder="Ingrese la fecha de nacimiento" >
                  <div class="form-group">
          <label class="col control-label" > Ingrese el nuevo nombre del padre</label>
              <input type="text" class="form-control" id="Guardar_NombrepaHem_edit" 
                  placeholder="ngrese nombre del padre" >
                  <div class="form-group">
          <label class="col control-label" > Ingrese el nuevo nombre del abuelo paterno</label>
              <input type="text" class="form-control" id="Guardar_NombreabHem_edit" 
                  placeholder="Ingrese nombre del abuelo paterno" >
                  <div class="form-group">
          <label class="col control-label" > Ingrese el nuevo nombre de ultima vacuna</label>
              <input type="text" class="form-control" id="Guardar_vacunaHem_edit" 
                  placeholder="Ingrese nombre de ultima vacuna" >
                  <div class="form-group">
          <label class="col control-label" > Ingrese la nuevo fecha de ultima vacuna</label>
              <input type="text" class="form-control" id="Guardar_FechavacHem_edit" 
                  placeholder="Ingrese fecha de ultima vacuna" >
                  <div class="form-group">
                  <div class="form-group">
          <label class="col control-label" > Ingrese las nueva vacunas faltantes</label>
              <input type="text" class="form-control" id="Guardar_VacunFaltHem_edit" 
                  placeholder="Ingrese vacunas faltantes" >
                  <div class="form-group">
                  <div class="form-group">
          <label class="col control-label" > Ingrese la nuevo categoria</label>
              <input type="text" class="form-control" id="Guardar_CategoriaHem_edit" 
                  placeholder="Ingrese la categoria" >
          <label class="col control-label" > Ingrese los nuevos tratamientos</label>
              <input type="text" class="form-control" id="Guardar_TratamientoHem_edit" 
                  placeholder="Ingrese los tratamientos" >
                  <div class="form-group">
          <label class="col control-label" > Ingrese el nuevo número de partos</label>
              <input type="number" class="form-control" id="Guardar_NumpartosHem_edit" 
                  placeholder="Ingrese el número de partos" >
                  <div class="form-group">
          <label class="col control-label" > Ingrese las nuevas observaciones</label>
              <input type="text" class="form-control" id="Guardar_ObservacionHem_edit" 
                  placeholder="Ingrese las observaciones" >

                  </div>
                <div class="col-md-auto">
                    <select id="selectRazasHembras_edit" class="form-select" aria-label="Default select example">

                    </select>
                </div>
                <div class="col col-lg-2">

                </div>
            </div>
        </div>
                  <button type="button" id="EditarHembra" class="btn btn-primary">Editar</button>
      <button type="submit" id="btn_cancelar" class="btn btn-danger">Cancelar</button>
      </div>
      </center>
      </div>


      <div id="seccion_terneros_Tabla">
        <center>
        <button id="agregarTernerp" type="button" class="btn btn-primary">Agregar Ternero</button><img rel="shortcut icon" src="imagenes_insertar\ternerito.jpg"  style='height:35px; width:35px'>
<br><br>
      <div id="contenedorSelect" class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-2">

                </div>
                <div class="col-md-auto">
                    <select id="selectRazasTernerosIni" class="form-select" aria-label="Default select example">

                    </select>
                </div>
                <div class="col col-lg-2">

                </div>
            </div>
        </div>

        <div class="col-sm-12" id="contenedorTabla">
        <div class="col-sm-8">
        <table id="tablaHembras" class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Grupo</th>
                    <th scope="col">Fecha_nacimiento</th>
                    <th scope="col">Padre</th>
                    <th scope="col">Abuelo_materno</th>
                    <th scope="col">Nombre_vacuna</th>
                    <th scope="col">Fecha_vacuna</th>
                    <th scope="col">vacunas_faltantes</th>
                    <th scope="col">Tratamientos</th>
                    <th scope="col">Observaciones</th>
                    <th scope="col">Raza</th>
                    <th id="acc">botones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody id="datosTablaUsuarios">
            </table>
        </div>
        </div>
        <!-- </center> -->
        </div>
      
      <!-- div de seccion terneros -->

      <div id="contFormularioTerneros">
        <center>
      <form method="post" id="formulario-terneros" class="col-sm-4">
    <h7>Registro de terneros <i class="fa fa-file-text-o" style="font-size:20px;"></i><h7> <br> <br>

          <div class="form-group">
          <label class="col control-label" > Ingrese el Codigo</label>
              <input type="text" class="form-control" id="Guardar_m_tern" 
                  placeholder="Ingrese el Nombre" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el Nombre</label>
              <input type="text" class="form-control" id="Guardar_m_tern" 
                  placeholder="Ingrese el Nombre" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el peso</label>
              <input type="text" class="form-control" id="Guardar_m_tern" 
                  placeholder="Ingrese el Nombre" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el nuevo  Nombre</label>
              <input type="text" class="form-control" id="Guardar_m_tern" 
                  placeholder="Ingrese el Nombre" >
          </div>
          <div id="contenedorSelect" class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-2">

                </div>
                <div class="col-md-auto">
                    <select id="selectRazasTernerosGua" class="form-select" aria-label="Default select example">

                    </select>
                </div>
                <div class="col col-lg-2">

                </div>
            </div>
        </div>
         <button type="button" id="guardarTernero" class="btn btn-primary">Guardar ter</button>
      <button type="submit" id="btn_cancelar" class="btn btn-danger">Cancelar</button>
      </center>  
    </div>
      <!-- div cierre formulario -->


      <div id="contFormularioEditarTernero">
        <center>
      <form method="post" id="formulario-terneros_edit" class="col-sm-4">
    <h7>Editación registro de terneros <i class="fa fa-file-text-o" style="font-size:20px;"></i><h7> <br> <br>

          <div class="form-group">
          <label class="col control-label" > Ingrese el Codigo</label>
              <input type="text" class="form-control" id="Guardar_m_tern_edit" 
                  placeholder="Ingrese el Nombre" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el Nombre</label>
              <input type="text" class="form-control" id="Guardar_m_tern_edit" 
                  placeholder="Ingrese el Nombre" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el peso</label>
              <input type="text" class="form-control" id="Guardar_m_tern_edit" 
                  placeholder="Ingrese el Nombre" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el nuevo  Nombre</label>
              <input type="text" class="form-control" id="Guardar_m_tern_edit" 
                  placeholder="Ingrese el Nombre" >
          </div>
          <div id="contenedorSelect" class="container">
            <div class="row justify-content-md-center">
                <div class="col col-lg-2">

                </div>
                <div class="col-md-auto">
                    <select id="selectRazasTernerosEdit" class="form-select" aria-label="Default select example">

                    </select>
                </div>
                <div class="col col-lg-2">

                </div>
            </div>
        </div>
         <button type="button" id="btn_edit_Ternero" class="btn btn-primary">Editar</button>
      <button type="submit" id="btn_cancelar" class="btn btn-danger">Cancelar</button>
      </center>  
    </div>
      <!-- cierre formulario editar terneros -->
    






































      
<section class="elementor-section elementor-top-section elementor-element elementor-element-b613d89 elementor-reverse-mobile elementor-section-content-top elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default jet-parallax-section" data-id="b613d89" data-element_type="section" data-settings="{&quot;jet_parallax_layout_list&quot;:[{&quot;jet_parallax_layout_image&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;_id&quot;:&quot;b69f877&quot;,&quot;jet_parallax_layout_image_tablet&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_image_mobile&quot;:{&quot;url&quot;:&quot;&quot;,&quot;id&quot;:&quot;&quot;,&quot;size&quot;:&quot;&quot;},&quot;jet_parallax_layout_speed&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;jet_parallax_layout_type&quot;:&quot;scroll&quot;,&quot;jet_parallax_layout_direction&quot;:null,&quot;jet_parallax_layout_fx_direction&quot;:null,&quot;jet_parallax_layout_z_index&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x&quot;:50,&quot;jet_parallax_layout_bg_y&quot;:50,&quot;jet_parallax_layout_bg_size&quot;:&quot;auto&quot;,&quot;jet_parallax_layout_animation_prop&quot;:&quot;transform&quot;,&quot;jet_parallax_layout_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;],&quot;jet_parallax_layout_bg_x_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_x_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_y_mobile&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_tablet&quot;:&quot;&quot;,&quot;jet_parallax_layout_bg_size_mobile&quot;:&quot;&quot;}],&quot;background_background&quot;:&quot;classic&quot;}"><div class="jet-parallax-section__layout elementor-repeater-item-b69f877 jet-parallax-section__scroll-layout"><div class="jet-parallax-section__image" style="background-position: 50% 50%; background-image: url(&quot;&quot;); transform: translateY(30.7px);"></div></div><div class="elementor-container elementor-column-gap-default"><div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-6b82286" data-id="6b82286" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-8017fb6 elementor-widget elementor-widget-heading" data-id="8017fb6" data-element_type="widget" data-widget_type="heading.default"><div class="elementor-widget-container"><h3 class="elementor-heading-title elementor-size-default">Leche</h3></div></div><div class="elementor-element elementor-element-eb67e8e elementor-nav-menu__align-left elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-widget elementor-widget-nav-menu" data-id="eb67e8e" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;vertical&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;<i class=\&quot;\&quot;><\/i>&quot;,&quot;library&quot;:&quot;&quot;}}" data-widget_type="nav-menu.default"><div class="elementor-widget-container"><nav class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-vertical e--pointer-none"><ul id="menu-1-eb67e8e" class="elementor-nav-menu sm-vertical" data-smartmenus-id="1686606581594282"><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-729"><a href="https://www.suganado.com/raza/venta-de-ganado-asturiana-de-los-valles/" class="elementor-item">Asturiana de los Valles</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-730"><a href="https://www.suganado.com/raza/venta-de-ganado-ayrshire/" class="elementor-item">Ayrshire</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-731"><a href="https://www.suganado.com/raza/venta-de-ganado-bramhol/" class="elementor-item">Bramhol</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-732"><a href="https://www.suganado.com/raza/venta-de-ganado-casanarena/" class="elementor-item">Casanarena</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-733"><a href="https://www.suganado.com/raza/venta-de-ganado-chino-santanderiano/" class="elementor-item">Chino Santanderiano</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1691"><a href="https://www.suganado.com/raza/ganado-lechero/" class="elementor-item">Ganado Lechero</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-734"><a href="https://www.suganado.com/raza/venta-de-ganado-girolando/" class="elementor-item">Girolando</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-735"><a href="https://www.suganado.com/raza/venta-de-ganado-gyr/" class="elementor-item">Gyr</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-736"><a href="https://www.suganado.com/raza/venta-de-ganado-holstein/" class="elementor-item">Holstein</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-737"><a href="https://www.suganado.com/raza/venta-de-ganado-indubrasil/" class="elementor-item">Indubrasil</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-738"><a href="https://www.suganado.com/raza/venta-de-ganado-jersey/" class="elementor-item">Jersey</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-739"><a href="https://www.suganado.com/raza/venta-de-ganado-lucerna/" class="elementor-item">Lucerna</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1257"><a href="https://www.suganado.com/raza/venta-de-ganado-patiano/" class="elementor-item">Patiano</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1256"><a href="https://www.suganado.com/raza/venta-de-ganado-pardo-suizo/" class="elementor-item">Pardo Suizo</a></li></ul></nav><nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true" style="--menu-height: 0;"><ul id="menu-2-eb67e8e" class="elementor-nav-menu sm-vertical" data-smartmenus-id="1686606581594599"><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-729"><a href="https://www.suganado.com/raza/venta-de-ganado-asturiana-de-los-valles/" class="elementor-item" tabindex="-1">Asturiana de los Valles</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-730"><a href="https://www.suganado.com/raza/venta-de-ganado-ayrshire/" class="elementor-item" tabindex="-1">Ayrshire</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-731"><a href="https://www.suganado.com/raza/venta-de-ganado-bramhol/" class="elementor-item" tabindex="-1">Bramhol</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-732"><a href="https://www.suganado.com/raza/venta-de-ganado-casanarena/" class="elementor-item" tabindex="-1">Casanarena</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-733"><a href="https://www.suganado.com/raza/venta-de-ganado-chino-santanderiano/" class="elementor-item" tabindex="-1">Chino Santanderiano</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1691"><a href="https://www.suganado.com/raza/ganado-lechero/" class="elementor-item" tabindex="-1">Ganado Lechero</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-734"><a href="https://www.suganado.com/raza/venta-de-ganado-girolando/" class="elementor-item" tabindex="-1">Girolando</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-735"><a href="https://www.suganado.com/raza/venta-de-ganado-gyr/" class="elementor-item" tabindex="-1">Gyr</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-736"><a href="https://www.suganado.com/raza/venta-de-ganado-holstein/" class="elementor-item" tabindex="-1">Holstein</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-737"><a href="https://www.suganado.com/raza/venta-de-ganado-indubrasil/" class="elementor-item" tabindex="-1">Indubrasil</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-738"><a href="https://www.suganado.com/raza/venta-de-ganado-jersey/" class="elementor-item" tabindex="-1">Jersey</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-739"><a href="https://www.suganado.com/raza/venta-de-ganado-lucerna/" class="elementor-item" tabindex="-1">Lucerna</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1257"><a href="https://www.suganado.com/raza/venta-de-ganado-patiano/" class="elementor-item" tabindex="-1">Patiano</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1256"><a href="https://www.suganado.com/raza/venta-de-ganado-pardo-suizo/" class="elementor-item" tabindex="-1">Pardo Suizo</a></li></ul></nav></div></div></div></div><div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-103de9b" data-id="103de9b" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-731784b elementor-widget elementor-widget-heading" data-id="731784b" data-element_type="widget" data-widget_type="heading.default"><div class="elementor-widget-container"><h3 class="elementor-heading-title elementor-size-default">Carne</h3></div></div><div class="elementor-element elementor-element-2e9426f elementor-nav-menu__align-left elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-widget elementor-widget-nav-menu" data-id="2e9426f" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;vertical&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;<i class=\&quot;\&quot;><\/i>&quot;,&quot;library&quot;:&quot;&quot;}}" data-widget_type="nav-menu.default"><div class="elementor-widget-container"><nav class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-vertical e--pointer-none"><ul id="menu-1-2e9426f" class="elementor-nav-menu sm-vertical" data-smartmenus-id="16866065815940044"><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1258"><a href="https://www.suganado.com/raza/venta-de-ganado-angus/" class="elementor-item">Angus</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1259"><a href="https://www.suganado.com/raza/venta-de-ganado-beefmaster/" class="elementor-item">Beefmaster</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1260"><a href="https://www.suganado.com/raza/venta-de-ganado-bonsmara/" class="elementor-item">Bonsmara</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1261"><a href="https://www.suganado.com/raza/venta-de-ganado-braford/" class="elementor-item">Braford</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1262"><a href="https://www.suganado.com/raza/venta-de-ganado-brahman/" class="elementor-item">Brahman</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1263"><a href="https://www.suganado.com/raza/venta-de-ganado-brangus/" class="elementor-item">Brangus</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1264"><a href="https://www.suganado.com/raza/venta-de-ganado-ccc-costeno-con-cuernos/" class="elementor-item">Costeño Con Cuernos CCC</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1265"><a href="https://www.suganado.com/raza/venta-de-ganado-charolaise-charbray/" class="elementor-item">Charolaise – Charbray</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1266"><a href="https://www.suganado.com/raza/venta-de-ganado-hereford/" class="elementor-item">Hereford</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1267"><a href="https://www.suganado.com/raza/venta-de-ganado-la-blonde-daquitaine/" class="elementor-item">La Blonde d’Aquitaine</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1268"><a href="https://www.suganado.com/raza/venta-de-ganado-limbra/" class="elementor-item">Limbra</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1269"><a href="https://www.suganado.com/raza/venta-de-ganado-limousin/" class="elementor-item">Limousin</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1271"><a href="https://www.suganado.com/raza/venta-de-ganado-nelore/" class="elementor-item">Nelore</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1272"><a href="https://www.suganado.com/raza/venta-de-ganado-romagnola/" class="elementor-item">Romagnola</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1273"><a href="https://www.suganado.com/raza/venta-de-ganado-romosinuano/" class="elementor-item">Romosinuano</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1274"><a href="https://www.suganado.com/raza/venta-de-ganado-santa-gertrudis/" class="elementor-item">Santa Gertrudis</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1270"><a href="https://www.suganado.com/raza/venta-de-ganado-senepol/" class="elementor-item">Senepol</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1275"><a href="https://www.suganado.com/raza/venta-de-ganado-sm-san-martinero/" class="elementor-item">SM San Martinero</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1276"><a href="https://www.suganado.com/raza/venta-de-ganado-velasquez/" class="elementor-item">Velasquez</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1277"><a href="https://www.suganado.com/raza/venta-de-ganado-wagyu/" class="elementor-item">Wagyu</a></li></ul></nav><nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true" style="--menu-height: 0;"><ul id="menu-2-2e9426f" class="elementor-nav-menu sm-vertical" data-smartmenus-id="16866065815952612"><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1258"><a href="https://www.suganado.com/raza/venta-de-ganado-angus/" class="elementor-item" tabindex="-1">Angus</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1259"><a href="https://www.suganado.com/raza/venta-de-ganado-beefmaster/" class="elementor-item" tabindex="-1">Beefmaster</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1260"><a href="https://www.suganado.com/raza/venta-de-ganado-bonsmara/" class="elementor-item" tabindex="-1">Bonsmara</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1261"><a href="https://www.suganado.com/raza/venta-de-ganado-braford/" class="elementor-item" tabindex="-1">Braford</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1262"><a href="https://www.suganado.com/raza/venta-de-ganado-brahman/" class="elementor-item" tabindex="-1">Brahman</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1263"><a href="https://www.suganado.com/raza/venta-de-ganado-brangus/" class="elementor-item" tabindex="-1">Brangus</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1264"><a href="https://www.suganado.com/raza/venta-de-ganado-ccc-costeno-con-cuernos/" class="elementor-item" tabindex="-1">Costeño Con Cuernos CCC</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1265"><a href="https://www.suganado.com/raza/venta-de-ganado-charolaise-charbray/" class="elementor-item" tabindex="-1">Charolaise – Charbray</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1266"><a href="https://www.suganado.com/raza/venta-de-ganado-hereford/" class="elementor-item" tabindex="-1">Hereford</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1267"><a href="https://www.suganado.com/raza/venta-de-ganado-la-blonde-daquitaine/" class="elementor-item" tabindex="-1">La Blonde d’Aquitaine</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1268"><a href="https://www.suganado.com/raza/venta-de-ganado-limbra/" class="elementor-item" tabindex="-1">Limbra</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1269"><a href="https://www.suganado.com/raza/venta-de-ganado-limousin/" class="elementor-item" tabindex="-1">Limousin</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1271"><a href="https://www.suganado.com/raza/venta-de-ganado-nelore/" class="elementor-item" tabindex="-1">Nelore</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1272"><a href="https://www.suganado.com/raza/venta-de-ganado-romagnola/" class="elementor-item" tabindex="-1">Romagnola</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1273"><a href="https://www.suganado.com/raza/venta-de-ganado-romosinuano/" class="elementor-item" tabindex="-1">Romosinuano</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1274"><a href="https://www.suganado.com/raza/venta-de-ganado-santa-gertrudis/" class="elementor-item" tabindex="-1">Santa Gertrudis</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1270"><a href="https://www.suganado.com/raza/venta-de-ganado-senepol/" class="elementor-item" tabindex="-1">Senepol</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1275"><a href="https://www.suganado.com/raza/venta-de-ganado-sm-san-martinero/" class="elementor-item" tabindex="-1">SM San Martinero</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1276"><a href="https://www.suganado.com/raza/venta-de-ganado-velasquez/" class="elementor-item" tabindex="-1">Velasquez</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1277"><a href="https://www.suganado.com/raza/venta-de-ganado-wagyu/" class="elementor-item" tabindex="-1">Wagyu</a></li></ul></nav></div></div></div></div><div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-1a62757" data-id="1a62757" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-7da2198 elementor-widget elementor-widget-heading" data-id="7da2198" data-element_type="widget" data-widget_type="heading.default"><div class="elementor-widget-container"><h3 class="elementor-heading-title elementor-size-default">Doble propósito</h3></div></div><div class="elementor-element elementor-element-2b835f4 elementor-nav-menu__align-left elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-widget elementor-widget-nav-menu" data-id="2b835f4" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;vertical&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;<i class=\&quot;\&quot;><\/i>&quot;,&quot;library&quot;:&quot;&quot;}}" data-widget_type="nav-menu.default"><div class="elementor-widget-container"><nav class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-vertical e--pointer-none"><ul id="menu-1-2b835f4" class="elementor-nav-menu sm-vertical" data-smartmenus-id="168660658159507"><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1278"><a href="https://www.suganado.com/raza/venta-de-ganado-bon-blanco-orejinegro/" class="elementor-item">BON Blanco OrejiNegro</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1279"><a href="https://www.suganado.com/raza/venta-de-ganado-bramhol-doble-proposito/" class="elementor-item">Bramhol</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1280"><a href="https://www.suganado.com/raza/venta-de-ganado-braunvieh/" class="elementor-item">Braunvieh</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1281"><a href="https://www.suganado.com/raza/venta-de-ganado-bufalos/" class="elementor-item">Bufalos</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1282"><a href="https://www.suganado.com/raza/venta-de-ganado-caqueteno/" class="elementor-item">Caqueteño</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1285"><a href="https://www.suganado.com/raza/venta-de-ganado-guzolando/" class="elementor-item">Guzolando</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1286"><a href="https://www.suganado.com/raza/venta-de-ganado-guzerat/" class="elementor-item">Guzerat</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1283"><a href="https://www.suganado.com/raza/venta-de-ganado-hdv-harton-del-valle/" class="elementor-item">HDV Harton Del Valle</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1284"><a href="https://www.suganado.com/raza/venta-de-ganado-montbeliarde/" class="elementor-item">Montbéliarde</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1290"><a href="https://www.suganado.com/raza/venta-de-ganado-normando/" class="elementor-item">Normando</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1287"><a href="https://www.suganado.com/raza/venta-de-ganado-red-poll/" class="elementor-item">Red-Poll</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1288"><a href="https://www.suganado.com/raza/venta-de-ganado-simbrah/" class="elementor-item">Simbrah</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1289"><a href="https://www.suganado.com/raza/venta-de-ganado-simmental/" class="elementor-item">Simmental</a></li></ul></nav><nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true" style="--menu-height: 0;"><ul id="menu-2-2b835f4" class="elementor-nav-menu sm-vertical" data-smartmenus-id="16866065815956416"><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1278"><a href="https://www.suganado.com/raza/venta-de-ganado-bon-blanco-orejinegro/" class="elementor-item" tabindex="-1">BON Blanco OrejiNegro</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1279"><a href="https://www.suganado.com/raza/venta-de-ganado-bramhol-doble-proposito/" class="elementor-item" tabindex="-1">Bramhol</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1280"><a href="https://www.suganado.com/raza/venta-de-ganado-braunvieh/" class="elementor-item" tabindex="-1">Braunvieh</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1281"><a href="https://www.suganado.com/raza/venta-de-ganado-bufalos/" class="elementor-item" tabindex="-1">Bufalos</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1282"><a href="https://www.suganado.com/raza/venta-de-ganado-caqueteno/" class="elementor-item" tabindex="-1">Caqueteño</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1285"><a href="https://www.suganado.com/raza/venta-de-ganado-guzolando/" class="elementor-item" tabindex="-1">Guzolando</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1286"><a href="https://www.suganado.com/raza/venta-de-ganado-guzerat/" class="elementor-item" tabindex="-1">Guzerat</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1283"><a href="https://www.suganado.com/raza/venta-de-ganado-hdv-harton-del-valle/" class="elementor-item" tabindex="-1">HDV Harton Del Valle</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1284"><a href="https://www.suganado.com/raza/venta-de-ganado-montbeliarde/" class="elementor-item" tabindex="-1">Montbéliarde</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1290"><a href="https://www.suganado.com/raza/venta-de-ganado-normando/" class="elementor-item" tabindex="-1">Normando</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1287"><a href="https://www.suganado.com/raza/venta-de-ganado-red-poll/" class="elementor-item" tabindex="-1">Red-Poll</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1288"><a href="https://www.suganado.com/raza/venta-de-ganado-simbrah/" class="elementor-item" tabindex="-1">Simbrah</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1289"><a href="https://www.suganado.com/raza/venta-de-ganado-simmental/" class="elementor-item" tabindex="-1">Simmental</a></li></ul></nav></div></div></div></div><div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-6fa8e09" data-id="6fa8e09" data-element_type="column"><div class="elementor-widget-wrap elementor-element-populated"><div class="elementor-element elementor-element-ca6e0d1 elementor-widget elementor-widget-heading" data-id="ca6e0d1" data-element_type="widget" data-widget_type="heading.default"><div class="elementor-widget-container"><h3 class="elementor-heading-title elementor-size-default">Caballos</h3></div></div><div class="elementor-element elementor-element-16cdde5 elementor-nav-menu__align-left elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-widget elementor-widget-nav-menu" data-id="16cdde5" data-element_type="widget" data-settings="{&quot;layout&quot;:&quot;vertical&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;<i class=\&quot;\&quot;><\/i>&quot;,&quot;library&quot;:&quot;&quot;}}" data-widget_type="nav-menu.default"><div class="elementor-widget-container"><nav class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-vertical e--pointer-none"><ul id="menu-1-16cdde5" class="elementor-nav-menu sm-vertical" data-smartmenus-id="168660658159579"><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1291"><a href="https://www.suganado.com/raza/venta-de-caballos-andaluz/" class="elementor-item">Andaluz</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1292"><a href="https://www.suganado.com/raza/venta-de-caballos-appaloosa/" class="elementor-item">Appaloosa</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1313"><a href="https://www.suganado.com/raza/venta-de-caballos-arabe/" class="elementor-item">Arabe</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1293"><a href="https://www.suganado.com/raza/venta-de-caballos-belga/" class="elementor-item">Belga</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1294"><a href="https://www.suganado.com/raza/venta-de-caballos-belga-brabancon/" class="elementor-item">Belga – Brabancon</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1295"><a href="https://www.suganado.com/raza/venta-de-caballos-burro/" class="elementor-item">Burro</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1296"><a href="https://www.suganado.com/raza/venta-de-caballos-caballo-pinto/" class="elementor-item">Caballo Pinto</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1298"><a href="https://www.suganado.com/raza/venta-de-caballos-cuarto-de-milla/" class="elementor-item">Cuarto de Milla</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1297"><a href="https://www.suganado.com/raza/venta-de-caballos-clydesdale/" class="elementor-item">Clydesdale</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1299"><a href="https://www.suganado.com/raza/venta-de-caballos-freiberger/" class="elementor-item">Freiberger</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1300"><a href="https://www.suganado.com/raza/venta-de-caballos-frison/" class="elementor-item">Frisón</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1301"><a href="https://www.suganado.com/raza/venta-de-caballos-gipsy-vanner/" class="elementor-item">Gipsy Vanner</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1302"><a href="https://www.suganado.com/raza/venta-de-caballos-lusitano/" class="elementor-item">Lusitano</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1303"><a href="https://www.suganado.com/raza/venta-de-caballos-luso-hispano/" class="elementor-item">Luso – Hispano</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1304"><a href="https://www.suganado.com/raza/venta-de-caballos-mulas/" class="elementor-item">Mulas</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1305"><a href="https://www.suganado.com/raza/venta-de-caballos-paso-fino/" class="elementor-item">Paso Fino</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1306"><a href="https://www.suganado.com/raza/venta-de-caballos-percheron/" class="elementor-item">Percheron</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1307"><a href="https://www.suganado.com/raza/venta-de-caballos-polo/" class="elementor-item">Polo</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1308"><a href="https://www.suganado.com/raza/venta-de-caballos-ponis/" class="elementor-item">Ponis</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1309"><a href="https://www.suganado.com/raza/venta-de-caballos-pura-raza-espanola/" class="elementor-item">Pura Raza Española</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1310"><a href="https://www.suganado.com/raza/venta-de-caballos-salto/" class="elementor-item">Salto</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1311"><a href="https://www.suganado.com/raza/venta-de-caballos-trocha-galope/" class="elementor-item">Trocha &amp; Galope</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1312"><a href="https://www.suganado.com/raza/venta-de-caballos-trote-galope/" class="elementor-item">Trote &amp; Galope</a></li></ul></nav><nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true" style="--menu-height: 0;"><ul id="menu-2-16cdde5" class="elementor-nav-menu sm-vertical" data-smartmenus-id="16866065815951978"><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1291"><a href="https://www.suganado.com/raza/venta-de-caballos-andaluz/" class="elementor-item" tabindex="-1">Andaluz</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1292"><a href="https://www.suganado.com/raza/venta-de-caballos-appaloosa/" class="elementor-item" tabindex="-1">Appaloosa</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1313"><a href="https://www.suganado.com/raza/venta-de-caballos-arabe/" class="elementor-item" tabindex="-1">Arabe</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1293"><a href="https://www.suganado.com/raza/venta-de-caballos-belga/" class="elementor-item" tabindex="-1">Belga</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1294"><a href="https://www.suganado.com/raza/venta-de-caballos-belga-brabancon/" class="elementor-item" tabindex="-1">Belga – Brabancon</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1295"><a href="https://www.suganado.com/raza/venta-de-caballos-burro/" class="elementor-item" tabindex="-1">Burro</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1296"><a href="https://www.suganado.com/raza/venta-de-caballos-caballo-pinto/" class="elementor-item" tabindex="-1">Caballo Pinto</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1298"><a href="https://www.suganado.com/raza/venta-de-caballos-cuarto-de-milla/" class="elementor-item" tabindex="-1">Cuarto de Milla</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1297"><a href="https://www.suganado.com/raza/venta-de-caballos-clydesdale/" class="elementor-item" tabindex="-1">Clydesdale</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1299"><a href="https://www.suganado.com/raza/venta-de-caballos-freiberger/" class="elementor-item" tabindex="-1">Freiberger</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1300"><a href="https://www.suganado.com/raza/venta-de-caballos-frison/" class="elementor-item" tabindex="-1">Frisón</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1301"><a href="https://www.suganado.com/raza/venta-de-caballos-gipsy-vanner/" class="elementor-item" tabindex="-1">Gipsy Vanner</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1302"><a href="https://www.suganado.com/raza/venta-de-caballos-lusitano/" class="elementor-item" tabindex="-1">Lusitano</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1303"><a href="https://www.suganado.com/raza/venta-de-caballos-luso-hispano/" class="elementor-item" tabindex="-1">Luso – Hispano</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1304"><a href="https://www.suganado.com/raza/venta-de-caballos-mulas/" class="elementor-item" tabindex="-1">Mulas</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1305"><a href="https://www.suganado.com/raza/venta-de-caballos-paso-fino/" class="elementor-item" tabindex="-1">Paso Fino</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1306"><a href="https://www.suganado.com/raza/venta-de-caballos-percheron/" class="elementor-item" tabindex="-1">Percheron</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1307"><a href="https://www.suganado.com/raza/venta-de-caballos-polo/" class="elementor-item" tabindex="-1">Polo</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1308"><a href="https://www.suganado.com/raza/venta-de-caballos-ponis/" class="elementor-item" tabindex="-1">Ponis</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1309"><a href="https://www.suganado.com/raza/venta-de-caballos-pura-raza-espanola/" class="elementor-item" tabindex="-1">Pura Raza Española</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1310"><a href="https://www.suganado.com/raza/venta-de-caballos-salto/" class="elementor-item" tabindex="-1">Salto</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1311"><a href="https://www.suganado.com/raza/venta-de-caballos-trocha-galope/" class="elementor-item" tabindex="-1">Trocha &amp; Galope</a></li><li class="menu-item menu-item-type-taxonomy menu-item-object-raza menu-item-1312"><a href="https://www.suganado.com/raza/venta-de-caballos-trote-galope/" class="elementor-item" tabindex="-1">Trote &amp; Galope</a></li></ul></nav></div></div></div></div></div></section>
</body>

</html>