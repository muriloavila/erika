$(document).ready(function () {
   $("#insert").on('click', function () {
       insert();
   })
});


function insert() {
    var arrayMovies = [];

    $('input[name="movieSelect"]:checked').each(function(attr, movie_id) {
       arrayMovies.push($(movie_id).attr('movie_id'));
    });

    if(arrayMovies == [] || arrayMovies == '' || arrayMovies == null || arrayMovies == undefined){
        return;
    }

    $("#loading").show();
    $("#message").html("");

    $.ajax({
        url: robotSaveControllerUrl,
        type: 'POST',
        dataType: 'json',
        data: {'movies': JSON.stringify(arrayMovies)},
        async: true,
        success: function (data) {
            console.log(data);
            $("#loading").hide();
            $("#message").html("<b>"+data.resposta+" Foi Cadastrado com sucesso!</b>");
        }
    });
    return;
}