$( document ).ready(function() {

$("#formCat").submit(function (e) {

    e.preventDefault();

    $.post("application/controllers/Categoria/guardar",
    {
        nombre: $("#inputNombre").val(),
        descripcion: $("#inputDescripcion").val()
    },
    function (data, status) {
        
    //   alert("Status: " + status + "\n" +$("#inputNombre").val() + "\n" +$("#inputDescripcion").val());
    });
});
   
});