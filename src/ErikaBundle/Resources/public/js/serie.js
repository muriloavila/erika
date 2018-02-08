$(document).ready(function () {
    $("#insert").on('click', function () {
        insert();
    });

    $("#season").on('click', function () {
        findSeasons();
    });

    $("#insereTemp").on('click', function () {
        insereSeason();
    })
});


function insert() {
    var arraySeries = [];

    $('input[name="serieSelect"]:checked').each(function(attr, serie_id) {
        arraySeries.push($(serie_id).attr('serie_id'));
    });

    if(arraySeries == [] || arraySeries == '' || arraySeries == null || arraySeries == undefined){
        return;
    }

    $("#loading").show();
    $("#message").html("");

    $.ajax({
        url: robotSaveControllerUrl,
        type: 'POST',
        dataType: 'json',
        data: {'series': JSON.stringify(arraySeries)},
        async: true,
        success: function (data) {
            console.log(data);
            $("#loading").hide();
            $("#message").html("<b> Foi Cadastrada com sucesso!</b>");
            $("#seasons").show().attr('season_id', data);
        }
    });
    return;
}

function findSeasons() {
    $.ajax({
        url: robotSearchControllerUrl,
        type: 'POST',
        dataType: 'json',
        data: {'serie_id' : $("#seasons").attr('season_id')},
        async: true,
        success: function(data){
            $('#temporadas').empty();
            if(data.temporadas > 0){
                for(var i = 0; i <= data.temporadas; i++){
                    $('#temporadas').append($('<option>', {
                        value: i,
                        text : "Temporada: "+i
                    }));
                }

                $("#insert_seasons").show();
            }
        }
    })
}

function insereSeason() {
    if($('#temporadas').val() === ""){
        return;
    }
    var season = $("#temporadas").val();
    $("#loading").show();
    $.ajax({
        url: robotSaveSeasonControllerUrls,
        type: 'POST',
        dataType: 'json',
        data: {'serie_id' : $("#seasons").attr('season_id'), 'season': $("#temporadas").val()},
        async: true,
        success: function (data) {
            $('body').append('<label>Temporada '+$("#temporadas").val()+' Inclusa');
            $("#loading").hide();
            $("#temporadas option[value='"+season+"']").each(function() {
                $(this).remove();
            });
        }
    });
}