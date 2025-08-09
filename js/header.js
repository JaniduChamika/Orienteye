/* Please ❤ this if you like it! */


(function($) {
    "use strict";

    $(function() {
        var header = $(".start-style");
        var drop = $(".dropdown-menu");


        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 10) {

                header.removeClass('start-style').addClass("scroll-on");
                drop.addClass("droScrol");
            } else {

                header.removeClass("scroll-on").addClass('start-style');
                drop.removeClass("droScrol");


            }
        });
    });

    //Animation

    $(document).ready(function() {
        $('body.hero-anime').removeClass('hero-anime');
    });

    //Menu On Hover

    // $('body').on('mouseenter mouseleave', '.nav-item', function(e) {
    //     if ($(window).width() > 992) {
    //         var _d = $(e.target).closest('.nav-item');
    //         _d.addClass('show');

    //         setTimeout(function() {
    //             _d[_d.is(':hover') ? 'addClass' : 'removeClass']('show');
    //         }, 1);
    //     }
    // });

    //Switch light/dark

    $("#switch").on('click', function() {
        if ($("body").hasClass("dark")) {
            $("body").removeClass("dark");
            $("#switch").removeClass("switched");
        } else {
            $("body").addClass("dark");
            $("#switch").addClass("switched");
        }
    });

})(jQuery);
var loopchack;

function showdrop(id) {
    // alert(id)
    if ($(window).width() > 992) {

        var d = document.getElementById(id);
        d.classList.add("show");
        loopchack = setInterval(hidedrop(id), 100);
    }
}

// $(document).ready(function() {
//     $(document).mousemove(function() {

//     });
// });

function hidedrop(id) {

    if ($(window).width() > 992) {

        var d = document.getElementById(id);
        if ($("#" + id + ":hover").length == 0) {

            d.classList.remove("show");

            clearInterval(loopchack);
        }

    }
}


var ani;
var b;
document.onreadystatechange = () => {
    b = document.getElementsByTagName("html")[0];

    b.style.overflow = "hidden";

    if (document.readyState === 'complete') {
        ani = setInterval(opac, 5);

    }
};

var op = 100;

function opac() {
    var load = document.getElementById("loadingscreen");
    load.style.opacity = op + '%';
    b = document.getElementsByTagName("html")[0];

    if (op == 0) {
        clearInterval(ani);
        load.style.display = "none";
        b.style.overflowY = "scroll";
    }
    op = op - 1;
}