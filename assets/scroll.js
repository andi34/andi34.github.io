function checkScroll(){
  
    if($(window).scrollTop() > 0) {
        $('.navbar').addClass("scrolled");
    }
    else if ($('div.in').length) {
		
	}
    else  {
        $('.navbar').removeClass("scrolled");
    }
  
}

if($('.navbar').length > 0){
    $(window).on("scroll load resize", function(){
        checkScroll();
    });
}

$('.navbar-collapse').on('show.bs.collapse', function () {
    $('.navbar').addClass("scrolled");
});

$('.navbar-collapse').on('hidden.bs.collapse', function () {
  
  if($(window).scrollTop() == 0) {
    $('.navbar').removeClass("scrolled");
  }
  
});

$(function(){
  function stripTrailingSlash(str) {
    if(str.substr(-1) == '/') {
      return str.substr(0, str.length - 1);
    }
    return str;
  }

  var url = window.location.pathname;  
  var activePage = stripTrailingSlash(url);

  $('.nav li a').each(function(){  
    var currentPage = stripTrailingSlash($(this).attr('href'));

    if (activePage == currentPage) {
      $(this).parent().addClass('active'); 
    } 
  });
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