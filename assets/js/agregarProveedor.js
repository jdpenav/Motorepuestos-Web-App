$("#formProv").submit(function (e)  {

    e.preventDefault();
    
    $.post("/proveedor/guardar",
    {
        nombre: $("#inputNombreProv").val(),
        telefono: $("#inputTelProv").val(),
        direccion: $("#inputDirProv").val(),
        correo: $("#inputCorreoProv").val()
    },
    function (data, status) {
        
        alert("Data: " + data + "\nStatus: " + status + "\n" +$("#inputNombreProv").val() + "\n" +$("#inputTelProv").val());
    });
    
});