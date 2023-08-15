
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
    <link rel="stylesheet" href="../estilos.css">

    <script src='admin.js'></script>
    <title>Software Ganadero</title>
</head>

<body>

<!-- toca hacer un contenedor para cada table y para cada elemento casi de la pagina para poder ocultar y mostrar commo se debe -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="javascript:void(0)">Logo</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="Operaciones.php">Sección Operaciones <img rel="shortcut icon" src="..\imagenes_insertar\dinero.png"  style='height:27px; width:27px'></a>
        </li>
        <li class="nav-item">
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../calendario\index.php">citas Pendientes <img rel="shortcut icon" src="..\imagenes_insertar\calendario.png"  style='height:24px; width:24px'></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="..\seccionContactos\Contactos.php">Listado de contactos  <img rel="shortcut icon" src="..\imagenes_insertar\telefono.png"  style='height:26px; width:26px'></a>
        </li>
        <li class="nav-item">
        </li>
      </ul>
      </form>
    </div>
  </div>
</nav>
<br>
<a href="../index.php"><button type="button" class="btn btn-primary">Regresar</button></a>
<br>
<!-- seleccion de los 3 botones -->
<center>
<div id="seleccionbotones">
<h5>Sección contabilidad  <img rel="shortcut icon" src="..\imagenes_insertar\contable.png"  style='height:40px; width:40px'></h5>
<button id="Sección_gastos" type="button" class="btn btn-primary"> Sección Gastos y egresos </button>  <img rel="shortcut icon" src="..\imagenes_insertar\gastos2.png"  style='height:38px; width:38px'>
<button id="Sección_Inventario" type="button" class="btn btn-primary"> Sección Inventario </button>  <img rel="shortcut icon" src="..\imagenes_insertar\lista.png"  style='height:38px; width:38px'>
<!-- <button id="Sección_Falta" type="button" class="btn btn-primary">Sección Falta </button><img rel="shortcut icon" src="..\imagenes_insertar\terneros.jpg"  style='height:60px; width:60px'> -->
</div>
</center>



<!-- seccion 1 gastos y ingresos -->
<div id="contenedorGastosyI">
<center>
<h5>Sección Gastos y Ingresos <img rel="shortcut icon" src="..\imagenes_insertar\contable.png"  style='height:40px; width:40px'></h5>
<button id="AñadirGasto" type="button" class="btn btn-primary">Insertar gasto </button>     <img rel="shortcut icon" src="..\imagenes_insertar\gastos2.png"  style='height:30px; width:30px'>
<button id="AñadirIngreso" type="button" class="btn btn-primary">Insertar ingreso </button>     <img rel="shortcut icon" src="..\imagenes_insertar\ingresos.png"  style='height:30px; width:30px'>


<!-- seccion gastos -->

<div id="contenedor_Tabla_gastos">

  <center>
<br>
<button id="AddGasto" type="button" class="btn btn-primary">Añadir gasto </button>  <img rel="shortcut icon" src="..\imagenes_insertar\gastos2.png"  style='height:20px; width:20px'>
<!-- tabla -->
<div class="col-sm-12" id="container_tablaGastos">
        <div class="col-sm-8">
            <table id="tablaGastos" class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Nombre gasto</th>
                    <th scope="col">Nombre persona realizo gasto</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">valor</th>
                    <th id="acc">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody >
            </table>
        </div>
    </div>
<br>
</center>
</div>
      <!-- ultimo div de seccion ingreso gastos -->
<!-- formulario -->
<div id="contenedorFormularioGastos">
<center>
<form method="post" id="form_gastos" class="col-sm-4">
    <h7>formulario ingreso de Gastos <i class="fa fa-file-text-o" style="font-size:20px;"></i><h7> <br> <br>
          
          <div class="form-group">
          <label class="col control-label" > Ingrese el nombre del gasto</label>
              <input type="text" class="form-control" id="Guardar_nom_gast" 
                  placeholder="Ingrese el nombre del gasto" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el nombre de persona que realiza el gasto</label>
              <input type="text" class="form-control" id="Guardar_pers_gast" 
                  placeholder="Ingrese el nombre del gasto" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese la fecha del gasto</label>
              <input type="text" class="form-control" id="Guardar_fecha_gasto" 
                  placeholder="Ingrese la fecha del gasto" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el valor del gasto</label>
              <input type="number" class="form-control" id="Guardar_valor_gasto" 
                  placeholder="Ingrese el valor del gasto" >
          </div>
                  <button type="button" id="guardarGasto" class="btn btn-primary">Guardar</button>
      <button type="submit" id="btn_cancelar" class="btn btn-danger">Cancelar</button>
      </center>
      </div> 
      <!-- div del formulario gastos -->

<!-- formulario editar gastos -->
<div id="contenedorFormularioEditGastos">
<center>
<form method="post" id="form_gastos" class="col-sm-4">
    <h7>formulario editar Gastos <i class="fa fa-file-text-o" style="font-size:20px;"></i><h7> <br> <br>
          
          <div class="form-group">
          <label class="col control-label" > Ingrese el nuevo nombre del gasto</label>
              <input type="text" class="form-control" id="Guardar_editnom_gast" 
                  placeholder="Ingrese el nuevo nombre del gasto" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el nuevo nombre de persona que realiza el gasto</label>
              <input type="text" class="form-control" id="Guardar_editpers_gast" 
                  placeholder="Ingrese el nuevo nombre de persona que realiza el gasto" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese la nueva fecha del gasto</label>
              <input type="text" class="form-control" id="Guardar_editfecha_gasto" 
                  placeholder="Ingrese la nueva fecha del gasto" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el nuevo valor del gasto</label>
              <input type="number" class="form-control" id="Guardar_editvalor_gasto" 
                  placeholder="Ingrese el nuevo valor del gasto" >
          </div>
                  <button type="button" id="guardarGastoEdit" class="btn btn-primary">Guardar</button>
      <button type="submit" id="btn_cancelar" class="btn btn-danger">Cancelar</button>
      </center>
      </div>
      <!-- div de formulario editar gastos -->

<!-- finaliza seccion gastos -->

 


















<!-- 2da parte seccion ingresos  -->
<div id="contenedor_tabla_Ingresos">
        <center>
        <br>
      <button id="AddIngreso" type="button" class="btn btn-primary"> Añadir Ingreso</button>  <img rel="shortcut icon" src="..\imagenes_insertar\ingresos.png"  style='height:20px; width:20px'>
<br><br>
<!-- tabla -->
<div class="col-sm-12" id="container_tablaIngresos">
        <div class="col-sm-8">
            <table id="tablaIngresos" class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Nombre Ingreso</th>
                    <th scope="col">Nombre persona recibio Ingreso</th>
                    <th scope="col">Fecha del ingreso</th>
                    <th scope="col">valor del ingreso</th>
                    <th id="acc">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody id="">
            </table>
        </div>
    </div>
<br>
</center>
</div>
      <!-- ultimo div tabla ingreso de ingresos -->
<!-- formulario -->
<div id="contenedorFormularioIngresos">
<center>
<form method="post" id="form_Ingresos" class="col-sm-4">
    <h7>formulario Ingresos <i class="fa fa-file-text-o" style="font-size:20px;"></i><h7> <br> <br>
          
          <div class="form-group">
          <label class="col control-label" > Ingrese el nombre del ingreso</label>
              <input type="text" class="form-control" id="Guardar_nom_ingreso" 
                  placeholder="Ingrese el nombre del ingreso" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el nombre de persona el ingreso</label>
              <input type="text" class="form-control" id="Guardar_pers_ingreso" 
                  placeholder="Ingrese el nombre del ingreso" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese la fecha del ingreso</label>
              <input type="text" class="form-control" id="Guardar_fecha_ingreso" 
                  placeholder="Ingrese la fecha del ingreso" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el valor del ingreso</label>
              <input type="number" class="form-control" id="Guardar_valor_ingreso" 
                  placeholder="Ingrese el valor del ingreso" >
          </div>
                  <button type="button" id="guardarIngresos" class="btn btn-primary">Guardar</button>
      <button type="submit" id="btn_cancelar" class="btn btn-danger">Cancelar</button>
</center>
      </div>


      <!-- formulario editar ingresos -->
      <div id="contenedorFormularioEditIngresos">
        <center>
<form method="post" id="form_Ingresos_edit" class="col-sm-4">
    <h7>formulario editar_Ingresos <i class="fa fa-file-text-o" style="font-size:20px;"></i><h7> <br> <br>
          
          <div class="form-group">
          <label class="col control-label" > Ingrese el nuevo nombre del ingreso</label>
              <input type="text" class="form-control" id="Guardar_nomEdit_ingreso" 
                  placeholder="Ingrese el nuevo nombre del ingreso" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el nuevo nombre de persona el ingreso</label>
              <input type="text" class="form-control" id="Guardar_persEdit_ingreso" 
                  placeholder="Ingrese el nuevo nombre de persona el ingreso" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese la nueva fecha del ingreso</label>
              <input type="text" class="form-control" id="Guardar_fechaEdit_ingreso" 
                  placeholder="Ingrese la nueva fecha del ingreso" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el nuevo valor del ingreso</label>
              <input type="number" class="form-control" id="Guardar_valorEdit_ingreso" 
                  placeholder="Ingrese el nuevo valor del ingreso" >
          </div>
                  <button type="button" id="guardarIngresoEdit" class="btn btn-primary">Guardar</button>
      <button type="submit" id="btn_cancelar" class="btn btn-danger">Cancelar</button>
      </center>  
    </div>
      
      
</div>
<!-- div de la seccion en si de gastos e ingresos contiene ambos -->















<!-- div 2da seccion inventario -->
<div id="seccionTablaInventario">
  <center>
<h5>Sección Inventario<img rel="shortcut icon" src="..\imagenes_insertar\contable.png"  style='height:40px; width:40px'></h5> <br>
<button id="AñadirProductInventario" type="button" class="btn btn-primary">Añadir al inventario</button>    <img rel="shortcut icon" src="..\imagenes_insertar\bienes.png"  style='height:30px; width:30px'><br><br>
<div class="col-sm-12" id="container_tablaGastos">
  
        <div class="col-sm-8">
            <table id="tablaInventario" class="table">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre </th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">valor</th>
                    <!-- <th scope="col">valor+1</th> -->
                    <th id="acc">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                </tbody id="">
            </table>
        </div>
    </div>
    </center>
    </div>
<!-- div  cierre seccion de inventario -->

<!-- formulario -->
<div id="contFormularioIngresos">
<center>
<form method="post" id="form_Ingresos" class="col-sm-4">
    <h7>formulario inventario <i class="fa fa-file-text-o" style="font-size:20px;"></i><h7> <br> <br>
          
          <div class="form-group">
          <label class="col control-label" > Ingrese el codigo del producto</label>
              <input type="text" class="form-control" id="Guardar_codProductInven" 
                  placeholder="Ingrese el nombre del ingreso" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el nombre del producto</label>
              <input type="text" class="form-control" id="Guardar_nomProductInven" 
                  placeholder="Ingrese el nombre del ingreso" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese la cantidad del producto</label>
              <input type="int" class="form-control" id="Guardar_canProductInven" 
                  placeholder="Ingrese la fecha del ingreso" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el valor del producto</label>
              <input type="int" class="form-control" id="Guardar_valProductInven" 
                  placeholder="Ingrese el valor del ingreso" >
          </div>
                  <button type="button" id="guardarProductoInv" class="btn btn-primary">Guardar</button>
      <button type="submit" id="btn_cancelar" class="btn btn-danger">Cancelar</button>
      </center>   
    </div>

      <!-- formulario -->
<div id="contFormularioIngresosEdit">
<center>
<form method="post" id="form_Ingresos" class="col-sm-4">
    <h7>formulario editar inventario <i class="fa fa-file-text-o" style="font-size:20px;"></i><h7> <br> <br>
          
          <div class="form-group">
          <label class="col control-label" > Ingrese el nuevo codigo del producto</label>
              <input type="text" class="form-control" id="Guardar_codProductInvenEdit" 
                  placeholder="Ingrese el nuevo nombre del ingreso" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el nuevo nombre del producto</label>
              <input type="text" class="form-control" id="Guardar_nomProductInvenEdit" 
                  placeholder="Ingrese el nombre del ingreso" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese la nueva cantidad del producto</label>
              <input type="text" class="form-control" id="Guardar_canProductInvenEdit" 
                  placeholder="Ingrese la nueva fecha del ingreso" >
          </div>
          <div class="form-group">
          <label class="col control-label" > Ingrese el nuevo valor del producto</label>
              <input type="number" class="form-control" id="Guardar_valProductInvenEdit" 
                  placeholder="Ingrese el nuevo valor del ingreso" >
          </div>
                  <button type="button" id="guardarProductoInvEdit" class="btn btn-primary">Guardar</button>
      <button type="submit" id="btn_cancelar" class="btn btn-danger">Cancelar</button>
      </center> 
    </div>



</body>

</html>