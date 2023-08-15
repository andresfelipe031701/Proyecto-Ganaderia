// $(function(){
//     listarDatos();
//     var dataSet = [];
//     var tabla = null;
//     formulario_registro_salas = false
//     formularioEditar = false
//     listarDatos();
//     cargarDatosSelectSalas();
//     listarSillas()


// function listarDatos() {
//     var objBotones = "";
//     var objData = new FormData();
//     objData.append("listarSalas", "ok");
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
//                 objBotones += '<button id="btn_edit_sala" type="button" class="btn btn-warning" id_sala="'+item.id_sala+'" nombre_sala="' + item.nombre_sala + '" >editar</button>';
//                 objBotones += '<button id="btn_eliminar_sala" type="button" class="btn btn-danger" id_sala="'+item.id_sala+'">eliminar</button>';
//                 objBotones += '</div>';
//                 dataSet.push([item.nombre_sala, objBotones]);
//             }
//             console.log (respuesta);
//             actualizarTabla(dataSet)
// cargarDatosSelectSalas();

//         }

//     })

// }


// function cargarDatosSelectSalas() {
//         var objData = new FormData();
//         objData.append("cargar_Selec_Sillas", "ok");

//         $.ajax({
//             url: "../editadmin/admincontrol.php",
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

//             $("#selectSalas").html(opciones);
//             $("#selectSalas_guardado").html(opciones);
//             $("#selectSalas_edit").html(opciones);
//         })
//     }

// actualizarTabla(dataSet)

// function actualizarTabla(dataSet) {
//     if (tabla != null) {
//         $("#tablaSalas").dataTable().fnDestroy();
//     }

//     tabla = $("#tablaSalas").DataTable({
//         data: dataSet
//     })
// }




// $("#tablaSalas").on("click", "#btn_eliminar_sala", function() {
//     var id_delete_sala = $(this).attr("id_sala");
//     var objData = new FormData()
//     objData.append("borrar_sala", id_delete_sala);

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
//     listarDatos();


// })

// // edit boton tabla


// $("#tablaSalas").on("click", "#btn_edit_sala", function() {
//     var id_sala = $(this).attr("id_sala");
//     var newnameSala = $(this).attr("nombre_sala");

//     $("#btn_edit_sala").val(id_sala);
//     $("#Guardar_new_nombre_sala").val(newnameSala);


//     if ((formularioEditar == false)) {
//         $("#cont_formulario_salas_edit").fadeIn(1000);
//         $("#container_tabla_salas").hide(500);
//         formularioEditar = true;
//         // $("#btnEditarUsuario").removeClass("btn-primary").disable(true)
//     } else {
//         $("#container_tabla_salas").fadeIn(1000);

//         formularioEditar = false;
//     }

// })
// // Edit enviar
// $("#btnEditSala").on("click", function() {
//     var id_desala = $("#btn_edit_sala").val();
//     var newNameSala = $("#Guardar_new_nombre_sala").val();

//     var objData = new FormData()
    
//     objData.append("id_desala", id_desala);
//     objData.append("Guardar_new_nombre_sala", newNameSala);

//     $.ajax({
//         url: "../editadmin/admincontrol.php",
//         type: "post",
//         dataType: "json",
//         data: objData,
//         cache: false,
//         contentType: false,
//         processData: false
//     }).done(function(respuesta) {
//         $("#Guardar_new_nombre_sala").val();
//         Swal.fire({
//             position: 'top-end',
//             icon: 'success',
//             title: 'Registrado correctamente',
//             showConfirmButton: false,
//             timer: 1000
//         })
//         listarDatos();
//         $("#container_tabla_salas").show();
// $("#cont_formulario_salas_edit").hide(600);

//     })
// })


// $("#btnGuardarSala").on("click", function() {
//     $("#container_tabla_salas").show(100);

//     var nombre_sala = $("#Guardar_nombre_sala").val();

//     var objData = new FormData()
//     objData.append("guardar_nombre_sala", nombre_sala);

//     $.ajax({
//         url: "../editadmin/admincontrol.php",
//         type: "post",
//         dataType: "json",
//         data: objData,
//         cache: false,
//         contentType: false,
//         processData: false
//     }).done(function(respuesta) {
//         $("#nombres").val(" ");
//         Swal.fire({
//             position: 'top-end',
//             icon: 'success',
//             title: 'Sala Registrada',
//             showConfirmButton: false,
//             timer: 900
//         })
//         $("#formulario_form_salas").hide();

//         listarDatos();
// cargarDatosSelectSalas() 

//     })

// })

// $("#formulario_form_salas").hide();

// $("#formulario_form_salas").hide();
// $("#cont_formulario_salas_edit").hide();

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





// // Seccion de sillas



// function listarSillas() {
//     var objBotones = "";
//     var objData = new FormData();
//     objData.append("Listelos", "okey");
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
//                 objBotones = '<div class="btn-group" id="botons">';
//                 objBotones += '<button id="btn_edit_silla" type="button" class="btn btn-warning" id_silla="'+item.id_silla+'" num_silla="' + item.num_silla + '" estado="'+item.estado+'" id_sala="'+item.id_sala+'">editar</button>';
//                 objBotones += '<button id="btn_eliminar_silla" type="button" class="btn btn-danger" id_silla="'+item.id_silla+'">eliminar</button>';
//                 objBotones += '</div>';
//                 dataSet.push([item.num_silla,item.estado,item.id_sala,objBotones]);
//             }
//             console.log (respuesta);
//             actualizarTablaSillas(dataSet)

//         }

//     })

// }



// // select sillas

// $("#selectSalas").change(function() {
//     var id_sala = $(this).val();
//     var objData = new FormData();
//     objData.append("filtroSala", id_sala);
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
//         respuesta.forEach(listarUsuarios);

//         function listarUsuarios(item, index) {
//             objBotones = '<div class="btn-group" id="botons">';
//             objBotones += '<button id="btn_edit_silla" type="button" class="btn btn-warning" id_silla="'+item.id_silla+'" num_silla="' + item.num_silla + '" estado="'+item.estado+'" id_sala="'+item.id_sala+'">editar</button>';
//             objBotones += '<button id="btn_eliminar_silla" type="button" class="btn btn-danger" id_silla="'+item.id_silla+'">eliminar</button>';
//             objBotones += '</div>';
//             dataSet.push([item.num_silla,item.estado,item.id_sala,objBotones]);
//         }
//         console.log (respuesta);
//         actualizarTablaSillas(dataSet)

//     })
// })


// $("#btnGuardarSilla").on("click", function() {
//     var Guardar_numero_silla = $("#Guardar_numero_silla").val();
//     var Guardar_estado_silla = $("#Guardar_estado_silla").val();
//     var Guardar_sala = $("#selectSalas_guardado").val();

//     var objData = new FormData()
//     objData.append("Guardar_numero_silla", Guardar_numero_silla);
//     objData.append("Guardar_estado_silla", Guardar_estado_silla);
//     objData.append("Guardar_sala", Guardar_sala);

//     $.ajax({
//         url: "../editadmin/admincontrol.php",
//         type: "post",
//         dataType: "json",
//         data: objData,
//         cache: false,
//         contentType: false,
//         processData: false
//     }).done(function(respuesta) {
//         $("#nombres").val(" ");
//         Swal.fire({
//             position: 'top-end',
//             icon: 'success',
//             title: 'Silla Registrada',
//             showConfirmButton: false,
//             timer: 1000
//         })
//         $("#formulario_guarda_Sillas").hide();

//     listarSillas()

//     })

// })

// $("#tablaSillas").on("click", "#btn_eliminar_silla", function() {
//     var id_delete_silla = $(this).attr("id_silla");
//     var objData = new FormData()
//     objData.append("borrar_sillas_tabla", id_delete_silla);

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
//     listarSillas()

// })

// // Boton editar de la tabla
// $("#tablaSillas").on("click", "#btn_edit_silla", function() {
//     $("#registrar_sillas").hide(500);
//     $("#contenedorSelectSillas").hide(500);
//     $("#formulario_guarda_Sillas").hide(500);
//     var id_silla = $(this).attr("id_Silla");
//     var num_silla = $(this).attr("num_silla");
//     var estado_inicial = $(this).attr("estado");
//     var id_sala = $(this).attr("id_sala");

//     $("#btn_edit_silla").val(id_silla);
//     $("#Guardar_new_num_silla").val(num_silla);
//     $("#Guardar_new_estado_silla").val(estado_inicial);
//     $("#selectSalas_edit").val(id_sala);

//     if ((formularioEditar == false)) {
//         $("#formulario_sillas_edit").fadeIn(1000);
//         $("#container_tablaSillas").hide(500);
//         formularioEditar = true;
//     } else {
//         $("#container_tablaSillas").fadeIn(1000);

//         formularioEditar = false;
//     }

// })
// // boton editar envio
// $("#btnEditSillas").on("click", function() {

//     var valid_id_silla= $("#btn_edit_silla").val();
//     var new_num_silla= $("#Guardar_new_num_silla").val();
//     var new_estado_silla= $("#Guardar_new_estado_silla").val();
//     var new_sala= $("#selectSalas_edit").val();

//     var objData = new FormData()
    
//     objData.append("valid_id_silla", valid_id_silla);
//     objData.append("new_num_silla", new_num_silla);
//     objData.append("new_estado_silla", new_estado_silla);
//     objData.append("new_sala", new_sala);


//     $.ajax({
//         url: "../editadmin/admincontrol.php",
//         type: "post",
//         dataType: "json",
//         data: objData,
//         cache: false,
//         contentType: false,
//         processData: false
//     }).done(function(respuesta) {
//         $("#Guardar_new_num_silla").val();
//         $("#Guardar_new_estado_silla").val();
//         $("#selectSalas_edit").val();

//         Swal.fire({
//             position: 'top-end',
//             icon: 'success',
//             title: 'Editado correctamente',
//             showConfirmButton: false,
//             timer: 1000
//         })
//         $("#form_guardar_Sillas").hide(500);
//         $("#formulario_sillas_edit").hide(500);
//         $("#registrar_sillas").fadeIn(500);
//         $("#contenedorSelectSillas").fadeIn(1000);
//         $("#container_tablaSillas").fadeIn(1000);
    
//         listarSillas()
//     })
// })


// actualizarTablaSillas(dataSet)

// function actualizarTablaSillas(dataSet) {
//     if (tabla != null) {
//         $("#tablaSillas").dataTable().fnDestroy();
//     }

//     tabla = $("#tablaSillas").DataTable({
//         data: dataSet
//     })
// }



// $("#ocultarsillas").hide();

// $("#formulario_sillas_edit").hide();
// // $("#container_tablaSillas").hide();


// $("#boton_activ_sillas").on("click", function() {
//     $("#formulario_guarda_Sillas").hide();
//     $("#ocultarsillas").show();
//      $("#contenedor_seccion_salas").hide();
// })
// $("#registrar_sillas").on("click", function() {
//     $("#formulario_guarda_Sillas").show(100);
//     // $("#container_tablaSillas").show();
//     // $("#tablaSillas").show();

//         // $("#container_tablaSillas").hide();
//         // $("#registrar_sillas").hide();
//         // $("#tablaSillas").show();

// })
// $("#btn_cancelar_formulario_sillas").on("click", function() {
//     $("#formulario_guarda_Sillas").hide(100);
//     $("#contenedor_seccion_salas").hide(200);
// $("#ocultarsillas").show(100);

// })




// });
 