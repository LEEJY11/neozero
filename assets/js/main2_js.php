<?php
header("Content-type: text/script");
$load_check3 = $_GET['load_check'];
$_load_check3 = sha1(date('d m A s i'));

if($load_check3 == $_load_check3){
?>
$(document).ready(function () {
        $(document).bind("contextmenu", function (e) {
            return false;
        });

        $(document).bind('keydown', function (e) {
            if (e.keyCode == 123 /* F12 */) {
                e.preventDefault();
                e.returnValue = false;
            }
        });

        $("#monthly-tab").css("color", "#fff");

        $("#monthly-tab").on("click" , function(e){
            $(this).removeClass("false");
            $(this).addClass("true");
            $("#yearly-tab").removeClass("true");
            $("#yearly-tab").addClass("false");
        });
        $("#yearly-tab").on("click" , function(e){
            $(this).removeClass("false");
            $(this).addClass("true");
            $("#monthly-tab").removeClass("true");
            $("#monthly-tab").addClass("false");
            $("#monthly-tab").css("color", "#70799f");
        });


        $(window).resize(function () {
            var width = $(window).width();
            if (width>=992) {
            $("#rotating_img").removeClass("text-center");
            } else if (width>=768 && width<992) {
            $("#rotating_img").removeClass("text-center");
            } else if (width<768) {
                $("#rotating_img").addClass("text-center");                   
            }
        });

        $(window).trigger("resize"); 

    });
    $(document).bind('selectstart', function () { return false; });
    $(document).bind('dragstart', function () { return false; });	

<?php
}
else{
    echo "";
}

