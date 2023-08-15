<?php
include_once "perfilmdl.php";

class ctrUser
{
    public function ctrListarDatosUser()
    {
        $objRespuesta = mdluser::mdlListarDatosUser($documento,$contrasena);
        echo json_encode($objRespuesta);
    }
    
}
if (isset($_POST["documento"],$_POST["contrasena"]) ) {
    $objUsuario-> documento= $_POST["documento"];
    $objUsuario-> contrasena= $_POST["contrasena"];
    $objArea = new ctrUser();
    $objArea->ctrListarDatosUser();
}