$(function() {
    var objTabla = null;
    formulario = false;
    formularioEditar = false;
    formulario_registro_Users = false;
    usuarioActual = "";
    var dataSet = [];
    var tabla = null;
    datos = false;
    cargarDatosSelectMachos();
    listarHembras();
    // $("#contenedor_form_machos").hide(100);
    // $("#seccionMachos").hide();
    // $("#seccion_hembras_datos").hide();
    // $("#seccion_terneros_datos").hide();
    // $("#Cont_Form_add_raza").hide();
    // $("#formulario_addRaza").hide();



    let valor_Select=document.getElementById("select_salida");
    if (valor_Select== "opcion1") {
        alert("Si agarra el evento")
        location.href("seccionVentas/ventas.php");
    }else if(valor_Select== "opcion1"){
        alert("Si agarra el evento")
        location.href("loginnn/indexl.php");

    }
    $("#select_config").on("click", function() {
        alert("Si agarra el evento")
        location.href("seccionVentas/ventas.php");
    })
    $("#select_salir").on("click", function() {
        alert("Si agarra el evento")
        location.href("loginnn/indexl.php");

    })
    
   
    
    $("#Cont_Form_add_raza").hide();

    $("#contenedorFormularioHembrasEdit").hide();

    // seccion terneros
$("#seccion_terneros_Tabla").hide();
$("#contFormularioTerneros").hide();
$("#contFormularioEditarTernero").hide();
    // seccion hembras
    $("#seccion_hembras_datos").hide();
    $("#contenedorFormularioHembras").hide();
    $("#contenedorFormularioHembrasEdit").hide();
    // seccion de machos
    $("#seccionMachos").hide();
    $("#contenedor_form_machos").hide();
    $("#contenedor_Editar_machos").hide();
    
    
    $("#agregarHembra").on("click", function() {
        $("#seccion_hembras_datos").hide();
        $("#contenedorFormularioHembras").show();
        $("#contenedorFormularioHembrasEdit").hide();
    });
    $("#agregarAnimal").on("click", function() {
        $("#seccionMachos").hide();
        $("#contenedor_form_machos").show();
        $("#contenedor_Editar_machos").hide();
    });
    // INSERTAR RAZAS
    $("#AgregarRazas").on("click", function() {
        $("#seleccionbotones").hide();
        $("#formulario_addRaza").show();
        $("#Cont_Form_add_raza").show();
    });
  
   
    $("#agregarTernerp").on("click", function() {
        $("#seccion_terneros_Tabla").hide();
        $("#contFormularioTerneros").show();
        $("#contFormularioEditarTernero").hide();
    });
    $("#Guardar_raza").on("click", function() {
        var   Guardar_nombre_raza = $("#Guardar_nombre_raza").val();
        var objData = new FormData()
        objData.append("Guardar_nombre_raza",Guardar_nombre_raza );
        $.ajax({
            url: "productocontrol.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(respuesta) {
            $("#Guardar_nombre_raza").val("");
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Ingresado correctamente',
                showConfirmButton: false,
                timer: 1000
            })
        $("#Cont_Form_add_raza").hide();
        })
    })



    // seleccion de secciones
    $("#Sección_Terneros").on("click", function() {
        $("#seccion_terneros_Tabla").show();
        $("#contFormularioTerneros").hide();
        $("#contFormularioEditarTernero").hide();
        $("#seccion_hembras_datos").hide();
        $("#contenedorFormularioHembras").hide();
        $("#contenedorFormularioHembrasEdit").hide();
        $("#seccionMachos").hide();
        $("#contenedor_form_machos").hide();
        $("#contenedor_Editar_machos").hide();
    })
      // seccion machos abrir
      $("#Sección_Machos").on("click", function() {
        $("#seccionMachos").show();
        $("#contenedor_form_machos").hide();
        $("#contenedor_Editar_machos").hide();
        $("#seccion_terneros_Tabla").hide();
        $("#contFormularioTerneros").hide();
        $("#contFormularioEditarTernero").hide();
        $("#seccion_hembras_datos").hide();
        $("#contenedorFormularioHembras").hide();
        $("#contenedorFormularioHembrasEdit").hide();
        
    });
        $("#Sección_Hembras").on("click", function() {
        $("#seccion_hembras_datos").show(100);
        $("#seccionMachos").hide(100);
        $("#seccion_terneros_datos").hide(100);
        $("#seccionMachos").hide();
        $("#contenedor_form_machos").hide();
        $("#contenedor_Editar_machos").hide();
        $("#seccion_terneros_Tabla").hide();
        $("#contFormularioTerneros").hide();
        $("#contFormularioEditarTernero").hide();
    })
   

    $("#btnCancelarEdit").on("click", function() {
        $("#contenedorFormularioEditar").hide();
        $("#btn_formulario").fadeIn(100);

    })


    $("#btnCancelar").on("click", function() {
        $("#contenedorFormulario").hide();
        $('#btn_editarUsuario').attr('disabled', false);
        $('#btn_eliminarUsuario').attr('disabled', false);
    })

    // FUNCIONES SECCION DE MACHOS
    //Muestra formulario btn agregar Machos
    $("#agregarAnimal").on("click", function() {
    $("#contenedor_form_machos").show(100);
    $("#contenedor_Editar_machos").hide(100);
    })
        
    // btn_guardar machos
    $("#guardarMacho").on("click", function() {
   
        var   ins_Guardar_codigo = $("#Guardar_codigo").val();
        var   ins_Guardar_nombre = $("#Guardar_nombre").val();
        var   ins_Guardar_edad = $("#Guardar_edad").val();
        var   ins_Guardar_peso = $("#Guardar_peso").val();
        var   ins_Guardar_genotipo = $("#Guardar_genotipo").val();
        var   ins_Guardar_grupo = $("#Guardar_grupo").val();
        var   ins_Guardar_fechaNaci = $("#Guardar_fechaNaci").val();
        var   ins_Guardar_nomPadre = $("#Guardar_nomPadre").val();
        var   ins_Guardar_nomAbu = $("#Guardar_nomAbu").val();
        var   ins_Guardar_nomVac = $("#Guardar_nomVac").val();
        var   ins_Guardar_fechaVac = $("#Guardar_fechaVac").val();
        var   ins_Guardar_Categoria = $("#Guardar_Categoria").val();
        var   ins_Guardar_tratamientos = $("#Guardar_tratamientos").val();
        var   ins_Guardar_fechaPajilla = $("#Guardar_fechaPajilla").val();
        var   ins_Guardar_oberva = $("#Guardar_oberva").val();

        var objData = new FormData()
        objData.append("ins_Guardar_codigo",ins_Guardar_codigo );
        objData.append("ins_Guardar_nombre", ins_Guardar_nombre);
        objData.append("ins_Guardar_edad", ins_Guardar_edad);
        objData.append("ins_Guardar_peso", ins_Guardar_peso);
        objData.append("ins_Guardar_genotipo", ins_Guardar_genotipo);
        objData.append("ins_Guardar_grupo", ins_Guardar_grupo);
        objData.append("ins_Guardar_fechaNaci",ins_Guardar_fechaNaci );
        objData.append("ins_Guardar_nomPadre", ins_Guardar_nomPadre);
        objData.append("ins_Guardar_nomAbu", ins_Guardar_nomAbu);
        objData.append("ins_Guardar_nomVac", ins_Guardar_nomVac);
        objData.append("ins_Guardar_fechaVac", ins_Guardar_fechaVac);
        objData.append("ins_Guardar_Categoria", ins_Guardar_Categoria);
        objData.append("ins_Guardar_tratamientos", ins_Guardar_tratamientos);
        objData.append("ins_Guardar_fechaPajilla", ins_Guardar_fechaPajilla);
        objData.append("ins_Guardar_oberva", ins_Guardar_oberva);
        $.ajax({
            url: "productocontrol.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(respuesta) {
            $("#seccionMachos").show();
            $("#contenedor_form_machos").hide();
            $("#contenedor_Editar_machos").hide();
            $("#Guardar_codigo").val("");
            $("#Guardar_nombre").val("");
            $("#Guardar_edad").val("");
            $("#Guardar_peso").val("");
            $("#Guardar_genotipo").val("");
            $("#Guardar_grupo").val("");
            $("#Guardar_fechaNaci").val("");
            $("#Guardar_nomPadre").val("");
            $("#Guardar_nomAbu").val("");
            $("#Guardar_nomVac").val("");
            $("#Guardar_fechaVac").val("");
            $("#Guardar_Categoria").val("");
            $("#Guardar_tratamientos").val("");
            $("#Guardar_fechaPajilla").val("");
            $("#Guardar_oberva").val("");
             Swal.fire({
                 position: 'top-end',
                 icon: 'success',
                 title: 'Registrado cocrrectamente',
                 showConfirmButton: false,
                 timer: 1000
             })
             listarDatos()
        })

    })


    // function cargarDatosSelectArea() {
    //     var objData = new FormData();
    //     objData.append("cargarAreas", "ok");

    //     $.ajax({
    //         url: "productocontrol.php",
    //         type: "post",
    //         dataType: "json",
    //         data: objData,
    //         cache: false,
    //         contentType: false,
    //         processData: false
    //     }).done(function(respuesta) {
    //         var opciones = '';

    //         respuesta.forEach(agregarOpciones);

    //         function agregarOpciones(item, index) {
    //             $("#selectArea").val("");
    //             $("#selectArea").val("");

    //             opciones += '<option value="' + item.idarea + '">' + item.area + '</option>';
    //         }

    //         $("#selectAreas").html(opciones);
    //         $("#selectArea").html(opciones);
    //         $("#selectAreaedit").html(opciones);


    //     })
    // }

    listarDatos();
    


    actualizarTabla(dataSet)



    // boton editar machos tabla
    $("#tablaMachos").on("click", "#btn_editarMacho", function() {
        $("#seccionMachos").hide();
        $("#contenedor_form_machos").hide();
     $("#contenedor_Editar_machos").show();
  
        var ins_Guardar_codigo_edit = $(this).attr("Codigo");
        //var ins_Guardar_raza_edit = $(this).attr("Raza");
        var ins_Guardar_nombre_edit = $(this).attr("Nombre");
        var ins_Guardar_edad_edit = $(this).attr("Edad");
        var ins_Guardar_peso_edit = $(this).attr("Peso");
        var ins_Guardar_genotipo_edit = $(this).attr("Genotipo");
        var ins_Guardar_grupo_edit = $(this).attr("Grupo");
        var ins_Guardar_fechaNaci_edit = $(this).attr("Fecha_nacimiento");
        var ins_Guardar_nomPadre_edit = $(this).attr("Padre");
        var ins_Guardar_nomAbu_edit = $(this).attr("Abuelo_materno");
        var ins_Guardar_nomVac_edit = $(this).attr("nombre_vacuna");
        var ins_Guardar_fechaVac_edit = $(this).attr("Fecha_vacuna");
        var ins_Guardar_Categoria_edit = $(this).attr("Categoria");
        var ins_Guardar_tratamientos_edit = $(this).attr("Tratamientos");
        var ins_Guardar_fechaPajilla_edit = $(this).attr("Fecha_pajilla");
        var ins_Guardar_oberva_edit = $(this).attr("Observaciones");

        $("#btn_editarMacho").val(ins_Guardar_codigo_edit);
        $("#Guardar_nombre_edit").val(ins_Guardar_nombre_edit);
        $("#Guardar_edad_edit").val(ins_Guardar_edad_edit);
        $("#Guardar_peso_edit").val(ins_Guardar_peso_edit);
        $("#Guardar_genotipo_edit").val(ins_Guardar_genotipo_edit);
        $("#Guardar_grupo_edit").val(ins_Guardar_grupo_edit);
        $("#Guardar_fechaNaci_edit").val(ins_Guardar_fechaNaci_edit);
        $("#Guardar_nomPadre_edit").val(ins_Guardar_nomPadre_edit);
        $("#Guardar_nomAbu_edit").val(ins_Guardar_nomAbu_edit);
        $("#Guardar_nomVac_edit").val(ins_Guardar_nomVac_edit);
        $("#Guardar_fechaVac_edit").val(ins_Guardar_fechaVac_edit);
        $("#Guardar_Categoria_edit").val(ins_Guardar_Categoria_edit);
        $("#Guardar_tratamientos_edit").val(ins_Guardar_tratamientos_edit);
        $("#Guardar_fechaPajilla_edit").val(ins_Guardar_fechaPajilla_edit);
        $("#Guardar_oberva_edit").val(ins_Guardar_oberva_edit);
        listarDatos()
    })
    // boton enviar edit Machos
    $("#EditarMachos").on("click", function() {
        var   ins_Guardar_codigo_edit = $("#btn_editarMacho").val();
        var   ins_Guardar_nombre_edit = $("#Guardar_nombre_edit").val();
        var   ins_Guardar_edad_edit = $("#Guardar_edad_edit").val();
        var   ins_Guardar_peso_edit = $("#Guardar_peso_edit").val();
        var   ins_Guardar_genotipo_edit = $("#Guardar_genotipo_edit").val();
        var   ins_Guardar_grupo_edit = $("#Guardar_grupo_edit").val();
        var   ins_Guardar_fechaNaci_edit = $("#Guardar_fechaNaci_edit").val();
        var   ins_Guardar_nomPadre_edit = $("#Guardar_nomPadre_edit").val();
        var   ins_Guardar_nomAbu_edit = $("#Guardar_nomAbu_edit").val();
        var   ins_Guardar_nomVac_edit = $("#Guardar_nomVac_edit").val();
        var   ins_Guardar_fechaVac_edit = $("#Guardar_fechaVac_edit").val();
        var   ins_Guardar_Categoria_edit = $("#Guardar_Categoria_edit").val();
        var   ins_Guardar_tratamientos_edit = $("#Guardar_tratamientos_edit").val();
        var   ins_Guardar_fechaPajilla_edit = $("#Guardar_fechaPajilla_edit").val();
        var   ins_Guardar_oberva_edit = $("#Guardar_oberva_edit").val();

        var objData = new FormData()
        objData.append("ins_Guardar_codigo_edit",ins_Guardar_codigo_edit );
        objData.append("ins_Guardar_nombre_edit", ins_Guardar_nombre_edit);
        objData.append("ins_Guardar_edad_edit", ins_Guardar_edad_edit);
        objData.append("ins_Guardar_peso_edit", ins_Guardar_peso_edit);
        objData.append("ins_Guardar_genotipo_edit", ins_Guardar_genotipo_edit);
        objData.append("ins_Guardar_grupo_edit", ins_Guardar_grupo_edit);
        objData.append("ins_Guardar_fechaNaci_edit",ins_Guardar_fechaNaci_edit );
        objData.append("ins_Guardar_nomPadre_edit", ins_Guardar_nomPadre_edit);
        objData.append("ins_Guardar_nomAbu_edit", ins_Guardar_nomAbu_edit);
        objData.append("ins_Guardar_nomVac_edit", ins_Guardar_nomVac_edit);
        objData.append("ins_Guardar_fechaVac_edit", ins_Guardar_fechaVac_edit);
        objData.append("ins_Guardar_Categoria_edit", ins_Guardar_Categoria_edit);
        objData.append("ins_Guardar_tratamientos_edit", ins_Guardar_tratamientos_edit);
        objData.append("ins_Guardar_fechaPajilla_edit", ins_Guardar_fechaPajilla_edit);
        objData.append("ins_Guardar_oberva_edit", ins_Guardar_oberva_edit);


        $.ajax({
            url: "productocontrol.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(respuesta) {
            $("#seccionMachos").show();
    $("#contenedor_form_machos").hide();
    $("#contenedor_Editar_machos").hide();
            $("#Guardar_nombre_edit").val("");
            $("#Guardar_edad_edit").val("");
            $("#Guardar_peso_edit").val("");
            $("#Guardar_genotipo_edit").val("");
            $("#Guardar_grupo_edit").val("");
            $("#Guardar_fechaNaci_edit").val("");
            $("#Guardar_nomPadre_edit").val("");
            $("#Guardar_nomAbu_edit").val("");
            $("#Guardar_nomVac_edit").val("");
            $("#Guardar_fechaVac_edit").val("");
            $("#Guardar_Categoria_edit").val("");
            $("#Guardar_tratamientos_edit").val("");
            $("#Guardar_fechaPajilla_edit").val("");
            $("#Guardar_oberva_edit").val("");
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Registrado correctamente',
                showConfirmButton: false,
                timer: 1000
            })
        })
        listarDatos();
        actualizarTabla()
    })




// listar machos

    function listarDatos() {
        var objBotones = "";
        var objData = new FormData();
        objData.append("listarMachos", "ok");
        $.ajax({
            url: "productocontrol.php",
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
                    objBotones += '<button id="btn_editarMacho" type="button" class="btn btn-warning" Codigo="'+item.Codigo+'" Raza="'+item.Raza+'" Nombre="'+item.Nombre+'" Edad="'+item.Edad+'" Peso="' +item.Peso+'" Genotipo="'+item.Genotipo+'" Grupo="'+item.Grupo+'" Fecha_nacimiento="'+item.Fecha_nacimiento+'" Padre="'+item.Padre+'" Abuelo_materno="'+item.Abuelo_materno+'" nombre_vacuna="'+item.nombre_vacuna+'" Fecha_vacuna="'+item.Fecha_vacuna+'" Categoria="'+item.Categoria+'" Tratamientos="'+item.Tratamientos+'" Fecha_pajilla="'+item.Fecha_pajilla+'" Observaciones="'+item.Observaciones+'" >editar</button>';
                    objBotones += '<button id="btn_eliminarMacho" type="button" class="btn btn-danger" Codigo="' + item.Codigo + '">eliminar</button>';
                    objBotones += '</div>';
                    dataSet.push([item.Codigo,item.Raza, item.Nombre, item.Edad, item.Peso, item.Genotipo,item.Grupo,item.Fecha_nacimiento,item.Padre,item.Abuelo_materno,item.nombre_vacuna,item.Fecha_vacuna,item.Categoria,item.Tratamientos,item.Fecha_pajilla,item.Observaciones,objBotones]);
                }
                actualizarTabla(dataSet)
            }
        })
    }

    //cargar select razas
    function cargarDatosSelectMachos() {
        var objData = new FormData();
        objData.append("cargarRazas", "ok");

        $.ajax({
            url: "productocontrol.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(respuesta) {
            var opciones = '';

            respuesta.forEach(agregarOpciones);

            function agregarOpciones(item, index) {
                $("#selectRazas").val("");

                opciones += '<option value="' + item.id_raza + '">' + item.Nombre_raza + '</option>';
            }

            $("#selectRazasMachosIni").html(opciones);
             $("#selectRazasMachos_gua").html(opciones);
             $("#selectRazasMachos_edit").html(opciones);
             $("#selectRazasHembras_gua").html(opciones);
             $("#selectRazasHembras_edit").html(opciones);
             $("#selectRazasTernerosIni").html(opciones);
             $("#selectRazasTernerosGua").html(opciones);
             $("#selectRazasTernerosEdit").html(opciones);
        })
    }

    // $("#selectAreas").change(function() {
    //     var id_Raza = $(this).val();
    //     var objData = new FormData();
    //     objData.append("FiltroRaza", id_Raza);
    //     $.ajax({
    //         url: "productocontrol.php",
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

    //         function cargarFiltroUsuarios(item, index) {

    //             objBotones = '<div class="btn-group" id="botons">';
    //             objBotones += '<button id="btn_editarPeli" type="button" class="btn btn-warning" id_pelicula="' + item.id_pelicula + '" nombre_pelicula="' + item.nombre_pelicula + '"fecha="' + item.fecha + '"id_idarea="' + item.id_idarea + '"  src="data:images/jpg;base64,'+item.img_pelicula+'"id_idsala="' + item.id_idsala + '">editar</button>';
    //             objBotones += '<button id="btn_eliminarPeli" type="button" class="btn btn-danger" id_pelicula="' + item.id_pelicula + '">eliminar</button>';
    //             objimg += '<img heigth="20px"  src="data:images/jpg;base64,' +item.img_pelicula+ '">';
    //             objBotones += '</div>';
    //             dataSet.push([item.nombre_pelicula,item.fecha,objimg,objBotones]);
    //         }
    //         actualizarTabla(dataSet)
    //     })
    // })

 actualizarTabla();

    function actualizarTabla(dataSet) {
        if (tabla != null) {
            $("#tablaMachos").dataTable().fnDestroy();
        }

        tabla = $("#tablaMachos").DataTable({
            data: dataSet
        })
    }






    // eliminar machos
    $("#tablaMachos").on("click", "#btn_eliminarMacho", function() {
        var Codigo = $(this).attr("Codigo");

        var objData = new FormData()
        objData.append("borrar", Codigo);

        $.ajax({
            url: "productocontrol.php",
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
            title: 'Fue eliminado',
            showConfirmButton: false,
            timer: 1000
        })
        listarDatos();
    })




    //FUNCIONES SECCION HEMBRAS

    // guardar hembras
    $("#guardarHembra").on("click", function() {
        
              var   ins_Guardar_CodigoHem = $("#Guardar_CodigoHem").val();
              var   ins_Guardar_NombreHem = $("#Guardar_NombreHem").val();
              var   ins_Guardar_EdadHem = $("#Guardar_EdadHem").val();
              var   ins_Guardar_PesoHem = $("#Guardar_PesoHem").val();
              var   ins_Guardar_GenotipoHem = $("#Guardar_GenotipoHem").val();
              var   ins_Guardar_ProduccionHem = $("#Guardar_ProduccionHem").val();
              var   ins_Guardar_GrupoHem = $("#Guardar_GrupoHem").val();
              var   ins_Guardar_FechaNacHem = $("#Guardar_FechaNacHem").val();
              var   ins_Guardar_NombrepaHem = $("#Guardar_NombrepaHem").val();
              var   ins_Guardar_NombreabHem = $("#Guardar_NombreabHem").val();
              var   ins_Guardar_vacunaHem = $("#Guardar_vacunaHem").val();
              var   ins_Guardar_FechavacHem = $("#Guardar_FechavacHem").val();
              var   ins_Guardar_VacunFaltHem = $("#Guardar_VacunFaltHem").val();
              var   ins_Guardar_CategoriaHem = $("#Guardar_CategoriaHem").val();
              var   ins_Guardar_TratamientoHem = $("#Guardar_TratamientoHem").val();
              var   ins_Guardar_NumpartosHem = $("#Guardar_NumpartosHem").val();
              var   ins_Guardar_ObservacionHem = $("#Guardar_ObservacionHem").val();
      
              var objData = new FormData()
              objData.append("ins_Guardar_CodigoHem",ins_Guardar_CodigoHem );
              objData.append("ins_Guardar_NombreHem", ins_Guardar_NombreHem);
              objData.append("ins_Guardar_EdadHem", ins_Guardar_EdadHem);
              objData.append("ins_Guardar_PesoHem", ins_Guardar_PesoHem);
              objData.append("ins_Guardar_GenotipoHem", ins_Guardar_GenotipoHem);
              objData.append("ins_Guardar_ProduccionHem", ins_Guardar_ProduccionHem);
              objData.append("ins_Guardar_GrupoHem",ins_Guardar_GrupoHem );
              objData.append("ins_Guardar_FechaNacHem", ins_Guardar_FechaNacHem);
              objData.append("ins_Guardar_NombrepaHem", ins_Guardar_NombrepaHem);
              objData.append("ins_Guardar_NombreabHem", ins_Guardar_NombreabHem);
              objData.append("ins_Guardar_vacunaHem", ins_Guardar_vacunaHem);
              objData.append("ins_Guardar_FechavacHem", ins_Guardar_FechavacHem);
              objData.append("ins_Guardar_VacunFaltHem", ins_Guardar_VacunFaltHem);
              objData.append("ins_Guardar_CategoriaHem", ins_Guardar_CategoriaHem);
              objData.append("ins_Guardar_TratamientoHem", ins_Guardar_TratamientoHem);
              objData.append("ins_Guardar_NumpartosHem", ins_Guardar_NumpartosHem);
              objData.append("ins_Guardar_ObservacionHem", ins_Guardar_ObservacionHem);
      
      
              $.ajax({
                  url: "productocontrol.php",
                  type: "post",
                  dataType: "json",
                  data: objData,
                  cache: false,
                  contentType: false,
                  processData: false
              }).done(function(respuesta) {
                $("#seccion_hembras_datos").show();
                 $("#contenedorFormularioHembras").hide();
                 $("#contenedorFormularioHembrasEdit").hide();
                   $("#Guardar_nombre").val("");
                   $("#Guardar_edad").val("");
                   $("#Guardar_peso").val("");
                   $("#Guardar_genotipo").val("");
                   $("#Guardar_grupo").val("");
                   $("#Guardar_fechaNaci").val("");
                   $("#Guardar_nomPadre").val("");
                   $("#Guardar_nomAbu").val("");
                   $("#Guardar_nomVac").val("");
                   $("#Guardar_fechaVac").val("");
                   $("#Guardar_Categoria").val("");
                   $("#Guardar_tratamientos").val("");
                   $("#Guardar_fechaPajilla").val("");
                   $("#Guardar_oberva").val("");
    
                   Swal.fire({
                       position: 'top-end',
                       icon: 'success',
                       title: 'Editado correctamente',
                       showConfirmButton: false,
                       timer: 1000
                   })
                
              })
              listarHembras()
              actualizarTablaHembras()
          })
    
           
    // listar hembras
    function listarHembras() {
        var objBotones = "";
        var objData = new FormData();
        objData.append("listarHembras", "ok");
        $.ajax({
            url: "productocontrol.php",
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
                    objBotones += '<button id="btn_editarHembra" type="button" class="btn btn-warning" Codigo="'+item.Codigo+'"Nombre="'+item.Nombre+'"Edad="'+item.Edad+'"Peso="'+item.Peso+'" Genotipo="'+item.Genotipo+'" Produccion_leche="'+item.Produccion_leche+'" Grupo="'+item.Grupo+'" Fecha_nacimiento="'+item.Fecha_nacimiento+'"Padre="'+item.Padre+'"Abuelo_materno="'+item.Abuelo_materno+'"Nombre_vacuna="'+item.Nombre_vacuna+'"Fecha_vacuna="'+item.Fecha_vacuna+'"vacunas_faltantes="'+item.vacunas_faltantes+'"Categoria="'+item.Categoria+'"Tratamientos="'+item.Tratamientos+'"Num_partos="'+item.Num_partos+'"Observaciones="'+item.Observaciones+'"Raza="'+item.Raza+'" >editar</button>';
                    objBotones += '<button id="btn_eliminarHembra" type="button" class="btn btn-danger" Codigo="' + item.Codigo + '">eliminar</button>';
                    objBotones += '</div>';
                    dataSet.push([item.Codigo,item.Nombre,item.Edad,item.Peso,item.Genotipo,item.Produccion_leche,item.Grupo,item.Fecha_nacimiento,item.Padre,item.Abuelo_materno,item.Nombre_vacuna,item.Fecha_vacuna,item.vacunas_faltantes,item.Categoria,item.Tratamientos,item.Num_partos,item.Observaciones,item.Raza,objBotones]);
                }
                actualizarTablaHembras(dataSet)
            }
        })
    }
    function actualizarTablaHembras(dataSet) {
        if (tabla != null) {
            $("#tablaHembras").dataTable().fnDestroy();
        }

        tabla = $("#tablaHembras").DataTable({
            data: dataSet
        })
    }



    // eliminar Hembras
    $("#tablaHembras").on("click", "#btn_eliminarHembra", function() {
        var Codigo = $(this).attr("Codigo");
        var objData = new FormData()
        objData.append("borrarHembra", Codigo);

        $.ajax({
            url: "productocontrol.php",
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
            title: 'Fue eliminado',
            showConfirmButton: false,
            timer: 1000
        })
       
        listarHembras()
    })

// boton editar hembras tabla
$("#tablaHembras").on("click", "#btn_editarHembra", function() {
    $("#seccion_hembras_datos").hide();
        $("#contenedorFormularioHembras").hide();
        $("#contenedorFormularioHembrasEdit").show();
        var codigo_edit_hem = $(this).attr("Codigo");
        var Nombre_edit_hem = $(this).attr("Nombre");
        var Edad_edit_hem = $(this).attr("Edad");
        var Peso_edit_hem = $(this).attr("Peso");
        var Genotipo_edit_hem = $(this).attr("Genotipo");
        var Produccion_leche_edit_hem = $(this).attr("Produccion_leche");
        var Grupo_edit_hem = $(this).attr("Grupo");
        var Fecha_nacimiento_edit_hem = $(this).attr("Fecha_nacimiento");
        var Padre_edit_hem = $(this).attr("Padre");
        var Abuelo_materno_edit_hem = $(this).attr("Abuelo_materno");
        var Nombre_vacuna_edit_hem = $(this).attr("Nombre_vacuna");
        var Fecha_vacuna_edit_hem = $(this).attr("Fecha_vacuna");
        var vacunas_faltantes_edit_hem = $(this).attr("vacunas_faltantes");
        var Categoria_edit_hem = $(this).attr("Categoria");
        var Tratamientos_edit_hem = $(this).attr("Tratamientos");
        var Num_partos_edit_hem = $(this).attr("Num_partos");
        var Observaciones_edit_hem = $(this).attr("Observaciones");
        var selectRzaEdit = $(this).attr("Raza");

        $("#btn_editarHembra").val(codigo_edit_hem);
        $("#Guardar_NombreHem_edit").val(Nombre_edit_hem);
        $("#Guardar_EdadHem_edit").val(Edad_edit_hem);
        $("#Guardar_PesoHem_edit").val(Peso_edit_hem);
        $("#Guardar_GenotipoHem_edit").val(Genotipo_edit_hem);
        $("#Guardar_ProduccionHem_edit").val(Produccion_leche_edit_hem);
        $("#Guardar_GrupoHem_edit").val(Grupo_edit_hem);
        $("#Guardar_FechaNacHem_edit").val(Fecha_nacimiento_edit_hem);
        $("#Guardar_NombrepaHem_edit").val(Padre_edit_hem);
        $("#Guardar_NombreabHem_edit").val(Abuelo_materno_edit_hem);
        $("#Guardar_vacunaHem_edit").val(Nombre_vacuna_edit_hem);
        $("#Guardar_FechavacHem_edit").val(Fecha_vacuna_edit_hem);
        $("#Guardar_VacunFaltHem_edit").val(vacunas_faltantes_edit_hem);
        $("#Guardar_CategoriaHem_edit").val(Categoria_edit_hem);
        $("#Guardar_TratamientoHem_edit").val(Tratamientos_edit_hem);
        $("#Guardar_NumpartosHem_edit").val(Num_partos_edit_hem);
        $("#Guardar_ObservacionHem_edit").val(Observaciones_edit_hem);
        $("#select_hembra_raza").val(selectRzaEdit);
    })


    // boton enviar edit hembras
    $("#EditarHembra").on("click", function() {
       
            var   ins_Guardar_codigo_edit = $("#btn_editarHembra").val();
            var   Guardar_NombreHem_edit = $("#Guardar_NombreHem_edit").val();
            var   Guardar_EdadHem_edit = $("#Guardar_EdadHem_edit").val();
            var   Guardar_PesoHem_edit = $("#Guardar_PesoHem_edit").val();
            var   Guardar_GenotipoHem_edit = $("#Guardar_GenotipoHem_edit").val();
            var   Guardar_ProduccionHem_edit = $("#Guardar_ProduccionHem_edit").val();
            var   Guardar_GrupoHem_edit = $("#Guardar_GrupoHem_edit").val();
            var   Guardar_FechaNacHem_edit = $("#Guardar_FechaNacHem_edit").val();
            var   Guardar_NombrepaHem_edit = $("#Guardar_NombrepaHem_edit").val();
            var   Guardar_NombreabHem_edit = $("#Guardar_NombreabHem_edit").val();
            var   Guardar_vacunaHem_edit = $("#Guardar_vacunaHem_edit").val();
            var   Guardar_FechavacHem_edit = $("#Guardar_FechavacHem_edit").val();
            var   Guardar_VacunFaltHem_edit = $("#Guardar_VacunFaltHem_edit").val();
            var   Guardar_CategoriaHem_edit = $("#Guardar_CategoriaHem_edit").val();
            var   Guardar_TratamientoHem_edit = $("#Guardar_TratamientoHem_edit").val();
            var   Guardar_NumpartosHem_edit = $("#Guardar_NumpartosHem_edit").val();
            var   Guardar_ObservacionHem_edit = $("#Guardar_ObservacionHem_edit").val();
            //var   Guardar_Raza_edit = $("#Guardar_Raza_edit").val();
    
            var objData = new FormData()
            objData.append("ins_Guardar_codigo_edit",ins_Guardar_codigo_edit );
            objData.append("Guardar_NombreHem_edit", Guardar_NombreHem_edit);
            objData.append("Guardar_EdadHem_edit", Guardar_EdadHem_edit);
            objData.append("Guardar_PesoHem_edit", Guardar_PesoHem_edit);
            objData.append("Guardar_GenotipoHem_edit", Guardar_GenotipoHem_edit);
            objData.append("Guardar_ProduccionHem_edit", Guardar_ProduccionHem_edit);
            objData.append("Guardar_GrupoHem_edit",Guardar_GrupoHem_edit );
            objData.append("Guardar_FechaNacHem_edit", Guardar_FechaNacHem_edit);
            objData.append("Guardar_NombrepaHem_edit", Guardar_NombrepaHem_edit);
            objData.append("Guardar_NombreabHem_edit", Guardar_NombreabHem_edit);
            objData.append("Guardar_vacunaHem_edit", Guardar_vacunaHem_edit);
            objData.append("Guardar_FechavacHem_edit", Guardar_FechavacHem_edit);
            objData.append("Guardar_VacunFaltHem_edit", Guardar_VacunFaltHem_edit);
            objData.append("Guardar_CategoriaHem_edit", Guardar_CategoriaHem_edit);
            objData.append("Guardar_TratamientoHem_edit", Guardar_TratamientoHem_edit);
            objData.append("Guardar_NumpartosHem_edit", Guardar_NumpartosHem_edit);
            objData.append("Guardar_ObservacionHem_edit", Guardar_ObservacionHem_edit);
           // objData.append("Guardar_Raza_edit", Guardar_Raza_edit);
           $("#seccion_hembras_datos").show();
           $("#contenedorFormularioHembras").hide();
           $("#contenedorFormularioHembrasEdit").hide();
            $.ajax({
                url: "productocontrol.php",
                type: "post",
                dataType: "json",
                data: objData,
                cache: false,
                contentType: false,
                processData: false
            }).done(function(respuesta) {
                
                $("#Guardar_NombreHem_edit").val("");
                $("#Guardar_EdadHem_edit").val("");
                $("#Guardar_PesoHem_edit").val("");
                $("#Guardar_GenotipoHem_edit").val("");
                $("#Guardar_ProduccionHem_edit").val("");
                $("#Guardar_GrupoHem_edit").val("");
                $("#Guardar_FechaNacHem_edit").val("");
                $("#Guardar_NombrepaHem_edit").val("");
                $("#Guardar_NombreabHem_edit").val("");
                $("#Guardar_vacunaHem_edit").val("");
                $("#Guardar_FechavacHem_edit").val("");
                $("#Guardar_VacunFaltHem_edit").val("");
                $("#Guardar_CategoriaHem_edit").val("");
                $("#Guardar_TratamientoHem_edit").val("");
                $("#Guardar_NumpartosHem_edit").val("");
                $("#Guardar_ObservacionHem_edit").val("");
                // $("#faltaselectraza").val("");

                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Editado correctamente',
                    showConfirmButton: false,
                    timer: 1000
                })
                actualizarTablaHembras(dataSet)
                listarHembras();
                
            })
        })
    
    
    

});