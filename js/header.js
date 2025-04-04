$(function() {

    var url = window.location.pathname;
    var array = url.split('/');
    var lastsegment = array[array.length-1];

    //$("#header").load("header.html");

    $("#header").load("header.html", function() {
        $("#navbar ul li").each(function(){
            if($(this).attr("id")==lastsegment)
                $(this).addClass("active");
        })

        if(lastsegment=="calculador-frigorias"|| lastsegment=="tipologias" || lastsegment=="consejos-utiles" ){
            $("#herramientas").addClass("active");
        }

    });

});