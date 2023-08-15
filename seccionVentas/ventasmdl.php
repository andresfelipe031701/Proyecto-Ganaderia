<?php
include_once "../conexion.php";
class mdlAnuncios
{
    
    public static function mdlGuardarAnuncio($Guardar_titulo,$Guardar_raza,$Guardar_departamento,$Guardar_municipio,$Guardar_tipoVenta,$Guardar_nombreEjem,$Guardar_EdadEjem,$Guardar_PesoEjem,$Guardar_NombreCriadero,$Guardar_NombreHacienda,$Guardar_Descripcion,$Guardar_Contacto,$img_anuncio)
    {
        $mensaje = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("INSERT INTO anuncios(titulo,raza,departamento,municipio,tipo,nombre,edad,peso,nombre_criadero,nombre_hacienda,descripcion,contacto,imagen)values(:Guardar_titulo,:Guardar_raza,:Guardar_departamento,:Guardar_municipio,:Guardar_tipoVenta,:Guardar_nombreEjem,:Guardar_EdadEjem,:Guardar_PesoEjem,:Guardar_NombreCriadero,:Guardar_NombreHacienda,:Guardar_Descripcion,:Guardar_Contacto,:img_anuncio)");
            // $objRespuesta->execute();
            $objRespuesta->bindparam(":Guardar_titulo", $Guardar_titulo);
            $objRespuesta->bindparam(":Guardar_raza", $Guardar_raza);
            $objRespuesta->bindparam(":Guardar_departamento", $Guardar_departamento);
            $objRespuesta->bindparam(":Guardar_municipio", $Guardar_municipio);
            $objRespuesta->bindparam(":Guardar_tipoVenta", $Guardar_tipoVenta);
            $objRespuesta->bindparam(":Guardar_nombreEjem", $Guardar_nombreEjem);
            $objRespuesta->bindparam(":Guardar_EdadEjem", $Guardar_EdadEjem);
            $objRespuesta->bindparam(":Guardar_PesoEjem", $Guardar_PesoEjem);
            $objRespuesta->bindparam(":Guardar_NombreCriadero", $Guardar_NombreCriadero);
            $objRespuesta->bindparam(":Guardar_NombreHacienda", $Guardar_NombreHacienda);
            $objRespuesta->bindparam(":Guardar_Descripcion", $Guardar_Descripcion);
            $objRespuesta->bindparam(":Guardar_Contacto", $Guardar_Contacto);
            $objRespuesta->bindparam(":img_anuncio", $img_anuncio);
            
            if ($objRespuesta->execute()) {
                $mensaje = "ok";
            } else {
                $mensaje = "ERROR EN registro";
            }

        } catch (Exception $e) {
            $mensaje = $e;
        }
        return $mensaje;

    }



    
    public static function mdlListarAnuncios ()
    {

        $listaUsuarios = "";
        try {
            $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM anuncios");
            $objRespuesta->execute();
            $listaUsuarios = $objRespuesta->fetchAll();
            $objRespuesta = null;
        } catch (Exception $e) {
            $listaUsuarios = $e;
        }

        return $listaUsuarios;
    }

}
?>
