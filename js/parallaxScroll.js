$(window).scroll(function () {
    
    var wScroll = $(this).scrollTop();
    
    $("#main-title").css({
        "transform" : "translate(0px, "+ wScroll /1.6 +"%)"
    });
    
    
    
    if(wScroll > $(".lp_frame").offset().top - 400) {
        
        $(".lp_frame section").each(function(i){
            
            setTimeout(function(){
                $(".lp_frame section").eq(i).addClass("is-not-showing");
            }, (i+1));
            
        });
    } else {
        $(".lp_frame section").removeClass("is-not-showing");
    }  
});

$(document).on("scroll", function () {

    if ($(document).scrollTop() > 600 && $(window).width() >= 880) {
        $(".main-menu-nav-reader").removeClass("main-menu-nav").addClass("main-menu-nav-scrolled");
    } else {
        $(".main-menu-nav-reader").removeClass("main-menu-nav-scrolled").addClass("main-menu-nav");
    }

});

$(document).on("scroll", function () {

    if ($(document).scrollTop() > 600 && $(window).width() >= 880) {
        $(".nav-button-reader").removeClass("nav-button").addClass("nav-button-scrolled");
    } else {
        $(".nav-button-reader").removeClass("nav-button-scrolled").addClass("nav-button");
    }

});

$(document).on("scroll", function () {

    if ($(document).scrollTop() > 600 && $(window).width() >= 880) {
        $(".menu-nav-container-reader").removeClass("menu-nav-container").addClass("menu-nav-container-scrolled");
    } else {
        $(".menu-nav-container-reader").removeClass("menu-nav-container-scrolled").addClass("menu-nav-container");
    }

});