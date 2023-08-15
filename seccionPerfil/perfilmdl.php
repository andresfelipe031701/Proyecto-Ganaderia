<?php
include_once "../conexion.php";

class mdluser
{
    
public static function mdlListarDatosUser($documento,$contrasena)
    {
        $listaAreas = "";
        try {
            $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM registros WHERE documento=:documento and contraseña=:contrasena" );
            $objRespuesta->bindparam(":documento", $documento);
            $objRespuesta->bindparam(":contrasena", $contrasena);

            $objRespuesta->execute();
            $listaAreas = $objRespuesta->fetchAll();
            $objRespuesta = null;
        } catch (Exception $e) {
            $listaAreas = $e;
        }
        return $listaAreas;
    }
}