$("#btnGuardarCliente").submit(function (e) {

    e.preventDefault();

    $.post("/cliente/guardar",
        {
            nombre: $("#inputNombreCliente").val(),
            apellido: $("#inputApellidoCliente").val(),
            sexo: $("#inputSexoCliente").val(),
            fecha_nacimiento: $("#inputFechaNacCli").val(),
            identidad: $("#inputIdentidadCli").val(),
            direccion: $("#inputDireccionCli").val(),
            telefono: $("#inputTelefonoCli").val(),
            correo: $("#inputCorreoCli").val()

        },
        function (data, status) {
            alert("Data: " + data + "\nStatus: " + status + "\n" + $("#inputNombreCliente").val() + "\n" + $("#inputApellidoCliente").val());
        });
});