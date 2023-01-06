$(document).ready(function(){

    $(".btnEliminarEmp").click(function () {

        if($("#inputIdEmp").val() != ""){


        $.delete("/empleado/eliminar",
        {
            idEmpleado: $("#inputIdEmp").val()            
        },

        
        
        function (data, status) {
            alert("Data: " + data + "\nStatus: " + status + "\n" + $("#inputIdEmp").val());
        });

    } else {
        alert("Error, debe ingresar el id");
    }
    });



});


