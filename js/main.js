var TABLET_WIDTH = 1000;
var PHONE_WIDTH = 700;
var $navLogo;
var $scrollToTop;
var windowWidth;
$(function () {
    AOS.init();

    $('[data-toggle="tooltip"]').tooltip();
    
    $navLogo = $("#navLogo");
    $scrollToTop = $("#scrollToTop");
    var position = $(window).scrollTop();
    windowWidth = $(window).width();
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > position) {
            //scroll down
            if (scroll > 50) {
                //when the user scroll, show the logo in nav if its hidden
                if ($navLogo.css("display") == "none") {
                    $navLogo.removeClass("d-lg-none").hide().show(400);
                }

                $scrollToTop.fadeIn();
            }


        } else {
            //scroll top

        }

        if (scroll == 0) {
            //reached the top
            $scrollToTop.fadeOut();
            //when the user reaches the top, hide the logo in nav only if the screen is large(desktop)
            if ($(window).width() > TABLET_WIDTH && $navLogo.css("display") == "flex") {
                $navLogo.hide(400, function () {
                    $(this).addClass("d-lg-none");
                });
            }

        }

        if (scroll + $(window).height() >= $(document).height() - 10) {
            //reached the bottom
        }
        position = scroll;
    });




});




//change the language of the website
function changeLanguage(otherLang = null) {
    //otherLang ex: "en","ar"
    if (otherLang == null) {
        otherLang = window.otherLang;
    }

    var searchParams = new URLSearchParams(window.location.search);
    searchParams.set("lang", otherLang);
    window.location.search = searchParams.toString();
}

function scrollToTop() {
    window.scrollTo(0, 0);
}


$.fn.flex = function () {
    $(this).css("display", "flex");
};

$.fn.disable = function (status = true) {
    var opacity = 0.5;
    var pointerEvent = "none";
    var cursor = "not-allowed";
    if (status == false) {
        opacity = 1;
        pointerEvent = "initial";
        cursor = "pointer";
    }

    $(this).css({
        "opacity": opacity,
        "pointer-event": pointerEvent,
        "cursor": cursor,
    });
    return $(this);
};

