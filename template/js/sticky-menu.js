$(document).ready(function () {
    if ($(this).scrollTop() > 80) {
        AddCSS();
    }
    $(window).scroll(function () {
        if ($(this).scrollTop() > 80) {
            AddCSS();
        }
        else {
            RemoveCSS();
        }
    });
    $("#btn-menu").click(function () {
        $("#menu-top nav").toggleClass("bg-color");
    });

    function AddCSS() {
        $("#menu-top nav").css("background", "#0000006b");
        $("#menu-top nav").addClass("sticky");
        $("#menu-top nav").css("height", "70px");
        $("#btn-signin").css({
            width: "150px",
            height: "40px"
        });
    }
    function RemoveCSS(){
        if (!$(".showMenu").hasClass("show")) {
            $("#menu-top nav").css("background", "");
        }
        $("#menu-top nav").removeClass("bg-color");
        $("#menu-top nav").removeClass("sticky");
        $("#menu-top nav").css("height", "96px");
        if ($(window).width() > 991) {
            $("#btn-signin").css({
                width: "160px",
                height: "50px"
            });
        }
    }
});