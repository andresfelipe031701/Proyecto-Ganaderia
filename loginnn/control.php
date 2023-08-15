<?php

include "modelo.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $documento = $_POST['documento'];
    $contraseña = $_POST['contraseña'];

    $tipo_rol = buscar_usuario($documento, $contraseña);

    if ($tipo_rol === false) {
        echo "El documento o la contraseña son incorrectos.";
    } else {
        echo $tipo_rol;

    }
}

class ctrProducto
{
    public $insertar_documento;
    public $insertar_nombres;
    public $insertar_apellidos;
    public $insertar_edad;
    public $insertar_correo;
    public $insertar_celular;
    public $insertar_contrasena;

    public function ctrGuardarUser()
    {
        $objRespuesta = mdlProducto::mdlGuardarUser($this->insertar_documento,$this->insertar_nombres,$this->insertar_apellidos,$this->insertar_edad,$this->insertar_correo,$this->insertar_celular,$this->insertar_contrasena);
        echo json_encode($objRespuesta);
    }

}


if (isset($_POST["Guardar_documento_user"], $_POST["Guardar_name_user"],$_POST["Guardar_apellido_user"],$_POST["Guardar_edad_user"],$_POST["Guardar_correo_user"],$_POST["Guardar_celular_user"],$_POST["Guardar_contrasena_user"])) {
    $objUsuario = new ctrProducto();

    $objUsuario->insertar_documento = $_POST["Guardar_documento_user"];
    $objUsuario->insertar_nombres = $_POST["Guardar_name_user"];
    $objUsuario->insertar_apellidos = $_POST["Guardar_apellido_user"];
    $objUsuario->insertar_edad = $_POST["Guardar_edad_user"];
    $objUsuario->insertar_correo = $_POST["Guardar_correo_user"];
    $objUsuario->insertar_celular = $_POST["Guardar_celular_user"];
    $objUsuario->insertar_contrasena = $_POST["Guardar_contrasena_user"];
    $objUsuario->ctrGuardarUser();
}

?>
