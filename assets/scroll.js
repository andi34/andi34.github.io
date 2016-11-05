function checkScroll(){

    if($(window).scrollTop() > 0) {
        $('.navbar').addClass("navbar-white");
        $('.navbar').removeClass("navbar-transparent");
    }
    else if ($('div.in').length) {

	}
    else  {
        $('.navbar').removeClass("navbar-white");
        $('.navbar').addClass("navbar-transparent");
    }

}

if($('.navbar').length > 0){
    $(window).on("scroll load resize", function(){
        checkScroll();
    });
}

$('.navbar-collapse').on('show.bs.collapse', function () {
    $('.navbar').addClass("navbar-white");
    $('.navbar').removeClass("navbar-transparent");
});

$('.navbar-collapse').on('hidden.bs.collapse', function () {

  if($(window).scrollTop() == 0) {
    $('.navbar').removeClass("navbar-white");
    $('.navbar').addClass("navbar-transparent");
  }

});

(function($) {
    "use strict";

  $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });
  
  new WOW().init();

})(jQuery);