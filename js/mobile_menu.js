$(document).on("scroll", function () {

    if ($(document).scrollTop() > 42 && $(window).width() <= 600) {
        $(".main-menu-nav-reader").removeClass("main-menu-nav-mobile");
    } else {
        $(".main-menu-nav-reader").addClass("main-menu-nav-mobile");
    }
});

$(document).ready(function() {
	$(".mobile-menu").on('click', function(){
		$(".mobile-dropdown").slideToggle("fast");
	});
});