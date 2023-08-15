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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/6298bea347.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
<!-- ultimo  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://kit.fontawesome.com/6298bea347.js" crossorigin="anonymous"></script>
<link href="citas.css" rel="stylesheet" />
<script src="citas.js"></script>

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
          <a class="nav-link" href="..\seccionOperacion\Operaciones.php">Sección Operaciones <img rel="shortcut icon" src="../imagenes_insertar\dinero.png"  style='height:27px; width:27px'></a>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link" href="editsalas\salas.php">Sección 2<i class='far fa-id-card' style='font-size:19px'></i></a> -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="citas.php">citas Pendientes <img rel="shortcut icon" src="../imagenes_insertar\calendario.png"  style='height:24px; width:24px'></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="..\seccionContactos\Contactos.php">Listado de contactos  <img rel="shortcut icon" src="../imagenes_insertar\telefono.png"  style='height:26px; width:26px'></a>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link" href="editsalas\salas.php">citas de veterinarios</a> -->
        </li>
      </ul>
      </form>
    </div>
  </div>
</nav>
<br>

<br>
<a href="../index.php"><button type="button" class="btn btn-primary">Regresar</button></a> <br><br>

 <!-- <table id="calendar">
    <thead>
    
  </thead>
<tbody> </tbody>
  </table> 
  
<div class="container mt-3">
  <table class="table table-dark table-striped">
    <thead>
      <center>
    <th>

      <div class="calendar">
    <div class="calendar__info">
        <div class="calendar__prev" id="prev-month">&#9664;</div>
        <div class="calendar__month" id="month">MES JUNIO</div>
        <div class="calendar__year" id="year"></div>
        <div class="calendar__next" id="next-month">&#9654;</div>
    </div>
    </th>
  </center>
      


    
      <caption></caption>
    <tr>
  
       <th>
                 Lunes
       </th>
       <th>
                 Martes
       </th>
       <th>
                 Miercoles
       </th>
       <th>
                 Jueves
       </th>
       <th>
                 Viernes
       </th>
       <th>
                 Sabado
       </th>
       <th>
        Domingo
      </th>
   </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>

      </tr>
      <tr>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td>9</td>
        <td>10</td>
        <td>11</td>
      </tr>
      <tr>
        <td>12</td>
        <td>13</td>
        <td>14</td>
        <td>15</td>
        <td>16</td>
        <td>17</td>
        <td>18</td>
        
      </tr>
      <tr>
        <td>19</td>
        <td>20</td>
        <td>21</td>
        <td>22</td>
        <td>23</td>
        <td>24</td>
        <td>25</td>
      </tr>
      <tr>
        <td>26</td>
        <td>27</td>
        <td>28</td>
        <td>29</td>
        <td>30</td>
      </tr>
    </tbody>
  </table>
</div> --> 
<div class="wrapper">
      <img src="../imagenes_insertar/americano.png" alt="clock">
      <h1>00:00:00 PM</h1>
      <div class="content">
        <div class="column">
          <select>
            <option value="Hour" selected disabled hidden>Hour</option>
          </select>
        </div>
        <div class="column">
          <select>
            <option value="Minute" selected disabled hidden>Minute</option>
          </select>
        </div>
        <div class="column">
          <select>
            <option value="AM/PM" selected disabled hidden>AM/PM</option>
          </select>
        </div>
      </div>
      <button>Set Alarm</button>

</body>

</html>