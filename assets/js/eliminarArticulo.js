$(document).ready(function(){

    $(".btnEliminarArticulo").click(function () {

        if($("#inputIdArticulo").val() != "") {

        $.delete("/articulo/eliminar",
        {
            idArticulo: $("#inputIdArticulo").val()            
        },

        function (data, status) {
            alert("Data: " + data + "\nStatus: " + status + "\n" + $("#inputIdArticulo").val());
        });
    } else {
        alert("Debe escribir el id para eliminar");
    }
    });

});




