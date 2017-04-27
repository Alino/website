$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

$(document).ready(function(){
	
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrolltop').fadeIn();
		} else {
			$('.scrolltop').fadeOut();
		}
	});
	
	$('.scrolltop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
	$('.start').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
  
	$(window).scroll(function(){
		if ($(this).scrollTop() > 80) {
			$('.menu-second').fadeIn();
		} else {
			$('.menu-second').fadeOut();
		}
	});
	
});