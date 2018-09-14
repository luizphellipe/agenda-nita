$(document).ready(function () {
    var formCadastro = $(".fmCadastro");

    formCadastro.on("submit", function(e){
        e.preventDefault();
        // var dados = new FormData(formCadastro);
        var dados = formCadastro.serialize();
        $.ajax({
            url: "https://localhost/agenda-nita/processa.php?p=adiciona",
            method: "POST",
            dataType: "JSON",
            data: dados,
            mimeType: "multipart/form-data",
            success: function (response) {
                console.log(response);
               if(response.status == 1){                   
                   $(".resposta").text(response.msg);
               }
            }
        });
    });
});