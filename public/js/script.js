let dark = false;

$("#switch").click(function() {
    if(!dark){
        $('p').addClass("dark");
        $('h1').addClass("dark");
        $('h3').addClass("dark");
        $('a').addClass("dark");
        $('.header-logo img').addClass("invert");
        $('body').css("background-color", "#262626");

        dark = true;
    } else {
        $('p').removeClass("dark");
        $('h1').removeClass("dark");
        $('h3').removeClass("dark");
        $('a').removeClass("dark");
        $('.header-logo img').removeClass("invert");
        $('body').css("background-color", "white");
        dark = false;
    }



})



