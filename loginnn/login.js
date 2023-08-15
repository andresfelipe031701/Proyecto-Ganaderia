document.addEventListener('DOMContentLoaded', function() {
  const formu = document.getElementById("login-form");
  
  formu.addEventListener('submit', (event)=> {
    event.preventDefault(); // Evita el envío del formulario
  
    const documento = formu.elements["documento"].value;
    const contrasena = formu.elements["contrasena"].value;

    

    const request = new XMLHttpRequest();
    request.open('POST', 'control.php', true);


    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
  
    request.onload = function() {
      const tipo_rol = this.responseText.trim();
      if (tipo_rol === "El documento o la contraseña son incorrectos.") {
        
      } else if (tipo_rol === "1") {
        // Redirigir al usuario a la página de administrador
        window.location.href = "../index.php";
      } else{
        // Redirigir al usuario a la página de usuario normal
        window.location.href = "indexl.php";
      }
    };
  
    request.send('documento=' + encodeURIComponent(documento) + '&contraseña=' + encodeURIComponent(contrasena));
  });
});

$(function() {
    formulario = false;
    formularioEditar = false;
    formulario_registro_Users = false;
    usuarioActual = "";
    datos = false;

    $("#btnGuardarUsuario").on("click", function() {
      $("#formulario_Users").hide();
      $("#login-form").show();


      var insertar_documento = $("#Guardar_documento_user").val();
      var insertar_nombres = $("#Guardar_name_user").val();
      var insertar_apellidos = $("#Guardar_apellido_user").val();
      var insertar_edad = $("#Guardar_edad_user").val();
      var insertar_correo = $("#Guardar_correo_user").val();
      var insertar_celular = $("#Guardar_celular_user").val();
      var insertar_contrasena = $("#Guardar_contraseña_user").val();

      
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Registrado correctamente',
        showConfirmButton: false,
        timer: 1000
    })
      var objData = new FormData()
      objData.append("Guardar_documento_user", insertar_documento);
      objData.append("Guardar_name_user", insertar_nombres);
      objData.append("Guardar_apellido_user", insertar_apellidos);
      objData.append("Guardar_edad_user", insertar_edad);
      objData.append("Guardar_correo_user", insertar_correo);
      objData.append("Guardar_celular_user", insertar_celular);
      objData.append("Guardar_contrasena_user", insertar_contrasena);
      $.ajax({
          url: "control.php",
          type: "post",
          dataType: "json",
          data: objData,
          cache: false,
          contentType: false,
          processData: false})

        // .done(function(respuesta) {
          $("#Guardar_documento_user").val();
          $("#Guardar_name_user").val();
          $("#Guardar_apellido_user").val();
          $("#Guardar_edad_user").val();
          $("#Guardar_correo_user").val();
          $("#Guardar_celular_user").val();
          $("#Guardar_contraseña_user").val();
       
          $("#formulario").hide();

          // listarDatos();
      // })



      

  })


















  $("#btnCancelar").on("click", function() {
    alert(funciona);
    $("#contenedorFormulario").hide();
    $('#btn_editarUsuario').attr('disabled', false);
    $('#btn_eliminarUsuario').attr('disabled', false);

  })


});

 
