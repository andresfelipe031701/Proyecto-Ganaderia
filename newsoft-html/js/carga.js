$(function(){
    listarDatos();
    var dataSet = [];
    var tabla = null;
    listarSillas();
    
  function listarDatos() {
    var objData = new FormData();
    objData.append("listarDatos", "ok");
    $.ajax({
        url: "../editadmin/admincontrol.php",
        type: "post",
        dataType: "json",
        data: objData,
        cache: false,
        contentType: false,
        processData: false
    }).done(function(respuesta) {
        var dataSet = [];
        let objimg = [];
        if (respuesta != null) {
            respuesta.forEach(listarUsuarios);

            function listarUsuarios(item, index) {
                // opcionSelect='<option>'+item.nombre+'</option>'
                objBotones = '<div class="btn-group" id="botons">';
                objBotones += '<button id="btn_select" type="button" class="btn btn-success" fecha="' +item.fecha+ '" id_pelicula="' + item.id_pelicula + '"nombre_pelicula="' +item.nombre_pelicula+ '">seleccionar</button>';
                objBotones += '</div>';
                objimg += '<img heigth="40px"  src="data:images/jpg;base64,'+item.img_pelicula+'">';
                    dataSet.push([item.nombre_pelicula,item.fecha,objimg,objBotones]);

            }
            actualizarTabla(dataSet)
        }

    })

}

actualizarTabla(dataSet)

function actualizarTabla(dataSet) {
    if (tabla != null) {
        $("#tablapeliculasusers").dataTable().fnDestroy();
    }

    tabla = $("#tablapeliculasusers").DataTable({
        data: dataSet
    })
}
$("#pdf").hide();

$("#contenedorsillas").hide();

$("#contenedorderecibo").hide();


$("#tablapeliculasusers").on("click", "#btn_select", function() {
    var nombrePelicula = $(this).attr("nombre_pelicula");
    var fecha = $(this).attr("fecha");
    $("#nom_peli").val(nombrePelicula);
    $("#fecha_peli").val(fecha);
    $("#contenedorpeliculas").hide();
    $("#contenedorsillas").show();
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'pelicula seleccionada',
        showConfirmButton: false,
        timer: 800
    })
    // $("#containersillas").show();
    // $("#containertabla").hide(100);
    // var pelicula_seleccionada = $("#btn_select").val();
});





// funciones de la parte de sillaas

function listarSillas() {
    var objBotones = "";
    var objData = new FormData();
    objData.append("Listelos", "okey");
    $.ajax({
        url: "../editadmin/admincontrol.php",
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
                objBotones += '<button id="btn_select_silla" type="button" class="btn btn-success" id_silla="'+item.id_silla+'" num_silla="' + item.num_silla + '" estado="'+item.estado+'" id_sala="'+item.id_sala+'">Seleccionar</button>';
                objBotones += '</div>';
                dataSet.push([item.num_silla,item.estado,objBotones]);
            }
            console.log (respuesta);
            actualizarTablaSillas(dataSet)

        }

    })

}


function actualizarTablaSillas(dataSet) {
    if (tabla != null) {
        $("#tablaSillas").dataTable().fnDestroy();
    }

    tabla = $("#tablaSillas").DataTable({
        data: dataSet
    })
}

$("#tablaSillas").on("click", "#btn_select_silla", function() {
    var silla_seleccionada = $(this).attr("num_silla");
    var id_sala = $(this).attr("id_sala");

    $("#nom_silla").val(silla_seleccionada);
    $("#nom_sala").val(id_sala);

    $("#contenedorpeliculas").hide(100);
    $("#contenedorsillas").hide(100);
    $("#pdf").show(100);
    $("#contenedorderecibo").show(100);

    var objData = new FormData()
    objData.append("silla_seleccionada_user", silla_seleccionada);
    $.ajax({
        url: "../editadmin/admincontrol.php",
        type: "post",
        dataType: "json",
        data: objData,
        cache: false,
        contentType: false,
        processData: false})
        
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'silla seleccionada',
            showConfirmButton: false,
            timer: 800
        })
        listarSillas()
        actualizarTablaSillas(dataSet)
        
    })

    $("#pdf").on("click", function() {
        $("#quitar").hide();
        $("#pdf").hide();


        window.print();
    })
    $("#quitar").show();

});
 