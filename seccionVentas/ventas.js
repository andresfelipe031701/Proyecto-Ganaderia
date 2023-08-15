$(function() {

    // guardar anuncio
    $("#Guardar_anuncio").on("click", function() {
   
        var   Guardar_titulo = $("#Guardar_titulo").val();
        var   Guardar_raza = $("#Guardar_raza").val();
        var   Guardar_departamento = $("#Guardar_departamento").val();
        var   Guardar_municipio = $("#Guardar_municipio").val();
        var   Guardar_tipoVenta = $("#Guardar_tipoVenta").val();
        var   Guardar_nombreEjem = $("#Guardar_nombreEjem").val();
        var   Guardar_EdadEjem = $("#Guardar_EdadEjem").val();
        var   Guardar_PesoEjem = $("#Guardar_PesoEjem").val();
        var   Guardar_NombreCriadero = $("#Guardar_NombreCriadero").val();
        var   Guardar_NombreHacienda = $("#Guardar_NombreHacienda").val();
        var   Guardar_Descripcion = $("#Guardar_Descripcion").val();
        var   Guardar_Contacto = $("#Guardar_Contacto").val();
        var   img_anuncio = $("#img_anuncio")[0].files[0];
        $("#img_anuncio").val("");
        // var   ins_Guardar_tratamientos = $("#Guardar_tratamientos").val();
        // var   ins_Guardar_fechaPajilla = $("#Guardar_fechaPajilla").val();
        // var   ins_Guardar_oberva = $("#Guardar_oberva").val();
        var objData = new FormData()
        objData.append("Guardar_titulo",Guardar_titulo );
        objData.append("Guardar_raza", Guardar_raza);
        objData.append("Guardar_departamento", Guardar_departamento);
        objData.append("Guardar_municipio", Guardar_municipio);
        objData.append("Guardar_tipoVenta", Guardar_tipoVenta);
        objData.append("Guardar_nombreEjem", Guardar_nombreEjem);
        objData.append("Guardar_EdadEjem",Guardar_EdadEjem );
        objData.append("Guardar_PesoEjem", Guardar_PesoEjem);
        objData.append("Guardar_NombreCriadero", Guardar_NombreCriadero);
        objData.append("Guardar_NombreHacienda", Guardar_NombreHacienda);
        objData.append("Guardar_Descripcion", Guardar_Descripcion);
        objData.append("Guardar_Contacto", Guardar_Contacto);
        objData.append("img_anuncio", img_anuncio);

        // objData.append("ins_Guardar_tratamientos", ins_Guardar_tratamientos);
        // objData.append("ins_Guardar_fechaPajilla", ins_Guardar_fechaPajilla);
        // objData.append("ins_Guardar_oberva", ins_Guardar_oberva);
        $.ajax({
            url: "ventascontrol.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(respuesta) {
            // $("#Guardar_oberva").val("");
             Swal.fire({
                 position: 'top-end',
                 icon: 'success',
                 title: 'Registrado cocrrectamente',
                 showConfirmButton: false,
                 timer: 1000
             })
        })

    })




    function listarDatos() {
        var objData = new FormData();
        objData.append("listarDatos", "ok");
        $.ajax({
            url: "admincontrol.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(respuesta) {
            console.log(respuesta)
            var dataSet = [];
            let objimg = [];
            if (respuesta != null) {
                respuesta.forEach(listarUsuarios);
    
                function listarUsuarios(item, index) {
                    // objBotones = '<div class="btn-group" id="botons">';
                    // objBotones += '<button id="btn_editarPeli" type="button" class="btn btn-warning" id_pelicula="' + item.id_pelicula + '" nombre_pelicula="' + item.nombre_pelicula + '" fecha="'+ item.fecha +'"id_idarea="' + item.id_idarea + '"  src="data:images/jpg;base64,'+item.img_pelicula+'" id_idsala="' + item.id_idsala + '">editar</button>';
                    // objBotones += '<button id="btn_eliminarPeli" type="button" class="btn btn-danger" id_pelicula="' + item.id_pelicula + '">eliminar</button>';
                    // objBotones += '</div>';
                    objimg += '<img heigth="20px"  src="data:images/jpg;base64,' +item.img_pelicula+ '">';

                    dataSet.push([item.nombre_pelicula,item.fecha,objimg,objBotones]);
                    $("#nombre_titulo").val(item.titulo)
                    $("#nombre_raza").val(item.raza)
                    $("#nombre_departamento").val(item.departamento)
                    $("#nombre_minucipio").val(item.municipio)
                    $("#nombre_tipo").val(item.tipo)
                    $("#nombre").val(item.nombre)
                    $("#edad").val(item.edad)
                    $("#peso").val(item.peso)
                    $("#criadero").val(item.nombre_criadero)
                    $("#hacienda").val(item.nombre_hacienda)
                    $("#descripcion").val(item.descripcion)
                    $("#contacto").val(item.contacto)
                    $("#imagen").val(objimg)

                    

                }
                actualizarTabla(dataSet)
            }
    
        })
    
    }




})
