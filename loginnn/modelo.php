<?php
include "../conexion.php";
function buscar_usuario($documento, $contraseña) {
    include "conexion.php";

    $documento = mysqli_real_escape_string($conn, $documento);
    $contraseña = mysqli_real_escape_string($conn, $contraseña);

    $query = "SELECT tipo_rol FROM registros WHERE documento = '$documento' AND contraseña = '$contraseña'";

    $result = mysqli_query($conn, $query);

    
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        return $row['tipo_rol'];
    } else {
        return false;
    }
}


class mdlProducto
{

    public static function mdlGuardarUser($insertar_documento,$insertar_nombres, $insertar_apellidos, $insertar_edad,$insertar_correo,$insertar_celular,$insertar_contrasena)
    {
        $mensaje = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("INSERT INTO registros(tipo_rol,documento,nombres,apellidos,edad,correo,celular,contraseña)values('1 - usuarios',:Guardar_documento_user,:Guardar_name_user,:Guardar_apellido_user,:Guardar_edad_user,:Guardar_correo_user,:Guardar_celular_user,:Guardar_contrasena_user)");
            // $objRespuesta->execute();
            $objRespuesta->bindparam(":Guardar_documento_user", $insertar_documento);
            $objRespuesta->bindparam(":Guardar_name_user", $insertar_nombres);
            $objRespuesta->bindparam(":Guardar_apellido_user", $insertar_apellidos);
            $objRespuesta->bindparam(":Guardar_edad_user", $insertar_edad);
            $objRespuesta->bindparam(":Guardar_correo_user", $insertar_correo);
            $objRespuesta->bindparam(":Guardar_celular_user", $insertar_celular);
            $objRespuesta->bindparam(":Guardar_contrasena_user", $insertar_contrasena);


            if ($objRespuesta->execute()) {
                $mensaje ="ok";
            } else {
                $mensaje = "Error en registro";
            }

        } catch (Exception $e) {
            $mensaje = $e;
        }
        return $mensaje;
    }


}
?>
