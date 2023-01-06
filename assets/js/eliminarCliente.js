$(document).ready(function(){

    $(".btnEliminarCliente").click(function () {

        if($("#inputIdCliente").val() != ""){

        $.delete("/cliente/eliminar",
        {
            idCliente: $("#inputIdCliente").val()            
        },

        
        
        function (data, status) {
            alert("Data: " + data + "\nStatus: " + status + "\n" + $("#inputIdCliente").val());
        });
    } else {
        alert("Debe Ingresar el Id");
    }
    });

});


