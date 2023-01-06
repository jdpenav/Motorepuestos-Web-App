$(document).ready(function () {

    $(".btnEditarArticulo").click(function () {

        if($("#inputIdArticulo").val() != ""){

        $.put("/articulo/editar",
            {
                nombre: $("#inputNombreArticulo").val(),
                descripcion: $("#inputDescripcionArticulo").val(),
                imagen: $("#inputImagenArticulo").val(),
                codProducto: $("#inputCodigo").val(),
                Precio: $("#inputPrecio").val(),
                Costo: $("#inputCosto").val(),
                Existencias: $("#inputExistencias").val(),
                Categorias_idCategoria: $("#inputCodCategoria").val(),
                idArticulo: $("#inputIdArticulo").val()

            },

            function (data, status) {
                alert("Data: " + data + "\nStatus: " + status + "\n" + $("#inputNombreArticulo").val()
                    + "\n" + $("#inputDescripcionArticulo").val() + "\n"
                    + $("#inputIdArticulo").val());
            });
        } else {
            alert("Debe Ingresar el Id");
        }
    });

});

