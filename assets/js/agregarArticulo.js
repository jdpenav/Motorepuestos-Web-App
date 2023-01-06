$("#formArt").submit(function (e) {

    e.preventDefault();

    $.post("./articulo/guardar",
    {
        nombre: $("#inputNombreArticulo").val(),
        descripcion: $("#inputDescripcionArticulo").val(),
        imagen: $("#inputImagenArticulo").val(),
        codProducto: $("#inputCodigo").val(),
        Precio: $("#inputPrecio").val(),
        Costo: $("#inputCosto").val(),
        Existencias: $("#inputExistencias").val(),
        Categorias_idCategoria: $("#inputCodCategoria").val()
    },
    function (data, status) {
        alert("Data: " + data + "\nStatus: " + status + "\n" +$("#inputNombreArticulo").val() + "\n" +$("#inputDescripcionArticulo").val());
    });
});