<?php
include_once "conexionadmin.php";
class mdlOperaciones
{



    public static function mdlGuardarIngreso($Guardar_nom_ingreso,$Guardar_pers_ingreso,$Guardar_fecha_ingreso,$Guardar_valor_ingreso)
    {
        $mensaje = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("INSERT INTO ingresos(Nombre_ingreso,persona_recibe,fecha_ingreso,valor_ingreso)values(:Guardar_nom_ingreso,:Guardar_pers_ingreso,:Guardar_fecha_ingreso,:Guardar_valor_ingreso)");
            // $objRespuesta->execute();
            $objRespuesta->bindparam(":Guardar_nom_ingreso", $Guardar_nom_ingreso);
            $objRespuesta->bindparam(":Guardar_pers_ingreso", $Guardar_pers_ingreso);
            $objRespuesta->bindparam(":Guardar_fecha_ingreso", $Guardar_fecha_ingreso);
            $objRespuesta->bindparam(":Guardar_valor_ingreso", $Guardar_valor_ingreso);
           
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




    public static function mdlListarIngresos()
    {
        $mensaje = "";
        $listarUsuarios = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("SELECT * FROM ingresos");
            $objRespuesta->execute();
            $listarUsuarios = $objRespuesta->fetchAll();
            $objRespuesta = null;
        } catch (Exception $e) {
            $listarUsuarios = $e;
        }
        return $listarUsuarios;
    }
    // seccion de categorias
    public static function mdlGuardarGasto($Guardar_nom_gast,$Guardar_pers_gast,$Guardar_fecha_gasto,$Guardar_valor_gasto)
    {
        $mensaje = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("INSERT INTO gastos(Nombre_gasto,nombre_persona,fecha_gasto,valor_gasto)values(:Guardar_nom_gast,:Guardar_pers_gast,:Guardar_fecha_gasto,:Guardar_valor_gasto)");
            // $objRespuesta->execute();
            $objRespuesta->bindparam(":Guardar_nom_gast", $Guardar_nom_gast);
            $objRespuesta->bindparam(":Guardar_pers_gast", $Guardar_pers_gast);
            $objRespuesta->bindparam(":Guardar_fecha_gasto", $Guardar_fecha_gasto);
            $objRespuesta->bindparam(":Guardar_valor_gasto", $Guardar_valor_gasto);
           
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

    public static function mdlListarGastos()
    {
        $mensaje = "";
        $listarUsuarios = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("SELECT * FROM gastos");
            $objRespuesta->execute();
            $listarUsuarios = $objRespuesta->fetchAll();
            $objRespuesta = null;
        } catch (Exception $e) {
            $listarUsuarios = $e;
        }
        return $listarUsuarios;
    }
    
    
   
    public static function mdlEliminarGasto($Id_gasto)
    {
        $mensaje = "";
        $BorrarUsuarios = "";


        try {
            $objRespuesta = conexion::conectar()->prepare("DELETE FROM gastos WHERE Id_gasto =:Id_gasto");
            $objRespuesta->bindparam(":Id_gasto", $Id_gasto);
            // echo json_encode($objRespuesta);
            // $objRespuesta->execute();

            // $listarUsuarios = $objRespuesta->fetchAll();
            if ($objRespuesta->execute()) {

                $mensaje = "ok";
            }
        } catch (Exception $e) {
            $mensaje = $e;
        }

        return $mensaje;
    }
    public static function mdlEditarGastos($Id_gasto,$Guardar_editnom_gast,$Guardar_editpers_gast,$Guardar_editfecha_gasto,$Guardar_editvalor_gasto)
    {
        $mensaje = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("UPDATE gastos SET Nombre_gasto=:Guardar_editnom_gast,nombre_persona=:Guardar_editpers_gast,fecha_gasto=:Guardar_editfecha_gasto,valor_gasto=:Guardar_editvalor_gasto WHERE Id_gasto=:Id_gasto;");
            $objRespuesta->bindparam(":Id_gasto", $Id_gasto);
            $objRespuesta->bindparam(":Guardar_editnom_gast", $Guardar_editnom_gast);
            $objRespuesta->bindparam(":Guardar_editpers_gast", $Guardar_editpers_gast);
            $objRespuesta->bindparam(":Guardar_editfecha_gasto", $Guardar_editfecha_gasto);
            $objRespuesta->bindparam(":Guardar_editvalor_gasto", $Guardar_editvalor_gasto);


            if ($objRespuesta->execute()) {
                $mensaje = "ok";
            } else {
                $mensaje = "ERROR EN EDICION";
            }

        } catch (Exception $e) {
            $mensaje = $e;
        }
        return $mensaje;
    }
    public static function mdlEditarIngresos($id_ingreso,$Guardar_nomEdit_ingreso,$Guardar_persEdit_ingreso,$Guardar_fechaEdit_ingreso,$Guardar_valorEdit_ingreso)
    {
        $mensaje = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("UPDATE ingresos SET Nombre_ingreso=:Guardar_nomEdit_ingreso,persona_recibe=:Guardar_persEdit_ingreso,fecha_ingreso=:Guardar_fechaEdit_ingreso,valor_ingreso=:Guardar_valorEdit_ingreso WHERE id_ingreso=:id_ingreso;");
            $objRespuesta->bindparam(":id_ingreso", $id_ingreso);
            $objRespuesta->bindparam(":Guardar_nomEdit_ingreso", $Guardar_nomEdit_ingreso);
            $objRespuesta->bindparam(":Guardar_persEdit_ingreso", $Guardar_persEdit_ingreso);
            $objRespuesta->bindparam(":Guardar_fechaEdit_ingreso", $Guardar_fechaEdit_ingreso);
            $objRespuesta->bindparam(":Guardar_valorEdit_ingreso", $Guardar_valorEdit_ingreso);


            if ($objRespuesta->execute()) {
                $mensaje = "ok";
            } else {
                $mensaje = "ERROR EN EDICION";
            }

        } catch (Exception $e) {
            $mensaje = $e;
        }
        return $mensaje;
    }
    public static function mdlEliminarIngreso($id_ingreso)
    {
        $mensaje = "";
        $BorrarUsuarios = "";


        try {
            $objRespuesta = conexion::conectar()->prepare("DELETE FROM  ingresos WHERE id_ingreso =:id_ingreso");
            $objRespuesta->bindparam(":id_ingreso", $id_ingreso);
            // echo json_encode($objRespuesta);
            // $objRespuesta->execute();

            // $listarUsuarios = $objRespuesta->fetchAll();
            if ($objRespuesta->execute()) {

                $mensaje = "ok";
            }
        } catch (Exception $e) {
            $mensaje = $e;
        }

        return $mensaje;
    }
    






    
    
    public static function mdlEliminarInventario($Codigo_product)
    {
        $mensaje = "";
        $BorrarUsuarios = "";


        try {
            $objRespuesta = conexion::conectar()->prepare("DELETE FROM  inventario_productos WHERE Codigo_product =:Codigo_product");
            $objRespuesta->bindparam(":Codigo_product", $Codigo_product);
            
            if ($objRespuesta->execute()) {

                $mensaje = "ok";
            }
        } catch (Exception $e) {
            $mensaje = $e;
        }

        return $mensaje;
    }
    

    public static function mdlListarInventarios()
    {
        $mensaje = "";
        $listarUsuarios = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("SELECT * FROM inventario_Productos");
            $objRespuesta->execute();
            $listarUsuarios = $objRespuesta->fetchAll();
            $objRespuesta = null;
        } catch (Exception $e) {
            $listarUsuarios = $e;
        }
        return $listarUsuarios;
    }

    public static function mdlGuardarInventario($Codigo_final,$Nombre_product,$Cantidad_product,$Valor_product)
    {
        $mensaje = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("INSERT INTO Inventario_Productos(Codigo_final,Nombre_product,Cantidad_product,Valor_product)values(:Codigo_final,:Nombre_product,:Cantidad_product,:Valor_product)");
            // $objRespuesta->execute();
            $objRespuesta->bindparam(":Codigo_final", $Codigo_final);
            $objRespuesta->bindparam(":Nombre_product", $Nombre_product);
            $objRespuesta->bindparam(":Cantidad_product", $Cantidad_product);
            $objRespuesta->bindparam(":Valor_product", $Valor_product);

           
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

    public static function mdlEditarInventarios($Codigo_product,$Guardar_codProductInvenEdit,$Guardar_nomProductInvenEdit,$Guardar_canProductInvenEdit,$Guardar_valProductInvenEdit)
    {
        $mensaje = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("UPDATE inventario_productos SET Codigo_final=:Guardar_nomEdit_ingreso,Nombre_product=:Guardar_persEdit_ingreso,Cantidad_product=:Guardar_fechaEdit_ingreso,Valor_product=:Guardar_valorEdit_ingreso WHERE Codigo_product=:Codigo_product;");
            $objRespuesta->bindparam(":Codigo_product", $Codigo_product);
            $objRespuesta->bindparam(":Guardar_nomEdit_ingreso", $Guardar_codProductInvenEdit);
            $objRespuesta->bindparam(":Guardar_persEdit_ingreso", $Guardar_nomProductInvenEdit);
            $objRespuesta->bindparam(":Guardar_fechaEdit_ingreso", $Guardar_canProductInvenEdit);
            $objRespuesta->bindparam(":Guardar_valorEdit_ingreso", $Guardar_valProductInvenEdit);


            if ($objRespuesta->execute()) {
                $mensaje = "ok";
            } else {
                $mensaje = "ERROR EN EDICION";
            }

        } catch (Exception $e) {
            $mensaje = $e;
        }
        return $mensaje;
    }

    public static function mdlListarSalas()
    {
        $mensaje = "";
        $listarUsuarios = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("SELECT * FROM salas");
            $objRespuesta->execute();
            $listarUsuarios = $objRespuesta->fetchAll();
            $objRespuesta = null;
        } catch (Exception $e) {
            $listarUsuarios = $e;
        }
        return $listarUsuarios;
    }
   
    public static function mdlEditarSala($id_desala, $newNameSala)
    {
        $mensaje = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("UPDATE salas SET nombre_sala=:newNameSala,id_sala=:id_desala WHERE id_sala=:id_desala;");
            $objRespuesta->bindparam(":id_desala", $id_desala);
            $objRespuesta->bindparam(":newNameSala", $newNameSala);

            if ($objRespuesta->execute()) {
                $mensaje = "ok";
            } else {
                $mensaje = "ERROR EN EDICION";
            }

        } catch (Exception $e) {
            $mensaje = $e;
        }
        return $mensaje;
    }




    public static function mdlFiltrarSalas ($id_sala)
    {

        $listaUsuarios = "";
        try {
            $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM sillas WHERE id_sala=:id_sala");
            $objRespuesta->bindParam(":id_sala",$id_sala);
            $objRespuesta->execute();
            $listaUsuarios = $objRespuesta->fetchAll();
            $objRespuesta = null;
        } catch (Exception $e) {
            $listaUsuarios = $e;
        }

        return $listaUsuarios;
    }


        public static function mdlListarSillas ()
        {
            $listaAreas = "";
            try {
                $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM salas");
                $objRespuesta->execute();
                $listaAreas = $objRespuesta->fetchAll();
                $objRespuesta = null;
            } catch (Exception $e) {
                $listaAreas = $e;
            }
            return $listaAreas;
        }








    public static function mdlGuardarPeli($guardar_nombre,$guardar_fecha,$guardar_img,$guardar_categoria,$sala)
    {
        $mensaje = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("INSERT INTO ingreso(nombre_pelicula,imagen,fecha,id_idarea,id_idsala)values(:guardar_nombre,:guardar_img,:guardar_fecha,:guardar_categoria,:sala)");
            // $objRespuesta->execute();
            $objRespuesta->bindparam(":guardar_nombre", $guardar_nombre);
            $objRespuesta->bindparam(":guardar_fecha", $guardar_fecha);
            $objRespuesta->bindparam(":guardar_img", $guardar_img);
            $objRespuesta->bindparam(":guardar_categoria", $guardar_categoria);
            $objRespuesta->bindparam(":sala", $sala);

            if ($objRespuesta->execute()) {
                $mensaje = "ok";
            } else {
                $mensaje = "ERROR EN REGISTRO";
            }

        } catch (Exception $e) {
            $mensaje = $e;
        }
        return $mensaje;

    }

    public static function mdlListarPeli()
    {
        $mensaje = "";
        $listarUsuarios = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("SELECT * FROM ingreso");
            $objRespuesta->execute();
            $listarUsuarios = $objRespuesta->fetchAll(PDO::FETCH_ASSOC);
            $objRespuesta = null;

        } catch (Exception $e) {
            $listarUsuarios = $e;
        }
        return $listarUsuarios;

    }


    public static function mdlEliminarPeli($id_pelicula)
    {
        $mensaje = "";
        $BorrarUsuarios = "";


        try {
            $objRespuesta = conexion::conectar()->prepare("DELETE FROM  ingreso WHERE id_pelicula =:id_pelicula");
            $objRespuesta->bindparam(":id_pelicula", $id_pelicula);
            if ($objRespuesta->execute()) {

                $mensaje = "ok";
            }
        } catch (Exception $e) {
            $mensaje = $e;
        }

        return $mensaje;
    }

    




    public static function mdlFiltrarPeliculasCategoria($id_categoria)
    {

        $listaUsuarios = "";
        try {
            $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM ingreso WHERE id_idarea=:id_categoria");
            $objRespuesta->bindParam(":id_categoria",$id_categoria);
            $objRespuesta->execute();
            $listaUsuarios = $objRespuesta->fetchAll();
            $objRespuesta = null;
        } catch (Exception $e) {
            $listaUsuarios = $e;
        }

        return $listaUsuarios;
    }


    

    public static function mdlEditarPeli($id_pelicula,$new_fecha,$new_nombre_pelicula, $new_img_Pelicula, $new_categoria_pelicula,$new_sala_pelicula)
    {
        $mensaje = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("UPDATE ingreso SET nombre_pelicula=:new_nombre_pelicula, imagen=:new_img_Pelicula,fecha=:new_fecha,id_idarea=:new_categoria_pelicula,id_idsala=:new_sala_pelicula WHERE id_pelicula=:id_pelicula;");
            $objRespuesta->bindparam(":id_pelicula", $id_pelicula);
            $objRespuesta->bindparam(":new_nombre_pelicula", $new_nombre_pelicula);
            $objRespuesta->bindparam(":new_fecha", $new_fecha);
            $objRespuesta->bindparam(":new_img_Pelicula", $new_img_Pelicula);
            $objRespuesta->bindparam(":new_categoria_pelicula", $new_categoria_pelicula);
            $objRespuesta->bindparam(":new_sala_pelicula", $new_sala_pelicula);

            
            if ($objRespuesta->execute()) {
                $mensaje = "ok";
            } else {
                $mensaje = "ERROR EN REGISTRO";
            }

        } catch (Exception $e) {
            $mensaje = $e;
        }
        return $mensaje;
    }

    public static function mdlListarAreas()
    {
        $listaAreas = "";
        try {
            $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM categorias");
            $objRespuesta->execute();
            $listaAreas = $objRespuesta->fetchAll();
            $objRespuesta = null;
        } catch (Exception $e) {
            $listaAreas = $e;
        }
        return $listaAreas;
    }




    // listar sillas database


public static function mdlListarSillasSalas ()
{
    $listarUsuarios = "";
    try {
        $objRespuesta = Conexion::conectar()->prepare("SELECT * FROM sillas");
        $objRespuesta->execute();
        $listarUsuarios = $objRespuesta->fetchAll();
        $objRespuesta = null;
    } catch (Exception $e) {
        $listarUsuarios = $e;
    }
    return $listarUsuarios;
}



public static function mdlEliminarSillas($id_delete_silla)
{
    $mensaje = "";
    $BorrarUsuarios = "";


    try {
        $objRespuesta = conexion::conectar()->prepare("DELETE FROM  sillas WHERE id_Silla =:id_delete_silla");
        $objRespuesta->bindparam(":id_delete_silla", $id_delete_silla);
        if ($objRespuesta->execute()) {

            $mensaje = "ok";
        }
    } catch (Exception $e) {
        $mensaje = $e;
    }

    return $mensaje;
}


public static function mdlEditarSillas($valid_id_silla,$new_num_silla,$new_estado_silla, $new_sala)
    {
        $mensaje = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("UPDATE sillas SET num_silla=:new_num_silla, estado=:new_estado_silla,id_sala=:new_sala WHERE id_silla=:valid_id_silla;");
            $objRespuesta->bindparam(":valid_id_silla", $valid_id_silla);
            $objRespuesta->bindparam(":new_num_silla", $new_num_silla);
            $objRespuesta->bindparam(":new_estado_silla", $new_estado_silla);
            $objRespuesta->bindparam(":new_sala", $new_sala);

            if ($objRespuesta->execute()) {
                $mensaje = "ok";
            } else {
                $mensaje = "ERROR EN REGISTRO";
            }

        } catch (Exception $e) {
            $mensaje = $e;
        }
        return $mensaje;
    }

    public static function mdlGuardarSilla($Guardar_numero_silla,$Guardar_estado_silla,$Guardar_sala)
    {
        $mensaje = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("INSERT INTO sillas(num_silla,estado,id_sala)values(:Guardar_numero_silla,:Guardar_estado_silla,:Guardar_sala)");
            // $objRespuesta->execute();
            $objRespuesta->bindparam(":Guardar_numero_silla", $Guardar_numero_silla);
            $objRespuesta->bindparam(":Guardar_estado_silla", $Guardar_estado_silla);
            $objRespuesta->bindparam(":Guardar_sala", $Guardar_sala);
            if ($objRespuesta->execute()) {
                $mensaje = "ok";
            } else {
                $mensaje = "ERROR EN REGISTRO";
            }

        } catch (Exception $e) {
            $mensaje = $e;
        }
        return $mensaje;

    }



    // seccion de seleccion del usuario
    public static function mdlSilla_Seleccionada_user($silla_seleccionada)
    {
        $mensaje = "";
        try {
            $objRespuesta = conexion::conectar()->prepare("UPDATE sillas SET estado='ocupada' WHERE num_silla=:silla_seleccionada;");
            $objRespuesta->bindparam(":silla_seleccionada", $silla_seleccionada);
            if ($objRespuesta->execute()) {
                $mensaje = "ok";
            } else {
                $mensaje = "ERROR EN EDICION";
            }

        } catch (Exception $e) {
            $mensaje = $e;
        }
        return $mensaje;
    }






// Corchete poner todo dentro del chorchete!!
}








?>