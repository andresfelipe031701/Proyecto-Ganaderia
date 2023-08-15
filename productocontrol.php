<?php
include_once "productomodelo.php";

class ctrProducto
{

    public function ctrListarMachos()
    {
        $objRespuesta = mdlProducto::mdlListarMachos();
        echo json_encode($objRespuesta);
    }
    public function ctrListarHembras()
    {
        $objRespuesta = mdlProducto::mdlListarHembras();
        echo json_encode($objRespuesta);
    }
    public function ctrListarRazas()
    {
        $objRespuesta = mdlProducto::mdlListarRazas();
        echo json_encode($objRespuesta);
    }
    public function ctrFiltrarCargos()
    {
        $objRespuesta = mdlProducto::mdlFiltrarCargos($this->id_cargo);
        echo json_encode($objRespuesta);
    }
    public function ctrListarContactillos()
    {
        $objRespuesta = mdlProducto::mdlListarContactillos();
        echo json_encode($objRespuesta);
    }
    
    public function ctrListarContactosSelect()
    {
        $objRespuesta = mdlProducto::mdlListarContactosSelect();
        echo json_encode($objRespuesta);
    }
    // public function ctrFiltrarMachos()
    // {
    //     $objRespuesta = mdlProducto::mdlFiltrarMachos($this->id_Raza);
    //     echo json_encode($objRespuesta);
    // }
    
 
    public function ctrGuardarMacho()
    {
        $objRespuesta = mdlProducto::mdlGuardarMacho($this->ins_Guardar_codigo,$this->ins_Guardar_nombre,$this->ins_Guardar_edad,$this->ins_Guardar_peso,$this->ins_Guardar_genotipo,$this->ins_Guardar_grupo,$this->ins_Guardar_fechaNaci,$this->ins_Guardar_nomPadre,$this->ins_Guardar_nomAbu,$this->ins_Guardar_nomVac,$this->ins_Guardar_fechaVac,$this->ins_Guardar_Categoria,$this->ins_Guardar_tratamientos,$this->ins_Guardar_fechaPajilla,$this->ins_Guardar_oberva);
        echo json_encode($objRespuesta);
    }
    public function ctrGuardarHembra()
    {
        $objRespuesta = mdlProducto::mdlGuardarHembra($this->ins_Guardar_CodigoHem,$this->ins_Guardar_NombreHem,$this->ins_Guardar_EdadHem,$this->ins_Guardar_PesoHem,$this->ins_Guardar_GenotipoHem,$this->ins_Guardar_ProduccionHem,$this->ins_Guardar_GrupoHem,$this->ins_Guardar_FechaNacHem,$this->ins_Guardar_NombrepaHem,$this->ins_Guardar_NombreabHem,$this->ins_Guardar_vacunaHem,$this->ins_Guardar_FechavacHem,$this->ins_Guardar_VacunFaltHem,$this->ins_Guardar_CategoriaHem,$this->ins_Guardar_TratamientoHem,$this->ins_Guardar_NumpartosHem,$this->ins_Guardar_ObservacionHem);
        echo json_encode($objRespuesta);
    }
    public function ctrGuardarRaza()
    {
        $objRespuesta = mdlProducto::mdlGuardarRaza($this->Guardar_nombre_raza);
        echo json_encode($objRespuesta);
    }
    public function ctrEliminarMacho()
    {
        $objRespuesta = mdlProducto::mdlEliminarMacho($this->Codigo);
        echo json_encode($objRespuesta);
    }
    public function ctrEliminarHembra()
    {
        $objRespuesta = mdlProducto::mdlEliminarHembra($this->Codigo);
        echo json_encode($objRespuesta);
    }
    
    public function ctrEditarMachos ()
    {
        $objRespuesta = mdlProducto::mdlEditarMacho($this->ins_Guardar_codigo_edit,$this->ins_Guardar_nombre_edit,$this->ins_Guardar_edad_edit,$this->ins_Guardar_peso_edit,$this->ins_Guardar_genotipo_edit,$this->ins_Guardar_grupo_edit,$this->ins_Guardar_fechaNaci_edit,$this->ins_Guardar_nomPadre_edit,$this->ins_Guardar_nomAbu_edit,$this->ins_Guardar_nomVac_edit,$this->ins_Guardar_fechaVac_edit,$this->ins_Guardar_Categoria_edit,$this->ins_Guardar_tratamientos_edit,$this->ins_Guardar_fechaPajilla_edit,$this->ins_Guardar_oberva_edit);
        echo json_encode($objRespuesta);
    }
    public function ctrEditarHembras ()
    {
        $objRespuesta = mdlProducto::mdlEditarHembras($this->ins_Guardar_codigo_edit,$this->Guardar_NombreHem_edit,$this->Guardar_EdadHem_edit,$this->Guardar_PesoHem_edit,$this->Guardar_GenotipoHem_edit,$this->Guardar_ProduccionHem_edit,$this->Guardar_GrupoHem_edit,$this->Guardar_FechaNacHem_edit,$this->Guardar_NombrepaHem_edit,$this->Guardar_NombreabHem_edit,$this->Guardar_vacunaHem_edit,$this->Guardar_FechavacHem_edit,$this->Guardar_VacunFaltHem_edit,$this->Guardar_CategoriaHem_edit,$this->Guardar_TratamientoHem_edit,$this->Guardar_NumpartosHem_edit,$this->Guardar_ObservacionHem_edit,$this->Guardar_Raza_edit);
        echo json_encode($objRespuesta);
    }
}

if (isset($_POST["ins_Guardar_codigo"], $_POST["ins_Guardar_nombre"],$_POST["ins_Guardar_edad"], $_POST["ins_Guardar_peso"],$_POST["ins_Guardar_genotipo"],$_POST["ins_Guardar_grupo"], $_POST["ins_Guardar_fechaNaci"],$_POST["ins_Guardar_nomPadre"],$_POST["ins_Guardar_nomAbu"], $_POST["ins_Guardar_nomVac"],$_POST["ins_Guardar_fechaVac"],$_POST["ins_Guardar_Categoria"],$_POST["ins_Guardar_tratamientos"],$_POST["ins_Guardar_fechaPajilla"],$_POST["ins_Guardar_oberva"])) {
    $objUsuario = new ctrProducto();
    $objUsuario->ins_Guardar_codigo = $_POST["ins_Guardar_codigo"];
    $objUsuario->ins_Guardar_nombre = $_POST["ins_Guardar_nombre"];
    $objUsuario->ins_Guardar_edad = $_POST["ins_Guardar_edad"];
    $objUsuario->ins_Guardar_peso = $_POST["ins_Guardar_peso"];
    $objUsuario->ins_Guardar_genotipo = $_POST["ins_Guardar_genotipo"];
    $objUsuario->ins_Guardar_grupo = $_POST["ins_Guardar_grupo"];
    $objUsuario->ins_Guardar_fechaNaci = $_POST["ins_Guardar_fechaNaci"];
    $objUsuario->ins_Guardar_nomPadre = $_POST["ins_Guardar_nomPadre"];
    $objUsuario->ins_Guardar_nomAbu = $_POST["ins_Guardar_nomAbu"];
    $objUsuario->ins_Guardar_nomVac = $_POST["ins_Guardar_nomVac"];
    $objUsuario->ins_Guardar_fechaVac = $_POST["ins_Guardar_fechaVac"];
    $objUsuario->ins_Guardar_Categoria = $_POST["ins_Guardar_Categoria"];
    $objUsuario->ins_Guardar_tratamientos = $_POST["ins_Guardar_tratamientos"];
    $objUsuario->ins_Guardar_fechaPajilla = $_POST["ins_Guardar_fechaPajilla"];
    $objUsuario->ins_Guardar_oberva = $_POST["ins_Guardar_oberva"];
    $objUsuario->ctrGuardarMacho();
}
if (isset($_POST["ins_Guardar_codigo_edit"],$_POST["ins_Guardar_nombre_edit"],$_POST["ins_Guardar_edad_edit"],$_POST["ins_Guardar_peso_edit"],$_POST["ins_Guardar_genotipo_edit"],$_POST["ins_Guardar_grupo_edit"],$_POST["ins_Guardar_fechaNaci_edit"],$_POST["ins_Guardar_nomPadre_edit"],$_POST["ins_Guardar_nomAbu_edit"],$_POST["ins_Guardar_nomVac_edit"],$_POST["ins_Guardar_fechaVac_edit"],$_POST["ins_Guardar_Categoria_edit"],$_POST["ins_Guardar_tratamientos_edit"],$_POST["ins_Guardar_fechaPajilla_edit"],$_POST["ins_Guardar_oberva_edit"])) {
    $objUsuario = new ctrProducto();
    $objUsuario->ins_Guardar_codigo_edit = $_POST["ins_Guardar_codigo_edit"];
    $objUsuario->ins_Guardar_nombre_edit = $_POST["ins_Guardar_nombre_edit"];
    $objUsuario->ins_Guardar_edad_edit = $_POST["ins_Guardar_edad_edit"];
    $objUsuario->ins_Guardar_peso_edit = $_POST["ins_Guardar_peso_edit"];
    $objUsuario->ins_Guardar_genotipo_edit = $_POST["ins_Guardar_genotipo_edit"];
    $objUsuario->ins_Guardar_grupo_edit = $_POST["ins_Guardar_grupo_edit"];
    $objUsuario->ins_Guardar_fechaNaci_edit = $_POST["ins_Guardar_fechaNaci_edit"];
    $objUsuario->ins_Guardar_nomPadre_edit = $_POST["ins_Guardar_nomPadre_edit"];
    $objUsuario->ins_Guardar_nomAbu_edit = $_POST["ins_Guardar_nomAbu_edit"];
    $objUsuario->ins_Guardar_nomVac_edit = $_POST["ins_Guardar_nomVac_edit"];
    $objUsuario->ins_Guardar_fechaVac_edit = $_POST["ins_Guardar_fechaVac_edit"];
    $objUsuario->ins_Guardar_Categoria_edit = $_POST["ins_Guardar_Categoria_edit"];
    $objUsuario->ins_Guardar_tratamientos_edit = $_POST["ins_Guardar_tratamientos_edit"];
    $objUsuario->ins_Guardar_fechaPajilla_edit = $_POST["ins_Guardar_fechaPajilla_edit"];
    $objUsuario->ins_Guardar_oberva_edit = $_POST["ins_Guardar_oberva_edit"];
    $objUsuario->ctrEditarMachos();
}

if (isset($_POST["ins_Guardar_codigo_edit"],$_POST["Guardar_NombreHem_edit"],$_POST["Guardar_EdadHem_edit"],$_POST["Guardar_PesoHem_edit"],$_POST["Guardar_GenotipoHem_edit"],$_POST["Guardar_ProduccionHem_edit"],$_POST["Guardar_GrupoHem_edit"],$_POST["Guardar_FechaNacHem_edit"],$_POST["Guardar_NombrepaHem_edit"],$_POST["Guardar_NombreabHem_edit"],$_POST["Guardar_vacunaHem_edit"],$_POST["Guardar_FechavacHem_edit"],$_POST["Guardar_VacunFaltHem_edit"],$_POST["Guardar_CategoriaHem_edit"],$_POST["Guardar_TratamientoHem_edit"],$_POST["Guardar_NumpartosHem_edit"],$_POST["Guardar_ObservacionHem_edit"])) {
    $objUsuario = new ctrProducto();
    $objUsuario->ins_Guardar_codigo_edit = $_POST["ins_Guardar_codigo_edit"];
    $objUsuario->Guardar_NombreHem_edit = $_POST["Guardar_NombreHem_edit"];
    $objUsuario->Guardar_EdadHem_edit = $_POST["Guardar_EdadHem_edit"];
    $objUsuario->Guardar_PesoHem_edit = $_POST["Guardar_PesoHem_edit"];
    $objUsuario->Guardar_GenotipoHem_edit = $_POST["Guardar_GenotipoHem_edit"];
    $objUsuario->Guardar_ProduccionHem_edit = $_POST["Guardar_ProduccionHem_edit"];
    $objUsuario->Guardar_GrupoHem_edit = $_POST["Guardar_GrupoHem_edit"];
    $objUsuario->Guardar_FechaNacHem_edit = $_POST["Guardar_FechaNacHem_edit"];
    $objUsuario->Guardar_NombrepaHem_edit = $_POST["Guardar_NombrepaHem_edit"];
    $objUsuario->Guardar_NombreabHem_edit = $_POST["Guardar_NombreabHem_edit"];
    $objUsuario->Guardar_vacunaHem_edit = $_POST["Guardar_vacunaHem_edit"];
    $objUsuario->Guardar_FechavacHem_edit = $_POST["Guardar_FechavacHem_edit"];
    $objUsuario->Guardar_VacunFaltHem_edit = $_POST["Guardar_VacunFaltHem_edit"];
    $objUsuario->Guardar_CategoriaHem_edit = $_POST["Guardar_CategoriaHem_edit"];
    $objUsuario->Guardar_TratamientoHem_edit = $_POST["Guardar_TratamientoHem_edit"];
    $objUsuario->Guardar_NumpartosHem_edit = $_POST["Guardar_NumpartosHem_edit"];
    $objUsuario->Guardar_ObservacionHem_edit = $_POST["Guardar_ObservacionHem_edit"];
    //$objUsuario->Guardar_Raza_edit = $_POST["Guardar_Raza_edit"];
    $objUsuario->ctrEditarHembras();
}



if (isset($_POST["listarMachos"]) == "ok") {
    $objUsuario = new ctrProducto();
    $objUsuario->ctrListarMachos();
}
if (isset($_POST["listarHembras"]) == "ok") {
    $objUsuario = new ctrProducto();
    $objUsuario->ctrListarHembras();
}
// if (isset($_POST["FiltroRaza"])) {
//     $objArea = new ctrProducto();
//     $objArea-> id_Raza = $_POST["FiltroRaza"];
//     $objArea->ctrFiltrarMachos();
// }
if (isset($_POST["cargarRazas"]) == "ok") {
    $objArea = new ctrProducto();
    $objArea->ctrListarRazas();
}

if (isset($_POST["borrar"])) {
    $objUsuario = new ctrProducto();
    $objUsuario->Codigo = $_POST["borrar"];
    $objUsuario->ctrEliminarMacho();
}
if (isset($_POST["borrarHembra"])) {
    $objUsuario = new ctrProducto();
    $objUsuario->Codigo = $_POST["borrarHembra"];
    $objUsuario->ctrEliminarHembra();
}

if (isset($_POST["Guardar_nombre_raza"])) {
    $objUsuario = new ctrProducto();
    $objUsuario->Guardar_nombre_raza = $_POST["Guardar_nombre_raza"];
    $objUsuario->ctrGuardarRaza();
}

if (isset($_POST["ins_Guardar_CodigoHem"],$_POST["ins_Guardar_NombreHem"],$_POST["ins_Guardar_EdadHem"],$_POST["ins_Guardar_PesoHem"],$_POST["ins_Guardar_GenotipoHem"], $_POST["ins_Guardar_ProduccionHem"],$_POST["ins_Guardar_GrupoHem"],$_POST["ins_Guardar_FechaNacHem"], $_POST["ins_Guardar_NombrepaHem"],$_POST["ins_Guardar_NombreabHem"],$_POST["ins_Guardar_vacunaHem"], $_POST["ins_Guardar_FechavacHem"],$_POST["ins_Guardar_VacunFaltHem"],$_POST["ins_Guardar_CategoriaHem"],$_POST["ins_Guardar_TratamientoHem"],$_POST["ins_Guardar_NumpartosHem"],$_POST["ins_Guardar_ObservacionHem"])) {
    $objUsuario = new ctrProducto();
    $objUsuario-> ins_Guardar_CodigoHem= $_POST["ins_Guardar_CodigoHem"];
    $objUsuario-> ins_Guardar_NombreHem= $_POST["ins_Guardar_NombreHem"];
    $objUsuario-> ins_Guardar_EdadHem= $_POST["ins_Guardar_EdadHem"];
    $objUsuario-> ins_Guardar_PesoHem= $_POST["ins_Guardar_PesoHem"];
    $objUsuario-> ins_Guardar_GenotipoHem= $_POST["ins_Guardar_GenotipoHem"];
    $objUsuario-> ins_Guardar_ProduccionHem= $_POST["ins_Guardar_ProduccionHem"];
    $objUsuario-> ins_Guardar_GrupoHem= $_POST["ins_Guardar_GrupoHem"];
    $objUsuario-> ins_Guardar_FechaNacHem= $_POST["ins_Guardar_FechaNacHem"];
    $objUsuario-> ins_Guardar_NombrepaHem= $_POST["ins_Guardar_NombrepaHem"];
    $objUsuario-> ins_Guardar_NombreabHem= $_POST["ins_Guardar_NombreabHem"];
    $objUsuario-> ins_Guardar_vacunaHem= $_POST["ins_Guardar_vacunaHem"];
    $objUsuario-> ins_Guardar_FechavacHem= $_POST["ins_Guardar_FechavacHem"];
    $objUsuario-> ins_Guardar_VacunFaltHem= $_POST["ins_Guardar_VacunFaltHem"];
    $objUsuario-> ins_Guardar_CategoriaHem= $_POST["ins_Guardar_CategoriaHem"];
    $objUsuario-> ins_Guardar_TratamientoHem= $_POST["ins_Guardar_TratamientoHem"];
    $objUsuario-> ins_Guardar_NumpartosHem= $_POST["ins_Guardar_NumpartosHem"];
    $objUsuario-> ins_Guardar_ObservacionHem= $_POST["ins_Guardar_ObservacionHem"];
    $objUsuario->ctrGuardarHembra();
}

if (isset($_POST["CargaContactos"]) == "ok") {
    $objArea = new ctrProducto();
    $objArea->ctrListarContactosSelect();
}

if (isset($_POST["listarContactillos"]) == "ok") {
    $objArea = new ctrProducto();
    $objArea->ctrListarContactillos();
}

if (isset($_POST["FiltroCargo"])) {
    $objUsuario = new ctrProducto();
    $objUsuario->id_cargo = $_POST["FiltroCargo"];
    $objUsuario->ctrFiltrarCargos();
}
?>