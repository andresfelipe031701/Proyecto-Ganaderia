<?php
include_once "ventasmdl.php";

class ctrProducto
{
 
// seccion gastos
    public function ctrGuardarAnuncio()
    {
        $objRespuesta = mdlAnuncios::mdlGuardarAnuncio($this->Guardar_titulo, $this->Guardar_raza, $this->Guardar_departamento, $this->Guardar_municipio,$this->Guardar_tipoVenta,$this->Guardar_nombreEjem,$this->Guardar_EdadEjem,$this->Guardar_PesoEjem,$this->Guardar_NombreCriadero,$this->Guardar_NombreHacienda,$this->Guardar_Descripcion,$this->Guardar_Contacto,$this->img_anuncio);
        echo json_encode($objRespuesta);
    }
  
    public function ctrListarAnuncios()
    {
        $objRespuesta = mdlAnuncios::mdlListarAnuncios();
        echo json_encode($objRespuesta);

    }
    // public function ctrBorrarGastos()
    // {
    //     $objRespuesta = mdlOperaciones::mdlEliminarGasto($this->Id_gasto);
    //     echo json_encode($objRespuesta);
    // }
    // public function ctrEditarGastos()
    // {
    //     $objRespuesta = mdlOperaciones::mdlEditarGastos($this->Id_gasto, $this->Guardar_editnom_gast,$this->Guardar_editpers_gast, $this->Guardar_editfecha_gasto, $this->Guardar_editvalor_gasto);
    //     echo json_encode($objRespuesta);
    // }
    

// seccion ingresos
    // public function ctrGuardarIngreso()
    // {
    //     $objRespuesta = mdlOperaciones::mdlGuardarIngreso($this->Guardar_nom_ingreso, $this->Guardar_pers_ingreso, $this->Guardar_fecha_ingreso,$this->Guardar_valor_ingreso);
    //     echo json_encode($objRespuesta);
    // }
  
    // public function ctrListarIngresos()
    // {
    //     $objRespuesta = mdlOperaciones::mdlListarIngresos();
    //     echo json_encode($objRespuesta);
    // }
    // public function ctrEditarIngresos()
    // {
    //     $objRespuesta = mdlOperaciones::mdlEditarIngresos($this->id_ingreso, $this->Guardar_nomEdit_ingreso,$this->Guardar_persEdit_ingreso, $this->Guardar_fechaEdit_ingreso, $this->Guardar_valorEdit_ingreso);
    //     echo json_encode($objRespuesta);
    // }
    // public function ctrEliminarIngreso()
    // {
    //     $objRespuesta = mdlOperaciones::mdlEliminarIngreso($this->id_ingreso);
    //     echo json_encode($objRespuesta);
    // }
  

    // public function ctrListarAnuncios()
    // {
    //     $objRespuesta = mdlAnuncios::mdlListarAnuncios();
    //     echo json_encode($objRespuesta);

    // }
    // public function ctrGuardarInventario()
    // {
    //     $objRespuesta = mdlOperaciones::mdlGuardarInventario($this->Codigo_final, $this->Nombre_product, $this->Cantidad_product,$this->Valor_product);
    //     echo json_encode($objRespuesta);
    // }
    // public function ctrEditarInventarios()
    // {
    //     $objRespuesta = mdlOperaciones::mdlEditarInventarios($this->Codigo_product,$this->Guardar_codProductInvenEdit,$this->Guardar_nomProductInvenEdit,$this->Guardar_canProductInvenEdit,$this->Guardar_valProductInvenEdit);
    //     echo json_encode($objRespuesta);
    // }
    
    
    // public function ctrBorrarInventario()
    // {
    //     $objRespuesta = mdlOperaciones::mdlEliminarInventario($this->Codigo_product);
    //     echo json_encode($objRespuesta);
    // }
}

// Guardar anuncio
if (isset($_POST["Guardar_titulo"],$_POST["Guardar_raza"],$_POST["Guardar_departamento"],$_POST["Guardar_municipio"],$_POST["Guardar_tipoVenta"],$_POST["Guardar_nombreEjem"],$_POST["Guardar_EdadEjem"],$_POST["Guardar_PesoEjem"],$_POST["Guardar_NombreCriadero"],$_POST["Guardar_NombreHacienda"],$_POST["Guardar_Descripcion"],$_POST["Guardar_Contacto"], $_FILES["img_anuncio"])) {
    $objUsuario = new ctrProducto();
    $objUsuario->Guardar_titulo = $_POST["Guardar_titulo"];
    $objUsuario->Guardar_raza = $_POST["Guardar_raza"];
    $objUsuario->Guardar_departamento = $_POST["Guardar_departamento"];
    $objUsuario->Guardar_municipio = $_POST["Guardar_municipio"];
    $objUsuario->Guardar_tipoVenta = $_POST["Guardar_tipoVenta"];
    $objUsuario->Guardar_nombreEjem = $_POST["Guardar_nombreEjem"];
    $objUsuario->Guardar_EdadEjem = $_POST["Guardar_EdadEjem"];
    $objUsuario->Guardar_PesoEjem = $_POST["Guardar_PesoEjem"];
    $objUsuario->Guardar_NombreCriadero = $_POST["Guardar_NombreCriadero"];   
     $objUsuario->Guardar_NombreHacienda = $_POST["Guardar_NombreHacienda"];
    $objUsuario->Guardar_Descripcion = $_POST["Guardar_Descripcion"];
    $objUsuario->Guardar_Contacto = $_POST["Guardar_Contacto"];
    $objUsuario->img_anuncio = file_get_contents($_FILES['img_anuncio']['tmp_name']);

    $objUsuario->ctrGuardarAnuncio();
}
// if (isset($_POST["Gastos"]) == "ok") {
//     $objUsuario = new ctrProducto();
//     $objUsuario->ctrListarGastos();
// }
// if (isset($_POST["borrarGasto"])) {
//     $objArea = new ctrProducto();
//     $objArea-> Id_gasto = $_POST["borrarGasto"];
//     $objArea->ctrBorrarGastos();
// }

// if (isset($_POST["Id_gasto"],$_POST["Guardar_editnom_gast"],$_POST["Guardar_editpers_gast"],$_POST["Guardar_editfecha_gasto"],$_POST["Guardar_editvalor_gasto"])) {
//     $objUsuario = new ctrProducto();
//     $objUsuario-> Id_gasto = $_POST["Id_gasto"];
//     $objUsuario-> Guardar_editnom_gast = $_POST["Guardar_editnom_gast"];
//     $objUsuario-> Guardar_editpers_gast = $_POST["Guardar_editpers_gast"];
//     $objUsuario-> Guardar_editfecha_gasto = $_POST["Guardar_editfecha_gasto"];
//     $objUsuario-> Guardar_editvalor_gasto = $_POST["Guardar_editvalor_gasto"];
//     $objUsuario->ctrEditarGastos();
// }

if (isset($_POST["listarDatos"]) == "ok") {
    $objUsuario = new ctrProducto();
    $objUsuario->ctrListarAnuncios();
}




    






?>