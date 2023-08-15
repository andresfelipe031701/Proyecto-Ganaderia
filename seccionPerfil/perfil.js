

$(function() {

    listarDatosUser()
    function listarDatosUser() {
        var objBotones = "";
        var objData = new FormData();
        objData.append("documento", documento);
        objData.append("contrasena", contrasena);
        $.ajax({
            url: "perfilcontrol.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false
        }).done(function(respuesta) {
            if (respuesta != null) {
                respuesta.forEach(listarUsuarios);
    
                function listarUsuarios(item, index) {
                    // hola+= '<input value="'+item.nombres+'">'
                    // objBotones+= '<input type="text" value="'+item.apellidos+'">'
                    // objBotones+= '<input type="text" value="'+item.edad+'">'
                    // objBotones+= '<input type="text" value="'+item.correo+'">'
                    // objBotones+= '<input type="text" value="'+item.celular+'">'
                    // objBotones+= '<input type="text" value="'+item.contraseña+'">'
                    // objBotones+= '<input type="text" value="'+item.documento+'">'


                    $("#nombres").val(item.nombres);
                    $("#apellidos").val(item.apellidos);
                    $("#edad").val(item.edad);
                    $("#correo").val(item.correo);
                    $("#celular").val(item.celular);
                    $("#documento").val(documentoRecogido);
                    $("#contraseña").val(contrasenaRecogido);
                    // objBotones = '<div class="btn-group" id="botons">';
                    // objBotones += '<button id="btn_editarContacto" type="button" class="btn btn-warning" nombres="'+item.nombres+'" apellidos="' + item.apellidos + '" edad="' + item.edad + '"correo="' + item.correo + '"celular="' + item.celular + '" correo="'+item.correo+ '" contraseña="' + item.contraseña+'" documento="' + item.documento+'">editar</button>';
                    // objBotones += '<button id="btn_eliminarContacto" type="button" class="btn btn-danger" documento="'+item.documento+'">eliminar</button>';
                    // objBotones += '</div>';
                    // hola+=item.nombres,item.apellidos,item.edad,item.correo,item.celular,item.contraseña,item-documento,objBotones;

                    // dataSet.push([item.nombres,item.apellidos,item.edad,item.correo,item.celular,item.contraseña,item-documento,objBotones]);
                }
            


            }
        })
    }
    
})