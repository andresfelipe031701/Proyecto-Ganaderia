<?php
include_once "adminmodelo.php";

class ctrProducto
{
 
// seccion gastos
    public function ctrGuardarGasto()
    {
        $objRespuesta = mdlOperaciones::mdlGuardarGasto($this->Guardar_nom_gast, $this->Guardar_pers_gast, $this->Guardar_fecha_gasto, $this->Guardar_valor_gasto);
        echo json_encode($objRespuesta);
    }
  
    public function ctrListarGastos()
    {
        $objRespuesta = mdlOperaciones::mdlListarGastos();
        echo json_encode($objRespuesta);

    }
    public function ctrBorrarGastos()
    {
        $objRespuesta = mdlOperaciones::mdlEliminarGasto($this->Id_gasto);
        echo json_encode($objRespuesta);
    }
    public function ctrEditarGastos()
    {
        $objRespuesta = mdlOperaciones::mdlEditarGastos($this->Id_gasto, $this->Guardar_editnom_gast,$this->Guardar_editpers_gast, $this->Guardar_editfecha_gasto, $this->Guardar_editvalor_gasto);
        echo json_encode($objRespuesta);
    }
    

// seccion ingresos
    public function ctrGuardarIngreso()
    {
        $objRespuesta = mdlOperaciones::mdlGuardarIngreso($this->Guardar_nom_ingreso, $this->Guardar_pers_ingreso, $this->Guardar_fecha_ingreso,$this->Guardar_valor_ingreso);
        echo json_encode($objRespuesta);
    }
  
    public function ctrListarIngresos()
    {
        $objRespuesta = mdlOperaciones::mdlListarIngresos();
        echo json_encode($objRespuesta);
    }
    public function ctrEditarIngresos()
    {
        $objRespuesta = mdlOperaciones::mdlEditarIngresos($this->id_ingreso, $this->Guardar_nomEdit_ingreso,$this->Guardar_persEdit_ingreso, $this->Guardar_fechaEdit_ingreso, $this->Guardar_valorEdit_ingreso);
        echo json_encode($objRespuesta);
    }
    public function ctrEliminarIngreso()
    {
        $objRespuesta = mdlOperaciones::mdlEliminarIngreso($this->id_ingreso);
        echo json_encode($objRespuesta);
    }
  

    public function ctrListarInventarios()
    {
        $objRespuesta = mdlOperaciones::mdlListarInventarios();
        echo json_encode($objRespuesta);

    }
    public function ctrGuardarInventario()
    {
        $objRespuesta = mdlOperaciones::mdlGuardarInventario($this->Codigo_final, $this->Nombre_product, $this->Cantidad_product,$this->Valor_product);
        echo json_encode($objRespuesta);
    }
    public function ctrEditarInventarios()
    {
        $objRespuesta = mdlOperaciones::mdlEditarInventarios($this->Codigo_product,$this->Guardar_codProductInvenEdit,$this->Guardar_nomProductInvenEdit,$this->Guardar_canProductInvenEdit,$this->Guardar_valProductInvenEdit);
        echo json_encode($objRespuesta);
    }
    
    
    public function ctrBorrarInventario()
    {
        $objRespuesta = mdlOperaciones::mdlEliminarInventario($this->Codigo_product);
        echo json_encode($objRespuesta);
    }
}

// parte gastos
// Guardar gasto
if (isset($_POST["Guardar_nom_gast"],$_POST["Guardar_pers_gast"],$_POST["Guardar_fecha_gasto"],$_POST["Guardar_valor_gasto"])) {
    $objUsuario = new ctrProducto();
    $objUsuario->Guardar_nom_gast = $_POST["Guardar_nom_gast"];
    $objUsuario->Guardar_pers_gast = $_POST["Guardar_pers_gast"];
    $objUsuario->Guardar_fecha_gasto = $_POST["Guardar_fecha_gasto"];
    $objUsuario->Guardar_valor_gasto = $_POST["Guardar_valor_gasto"];
    $objUsuario->ctrGuardarGasto();
}
if (isset($_POST["Gastos"]) == "ok") {
    $objUsuario = new ctrProducto();
    $objUsuario->ctrListarGastos();
}
if (isset($_POST["borrarGasto"])) {
    $objArea = new ctrProducto();
    $objArea-> Id_gasto = $_POST["borrarGasto"];
    $objArea->ctrBorrarGastos();
}

if (isset($_POST["Id_gasto"],$_POST["Guardar_editnom_gast"],$_POST["Guardar_editpers_gast"],$_POST["Guardar_editfecha_gasto"],$_POST["Guardar_editvalor_gasto"])) {
    $objUsuario = new ctrProducto();
    $objUsuario-> Id_gasto = $_POST["Id_gasto"];
    $objUsuario-> Guardar_editnom_gast = $_POST["Guardar_editnom_gast"];
    $objUsuario-> Guardar_editpers_gast = $_POST["Guardar_editpers_gast"];
    $objUsuario-> Guardar_editfecha_gasto = $_POST["Guardar_editfecha_gasto"];
    $objUsuario-> Guardar_editvalor_gasto = $_POST["Guardar_editvalor_gasto"];
    $objUsuario->ctrEditarGastos();
}


// seccion ingresos
if (isset($_POST["Guardar_nom_ingreso"],$_POST["Guardar_pers_ingreso"],$_POST["Guardar_fecha_ingreso"],$_POST["Guardar_valor_ingreso"])) {
    $objUsuario = new ctrProducto();
    $objUsuario->Guardar_nom_ingreso = $_POST["Guardar_nom_ingreso"];
    $objUsuario->Guardar_pers_ingreso = $_POST["Guardar_pers_ingreso"];
    $objUsuario->Guardar_fecha_ingreso = $_POST["Guardar_fecha_ingreso"];
    $objUsuario->Guardar_valor_ingreso = $_POST["Guardar_valor_ingreso"];
    $objUsuario->ctrGuardarIngreso();
}
if (isset($_POST["Ingresos"]) == "ok") {
    $objUsuario = new ctrProducto();
    $objUsuario->ctrListarIngresos();
}

if (isset($_POST["id_ingreso"],$_POST["Guardar_nomEdit_ingreso"],$_POST["Guardar_persEdit_ingreso"],$_POST["Guardar_fechaEdit_ingreso"],$_POST["Guardar_valorEdit_ingreso"])) {
    $objUsuario = new ctrProducto();
    $objUsuario-> id_ingreso = $_POST["id_ingreso"];
    $objUsuario-> Guardar_nomEdit_ingreso = $_POST["Guardar_nomEdit_ingreso"];
    $objUsuario-> Guardar_persEdit_ingreso = $_POST["Guardar_persEdit_ingreso"];
    $objUsuario-> Guardar_fechaEdit_ingreso = $_POST["Guardar_fechaEdit_ingreso"];
    $objUsuario-> Guardar_valorEdit_ingreso = $_POST["Guardar_valorEdit_ingreso"];
    $objUsuario->ctrEditarIngresos();
}

// seccion inventario
if (isset($_POST["Guardar_codProductInven"],$_POST["Guardar_nomProductInven"],$_POST["Guardar_canProductInven"],$_POST["Guardar_valProductInven"])) {
    $objUsuario = new ctrProducto();
    $objUsuario->Codigo_final = $_POST["Guardar_codProductInven"];
    $objUsuario->Nombre_product = $_POST["Guardar_nomProductInven"];
    $objUsuario->Cantidad_product = $_POST["Guardar_canProductInven"];
    $objUsuario->Valor_product = $_POST["Guardar_valProductInven"];
    $objUsuario->ctrGuardarInventario();
}
if (isset($_POST["Inventario"]) == "ok") {
    $objUsuario = new ctrProducto();
    $objUsuario->ctrListarInventarios();
}
if (isset($_POST["Codigo_product"],$_POST["Guardar_codProductInvenEdit"],$_POST["Guardar_nomProductInvenEdit"],$_POST["Guardar_canProductInvenEdit"],$_POST["Guardar_valProductInvenEdit"])) {
    $objUsuario = new ctrProducto();
    $objUsuario-> Codigo_product = $_POST["Codigo_product"];
    $objUsuario-> Guardar_codProductInvenEdit = $_POST["Guardar_codProductInvenEdit"];
    $objUsuario-> Guardar_nomProductInvenEdit = $_POST["Guardar_nomProductInvenEdit"];
    $objUsuario-> Guardar_canProductInvenEdit = $_POST["Guardar_canProductInvenEdit"];
    $objUsuario-> Guardar_valProductInvenEdit = $_POST["Guardar_valProductInvenEdit"];
    $objUsuario->ctrEditarInventarios();
}
if (isset($_POST["borrarInventario"])) {
    $objArea = new ctrProducto();
    $objArea-> Codigo_product = $_POST["borrarInventario"];
    $objArea->ctrBorrarInventario();
}


    






?>