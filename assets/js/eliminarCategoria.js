$(document).ready(function(){

    $(".btnEliminar").click(function () {

        if($("#inputId").val() != ""){

        $.delete("/categoria/eliminar",
        {
            idCategoria: $("#inputId").val()            
        },

        function (data, status) {
            alert("Data: " + data + "\nStatus: " + status + "\n" + $("#inputId").val());
        });
    } else {
        alert("Debe escribir el id");
    }
    });

});


