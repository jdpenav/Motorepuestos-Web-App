$(document).ready(function(){

    $(".btnEditar").click(function () {

        if($("#inputId").val() != ""){

        $.put("/categoria/editar",
        {
            nombre: $("#inputNombre").val(),
            descripcion: $("#inputDescripcion").val(),
            idCategoria: $("#inputId").val()
        
            
        },

        
        
        function (data, status) {
            alert("Data: " + data + "\nStatus: " + status + "\n" +$("#inputNombre").val() + "\n" +$("#inputDescripcion").val() + $("#inputId").val());
        });
    } else {
        alert("Debe Ingresar el Id");
    }
    });

});


