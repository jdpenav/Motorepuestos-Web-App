$(document).ready(function(){

    $(".btnEliminarProv").click(function () {

        if($("#inputIdProv").val() != "") {

        

        $.delete("/proveedor/eliminar",
        {
            idProveedor: $("#inputIdProv").val()            
        },

        function (data, status) {
            alert("Data: " + data + "\nStatus: " + status + "\n" + $("#inputIdProv").val());
        });
    } else {
        alert("Debe escribir el id");
    }
    });

});


