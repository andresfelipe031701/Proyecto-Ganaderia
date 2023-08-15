$(function() {
    var objTabla = null;
    formulario = false;
    formularioEditar = false;
    usuarioActual = "";
    var dataSet = [];
    var tabla = null;
    $("#seccionInventario").hide(100);
    $("#contenedorGastosyI").hide(100);
    $("#contenedor_seccionIngresos").hide(100);
    $("#seleccionbotones").show(100);
    $("#contenedor_form_gastos").hide(100);

   

    // SEGUNDA SECCION  PARTE INVENTARIO
    $("#seccionTablaInventario").hide(100);
    $("#contFormularioIngresos").hide(100);
    $("#contFormularioIngresosEdit").hide(100);
    $("#contenedor_Tabla_gastos").hide(100);
    $("#contenedorFormularioGastos").hide(100);
    $("#contenedorFormularioEditGastos").hide(100);
    $("#contenedor_tabla_Ingresos").hide(100);
    $("#contenedorFormularioIngresos").hide(100);
    $("#contenedorFormularioEditIngresos").hide(100);
    $("#contenedorGastosyI").hide(100);

    
    $("#Sección_Inventario").on("click", function() {
        $("#seccionTablaInventario").show(100);
        $("#contFormularioIngresos").hide(100);
        $("#contFormularioIngresosEdit").hide(100);
        $("#contenedor_Tabla_gastos").hide(100);
        $("#contenedorFormularioGastos").hide(100);
        $("#contenedorFormularioEditGastos").hide(100);
        $("#contenedor_tabla_Ingresos").hide(100);
        $("#contenedorFormularioIngresos").hide(100);
        $("#contenedorFormularioEditIngresos").hide(100);
        $("#contenedorGastosyI").hide(100);

    })
    
    $("#AñadirProductInventario").on("click", function() {
        $("#seccionTablaInventario").hide(100);
        $("#contFormularioIngresos").show(100);
        $("#contFormularioIngresosEdit").hide(100);
    })

    // PRIMERA SECCION DE GASTOS Y INGRESOS 
    // parte de gastos tabla y 2 formularios
    $("#contenedor_Tabla_gastos").hide(100);
    $("#contenedorFormularioGastos").hide(100);
    $("#contenedorFormularioEditGastos").hide(100);
    
    // parte de ingresos tabla y 2 formularios
    $("#contenedor_tabla_Ingresos").hide(100);
    $("#contenedorFormularioIngresos").hide(100);
    $("#contenedorFormularioEditIngresos").hide(100);
 // 2 secciones de gasto y de ingreso
 $("#AñadirGasto").on("click", function() {
    $("#contenedor_Tabla_gastos").show(100);
    $("#contenedorFormularioGastos").hide(100);
    $("#contenedorFormularioEditGastos").hide(100);
})
$("#AñadirIngreso").on("click", function() {
     $("#contenedor_tabla_Ingresos").show(100);
    $("#contenedorFormularioIngresos").hide(100);
$("#contenedorFormularioEditIngresos").hide(100);

})
//    botones para agregar a cada table ya sea gasto o ingresos
$("#AddGasto").on("click", function() {
    $("#contenedor_Tabla_gastos").hide(100);
    $("#contenedorFormularioGastos").show(100);
})

$("#AddIngreso").on("click", function() {
$("#contenedor_tabla_Ingresos").hide(100);
$("#contenedorFormularioIngresos").show(100);
})
// FINAL DE GASTOS Y INGRESOS


    $("#Sección_gastos").on("click", function() {
        $("#contenedor_Tabla_gastos").show(100);
        $("#seccionTablaInventario").hide(100);
        $("#contFormularioIngresos").hide(100);
        $("#contFormularioIngresosEdit").hide(100);
        $("#contenedorGastosyI").show(100);

    })
   
   

    $("#guardarGasto").on("click", function() {
        var Guardar_nom_gast = $("#Guardar_nom_gast").val();
        var Guardar_pers_gast = $("#Guardar_pers_gast").val();
        var Guardar_fecha_gasto = $("#Guardar_fecha_gasto").val();
        var Guardar_valor_gasto = $("#Guardar_valor_gasto").val();
        var objData = new FormData()
        objData.append("Guardar_nom_gast", Guardar_nom_gast);
        objData.append("Guardar_pers_gast", Guardar_pers_gast);
        objData.append("Guardar_fecha_gasto", Guardar_fecha_gasto);
        objData.append("Guardar_valor_gasto", Guardar_valor_gasto);
        $.ajax({
            url: "admincontrol.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(respuesta) {
            $("#Guardar_nom_gast").val("");
            $("#Guardar_pers_gast").val("");
            $("#Guardar_fecha_gasto").val("");
            $("#Guardar_valor_gasto").val("");
            $("#contenedorFormularioGastos").hide(100);
            $("#contenedor_Tabla_gastos").show(100);

            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Registrado correctamente',
                showConfirmButton: false,
                timer: 1000
            })
            listarGastos();

        })

    })

    $("#tablaGastos").on("click", "#btn_eliminarGastos", function() {
        actualizarTabla();

                var Id_gasto = $(this).attr("Id_gasto");
                $("#btn_eliminarGastos").val(Id_gasto);
        
                var objData = new FormData()
                objData.append("borrarGasto", Id_gasto);
        
                $.ajax({
                    url: "admincontrol.php",
                    type: "post",
                    dataType: "json",
                    data: objData,
                    cache: false,
                    contentType: false,
                    processData: false
                })
        
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Gasto eliminado',
                    showConfirmButton: false,
                    timer: 1000
                })
                actualizarTabla();
                 listarGastos();
        
        
            })


    listarGastos();
    // listar gastos
    function listarGastos() {
                var objData = new FormData();
                objData.append("Gastos", "ok");
                $.ajax({
                    url: "admincontrol.php",
                    type: "post",
                    dataType: "json",
                    data: objData,
                    cache: false,
                    contentType: false,
                    processData: false
                }).done(function(respuesta) {
                    var dataSet = [];
                    if (respuesta != null) {
                        respuesta.forEach(listarUsuarios);
            
                        function listarUsuarios(item, index) {
                            objBotones = '<div class="btn-group" id="botons">';
                            objBotones += '<button id="btn_editarGastos" type="button" class="btn btn-warning" Id_gasto="' + item.Id_gasto + '"Nombre_gasto="' + item.Nombre_gasto + '"nombre_persona="'+ item.nombre_persona +'"fecha_gasto="' + item.fecha_gasto + '"valor_gasto="' + item.valor_gasto + '">editar</button>';
                            objBotones += '<button id="btn_eliminarGastos" type="button" class="btn btn-danger" Id_gasto="' + item.Id_gasto + '">eliminar</button>';
                            objBotones += '</div>';
                            dataSet.push([item.Nombre_gasto,item.nombre_persona,item.fecha_gasto,item.valor_gasto,objBotones]);
                            actualizarTabla(dataSet)
                       
                        }
                        actualizarTabla(dataSet)
                    }
                })
            }
            actualizarTabla();
        function actualizarTabla(dataSet) {
        if (tabla != null) {
            $("#tablaGastos").dataTable().fnDestroy();
        }
        tabla = $("#tablaGastos").DataTable({
            data: dataSet
        })
    }
            // boton editar tabla gastos
    $("#tablaGastos").on("click", "#btn_editarGastos", function() {
    $("#contenedorFormularioEditGastos").show(100);
    $("#contenedorFormularioGastos").hide(100);
    $("#contenedor_Tabla_gastos").hide(100);
        var Id_gasto = $(this).attr("Id_gasto");
        var Nombre_gasto = $(this).attr("Nombre_gasto");
        var nombre_persona = $(this).attr("nombre_persona");
        var fecha_gasto = $(this).attr("fecha_gasto");
        var valor_gasto = $(this).attr("valor_gasto");
        $("#btn_editarGastos").val(Id_gasto);
        $("#Guardar_editnom_gast").val(Nombre_gasto);
        $("#Guardar_editpers_gast").val(nombre_persona);
        $("#Guardar_editfecha_gasto").val(fecha_gasto);
        $("#Guardar_editvalor_gasto").val(valor_gasto);
        
    })
            // boton enviar edit
    $("#guardarGastoEdit").on("click", function() {
        var Id_gasto = $("#btn_editarGastos").val();
        var Guardar_editnom_gast = $("#Guardar_editnom_gast").val();
        var Guardar_editpers_gast = $("#Guardar_editpers_gast").val();
        var Guardar_editfecha_gasto = $("#Guardar_editfecha_gasto").val();
        var Guardar_editvalor_gasto = $("#Guardar_editvalor_gasto").val();
        var objData = new FormData()
        objData.append("Id_gasto", Id_gasto);
        objData.append("Guardar_editnom_gast", Guardar_editnom_gast);
        objData.append("Guardar_editpers_gast", Guardar_editpers_gast);
        objData.append("Guardar_editfecha_gasto", Guardar_editfecha_gasto);
        objData.append("Guardar_editvalor_gasto", Guardar_editvalor_gasto);

        $.ajax({
            url: "admincontrol.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(respuesta) {
            $("#contenedorFormularioEditGastos").hide(100);
            $("#contenedorFormularioGastos").hide(100);
            $("#contenedor_Tabla_gastos").show(100);
            $("#new_nombre_pelicula").val();
            $("#new_img_Pelicula").val();
            $("#selectAreaedit").val();
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Gasto editado',
                showConfirmButton: false,
                timer: 1000
            })
            $("#contenedorTabla").show();
            listarGastos();
        })
    })




















    // seccion ingresos
    $("#guardarIngresos").on("click", function() {
        alert("gogo");
        var Guardar_nom_ingreso = $("#Guardar_nom_ingreso").val();
        var Guardar_pers_ingreso = $("#Guardar_pers_ingreso").val();
        var Guardar_fecha_ingreso = $("#Guardar_fecha_ingreso").val();
        var Guardar_valor_ingreso = $("#Guardar_valor_ingreso").val();
        var objData = new FormData()
        objData.append("Guardar_nom_ingreso", Guardar_nom_ingreso);
        objData.append("Guardar_pers_ingreso", Guardar_pers_ingreso);
        objData.append("Guardar_fecha_ingreso", Guardar_fecha_ingreso);
        objData.append("Guardar_valor_ingreso", Guardar_valor_ingreso);
        $.ajax({
            url: "admincontrol.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(respuesta) {
            $("#contenedor_tabla_Ingresos").show(100);
    $("#contenedorFormularioIngresos").hide(100);
    $("#contenedorFormularioEditIngresos").hide(100);

            
            $("#Guardar_nom_ingreso").val("");
            $("#Guardar_pers_ingreso").val("");
            $("#Guardar_fecha_ingreso").val("");
            $("#Guardar_valor_ingreso").val("");

            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Registrado correctamente',
                showConfirmButton: false,
                timer: 1000
            })
    listarIngresos();

        })

    })
    listarIngresos()
    function listarIngresos() {
        var objData = new FormData();
        objData.append("Ingresos", "ok");
        $.ajax({
            url: "admincontrol.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(respuesta) {
            var dataSet = [];
            if (respuesta != null) {
                respuesta.forEach(listarUsuarios);
    
                function listarUsuarios(item) {
                    objBotones = '<div class="btn-group" id="botons">';
                    objBotones += '<button id="btn_editarIngresos" type="button" class="btn btn-warning" Nombre_ingreso="' + item.Nombre_ingreso + '"persona_recibe="' + item.persona_recibe + '"fecha_ingreso="'+ item.fecha_ingreso +'"valor_ingreso="' + item.valor_ingreso + '">editar</button>';
                    objBotones += '<button id="btn_eliminarIngresos" type="button" class="btn btn-danger" id_ingreso="' + item.id_ingreso + '">eliminar</button>';
                    objBotones += '</div>';
                    dataSet.push([item.Nombre_ingreso,item.persona_recibe,item.fecha_ingreso,item.valor_ingreso,objBotones]);
                    actualizarTablaIngreso(dataSet)
                }
                actualizarTablaIngreso(dataSet)
            }
        })
    }

    actualizarTablaIngreso();
    function actualizarTablaIngreso(dataSet) {
    if (tabla != null) {
        $("#tablaIngresos").dataTable().fnDestroy();
    }
    tabla = $("#tablaIngresos").DataTable({
        data: dataSet
    })
}

$("#contenedor_seccionIngresos").hide(100);



// boton editar tabla ingresos
    $("#tablaIngresos").on("click", "#btn_editarIngresos", function() {
        $("#contenedor_tabla_Ingresos").hide(100);
        $("#contenedorFormularioIngresos").hide(100);
        $("#contenedorFormularioEditIngresos").show(100);
    

        
        var id_ingreso = $(this).attr("id_ingreso");
        var Nombre_ingreso = $(this).attr("Nombre_ingreso");
        var persona_recibe = $(this).attr("persona_recibe");
        var fecha_ingreso = $(this).attr("fecha_ingreso");
        var valor_ingreso = $(this).attr("valor_ingreso");
        $("#btn_editarIngresos").val(id_ingreso);
        $("#Guardar_nomEdit_ingreso").val(Nombre_ingreso);
        $("#Guardar_persEdit_ingreso").val(persona_recibe);
        $("#Guardar_fechaEdit_ingreso").val(fecha_ingreso);
        $("#Guardar_valorEdit_ingreso").val(valor_ingreso);

    })
        // boton enviar edit
        $("#guardarIngresoEdit").on("click", function() {
            var id_ingreso = $("#btn_editarIngresos").val();
            var Guardar_nomEdit_ingreso = $("#Guardar_nomEdit_ingreso").val();
            var Guardar_persEdit_ingreso = $("#Guardar_persEdit_ingreso").val();
            var Guardar_fechaEdit_ingreso = $("#Guardar_fechaEdit_ingreso").val();
            var Guardar_valorEdit_ingreso = $("#Guardar_valorEdit_ingreso").val();
            var objData = new FormData()
            objData.append("id_ingreso", id_ingreso);
            objData.append("Guardar_nomEdit_ingreso", Guardar_nomEdit_ingreso);
            objData.append("Guardar_persEdit_ingreso", Guardar_persEdit_ingreso);
            objData.append("Guardar_fechaEdit_ingreso", Guardar_fechaEdit_ingreso);
            objData.append("Guardar_valorEdit_ingreso", Guardar_valorEdit_ingreso);
            $.ajax({
                url: "admincontrol.php",
                type: "post",
                dataType: "json",
                data: objData,
                cache: false,
                contentType: false,
                processData: false
            }).done(function(respuesta) {
                $("#new_nombre_pelicula").val();
                $("#new_img_Pelicula").val();
                $("#selectAreaedit").val();
                $("#contenedor_tabla_Ingresos").show(100);
                $("#contenedorFormularioIngresos").hide(100);
                $("#contenedorFormularioEditIngresos").hide(100);
            
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Gasto editado',
                    showConfirmButton: false,
                    timer: 1000
                })
                $("#contenedorTabla").show();
        listarGastos();
            })
        })

        $("#tablaIngresos").on("click", "#btn_eliminarIngresos", function() {
                    var id_ingreso = $(this).attr("id_ingreso");
                    $("#btn_eliminarIngresos").val(id_ingreso);
            
                    var objData = new FormData()
                    objData.append("borrarIngreso", id_ingreso);
                    $.ajax({
                        url: "admincontrol.php",
                        type: "post",
                        dataType: "json",
                        data: objData,
                        cache: false,
                        contentType: false,
                        processData: false
                    })
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Ingreso eliminado',
                        showConfirmButton: false,
                        timer: 1000
                    })
                    listarIngresos()
                    actualizarTablaIngreso();
                })



                // seccion inventarios
                listarInventarios()
                function listarInventarios() {
                    var objData = new FormData();
                    objData.append("Inventario", "ok");
                    $.ajax({
                        url: "admincontrol.php",
                        type: "post",
                        dataType: "json",
                        data: objData,
                        cache: false,
                        contentType: false,
                        processData: false
                    }).done(function(respuesta) {
                        var dataSet = [];
                        if (respuesta != null) {
                            respuesta.forEach(listarUsuarios);
                
                            function listarUsuarios(item) {
                                objBotones = '<div class="btn-group" id="botons">';
                                objBotones += '<button id="btn_editarInventario" type="button" class="btn btn-warning" Codigo_product="'+item.Codigo_product+'"Codigo_final="' + item.Codigo_final + '"Nombre_product="' + item.Nombre_product + '"Cantidad_product="'+ item.Cantidad_product +'"Valor_product="' + item.Valor_product + '">editar</button>';
                                objBotones += '<button id="btn_eliminarInventario" type="button" class="btn btn-danger" Codigo_product="'+item.Codigo_product+'">eliminar</button>';
                                objBotones += '</div>';
                                dataSet.push([item.Codigo_final,item.Nombre_product,item.Cantidad_product,item.Valor_product,objBotones]);
                                actualizarTablaInventario(dataSet)
                            }
                            actualizarTablaInventario(dataSet)
                        }
                    })
                }

                actualizarTablaInventario();
                function actualizarTablaInventario(dataSet) {
                if (tabla != null) {
                    $("#tablaInventario").dataTable().fnDestroy();
                }
                tabla = $("#tablaInventario").DataTable({
                    data: dataSet
                })
            }
            $("#tablaInventario").on("click", "#btn_eliminarInventario", function() {
                var Codigo_product = $(this).attr("Codigo_product");
                $("#btn_eliminarInventario").val(Codigo_product);
        
                var objData = new FormData()
                objData.append("borrarInventario", Codigo_product);
                $.ajax({
                    url: "admincontrol.php",
                    type: "post",
                    dataType: "json",
                    data: objData,
                    cache: false,
                    contentType: false,
                    processData: false
                })
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Producto eliminado',
                    showConfirmButton: false,
                    timer: 1000
                })
                listarInventarios()
                actualizarTablaInventario();
            })


            // boton editar tabla ingresos
    $("#tablaInventario").on("click", "#btn_editarInventario", function() {
        $("#seccionTablaInventario").hide(100);
        $("#contFormularioIngresos").hide(100);
        $("#contFormularioIngresosEdit").show(100);
        var Codigo_product = $(this).attr("Codigo_product");
        var Codigo_final = $(this).attr("Codigo_final");
        var Nombre_product = $(this).attr("Nombre_product");
        var Cantidad_product = $(this).attr("Cantidad_product");
        var Valor_product = $(this).attr("Valor_product");
        $("#btn_editarInventario").val(Codigo_product);
        $("#Guardar_codProductInvenEdit").val(Codigo_final);
        $("#Guardar_nomProductInvenEdit").val(Nombre_product);
        $("#Guardar_canProductInvenEdit").val(Cantidad_product);
        $("#Guardar_valProductInvenEdit").val(Valor_product);

    })
        // boton enviar edit
        $("#guardarProductoInvEdit").on("click", function() {
            var Codigo_product = $("#btn_editarInventario").val();
            var Guardar_codProductInvenEdit = $("#Guardar_codProductInvenEdit").val();
            var Guardar_nomProductInvenEdit = $("#Guardar_nomProductInvenEdit").val();
            var Guardar_canProductInvenEdit = $("#Guardar_canProductInvenEdit").val();
            var Guardar_valProductInvenEdit = $("#Guardar_valProductInvenEdit").val();
            var objData = new FormData()
            objData.append("Codigo_product", Codigo_product);
            objData.append("Guardar_codProductInvenEdit", Guardar_codProductInvenEdit);
            objData.append("Guardar_nomProductInvenEdit", Guardar_nomProductInvenEdit);
            objData.append("Guardar_canProductInvenEdit", Guardar_canProductInvenEdit);
            objData.append("Guardar_valProductInvenEdit", Guardar_valProductInvenEdit);
            $.ajax({
                url: "admincontrol.php",
                type: "post",
                dataType: "json",
                data: objData,
                cache: false,
                contentType: false,
                processData: false
            }).done(function(respuesta) {
                $("#Guardar_nomEdit_ingreso").val();
                $("#Guardar_persEdit_ingreso").val();
                $("#Guardar_valorEdit_ingreso").val();
                $("#Guardar_fechaEdit_ingreso").val();
                
                $("#seccionTablaInventario").show(100);
                 $("#contFormularioIngresos").hide(100);
                 $("#contFormularioIngresosEdit").hide(100);
            
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Producto editado',
                    showConfirmButton: false,
                    timer: 1000
                })
        listarInventarios()

            })
        })


                $("#guardarProductoInv").on("click", function() {
                    var Guardar_codProductInven = $("#Guardar_codProductInven").val();
                    var Guardar_nomProductInven = $("#Guardar_nomProductInven").val();
                    var Guardar_canProductInven = $("#Guardar_canProductInven").val();
                    var Guardar_valProductInven = $("#Guardar_valProductInven").val();
                    var objData = new FormData()
                    objData.append("Guardar_codProductInven", Guardar_codProductInven);
                    objData.append("Guardar_nomProductInven", Guardar_nomProductInven);
                    objData.append("Guardar_canProductInven", Guardar_canProductInven);
                    objData.append("Guardar_valProductInven", Guardar_valProductInven);
                    $.ajax({
                        url: "admincontrol.php",
                        type: "post",
                        dataType: "json",
                        data: objData,
                        cache: false,
                        contentType: false,
                        processData: false
                    }).done(function(respuesta) {
                        $("#seccionTablaInventario").show(100);
                        $("#contFormularioIngresos").hide(100);
                        $("#contFormularioIngresosEdit").hide(100);
            
                        
                        $("#Guardar_codProductInven").val("");
                        $("#Guardar_nomProductInven").val("");
                        $("#Guardar_canProductInven").val("");
                        $("#Guardar_valProductInven").val("");
            
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Registrado correctamente',
                            showConfirmButton: false,
                            timer: 1000
                        })
                    })
                    listarInventarios()
                    actualizarTablaInventario();
                })

// function listarDatos() {
//     var objBotones = "";
//     var objData = new FormData();
//     objData.append("listarSalas", "ok");
//     $.ajax({
//         url: "admincontrol.php",
//         type: "post",
//         dataType: "json",
//         data: objData,
//         cache: false,
//         contentType: false,
//         processData: false
//     }).done(function(respuesta) {
//         var dataSet = [];
//         if (respuesta != null) {
//             respuesta.forEach(listarUsuarios);

//             function listarUsuarios(item, index) {
//                 // opcionSelect='<option>'+item.nombre+'</option>'
//                 objBotones = '<div class="btn-group" id="botons">';
//                 objBotones += '<button id="btn_edit_sala" type="button" class="btn btn-warning" id_sala="'+item.id_sala+'" nombre_sala="' + item.nombre_sala + '" >editar</button>';
//                 objBotones += '<button id="btn_eliminar_sala" type="button" class="btn btn-danger" id_sala="'+item.id_sala+'">eliminar</button>';
//                 objBotones += '</div>';
//                 dataSet.push([item.nombre_sala, objBotones]);
//             }
//             cargarDatosSelectSalas();

//         }

//     })

// }
//     function cargarDatosSelectSalas() {
//         var objData = new FormData();
//         objData.append("cargar_Selec_Sillas", "ok");
//         $.ajax({
//             url: "admincontrol.php",
//             type: "post",
//             dataType: "json",
//             data: objData,
//             cache: false,
//             contentType: false,
//             processData: false
//         }).done(function(respuesta) {
//             var opciones = '';

//             respuesta.forEach(agregarOpciones);

//             function agregarOpciones(item, index) {

//                 opciones += '<option value="' + item.id_sala + '">'+ item.nombre_sala +'</option>';
//             }
//             listarDatos()

//             // $("#selectSalas").html(opciones);
//             $("#selectSalas").html(opciones);
//             $("#selectSalasEdit").html(opciones);
//         })
//     }
//     // $("#edit_sa_nav").disable(true);
//     $("#formularioEditarPeli").hide();


//     function cargarDatosSelectArea() {
//         var objData = new FormData();
//         objData.append("cargarAreas", "ok");

//         $.ajax({
//             url: "admincontrol.php",
//             type: "post",
//             dataType: "json",
//             data: objData,
//             cache: false,
//             contentType: false,
//             processData: false
//         }).done(function(respuesta) {
//             var opciones = '';

//             respuesta.forEach(agregarOpciones);

//             function agregarOpciones(item, index) {
//                 $("#selectArea").val("");

//                 opciones += '<option value="' + item.id_categoria + '">' + item.nombre_categoria + '</option>';
//             }

//             $("#selectAreas").html(opciones);
//             $("#selectArea").html(opciones);
//             $("#selectAreaedit").html(opciones);


//         })
//     }





    // $("#selectAreas").change(function() {
    //     var id_categoria = $(this).val();
    //     var objData = new FormData();
    //     objData.append("filtroCategoria", id_categoria);
    //     $.ajax({
    //         url: "../editadmin/admincontrol.php",
    //         type: "post",
    //         dataType: "json",
    //         data: objData,
    //         cache: false,
    //         contentType: false,
    //         processData: false
    //     }).done(function(respuesta) {
    //         dataSet = [];
    //         let objimg = [];
    //         respuesta.forEach(cargarFiltroUsuarios);
    
    //             function cargarFiltroUsuarios(item, index) {
    //                 objBotones = '<div class="btn-group" id="botons">';
    //                 objBotones += '<button id="btn_edit_silla" type="button" class="btn btn-warning" id_silla="'+item.id_silla+'" num_silla="' + item.num_silla + '" estado="'+item.estado+'" id_sala="'+item.id_sala+'">editar</button>';
    //                 objBotones += '<button id="btn_eliminar_silla" type="button" class="btn btn-danger" id_silla="'+item.id_silla+'">eliminar</button>';
    //                 objBotones += '</div>';
    //                 dataSet.push([item.num_silla,item.estado,item.id_sala,objBotones]);
    //         }
    //         listarDatos()
    //         actualizarTablaSillas(dataSet)
    //     })
    // })
    











//     $("#contenedorFormularioEditar").hide(100);
//     $("#formulario").hide(100);
//     $("#formularioArea").hide(100);
//     $("#datosTablaProductos").html("");



//     $("#agregar").on("click", function() {
//         if ((formulario == false)) {
//             $("#formulario").fadeIn(1000);
//             // $("#contenedorTabla").removeClass("col-sm-12").addClass("col-sm-8");
//             $('#btn_editarUsuario').attr('disabled', true);
//             $('#btn_eliminarUsuario').attr('disabled', true);
//         } else {
//             $("#formulario").hide();
//             // $("#contenedorTabla").removeClass("col-sm-12").addClass("col-sm-8").hide(250);
//             formulario = false;
//         }
//         $("#contenedorTabla").slideDown("slow")
//     });


//     actualizarTabla(dataSet)

//     

//     




//     function listarDatos() {
//         var objData = new FormData();
//         objData.append("listarDatos", "ok");
//         $.ajax({
//             url: "admincontrol.php",
//             type: "post",
//             dataType: "json",
//             data: objData,
//             cache: false,
//             contentType: false,
//             processData: false
//         }).done(function(respuesta) {
//             console.log(respuesta)
//             var dataSet = [];
//             let objimg = [];
//             if (respuesta != null) {
//                 respuesta.forEach(listarUsuarios);
    
//                 function listarUsuarios(item, index) {
//                     objBotones = '<div class="btn-group" id="botons">';
//                     objBotones += '<button id="btn_editarPeli" type="button" class="btn btn-warning" id_pelicula="' + item.id_pelicula + '" nombre_pelicula="' + item.nombre_pelicula + '" fecha="'+ item.fecha +'"id_idarea="' + item.id_idarea + '"  src="data:images/jpg;base64,'+item.img_pelicula+'" id_idsala="' + item.id_idsala + '">editar</button>';
//                     objBotones += '<button id="btn_eliminarPeli" type="button" class="btn btn-danger" id_pelicula="' + item.id_pelicula + '">eliminar</button>';
//                     objBotones += '</div>';
//                     objimg += '<img heigth="20px"  src="data:images/jpg;base64,' +item.img_pelicula+ '">';

//                     dataSet.push([item.nombre_pelicula,item.fecha,objimg,objBotones]);
//                 }
//                 actualizarTabla(dataSet)
//             }
    
//         })
    
//     }





//     $("#selectAreas").change(function() {
//         var id_categoria = $(this).val();
//         var objData = new FormData();
//         objData.append("filtroCategoria", id_categoria);
//         $.ajax({
//             url: "admincontrol.php",
//             type: "post",
//             dataType: "json",
//             data: objData,
//             cache: false,
//             contentType: false,
//             processData: false
//         }).done(function(respuesta) {

//             dataSet = [];
//             let objimg = [];

//             respuesta.forEach(cargarFiltroUsuarios);

//             function cargarFiltroUsuarios(item, index) {

//                 objBotones = '<div class="btn-group" id="botons">';
//                 objBotones += '<button id="btn_editarPeli" type="button" class="btn btn-warning" id_pelicula="' + item.id_pelicula + '" nombre_pelicula="' + item.nombre_pelicula + '"fecha="' + item.fecha + '"id_idarea="' + item.id_idarea + '"  src="data:images/jpg;base64,'+item.img_pelicula+'"id_idsala="' + item.id_idsala + '">editar</button>';
//                 objBotones += '<button id="btn_eliminarPeli" type="button" class="btn btn-danger" id_pelicula="' + item.id_pelicula + '">eliminar</button>';
//                 objimg += '<img heigth="20px"  src="data:images/jpg;base64,' +item.img_pelicula+ '">';
//                 objBotones += '</div>';
//                 dataSet.push([item.nombre_pelicula,item.fecha,objimg,objBotones]);
//             }
//             actualizarTabla(dataSet)
//         })
//     })


//     function actualizarTabla(dataSet) {
//         if (tabla != null) {
//             $("#tablapeliculas").dataTable().fnDestroy();
//         }
//         tabla = $("#tablapeliculas").DataTable({
//             data: dataSet
//         })
//     }







//     $("#tablapeliculas").on("click", "#btn_eliminarPeli", function() {
//         var id_pelicula = $(this).attr("id_pelicula");
//         $("#btn_eliminarPeli").val(id_pelicula);

//         var objData = new FormData()
//         objData.append("borrar", id_pelicula);

//         $.ajax({
//             url: "admincontrol.php",
//             type: "post",
//             dataType: "json",
//             data: objData,
//             cache: false,
//             contentType: false,
//             processData: false
//         })

//         Swal.fire({
//             position: 'top-end',
//             icon: 'success',
//             title: 'Fue eliminado',
//             showConfirmButton: false,
//             timer: 1000
//         })
//         listarDatos();
//         $("#contenedorTabla").show();
//         actualizarTabla(dataSet)


//     })

//     actualizarTabla(dataSet)





//     $("#btnCancelarEdit").on("click", function() {
//         $("#contenedorFormularioEditar").hide();
//         $("#btn_formulario").fadeIn(100);

//     })


//     $("#btn_cancelar").on("click", function() {
//         $("#contenedorFormulario").hide();
//         $('#btn_editarUsuario').attr('disabled', false);
//         $('#btn_eliminarUsuario').attr('disabled', false);

//     })



//     $("#datoscalculados").on("click", function() {
//         $("#formularioArea").fadeIn();

//     })



//     $("#btn_cancelarArea").on("click", function() {
//         $("#formularioArea").hide();

//     })





    


//     $("#contenedorCategorias").hide();
//     $("#contenedorTablaCategorias").hide();

//     $("#formularioEditarCategoria").hide();
//     $("#formulario_categoria").hide();

//     $("#active_Contenedor_categorias").on("click", function() {
//         $("#contenedorpeliculas").hide();
//         $("#contenedorCategorias").show();
//         $("#contenedorTablaCategorias").show();
//         $("#contenedorTabla").hide(100);
//     })
//     $("#agregar_categorias").on("click", function() {
//         $("#contenedorpeliculas").hide();
//         $("#formularioEditarCategoria").hide();
//         $("#contenedorTablaCategorias").hide();
//         $("#formulario_categoria").show(100);
//     })
// function listarCategorias() {
//     var objBotones = "";
//     var objData = new FormData();
//     objData.append("listarCategorias", "ok");
//     $.ajax({
//         url: "../editadmin/admincontrol.php",
//         type: "post",
//         dataType: "json",
//         data: objData,
//         cache: false,
//         contentType: false,
//         processData: false
//     }).done(function(respuesta) {
//         var dataSet = [];
//         if (respuesta != null) {
//             respuesta.forEach(listarUsuarios);

//             function listarUsuarios(item, index) {
//                 // opcionSelect='<option>'+item.nombre+'</option>'
//                 objBotones = '<div class="btn-group" id="botons">';
//                 objBotones += '<button id="btn_edit_categorias" type="button" class="btn btn-warning" id_categoria="'+item.id_categoria+'" nombre_categoria="' + item.nombre_categoria + '" >editar</button>';
//                 objBotones += '<button id="btn_eliminar_categorias" type="button" class="btn btn-danger" id_categoria="'+item.id_categoria+'">eliminar</button>';
//                 objBotones += '</div>';
//                 dataSet.push([item.nombre_categoria, objBotones]);
//             }
//             console.log (respuesta);
//             actualizarTablaCategorias(dataSet)

//         }

//     })

// }


// actualizarTablaCategorias(dataSet)

// function actualizarTablaCategorias(dataSet) {
//     if (tabla != null) {
//         $("#tablacategorias").dataTable().fnDestroy();
//     }

//     tabla = $("#tablacategorias").DataTable({
//         data: dataSet
//     })
// }




// $("#tablacategorias").on("click", "#btn_eliminar_categorias", function() {
//     var id_delete_categoria = $(this).attr("id_categoria");
//     var objData = new FormData()
//     objData.append("borrar_categoria", id_delete_categoria);

//     $.ajax({
//         url: "../editadmin/admincontrol.php",
//         type: "post",
//         dataType: "json",
//         data: objData,
//         cache: false,
//         contentType: false,
//         processData: false
//     })

//     Swal.fire({
//         position: 'top-end',
//         icon: 'success',
//         title: 'Fue eliminado',
//         showConfirmButton: false,
//         timer: 1000
//     })
//     listarCategorias()


// })

// $("#tablacategorias").on("click", "#btn_edit_categorias", function() {
//     var id_categoria = $(this).attr("id_categoria");
//     var newnameCategoria = $(this).attr("nombre_categoria");

//     $("#btnEnviarEditCategoria").val(id_categoria);
//     $("#Guardar_new_nombre_categoria").val(newnameCategoria);


//     if ((formularioEditar == false)) {
//         $("#formularioEditarCategoria").fadeIn(1000);
//         $("#contenedorTablaCategorias").hide(500);
//         formularioEditar = true;
//         // $("#btnEditarUsuario").removeClass("btn-primary").disable(true)
//     } else {
//         $("#contenedorTablaCategorias").fadeIn(1000);

//         formularioEditar = false;
//     }

// })
// // Edit enviar
// $("#btnEnviarEditCategoria").on("click", function() {
//     var id_Ctgoria = $("#btnEnviarEditCategoria").val();
//     var newNameCategoria = $("#new_nombre_categoria").val();

//     var objData = new FormData()
    
//     objData.append("id_Ctgoria", id_Ctgoria);
//     objData.append("new_nombre_categoria", newNameCategoria);

//     $.ajax({
//         url: "../editadmin/admincontrol.php",
//         type: "post",
//         dataType: "json",
//         data: objData,
//         cache: false,
//         contentType: false,
//         processData: false
//     }).done(function(respuesta) {
//         $("#new_nombre_categoria").val();
//         Swal.fire({
//             position: 'top-end',
//             icon: 'success',
//             title: 'Registrado correctamente',
//             showConfirmButton: false,
//             timer: 1000
//         })
//         listarCategorias()
//         $("#contenedorTablaCategorias").show();
// $("#formularioEditarCategoria").hide(600);

//     })
// })


// $("#btnGuardarCategorias").on("click", function() {
//     $("#contenedorTablaCategorias").show(100);

//     var nombre_categoria = $("#nombre_categoria").val();

//     var objData = new FormData()
//     objData.append("nombre_categoria", nombre_categoria);

//     $.ajax({
//         url: "../editadmin/admincontrol.php",
//         type: "post",
//         dataType: "json",
//         data: objData,
//         cache: false,
//         contentType: false,
//         processData: false
//     }).done(function(respuesta) {
//         $("#nombre_categoria").val(" ");
//         Swal.fire({
//             position: 'top-end',
//             icon: 'success',
//             title: 'Categoria Registrada',
//             showConfirmButton: false,
//             timer: 900
//         })

//         listarCategorias()
//     })

// })

// $("#formulario_categoria").hide();

// $("#formularioEditarCategoria").hide();

// $("#registrar_salas").on("click", function() {
//     if ((formulario_registro_salas == false)) {
//         $("#formulario_form_salas").fadeIn(1000);
//         $("#container_tabla_salas").hide(100);
//         $("#registrar_user").hide(100);
//         $('#btn_editarUsuario').attr('disabled', true);
//         $('#btn_eliminarUsuario').attr('disabled', true);
//     } else {
//         $("#formulario_registro_Users").hide();
//         formulario_registro_Users = false;
//     }
//     $("#contenedorTabla").slideDown("slow")
// });

















});