$(document).ready(function(){

    $(".btnEditarProv").click(function () {
        if($("#inputIdProv").val() != ""){

        
        $.put("/proveedor/editar",
        {
            nombre: $("#inputNombreProv").val(),
            telefono: $("#inputTelProv").val(),
            direccion: $("#inputDirProv").val(),
            correo: $("#inputCorreoProv").val(),
            idProveedor: $("#inputIdProv").val()

        },

        function (data, status) {
            alert("Data: " + data + "\nStatus: " + status + "\n" +$("#inputNombreProv").val() + "\n" +$("#inputTelProv").val() + $("#inputIdProv").val());
        });
    } else {
        alert("Debe Ingresar el Id");
    }
    });

});


