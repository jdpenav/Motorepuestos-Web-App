$("#btnGuardarLog").click(function () {

    $.post("/inicio/iniciosesion",
        {
            usuario: $("#inputUserLog").val(),
            pass: $("#inputPassLog").val()

        },
        function (data, status) {
            
         alert("Data: " + data + "\nStatus: " + status + "\n" + $("#inputUserLog").val() + "\n" + $("#inputPassLog").val());
            
        });
       
});