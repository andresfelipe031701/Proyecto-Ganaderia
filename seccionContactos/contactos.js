$(function() {
tabla=null;
cargarDatosCargos()
listarContactillos()
cargarDatosContacto() 

     function cargarDatosCargos() {
        var objData = new FormData();
        objData.append("CargaContactos", "ok");

        $.ajax({
            url: "../productocontrol.php",
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
                opciones += '<option value="'+item.id_cargo+'">'+ item.Nombre_cargo + '</option>';
            }
            $("#selectContactos").html(opciones);
        })
    }

//cargar select razas
function cargarDatosContacto() {
    var objData = new FormData();
    objData.append("cargarRazas", "ok");

    $.ajax({
        url: "../productocontrol.php",
        type: "post",
        dataType: "json",
        data: objData,
        cache: false,
        contentType: false,
        processData: false
    }).done(function(respuesta) {
        var h4 = '';

        respuesta.forEach(agregarOpciones);

        function agregarOpciones(item, index) {
            $("#selectRazas").val("");
            
            h4 += '<h4 >' + item.Nombre_raza + '</h4>';
        }

        $("#nombre_raza").html(h4);
        //  $("#selectRazasMachos_gua").html(opciones);
        //  $("#selectRazasMachos_edit").html(opciones);
        //  $("#selectRazasHembras_gua").html(opciones);
        //  $("#selectRazasHembras_edit").html(opciones);
        //  $("#selectRazasTernerosIni").html(opciones);
        //  $("#selectRazasTernerosGua").html(opciones);
        //  $("#selectRazasTernerosEdit").html(opciones);
    })

    $("#selectContactos").change(function() {
        var id_cargo = $(this).val();
        var objData = new FormData();
        objData.append("FiltroCargo", id_cargo);
        $.ajax({
            url: "../productocontrol.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(respuesta) {

            dataSet = [];
            let objimg = [];

            respuesta.forEach(cargarFiltroUsuarios);

            function cargarFiltroUsuarios(item, index) {

                objBotones = '<div class="btn-group" id="botons">';
                objBotones += '<button id="btn_editarContacto" type="button" class="btn btn-warning" id_contacto="'+item.id_contacto+'" nombre_contacto="' + item.nombre_contacto + '" empresa="' + item.empresa + '"telefono_contacto="' + item.telefono_contacto + '"direccion="' + item.direccion + '">editar</button>';
                objBotones += '<button id="btn_eliminarContacto" type="button" class="btn btn-danger" id_contacto="'+item.id_contacto+'">eliminar</button>';
                objBotones += '</div>';
                dataSet.push([item.nombre_contacto,item.empresa,item.telefono_contacto,item.direccion,objBotones]);
            }
            actualizarTablaContactos(dataSet)
        })
    })
}
function actualizarTablaContactos(dataSet) {
    if (tabla != null) {
        $("#tablaContactos").dataTable().fnDestroy();
    }

    tabla = $("#tablaContactos").DataTable({
        data: dataSet
    })
}



function listarContactillos() {
    var objBotones = "";
    var objData = new FormData();
    objData.append("listarContactillos", "ok");
    $.ajax({
        url: "../productocontrol.php",
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
                objBotones += '<button id="btn_editarContacto" type="button" class="btn btn-warning" id_contacto="'+item.id_contacto+'" nombre_contacto="' + item.nombre_contacto + '" empresa="' + item.empresa + '"telefono_contacto="' + item.telefono_contacto + '"direccion="' + item.direccion + '">editar</button>';
                objBotones += '<button id="btn_eliminarContacto" type="button" class="btn btn-danger" id_contacto="'+item.id_contacto+'">eliminar</button>';
                objBotones += '</div>';
                dataSet.push([item.nombre_contacto,item.empresa,item.telefono_contacto,item.direccion,objBotones]);
            }
            actualizarTablaContactos(dataSet)
        }
    })
}


})