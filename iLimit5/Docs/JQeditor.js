$(document).ready(function(){
    $("#b1").click(function(){
        $("#room1").animate({left: '+=50px'});
    });
});

$(document).ready(function(){
    $("#b3").click(function(){
        $("#room1").animate({left: '-=50px'});
    });
});

$(document).ready(function(){
    $("#b6").click(function(){
        $("#room1").animate({top: '+=50px'});
    });
});

$(document).ready(function(){
    $("#b5").click(function(){
        $("#room1").animate({top: '-=50px'});
    });
});

$(window).load(function() {
    $("body").on("click", "#b2", function() {
        $("#room1").rotate(a());
    });
    nextAngle = 0;
    function a() {
        nextAngle += 90;
        if (nextAngle >= 360) nextAngle = 0;
        return nextAngle;
    }
});

$(window).load(function() {
    $("body").on("click", "#b4", function() {
        $("#room1").rotate(a());
    });
    nextAngle = 0;
    function a() {
        nextAngle -= 90;
        if (nextAngle >= 360) nextAngle = 0;
        return nextAngle;
    }
});