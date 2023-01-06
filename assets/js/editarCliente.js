$(document).ready(function(){

    $(".btnEditarCliente").click(function () {

        if($("#inputIdCliente").val() != ""){

        $.put("/cliente/editar",
        {
            nombre: $("#inputNombreCliente").val(),
            apellido: $("#inputApellidoCliente").val(),
            sexo: $("#inputSexoCliente").val(),
            fecha_nacimiento: $("#inputFechaNacCli").val(),
            identidad: $("#inputIdentidadCli").val(),
            direccion: $("#inputDireccionCli").val(),
            telefono: $("#inputTelefonoCli").val(),
            correo: $("#inputCorreoCli").val(),
            idCliente: $("#inputIdCliente").val()
        
        },

        
        
        function (data, status) {
            alert("Data: " + data + "\nStatus: " + status + "\n" +$("#inputNombre").val() + "\n" +$("#inputDescripcion").val() + $("#inputId").val());
        });
    } else {
        alert("Debe ingresar el id");
    }
    });

});

