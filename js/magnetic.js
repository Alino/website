window.wasScrolled = false;
$(window).bind('scroll',function(){
    if (!window.wasScrolled){ $('html, body').animate({scrollTop:document.getElementById('to').getBoundingClientRect().top},1000)}
    window.wasScrolled = true;
})