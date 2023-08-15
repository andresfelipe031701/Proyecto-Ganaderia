<?php
include_once "conexion.php";

class mdlProducto
{
    
  


    public static function mdlListarMachos()
    {
        $mensaje = "";
        $listarUsuarios = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("SELECT * FROM inventario");
            $objRespuesta->execute();
            $listarUsuarios = $objRespuesta->fetchAll();
            $objRespuesta = null;
        } catch (Exception $e) {
            $listarUsuarios = $e;
        }
        return $listarUsuarios;
    }
    
    public static function mdlGuardarRaza($Guardar_nombre_raza)
    {
        $mensaje = "";
        try {
            //Terminar parte de raza
            $objRespuesta = conexion::conectar()->prepare("INSERT INTO razas(Nombre_raza)values(:Guardar_nombre_raza)");
            // $objRespuesta->execute();

            $objRespuesta->bindparam(":Guardar_nombre_raza", $Guardar_nombre_raza);
            
            if ($objRespuesta->execute()) {
                $mensaje ="ok";
            } else {
                $mensaje = "ERROR EN registro";
            }

        } catch (Exception $e) {
            $mensaje = $e;
        }
        return $mensaje;
    }


    public static function mdlListarRazas()
    {
        $listaAreas = "";
        try {
            $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM razas");
            $objRespuesta->execute();
            $listaAreas = $objRespuesta->fetchAll();
            $objRespuesta = null;
        } catch (Exception $e) {
            $listaAreas = $e;
        }
        return $listaAreas;
    }
    
  
    public static function mdlListarContactosSelect()
    {
        $listaAreas = "";
        try {
            $objRespuesta = Conexion::conectar()->prepare("SELECT Nombre_cargo,id_cargo FROM cargos");
            $objRespuesta->execute();
            $listaAreas = $objRespuesta->fetchAll();
            $objRespuesta = null;
        } catch (Exception $e) {
            $listaAreas = $e;
        }
        return $listaAreas;
    }
    
    public static function mdlFiltrarCargos($id_cargo)
    {
        $listaAreas = "";
        try {
            $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM contactos where cargo_id=:id_cargo");
            $objRespuesta->bindparam(":id_cargo", $id_cargo);
            $objRespuesta->execute();
            $listaAreas = $objRespuesta->fetchAll();
            $objRespuesta = null;
        } catch (Exception $e) {
            $listaAreas = $e;
        }
        return $listaAreas;
    }
    public static function mdlListarContactillos()
    {
        $listaAreas = "";
        try {
            $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM contactos");
            $objRespuesta->execute();
            $listaAreas = $objRespuesta->fetchAll();
            $objRespuesta = null;
        } catch (Exception $e) {
            $listaAreas = $e;
        }
        return $listaAreas;
    }
    

    
    // public static function mdlFiltrarMachos($id_Raza)
    // {

    //     $listaUsuarios = "";
    //     try {
    //         $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM inventario WHERE Raza=:id_Raza");
    //         $objRespuesta->bindParam(":id_Raza",$id_Raza);
    //         $objRespuesta->execute();
    //         $listaUsuarios = $objRespuesta->fetchAll();
    //         $objRespuesta = null;
    //     } catch (Exception $e) {
    //         $listaUsuarios = $e;
    //     }
    //     return $listaUsuarios;
    // }


    


    public static function mdlGuardarMacho($ins_Guardar_codigo,$ins_Guardar_nombre,$ins_Guardar_edad,$ins_Guardar_peso,$ins_Guardar_genotipo,$ins_Guardar_grupo,$ins_Guardar_fechaNaci,$ins_Guardar_nomPadre,$ins_Guardar_nomAbu,$ins_Guardar_nomVac, $ins_Guardar_fechaVac, $ins_Guardar_Categoria,$ins_Guardar_tratamientos,$ins_Guardar_fechaPajilla,$ins_Guardar_oberva)
    {
        $mensaje = "";
        try {
            //Terminar parte de raza
            $objRespuesta = conexion::conectar()->prepare("INSERT INTO inventario(Codigo,Nombre,Edad,Peso,Genotipo,Grupo,Fecha_nacimiento,Padre,Abuelo_materno,nombre_vacuna,Fecha_vacuna,Categoria,Tratamientos,Fecha_pajilla,Observaciones,Raza)values(:ins_Guardar_codigo,:ins_Guardar_nombre,:ins_Guardar_edad,:ins_Guardar_peso,:ins_Guardar_genotipo,:ins_Guardar_grupo,:ins_Guardar_fechaNaci,:ins_Guardar_nomPadre,:ins_Guardar_nomAbu,:ins_Guardar_nomVac,:ins_Guardar_fechaVac,:ins_Guardar_Categoria,:ins_Guardar_tratamientos,:ins_Guardar_fechaPajilla,:ins_Guardar_oberva,'1 - Holstein')");
            // $objRespuesta->execute();

            $objRespuesta->bindparam(":ins_Guardar_codigo", $ins_Guardar_codigo);
            $objRespuesta->bindparam(":ins_Guardar_nombre", $ins_Guardar_nombre);
            $objRespuesta->bindparam(":ins_Guardar_edad", $ins_Guardar_edad);
            $objRespuesta->bindparam(":ins_Guardar_peso", $ins_Guardar_peso);
            $objRespuesta->bindparam(":ins_Guardar_genotipo", $ins_Guardar_genotipo);
            $objRespuesta->bindparam(":ins_Guardar_grupo", $ins_Guardar_grupo);
            $objRespuesta->bindparam(":ins_Guardar_fechaNaci", $ins_Guardar_fechaNaci);
            $objRespuesta->bindparam(":ins_Guardar_nomPadre", $ins_Guardar_nomPadre);
            $objRespuesta->bindparam(":ins_Guardar_nomAbu", $ins_Guardar_nomAbu);
            $objRespuesta->bindparam(":ins_Guardar_nomVac", $ins_Guardar_nomVac);
            $objRespuesta->bindparam(":ins_Guardar_fechaVac", $ins_Guardar_fechaVac);
            $objRespuesta->bindparam(":ins_Guardar_Categoria", $ins_Guardar_Categoria);
            $objRespuesta->bindparam(":ins_Guardar_tratamientos", $ins_Guardar_tratamientos);
            $objRespuesta->bindparam(":ins_Guardar_fechaPajilla", $ins_Guardar_fechaPajilla);
            $objRespuesta->bindparam(":ins_Guardar_oberva", $ins_Guardar_oberva);
            if ($objRespuesta->execute()) {
                $mensaje ="ok";
            } else {
                $mensaje = "ERROR EN registro";
            }

        } catch (Exception $e) {
            $mensaje = $e;
        }
        return $mensaje;
    }
    

    public static function mdlEliminarMacho($Codigo)
    {
        $mensaje = "";
        $BorrarUsuarios = "";


        try {
            $objRespuesta = conexion::conectar()->prepare("DELETE FROM  inventario  WHERE Codigo =:Codigo");
            $objRespuesta->bindparam(":Codigo", $Codigo);
            // echo json_encode($objRespuesta);
            // $objRespuesta->execute();

            // $listarUsuarios = $objRespuesta->fetchAll();
            if ($objRespuesta->execute()) {

                $mensaje = ok;
            }
        } catch (Exception $e) {
            $mensaje = $e;
        }

        return $mensaje;
    }
    public static function mdlEditarMacho($ins_Guardar_codigo_edit,$ins_Guardar_nombre_edit, $ins_Guardar_edad_edit, $ins_Guardar_peso_edit ,$ins_Guardar_genotipo_edit,$ins_Guardar_grupo_edit ,$ins_Guardar_fechaNaci_edit,$ins_Guardar_nomPadre_edit,$ins_Guardar_nomAbu_edit, $ins_Guardar_nomVac_edit, $ins_Guardar_fechaVac_edit ,$ins_Guardar_Categoria_edit ,$ins_Guardar_tratamientos_edit ,$ins_Guardar_fechaPajilla_edit,$ins_Guardar_oberva_edit)
    {
        $mensaje = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("UPDATE inventario SET Nombre=:ins_Guardar_nombre_edit,Edad=:ins_Guardar_edad_edit,Peso=:ins_Guardar_peso_edit,Genotipo=:ins_Guardar_genotipo_edit,Grupo=:ins_Guardar_grupo_edit,Fecha_nacimiento=:ins_Guardar_fechaNaci_edit,Padre=:ins_Guardar_nomPadre_edit,Abuelo_materno=:ins_Guardar_nomAbu_edit,nombre_vacuna=:ins_Guardar_nomVac_edit,Fecha_vacuna=:ins_Guardar_fechaVac_edit,Categoria=:ins_Guardar_Categoria_edit,Tratamientos=:ins_Guardar_tratamientos_edit,Fecha_pajilla=:ins_Guardar_fechaPajilla_edit,Observaciones=:ins_Guardar_oberva_edit WHERE Codigo=:ins_Guardar_codigo_edit;");
            $objRespuesta->bindparam(":ins_Guardar_codigo_edit", $ins_Guardar_codigo_edit);
            $objRespuesta->bindparam(":ins_Guardar_nombre_edit", $ins_Guardar_nombre_edit);
            $objRespuesta->bindparam(":ins_Guardar_edad_edit", $ins_Guardar_edad_edit);
            $objRespuesta->bindparam(":ins_Guardar_peso_edit", $ins_Guardar_peso_edit);
            $objRespuesta->bindparam(":ins_Guardar_genotipo_edit", $ins_Guardar_genotipo_edit);
            $objRespuesta->bindparam(":ins_Guardar_grupo_edit", $ins_Guardar_grupo_edit);
            $objRespuesta->bindparam(":ins_Guardar_fechaNaci_edit", $ins_Guardar_fechaNaci_edit);
            $objRespuesta->bindparam(":ins_Guardar_nomPadre_edit", $ins_Guardar_nomPadre_edit);
            $objRespuesta->bindparam(":ins_Guardar_nomAbu_edit", $ins_Guardar_nomAbu_edit);
            $objRespuesta->bindparam(":ins_Guardar_nomVac_edit", $ins_Guardar_nomVac_edit);
            $objRespuesta->bindparam(":ins_Guardar_fechaVac_edit", $ins_Guardar_fechaVac_edit);
            $objRespuesta->bindparam(":ins_Guardar_Categoria_edit", $ins_Guardar_Categoria_edit);
            $objRespuesta->bindparam(":ins_Guardar_tratamientos_edit", $ins_Guardar_tratamientos_edit);
            $objRespuesta->bindparam(":ins_Guardar_fechaPajilla_edit", $ins_Guardar_fechaPajilla_edit);
            $objRespuesta->bindparam(":ins_Guardar_oberva_edit", $ins_Guardar_oberva_edit);

           
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


    // seccion hembras

    public static function mdlGuardarHembra($ins_Guardar_CodigoHem,$ins_Guardar_NombreHem,$ins_Guardar_EdadHem,$ins_Guardar_PesoHem,$ins_Guardar_GenotipoHem,$ins_Guardar_ProduccionHem,$ins_Guardar_GrupoHem,$ins_Guardar_FechaNacHem,$ins_Guardar_NombrepaHem,$ins_Guardar_NombreabHem,$ins_Guardar_vacunaHem,$ins_Guardar_FechavacHem,$ins_Guardar_VacunFaltHem,$ins_Guardar_CategoriaHem,$ins_Guardar_TratamientoHem,$ins_Guardar_NumpartosHem,$ins_Guardar_ObservacionHem)
    {
        $mensaje = "";
        try {
            //Terminar parte de raza
            $objRespuesta = conexion::conectar()->prepare("INSERT INTO inventario_hembras(Codigo,Nombre,Edad,Peso,Genotipo,Produccion_leche,Grupo,Fecha_nacimiento,Padre,Abuelo_materno,Nombre_vacuna,Fecha_vacuna,vacunas_faltantes,Categoria,Tratamientos,Num_partos,Observaciones,Raza)values(:ins_Guardar_CodigoHem,:ins_Guardar_NombreHem,:ins_Guardar_EdadHem,:ins_Guardar_PesoHem,:ins_Guardar_GenotipoHem,:ins_Guardar_ProduccionHem,:ins_Guardar_GrupoHem,:ins_Guardar_FechaNacHem,:ins_Guardar_NombrepaHem,:ins_Guardar_NombreabHem,:ins_Guardar_vacunaHem,:ins_Guardar_FechavacHem,:ins_Guardar_VacunFaltHem,:ins_Guardar_CategoriaHem,:ins_Guardar_TratamientoHem,:ins_Guardar_NumpartosHem,:ins_Guardar_ObservacionHem,'1 - Holstein')");
            // $objRespuesta->execute();

            $objRespuesta->bindparam(":ins_Guardar_CodigoHem", $ins_Guardar_CodigoHem);
            $objRespuesta->bindparam(":ins_Guardar_NombreHem", $ins_Guardar_NombreHem);
            $objRespuesta->bindparam(":ins_Guardar_EdadHem", $ins_Guardar_EdadHem);
            $objRespuesta->bindparam(":ins_Guardar_PesoHem", $ins_Guardar_PesoHem);
            $objRespuesta->bindparam(":ins_Guardar_GenotipoHem", $ins_Guardar_GenotipoHem);
            $objRespuesta->bindparam(":ins_Guardar_ProduccionHem", $ins_Guardar_ProduccionHem);
            $objRespuesta->bindparam(":ins_Guardar_GrupoHem", $ins_Guardar_GrupoHem);
            $objRespuesta->bindparam(":ins_Guardar_FechaNacHem", $ins_Guardar_FechaNacHem);
            $objRespuesta->bindparam(":ins_Guardar_NombrepaHem", $ins_Guardar_NombrepaHem);
            $objRespuesta->bindparam(":ins_Guardar_NombreabHem", $ins_Guardar_NombreabHem);
            $objRespuesta->bindparam(":ins_Guardar_vacunaHem", $ins_Guardar_vacunaHem);
            $objRespuesta->bindparam(":ins_Guardar_FechavacHem", $ins_Guardar_FechavacHem);
            $objRespuesta->bindparam(":ins_Guardar_VacunFaltHem", $ins_Guardar_VacunFaltHem);
            $objRespuesta->bindparam(":ins_Guardar_CategoriaHem", $ins_Guardar_CategoriaHem);
            $objRespuesta->bindparam(":ins_Guardar_TratamientoHem", $ins_Guardar_TratamientoHem);
            $objRespuesta->bindparam(":ins_Guardar_NumpartosHem", $ins_Guardar_NumpartosHem);
            $objRespuesta->bindparam(":ins_Guardar_ObservacionHem", $ins_Guardar_ObservacionHem);
            if ($objRespuesta->execute()) {
                $mensaje ="ok";
            } else {
                $mensaje = "ERROR EN registro";
            }

        } catch (Exception $e) {
            $mensaje = $e;
        }
        return $mensaje;
    }
    
    public static function mdlListarHembras()
    {
        $mensaje = "";
        $listarUsuarios = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("SELECT * FROM inventario_hembras");
            $objRespuesta->execute();
            $listarUsuarios = $objRespuesta->fetchAll();
            $objRespuesta = null;
        } catch (Exception $e) {
            $listarUsuarios = $e;
        }
        return $listarUsuarios;
    }
    

    public static function mdlEliminarHembra($Codigo)
    {
        $mensaje = "";
        $BorrarUsuarios = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("DELETE FROM  inventario_hembras  WHERE Codigo =:Codigo");
            $objRespuesta->bindparam(":Codigo", $Codigo);
            // echo json_encode($objRespuesta);
            // $objRespuesta->execute();

            // $listarUsuarios = $objRespuesta->fetchAll();
            if ($objRespuesta->execute()) {

                $mensaje = ok;
            }
        } catch (Exception $e) {
            $mensaje = $e;
        }
        return $mensaje;
    }

    // editar Hembras
    public static function mdlEditarHembras($ins_Guardar_codigo_edit,$Guardar_NombreHem_edit, $Guardar_EdadHem_edit, $Guardar_PesoHem_edit ,$Guardar_GenotipoHem_edit,$Guardar_ProduccionHem_edit ,$Guardar_GrupoHem_edit,$Guardar_FechaNacHem_edit,$Guardar_NombrepaHem_edit, $Guardar_NombreabHem_edit, $Guardar_vacunaHem_edit ,$Guardar_FechavacHem_edit ,$Guardar_VacunFaltHem_edit ,$Guardar_CategoriaHem_edit,$Guardar_TratamientoHem_edit,$Guardar_NumpartosHem_edit,$Guardar_ObservacionHem_edit)
    {
        $mensaje = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("UPDATE inventario_hembras SET Nombre=:Guardar_NombreHem_edit,Edad=:Guardar_EdadHem_edit,Peso=:Guardar_PesoHem_edit,Genotipo=:Guardar_GenotipoHem_edit,Produccion_leche=:Guardar_ProduccionHem_edit,Grupo=:Guardar_GrupoHem_edit,Fecha_nacimiento=:Guardar_FechaNacHem_edit,Padre=:Guardar_NombrepaHem_edit,Abuelo_materno=:Guardar_NombreabHem_edit,Nombre_vacuna=:Guardar_vacunaHem_edit,Fecha_vacuna=:Guardar_FechavacHem_edit,vacunas_faltantes=:Guardar_VacunFaltHem_edit,Categoria=:Guardar_CategoriaHem_edit,Tratamientos=:Guardar_TratamientoHem_edit,Num_partos=:Guardar_NumpartosHem_edit,Observaciones=:Guardar_ObservacionHem_edit,Raza='1 - Holstein' WHERE Codigo=:ins_Guardar_codigo_edit;");
            $objRespuesta->bindparam(":ins_Guardar_codigo_edit", $ins_Guardar_codigo_edit);
            $objRespuesta->bindparam(":Guardar_NombreHem_edit", $Guardar_NombreHem_edit);
            $objRespuesta->bindparam(":Guardar_EdadHem_edit", $Guardar_EdadHem_edit);
            $objRespuesta->bindparam(":Guardar_PesoHem_edit", $Guardar_PesoHem_edit);
            $objRespuesta->bindparam(":Guardar_GenotipoHem_edit", $Guardar_GenotipoHem_edit);
            $objRespuesta->bindparam(":Guardar_ProduccionHem_edit", $Guardar_ProduccionHem_edit);
            $objRespuesta->bindparam(":Guardar_GrupoHem_edit", $Guardar_GrupoHem_edit);
            $objRespuesta->bindparam(":Guardar_FechaNacHem_edit", $Guardar_FechaNacHem_edit);
            $objRespuesta->bindparam(":Guardar_NombrepaHem_edit", $Guardar_NombrepaHem_edit);
            $objRespuesta->bindparam(":Guardar_NombreabHem_edit", $Guardar_NombreabHem_edit);
            $objRespuesta->bindparam(":Guardar_vacunaHem_edit", $Guardar_vacunaHem_edit);
            $objRespuesta->bindparam(":Guardar_FechavacHem_edit", $Guardar_FechavacHem_edit);
            $objRespuesta->bindparam(":Guardar_VacunFaltHem_edit", $Guardar_VacunFaltHem_edit);
            $objRespuesta->bindparam(":Guardar_CategoriaHem_edit", $Guardar_CategoriaHem_edit);
            $objRespuesta->bindparam(":Guardar_TratamientoHem_edit", $Guardar_TratamientoHem_edit);
            $objRespuesta->bindparam(":Guardar_NumpartosHem_edit", $Guardar_NumpartosHem_edit);
            $objRespuesta->bindparam(":Guardar_ObservacionHem_edit", $Guardar_ObservacionHem_edit);
            //$objRespuesta->bindparam(":Guardar_Raza_edit", $Guardar_Raza_edit);

           
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





 

}
?>