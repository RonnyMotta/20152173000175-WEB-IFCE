/**
 * Created by Windows on 06/05/2018.
 */
/*funcao para esconder texto*/
$(document).ready(function(){
    $("a").ready(function(event){
        $("#cookies").hide("slow");
    });
});
/*mudar a cor*/
$(document).ready(function(){
    $("#cor").click(function(){
        $("#cor").css({"color": "red"});
    });
});

$(document).ready(function(){
    $("#cor1").click(function(){
        $("#cor1").css({"color": "yellow"});

    $("#cor1").click(function(){
        $("#cor1").css({"color": "green"});
    });
    });
});


$(function(){
    $("#mudanome").hover(
        function(){

            jQuery("#mudanome").html("desapego-taua.com");
        },
        function(){

            jQuery("#mudanome").html("desapego.com");

        }
    );
});





$(document).ready(function(){
    $("#btn").click(function () {
$.ajax({
    url: 'http://api.joind.in/v2.1/talks/10889',
    data: {
        format: 'json'
    },
    error: function() {
        $('#btn').html('<p>An error has occurred</p>');
    },
    dataType: 'jsonp',
    success: function(data) {
        var $title = $('<h1>').text(data.talks[0].talk_title);
        var $description = $('<p>').text(data.talks[0].talk_description);
        $('#btn')
            .append($title)
            .append($description);
    },
    type: 'GET',
});
    });
});

$(document).ready(function(){
    jQuery('#btn2').click(function(){
        var dados = jQuery( this ).serialize();

  $.ajax({
            type: "POST",
            url: "http://api.joind.in/v2.1/talks/10889",
            body: JSON.stringify({
                title: 'foo',
                body: 'bar',
                userId: 1,

            data: dados,
            success: function(data)
            {
            },


        })
    });
        type: "POST"
        return false;
    });
});







