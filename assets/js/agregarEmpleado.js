$("#btnGuardarEmp").click(function () {

    $.post("/empleado/guardar",
        {
            nombre: $("#inputNombreEmp").val(),
            apellido: $("#inputApellidoEmp").val(),
            sexo: $("#inputSexoEmp").val(),
            fecha_nacimiento: $("#inputFechaNacEmp").val(),
            identidad: $("#inputIdentidadEmp").val(),
            direccion: $("#inputDireccionEmp").val(),
            telefono: $("#inputTelefonoEmp").val(),
            correo: $("#inputCorreoEmp").val(),
            activo: $("#inputActivo").val(),
            usuario: $("#inputUsuario").val(),
            pass: $("#inputPass").val()

        },
        function (data, status) {
            alert("Data: " + data + "\nStatus: " + status + "\n" + $("#inputNombreEmp").val() + "\n" + $("#inputApellidoEmp").val());
        });
});